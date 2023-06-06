<?php

include "./connection.inc.php"; 

$id = $_GET['id'];
$q = "DELETE FROM `orders` WHERE id = $id";
mysqli_query($conn,$q);

header('location:index.php');
?>
