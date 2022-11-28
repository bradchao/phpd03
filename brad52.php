<meta charset="utf-8" />
<?php
    $mysqli = new mysqli('localhost','root','root','phpd03',3306);
    $mysqli->set_charset('utf8');

    $sql = 'SELECT tel,cname FROM cust';
    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($tel,$cname);

    while ($stmt->fetch()){
        echo "{$cname}:{$tel}<br />";
    }

    $stmt->free_result();
    $stmt->close();


?>