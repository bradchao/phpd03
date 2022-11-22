<?php
    $p1 = $p2 = $p3 = $p4 = $p5 = $p6 = 0;
    for ($i = 0; $i <100; $i++){
        $point = rand(1,6);
        switch($point){
            case 1: $p1++; break;
            case 2: $p2++; break;
            case 3: $p3++; break;
            case 4: $p4++; break;
            case 5: $p5++; break;
            case 6: $p6++; break;
        }
    }

    echo "1點出現{$p1}次<br />";
    echo "2點出現{$p2}次<br />";
    echo "3點出現{$p3}次<br />";
    echo "4點出現{$p4}次<br />";
    echo "5點出現{$p5}次<br />";
    echo "6點出現{$p6}次<br />";

?>