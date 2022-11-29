<?php
    session_start();
    if (!isset($_SESSION['member'])) header('Location: login.php');
    $member = $_SESSION['member'];

    $icon = base64_encode($member->icon); 

?>
<h1>Brad Big Company</h1>
<hr />
Welcome, <?php echo $member->realname; ?><br />
<!-- data:type;base64, xxx -->
<img width='32px' height='32px' 
    src="data:<?php echo $member->icontype; ?>;base64, 
    <?php echo $icon; ?>" />


