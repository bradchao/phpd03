<?php

    $fp = fopen('myfiles/brad1.txt', 'w');
    fwrite($fp, 'Hello, World');
    fflush($fp);
    fclose($fp);
?>