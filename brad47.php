<meta charset="UTF-8" />
<?php
    $mysqli = new mysqli(
        'localhost', 'root', 'root', 'phpd03', 3306) ;

    // $sql = 
    //     'INSERT INTO cust (cname,tel,birthday) ' . 
    //         'VALUES ("brad","123","1999-01-02")';
    // if ($mysqli->query($sql)){
    //     // success
    // }else{
    //     // failure
    // }

    $name = 'Brad'; $tel = '123456'; $birthday = '1999-03-04';
    $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES (?,?,?)';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $name, $tel, $birthday);
    if ($stmt->execute()){
        echo 'success';
    }else{
        echo 'failure';
    }




    


?>