<?php


include "./connection.inc.php"; 

$id = $_GET['id'];


$sql = "UPDATE products SET status='active' WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


header('location:index.php');
?>
