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
        if ($stmt->num_rows() != 0){
            $stmt->store_result();
            $stmt->bind_result($account,$passwdHash,$realname);
            if (password_verify($passwd, $passwdHash)){

            }else{

            }

        } else{
            header('Location: brad56.php');
        }

    }else{
        header('Location: brad56.php');
    }

?>