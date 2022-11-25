<?php
    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];
    echo "{$account} : {$passwd}<br />";

    $habbit = $_REQUEST['habbit'];
    //var_dump($habbit);
    foreach($habbit as $v){
        echo "{$v}<br />";
    }

?>