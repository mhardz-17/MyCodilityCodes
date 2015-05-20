<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
 
 
// game loop
$last_SX = 0;
$fired = false;
while (TRUE)
{
    fscanf(STDIN, "%d %d",
        $SX,
        $SY
    );
    $highest_mountain = 0;
    $highest_mountain_h = 0;
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $MH // represents the height of one mountain, from 9 to 0. Mountain heights are provided from left to right.
        );
        if($MH > $highest_mountain_h) {
            $highest_mountain = $i;
            $highest_mountain_h = $MH;
        }
    }
    
    $fire_weapon = !$fired && $highest_mountain == $SX;
    if($fire_weapon)
    {
        echo ("FIRE\n");
        error_log('I have fired the weapon');
        $fired = true;
    } else {
        echo ("HOLD\n");
    }
    
    //reset the fired
    if(($last_SX == 1 && $SX == 0) || ($last_SX == 6 && $SX == 7)) {
        $fired = false;
    }
    $last_SX = $SX;
}
?>
