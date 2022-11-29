<?php
  if (!isset($_GET['account']))  echo -1;
  $account = $_GET['account'];

  include 'sql.php';

  $sql = "SELECT account FROM member WHERE account = '{$account}'";
  $result = $mysqli->query($sql);
    echo $result->num_rows;
?>