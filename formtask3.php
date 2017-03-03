<?php
$employee_error = "";
$designation_error = "";
$address_error = "";

if(isset($_POST['submit'])){
	$count=0;
	if($_POST['employee-name']==""){
		$employee_error = "value required";
		$count++;
	}

	if($_POST['designation']){
		$desig_error = "value required";
		$count++;
	}

	if($_POST['address']){
		$address_error = "value required";
		$count++;
	}
	echo 'employee-name =' . $_POST['employee-name'] . '<br>';
	echo 'designation =' . $_POST['designation'] . '<br>';
	echo 'address =' . $_POST['address'] . '<br>';
	echo 'contact =' . $_POST['contact'] . '<br>';
	echo 'bloodgroup' . $_POST['bloodgroup'] . '<br>';
	echo 'gender' . $_POST['gender'] . '<br>';

}
?>
<form method="post">
name:<input type= "text" name="employee-name" /><br>

<?php if($employee_error!="") ?>
designation: <input type= "text" name="designation" /><br>
address:<textarea name="address"></textarea><br>
contact: <input type = "text" name="contact" /><br>
bloodgroup: <input type = "text" name="bloodgroup" /><br>
gender: <input type = "radio" name="gender">male
        <input type = "radio" name="gender">female
        <input type="submit" name="submit" value="submit" />
</form>