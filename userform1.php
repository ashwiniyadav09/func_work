<?php
require 'db1_connection.php';

$fname_error = "";
$lname_error = "";

if(isset($_POST['submit'])){
	
   $count=0;
   if($_POST['fname']==""){
   $fname_error = "please enter the fname";
   $count++;
  }

  if($_POST['lname']==""){
  	$lname_error = "please enter the lname";
  }

  if($count==0){
  		
  		echo 'fname ='.$_POST['fname'] . '<br>';
  		echo 'lname =' .$_POST['lname'] . '<br>';

  		$insert = "INSERT INTO userform1(fname,lname) VALUES ('".$_POST['fname']."' , '".$_POST['lname']."')";
  			//echo $insert; exit;

  		mysqli_query($connection, $insert);
  		header('location:userform1.php');



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