<?php
    $a = 100; $b = -4;
    //$temp = $a; $a = $b; $b = $temp;

    $a = $a ^ $b;   // $a = 13
    $b = $a ^ $b;   // $b = 10
    $a = $a ^ $b;   // $a = 3

    echo "a = {$a}; b = {$b}";
?>
<hr />
<?php
    $c = 3; $d = 2;
    echo $c ^ $d;
?>






