<meta charset="utf-8" />
<?php
    $mysqli = new mysqli('localhost','root','root','phpd03',3306);
    $mysqli->set_charset('utf8');

    $sql = 'DELETE FROM cust WHERE id = ?';
    $id = 2;
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i',$id);
    if ($stmt->execute()){
        echo 'DELETE success';
    }else{
        echo 'DELETE failure';
    }

?>