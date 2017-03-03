<?php
require 'db1_connection.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $delete = ($connection, "DELETE FROM userform1 WHERE id='$id'");
  if($delete){
  	header('location:list1.php');
  }
}
?>