
<?php
require 'db_connection.php';
if(isset($_GET['id']))
{
$id=$_GET['id'];
$delete =mysqli_query($connection, "DELETE FROM userform where id='$id'");
if($delete)
{
header('location:list.php');
}
}
?>
