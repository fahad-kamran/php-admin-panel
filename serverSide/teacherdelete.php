<?php 
include 'connection.php';
 $id = $_GET['id'];
  $delete =  "DELETE FROM `teacherinfo` WHERE id = '$id' ";
 mysqli_query($conn,$delete);
   header('location:../teacherTable.php');
?>