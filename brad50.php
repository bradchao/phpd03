<meta charset="utf-8" />
<?php
    $mysqli = new mysqli('localhost','root','root','phpd03',3306);
    $mysqli->set_charset('utf8');

    $mysqli->query('DELETE FROM fstdata');
    $mysqli->query('ALTER TABLE fstdata AUTO_INCREMENT = 1');

    $sql = 'INSERT INTO fstdata (name,addr,tel,lat,lng,qty) ' . 
        'VALUES (?,?,?,?,?,?)';
    $stmt = $mysqli->prepare($sql);

    define('NAME', 1);
    define('ADDR', 2);
    define('TEL', 5);
    define('LAT', 4);
    define('LNG', 3);
    define('QTY', 7);

    $content = file('myfiles/Fstdata.csv');
    foreach($content as $k => $line){
        if ($k == 0){
            continue;
        } 

        $line = trim($line);
        $data = explode(',', $line);

        $stmt->bind_param('sssddi',
            $data[NAME],$data[ADDR],$data[TEL],
            $data[LAT],$data[LNG],$data[QTY]
        );
        $stmt->execute();
    }

?>    
