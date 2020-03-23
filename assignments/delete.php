<?php
include_once('database.php');
$SlNo = $_GET['SlNo'];
$sql2 = "DELETE FROM myresume WHERE myresume.SlNo=$SlNo";
mysqli_query($conn, $sql2);
header('location: modify.php');
?>
