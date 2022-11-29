<?php
    $json = file_get_contents('myfiles/brad.json');
    $data = json_decode($json, false);
    //var_dump($data);
    //echo gettype($data);
    echo "Class: {$data->class}<br />";
    echo "Teacher: {$data->teacher}<br />";
    //echo gettype($data->students);
    echo 'Students<ol>';
    foreach($data->students as $student){
        echo "<li>";
        echo $student->name;
        echo ":Ch-> {$student->score->ch}";
        echo "</li>";
    }
    echo '</ol>';


?>