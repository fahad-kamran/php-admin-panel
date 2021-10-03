<?php 
include 'connection.php';
 $id = $_GET['id'];
  $delete =  "DELETE FROM `studentinfo` WHERE id = '$id' ";
 mysqli_query($conn,$delete);
   header('location:../studentTable.php');
?>