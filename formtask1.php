<?php
$employee_error ="";
$desg_error="";
$add_error = "";
$phone_error = "";
$blood_error = "";
$contact_error = "";
$gender_error = "";
$skill_error = "";
$cities_error = "";


// echo"<pre>";
// print_r($_POST);

// if(isset($_POST['submit'])){
// 	echo 'employee-name:' . $_POST['employee-name'] . '<br>'; 
// 	echo 'Designation:' . $_POST['designation'] . '<br>';
// 	echo 'address:' . $_POST['address'] . '<br>';
// 	echo 'Phone no:' . $_POST['phone no'] . '<br>';
// 	echo 'blood group:' . $_POST['bloodgroup'] . '<br>';
// 	echo 'emergency-contact:' . $_POST['emergency-contact'] . '<br>';
// 	echo 'gender:' . $_POST['gender'] . '<br>';
// 	echo 'skills:' . $_POST['skills'] . '<br>';
// 	echo 'cities:' . $_POST['cities'] . '<br>';
// }
  
  if(isset($_POST['submit'])){
  	    $count=0;
  	if($_POST['employee-name']==""){
  		$employee_error = "value required";
  		$count++;

  	}

  	if($_POST['designation']==""){
  		$desg_error = "value required";
  		$count++;
  	}

  	if($_POST['address']==""){
  		$add_error = "value required";
  		$count++;
  	}

  	if($_POST['phone no']==""){
  		$phone_error = "value required";
  		$count++;
  	}

  	if($_POST['bloodgroup']==""){
  		$blood_error = "value required";
  		$count++;
  	}
  	if($_POST['emergency-contact']==""){
  		$contact_error = "value required";
  		$count++;
  	}
  	if($_POST['gender']==""){
  		$gender_error = "value required";
  		$count++;
  	}
  	if($_POST['skills']==""){
  		$skill_error = "value required";
  		$count++;
  	}
  	if($_POST['cities']==""){
  		$cities_error = "value required";
  		$count++;
  	}

if($count==0){
	echo"success";
}

  }

?>

<form method = "post">
employee-name:<input type="text" name="employee-name" /><br>
<?php if($employee_error!=""){?>
<p style="color:red">
	<?php echo $employee_error; ?>
</p>
<?php } ?>

Designation:<input type="text" name="designation" /><br>
<?php if($desg_error!=""){?>
<p style="color:red">
	<?php echo $desg_error; ?>
</p>
<?php } ?>

address:    <input type="text" name="address" /><br>
<?php if($add_error!=""){?>
<p style="color:red">
	<?php echo $add_error; ?>
</p>
<?php } ?>

Phone no.:<input type="text" name="phone no" /><br>

<?php if($add_error!=""){?>
<p style="color:red">
	<?php echo $add_error; ?>
</p>
<?php } ?>

bloodgroup:<input type="text" name="bloodgroup" /><br>

<?php if($blood_error!=""){?>
<p style="color:red">
	<?php echo $blood_error; ?>
</p>
<?php } ?>
emergency-contact: <input type="text" name="emergency-contact"><br>

<?php if($contact_error!=""){?>
<p style="color:red">
	<?php echo $contact_error; ?>
</p>
<?php } ?>

gender: <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female<br>

        <?php if($gender_error!=""){?>
<p style="color:red">
	<?php echo $gender_error; ?>
</p>
<?php } ?>

skills:
    <input type="checkbox" name="skills" />drupal <br>
    <input type="checkbox" name="skills" />wordpress <br>
    <input type="checkbox" name="skills" />magento <br>
    <input type="checkbox" name="skills" />mvc <br>
<?php if($skill_error!=""){?>
<p style="color:red">
	<?php echo $skill_error; ?>
</p>
<?php } ?>

cities:
      <select name="cities"><br>
    	<option value="gujrat">gujrat</option>
    	<option value="delhi">delhi</option>
    	<option value="mumbai">mumbai</option>
    	<option value="pune">pune</option>

    	<?php if($cities_error!=""){?>
<p style="color:red">
	<?php echo $cities_error; ?>
</p>
<?php } ?>

    <input type="submit" name="submit" value="submit" />
    </form>	












