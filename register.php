<meta charset="utf-8" />
<?php
    include 'sql.php';
    if (isset($_POST['account'])){
        $account = $_POST['account'];
        $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
        $realname = $_POST['realname'];
        $icon = null; $icontype = null;
        if ($_FILES['icon']['error'] == 0){
            $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
            $icontype = $_FILES['icon']['type'];            
        }
        $sql = "INSERT INTO member " .
            "(account,passwd,realname,icon,icontype)" .
            " VALUES ('$account','$passwd','$realname','$icon','$icontype')";
        if ($mysqli->query($sql)){
            header('Location: login.php');
        }else{
            echo 'ERROR:' . $sql;
        }

    }
?>
Register Page
<hr />
<script>
    const xhttp = new XMLHttpRequest();
    function checkNewAccount(){
        var account = document.getElementById('account').value;
        xhttp.onreadystatechange = afterCheck;
        xhttp.open("GET", "isNewAccount.php?account="+account, true);
        xhttp.send();
    }
    function afterCheck(){
        if (xhttp.readyState == 4 && xhttp.status == 200){
            let mesg = document.getElementById('mesg');
            if (xhttp.responseText != 0){
                mesg.innerHTML = '帳號重複';
            }else{
                mesg.innerHTML = '帳號可以用';
            }
        }
    }

</script>
<form method="post" enctype="multipart/form-data">
    Account:<input type="text" id="account" name="account" 
        onchange="checkNewAccount()"/>
    <span id='mesg'></span><br />
    Password:<input type="password" name="passwd" />
    <br />
    Realname:<input type="text" name="realname" /><br />
    Icon:<input type="file" name="icon" /><br />
    <input type="submit" value="Register" />
</form>

