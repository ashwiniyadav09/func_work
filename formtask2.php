<?php

$name_error = "";
$add_error = "";
$contact_error = "";
$email_error = "";
$pincode_error = "";

if(isset($_POST['submit'])){
  $count=0;
	if($_POST['company-name']==""){
		$name_error = "please enter the company name";
		$count++;
	}

	if($_POST['address']==""){
		$add_error = "please enter the value";
		$count++;
	}

	if($_POST['contact']==""){
		$contact_error = "please enter the proper contact";
		$count++;
	}

	if($_POST['email']==""){
		$email_error = "please enter the valid email";
		$count++;
	}

	if($_POST['pincode']==""){
		$pincode_error = "please enter the pincode";
		$count++;
	}

	
	if($count==0){

	echo 'company-name=' . $_POST['company-name'] . '<br>';
	echo 'address=' . $_POST['address'] . '<br>';
	echo 'contact=' . $_POST['contact'] . '<br>';
	echo 'email=' . $_POST['email'] . '<br>';
	echo 'cities=' . $_POST['cities'] . '<br>';
	echo 'pincode=' . $_POST['pincode'] . '<br>';
	echo 'field=' .implode($_POST['field']) . '<br>';

    

	}


}
?>
<form method="post">
company-name:<input type="text" name="company-name" value="<?php if(isset($_POST['company-name'])){echo $_POST['company-name'];}?>" /><br>

		<?php if($name_error!="") { ?>
		<p style= "color:red">
			<?php echo $name_error; ?>
		</p>
		<?php } ?>

address:<input type="text" name="address" value="<?php if(isset($_POST['address'])){echo $_POST['address'];}?>" /><br>

		 <?php if($add_error!=""){?>
		 <p style= "color:red">
		 	<?php echo $add_error; ?>
		 </p>
		 <?php }?>

contact:<input type="text" name="contact" value = "<?php if(isset($_POST['contact'])){echo $_POST['contact'];}?>" /><br>

		<?php if($contact_error!=""){ ?>
		<p style= "color:red">
			<?php echo $contact_error;?>
		</p>
		<?php }?>

email:<input type="text" name="email" value = "<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" /><br>

		<?php if($email_error!=""){?>
		 <p style= "color:red">
		 	<?php echo $email_error;?>
		 </p>
		<?php } ?>


pincode: <input type = "text" name="pincode" value = "<?php if(isset($_POST['pincode'])){echo $_POST['pincode'];}?>"/><br>
		<?php if($pincode_error!=""){?>
		<p style = "color:red">
			<?php echo $pincode_error;?>
		</p>
		<?php }?>

cities:
<select name="cities"><br>
	<option value = "ahemdabad">ahemdabad</option><br>
	<option value = "delhi">delhi</option><br>
	<option value = "mumbai">mumbai</option><br>
	<option value = "pune">pune</option><br>

	
field: <input type ="checkbox" name="field[]" value="it" checked="checked"/>IT<br>
       <input type ="checkbox" name="field[]" value="software" />software<br>
       <input type ="checkbox" name="field[]" value="hardware" />hardware<br>
       <input type ="checkbox" name="field[]" value="management" />management<br>
     <input type ="submit" name="submit" value="submit">
 </form>
