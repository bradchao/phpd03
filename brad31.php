<?php
    date_default_timezone_set('Asia/Taipei');
?>
<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Size</th>
        <th>Datetime</th>
    </tr>
    <?php
        $dir = opendir('.');
        while ( $file = readdir($dir)){
            echo '<tr>';
            echo "<td>{$file}</td>";

            if (is_dir($file)){
                echo "<td>Dir</td>";
            }else if (is_file($file)){
                echo "<td>File</td>";
            }else{
                echo "<td>Unknow</td>";
            }
            $size = filesize($file);
            echo "<td align='right'>{$size} bytes</td>";

            $mtime = filemtime($file);
            $mdate = date('Y-m-d H:i:s', $mtime);
            echo "<td align='center'>{$mdate}</td>";
            echo '</tr>';
        }
        closedir($dir);
    ?>
</table>