<?php
    session_start();
    if (!isset($_SESSION['member'])) header('Location: login.php');
    $member = $_SESSION['member'];
?>
<h1>Brad Big Company</h1>
<hr />
Welcome, <?php echo $member->realname; ?>