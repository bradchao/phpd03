<?php
    $upload = $_FILES['upload'];
    //var_dump($upload);
    // foreach($upload as $key => $value){
    //     echo "[{$key}] = {$value}<br />";
    // }

    if ($upload['error'] == 0){
        // if (move_uploaded_file($upload['tmp_name'], 
        //         "upload/{$_SERVER['REMOTE_ADDR']}.jpg")){
        if (move_uploaded_file($upload['tmp_name'], 
        "upload/{$upload['name']}")){
                echo 'Upload success';
        }else{
            echo 'Move failure';
        }
    }else{
        echo 'Upload Failure';
    }

?>