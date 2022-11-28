<meta charset="utf-8" />
<?php
    include 'sql.php';

    if (isset($_POST['account'])){
        $account = $_POST['account'];
        $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT); ;
        $realname = $_POST['realname'];

        $sql = 'INSERT INTO member (account,passwd,realname) ' .
            'VALUES (?,?,?)';

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sss', $account,$passwd,$realname);
        if ($stmt->execute()){
            echo 'Register Success';
        }else{
            echo 'Register Failure';
        }
        
    }
?>




