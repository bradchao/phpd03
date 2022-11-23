<?php
    $fp = @opendir('.') or exit('Server Busy');

    while ( $file = readdir($fp) ){
        echo "{$file}<br />";
    }
?>