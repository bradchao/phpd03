<?php
    $p = array(1 => 0,0,0,0,0,0);    // $p[1] = 0, $p[2] = 0,..$p[6] = 0
    //var_dump($p);

    for ($i = 0; $i <1000000; $i++){
        $point = rand(1,9);
        $temp = $point>6?$point-3:$point;
        $p[$temp]++;
    }

    foreach($p as $point => $count){
        echo "{$point}點出現{$count}次<br />";
    }

?>