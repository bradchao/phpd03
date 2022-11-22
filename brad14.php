<?php
    $i = 0;
    for ( printHead() ; $i < 10;  printLine()){
        echo "{$i}<br />";
        $i++;
    }

    function printHead(){
        echo 'Brad';
        printLine();
    }

    function printLine(){
        echo '<hr />';
    }

?>