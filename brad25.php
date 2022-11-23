<?php
    include 'bradapis.php';

    $ok = checkTWId('A823456789');
    if ($ok){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>