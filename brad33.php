<?php
    $file = 'myfiles/brad1.txt';
    $size = filesize($file);
    $fp = fopen($file, 'r');
    $c = fread($fp, $size);
    echo $c;
    fclose($fp);
?>