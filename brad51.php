<meta charset="utf-8" />
<?php
    $mysqli = new mysqli('localhost','root','root','phpd03',3306);
    $mysqli->set_charset('utf8');

    $sql = 'SELECT * FROM cust';
    $result = $mysqli->query($sql);
    //var_dump($result);
    //echo $result->num_rows;

    while ($row = $result->fetch_object()){
        echo "{$row->id} : {$row->cname} : {$row->tel} : {$row->birthday}<br />";
    }


?>