<?php
    $a = array(1,2,3,4,5,6,7);
    var_dump($a);
    echo '<hr />';
    echo gettype($a) . '<br />';
    $a[2] = 123; $a[7] = true; $a[4] = 12.3; $a[124] = 'Brad';
    var_dump($a);
    echo '<hr />';
    echo count($a);
    echo '<hr />';

    for ($i = 0; $i<count($a); $i++){
        echo $a[$i] . '<br />';
    }

    echo '<hr />';
    foreach ($a as $v){
        var_dump($v);
        echo '<br />';
    }

?>