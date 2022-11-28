<meta charset="utf-8" />
<?php
    $mysqli = new mysqli('localhost','root','root','phpd03',3306);
    $mysqli->set_charset('utf8');

    $sql = 'UPDATE cust SET cname=?, tel=?, birthday=?' .
            ' WHERE id = ?';
    $id = 3; $cname = 'mark'; $tel='777'; $birthday='1998-01-02';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sssi',$cname,$tel,$birthday,$id);
    if ($stmt->execute()){
        echo 'UPDATE success';
    }else{
        echo 'UPDATE failure';
    }

?>