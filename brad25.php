<?php
    include 'bradapis.php';

    $ok = checkTWId('A123456789');
    if ($ok){
        echo 'OK';
    }else{
        echo 'XX';
    }
    echo '<hr />';

    $id1 = createTWIDByRandom();
    echo "random : {$id1}<br />";
    $id2 = createTWIDByGender(false);
    echo "Female : {$id2}<br />";
    $id3 = createTWIDByArea('X');
    echo "澎湖 : {$id3}<br />";
    $id4 = createTWIDByBoth('X', true);
    echo "澎湖男 : {$id4}<br />";


?>