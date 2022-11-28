<meta charset="UTF-8" />
<?php
    $mysqli = new mysqli(
        'localhost', 'root', 'root', 'phpd03', 3306) ;
    $sql = 
        'INSERT INTO cust (cname,tel,birthday) ' . 
            'VALUES ("brad","123","1999-01-02")';
    if ($mysqli->query($sql)){
        // success
    }else{
        // failure
    }

    


?>