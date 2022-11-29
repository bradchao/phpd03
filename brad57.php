<?php
    include 'sql.php';
    if (isset($_POST['account'])){
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];

        $sql = 'SELECT account,passwd,realname FROM member' . 
                ' WHERE account = ?';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s', $account);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows() != 0){
            $stmt->bind_result($acc,$passwdHash,$realname);
            $stmt->fetch();
            if (password_verify($passwd, $passwdHash)){
                header("Location: brad58.php");
            }else{
                header("Location: brad56.php");
            }

        } else{
            header('Location: brad56.php');
        }
    }else{
        header('Location: brad56.php');
    }

?>