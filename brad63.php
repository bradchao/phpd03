I am Brad63.php
<hr />
<?php
    include 'bradapis.php';
    session_start();
    if (!isset($_SESSION['s1'])) header("Location: brad61.php");

    $s1 = $_SESSION['s1'];
    echo "{$s1->getName()}:{$s1->sum()}:{$s1->avg()}"; 
?>