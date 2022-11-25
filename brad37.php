<?php
    foreach($_REQUEST as $name => $value){
        if (gettype($value) == 'array'){
            echo "{$name}: <ul>";
            foreach($value as $v){
                echo "<li>{$v}</li>";
            }
            echo '</ul>';
        }else{
            echo "{$name} = {$value}<br />";
        }
    }

?>