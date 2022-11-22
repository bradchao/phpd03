<?php
    $a = array();
    $a[0] = array();
    $a[1] = 'ispan';
    $a[0][1] = 123;
    $a[0][7] = 456;
    $a[0][4] = true;

    foreach ($a as $k => $v){
        echo $k . ': ';
        if (gettype($v) == 'array'){
            echo '<br />';
            foreach($v as $kk => $vv){
                echo "{$kk} => {$vv}<br />";
            }
        }else{
            echo $v . '<br />';
        }
    }


?>