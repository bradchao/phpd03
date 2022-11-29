I am Brad61.php
<hr />
<?php
    include 'bradapis.php';
    session_start();    // php.ini => auto-start

    $s1 = new Student('Brad',rand(0,100),rand(0,100),rand(0,100));
    $_SESSION['s1'] = $s1;
    echo "{$s1->getName()}:{$s1->sum()}:{$s1->avg()}";
    echo '<hr />';
    $s1->setCh(1000);
    echo "{$s1->getName()}:{$s1->sum()}:{$s1->avg()}";

?>
<hr />
<a href='brad62.php'>Next Page</a>