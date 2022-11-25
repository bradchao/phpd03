<?php
    $filename = $_REQUEST['filename'];
    $content = $_REQUEST['content'];

    $fp = fopen("dir1/{$filename}", 'w');
    fwrite($fp, $content);
    fflush($fp);
    fclose($fp);

    header("Location: dir1/{$filename}");
?>