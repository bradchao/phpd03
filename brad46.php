<?php
    include 'bradapis.php';

    $brad = new Student('Brad', 70, 60, 50);
    $eric = new Student('Eric', 98, 80, 90);
    $andy = new Student('Andy', 36, 50, 54);

    echo "{$brad->getName()}: {$brad->sum()} : {$brad->avg()}<br />";
    echo "{$eric->getName()}: {$eric->sum()} : {$eric->avg()}<br />";
    echo "{$andy->getName()}: {$andy->sum()} : {$andy->avg()}<br />";


?>