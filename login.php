Login Page
<hr />
<form action="checkAccount.php" method="get">
    Account:<input type="text" name="account" /><br />
    Password:<input type="password" name="passwd" /><br />
    <input type="submit" value="Login" />
    <button type="button" onclick="location.href='register.php'">
        Register
    </button>
</form>