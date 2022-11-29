<?php
    include 'sql.php';
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
<hr />
<?php
    $sql = "SELECT * FROM food ORDER BY id LIMIT 7, 7";
    $result = $mysqli->query($sql);
?>
<table border="1" width="100%">
    <?php
        while ($food = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$food->id}</td>";
            echo "<td>{$food->name}</td>";
            echo "<td>{$food->tel}</td>";
            echo "<td>{$food->city}</td>";
            echo "<td>{$food->town}</td>";
            echo "<td><img src='{$food->picurl}' width='64px' height='64px' /></td>";
            echo '</tr>';
        }
    ?>
</table>


