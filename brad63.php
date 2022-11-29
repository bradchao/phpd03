I am Brad63.php
<hr />
<?php
    session_start();
    $lottery = $_SESSION['lottery'];
    echo $lottery;
?>