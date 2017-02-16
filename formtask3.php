<?php
if(isset($_POST['submit'])){
  

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
designation: <input type= "text" name="designation" /><br>
address:<textarea name="address"></textarea><br>
contact: <input type = "text" name="contact" /><br>
bloodgroup: <input type = "text" name="bloodgroup" /><br>
gender: <input type = "radio" name="gender">male
        <input type = "radio" name="gender">female
        <input type="submit" name="submit" value="submit" />
    </form>