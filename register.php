Register Page
<hr />
<script>
    const xhttp = new XMLHttpRequest();
    function checkNewAccount(){
        xhttp.onreadystatechange = afterCheck;
        xhttp.open("GET", "isNewAccount.php", true);
        xhttp.send();
    }
    function afterCheck(){
        if (xhttp.readyState == 4 && xhttp.status == 200){

        }
    }

</script>
<form method="post" enctype="multipart/form-data">
    Account:<input type="text" name="account" 
        onchange="checkNewAccount()"/><br />
    Password:<input type="text" name="passwd" />
    <span id='mesg'></span><br />
    Realname:<input type="text" name="realname" /><br />
    Icon:<input type="file" name="icon" /><br />
    <input type="submit" value="Register" />
</form>