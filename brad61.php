I am Brad61.php
<hr />
<?php
    session_start();    // php.ini => auto-start

    $lottery = rand(1,49);
    echo $lottery;
    $_SESSION['lottery'] = $lottery;
?>
<hr />
<a href='brad62.php'>Next Page</a>