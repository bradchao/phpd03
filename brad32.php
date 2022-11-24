<?php
    $fp = fopen('myfiles/brad1.txt', 'a');
    fwrite($fp, 'abc');
    fflush($fp);
    fclose($fp);
?>