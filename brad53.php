<?php
    $passwd = '123456';
    $passwdHash = password_hash($passwd, PASSWORD_DEFAULT);
    $len = strlen($passwdHash);
    echo "{$passwd} : {$passwdHash} : {$len}<br />";

    if (password_verify('123457', $passwdHash)){
        echo 'OK';
    }else{
        echo 'XX';
    }
?>