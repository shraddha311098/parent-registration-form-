<?php 

require_once("connection.php");

$id=$_GET['id'];

$sql="DELETE FROM register where id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('location:submitform.php');
  } else {
    echo "Error deleting record: " . $conn->error;
  }
?>