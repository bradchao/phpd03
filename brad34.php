<table border='1' width='100%'>
<?php
    $content = file('myfiles/Fstdata.csv');
    foreach($content as $k => $line){
        $line = trim($line);
        $data = explode(',', $line);
        echo '<tr>';
        echo "<td>{$data[1]}</td>";
        echo "<td>{$data[2]}</td>";
        echo "<td>{$data[7]}</td>";
        echo '</tr>';
    }
?>    
</table>