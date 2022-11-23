<?php
    include 'bradapis.php';

    $ok = checkTWId('A123456789');
    if ($ok){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>