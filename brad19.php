<?php
    $a[] = 1;
    $a[] = 12;
    var_dump($a);
    echo '<hr />';
    $a['name'] = 'Brad';
    $a['gender'] = true;
    $a['weight'] = 80;
    var_dump($a);
    echo '<hr />';
    echo $a['name'];
    echo '<hr />';
    $b = array(1,12, 'name'=>'Brad', 'gender'=>true, 'weight'=>80);

?>