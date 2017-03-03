<?php
require 'db1_connection.php';

$fname_error = '';
$lname_error = '';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$select = mysqli_query($connection,"SELECT * FROM userform WHERE id='".$id."'");
    $query = mysqli_fetch_assoc($select);

    $fname1 = $query['fname'];
    $lname1 = $query['lname'];
}


if(isset($_POST['submit'])){
	$count=0;
	if($_POST['fname']== ""){
		$fname_error = 'please enter fname';
		$count++;
	}

	if($_POST['lname']){
		$lname_error = 'please enter lname';
		$count++;
	}

	if($count==0){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];

		$update = mysqli_query($connection, "UPDATE userform1 SET fname=>'".$fname."', lname=> '".$lname."'");

		if($update){
			header('location:list1.php');
		}
	}
}

?>

<form method ="POST">
	fname: <input type="text" name="fname" value="<?php if(isset($_POST['fname'])) {echo $_POST['fname']; }?>"/><br>
	<?php if($fname_error!= ""){?>
	<p style = "color:red">
		<?php echo $fname_error;?>
	</p>
	<?php }?>



	lname: <input type="text" name="lname" value="<?php if(isset($_POST['lname'])) {echo $_POST['lname']; }?>"/><br>
    
    <?php if($lname_error!=""){?>

    <p style ="color:red">
    	<?php echo $lname_error; ?>
    </p>

    <?php }?>
      <input type="submit" name="submit" value="submit">
</form>