<?php
    $upload = $_FILES['upload'];
    //var_dump($upload);

    foreach($upload['error'] as $k => $v){
        if ($v == 0){
            $source = $upload['tmp_name'][$k];
            $filename = $upload['name'][$k];
            move_uploaded_file($source, "upload/{$filename}");
        }
    }
?>