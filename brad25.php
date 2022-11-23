<?php
    include 'bradapis.php';

    $ok = checkTWId('Z823456789');
    if ($ok){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>