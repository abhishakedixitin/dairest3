<?php

include 'connection.php';
$deleteid = $_GET['deleteid'];
$sql = "DELETE FROM users WHERE ID = '{$deleteid}'";
$result = $conn->query($sql) or die(mysqli_error());
header("location: check-user-table.php");
echo $deleteid;

