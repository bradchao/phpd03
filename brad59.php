<?php
    include 'sql.php';
    // https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx

    $json = file_get_contents(
        'https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx');
    
    $data = json_decode($json, false);

    $sql = 'INSERT INTO food (name,addr,tel,city,town,picurl)' .
        ' VALUES (?,?,?,?,?,?)';
    $stmt = $mysqli->prepare($sql);
    foreach($data as $k => $row){
        echo "{$k} => {$row->ID} : {$row->Name}<br />";
        $stmt->bind_param('ssssss',
                $row->Name, $row->Address, $row->Tel,
                $row->City, $row->Town, $row->PicURL
            );
        $stmt->execute();
    }


?>