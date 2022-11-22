<?php
    $a = 10; $b = 3;

    if ( $a++ > 10 || $b-- < 3){
        echo "OK; a = {$a}; b = {$b}";
    }else{
        echo "XX; a = {$a}; b = {$b}";
    }
?>
<hr />
<?php
    $x = '00';
    if ($x){
        echo 'OK';
    }else{
        echo 'XX';
    }
?>

