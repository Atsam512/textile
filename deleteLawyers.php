<?php

include "./connection.inc.php"; 

$id = $_GET['id'];
$q = "DELETE FROM `lawyers` WHERE id = $id";
mysqli_query($conn,$q);

header('location:lawyers.php');
?>
