<?php

include "./connection.inc.php"; 

$id = $_GET['id'];
$q = "DELETE FROM `contact` WHERE id = $id";
mysqli_query($conn,$q);

header('location:message.php');
?>
