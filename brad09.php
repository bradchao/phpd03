<?php 
    /*
        90+ => A
        80+ => B
        70+ => C
        60+ => D
        60- => E
    */
    $score = rand(0,100);
    if ($score >= 90) {
        echo "{$score}:A";
    }else if ($score >= 80){
        echo "{$score}:B";
    }else if ($score >= 70){
        echo "{$score}:C";
    }else if ($score >= 60){
        echo "{$score}:D";
    }else{
        echo "{$score}:E";
    }

?>