<?php

require 'db_connection.php';

$user_error = "";
$email_error = "";
$firstname_error = "";
$lastname_error = "";
$password_error = "";
$confirm_password_error = "";
$city_error = "";
$state_error = "";
$unitedstate_error = "";
$gender_error = "";
$birthday_error = "";
$music_info_error = "";
$address_error = "";



if(isset($_POST['submit'])){
	
   $count=0;
   if($_POST['username']==""){
   $user_error = "please enter the username";
   $count++;
  }

  if($_POST['email']==""){
   $email_error = "please enter the email";
   $count++;
  }

  if($_POST['firstname']==""){
   $firstname_error = "please enter the firstname";
   $count++;
  }


  if($_POST['lastname']==""){
   $lastname_error = "please enter the lastname";
   $count++;
  }

   if($_POST['password']==""){
   $password_error = "please enter the password";
   $count++;
  }

  if($_POST['confirm_password']==""){
   $confirm_password_error = "please enter the confirm_password";
   $count++;
  }

  if($_POST['city']==""){
   $city_error = "please enter the city";
   $count++;
  }


  
   if($_POST['birthday']==""){
   $birthday_error = "please enter the Birthday";
   $count++;
  }

  if(empty($_POST['music_info'])){
  	//print_r($_POST['music_info']);
   $music_info_error = "please enter the music_info";
   $count++;
  }

  if($_POST['address']==""){
   $address_error = "please enter the address";
   $count++;
  }

 if(empty($_POST['state']))
	{
	$state_error ="Please select a state from the list";
	
	 }
	else
	{
	$state_error = $_POST['state'];
	} 


	if(empty($_POST['unitedstate']))
	{
	$unitedstate_error ="Please select a state from the list";
	
	 }
	else
	{
	$unitedstate_error = $_POST['unitedstate'];
	} 


	if(empty($_POST['gender']))
	{
	$gender_error ="Please select a state from the list";
	
	 }
	else
	{
	$gender_error = $_POST['gender'];
	} 


  if($count==0){
  	echo 'username ='.$_POST['username'] . '<br>';
	echo 'email ='.$_POST['email'] . '<br>';
	echo 'firstname ='.$_POST['firstname'] . '<br>';
	echo 'lastname ='.$_POST['lastname'] . '<br>';
	echo 'password ='.$_POST['password'] . '<br>';
	echo 'confirm_password ='.$_POST['confirm_password'] . '<br>';
	echo 'city ='.$_POST['city'] . '<br>';
    echo 'state ='.$_POST['state'] . '<br>';
    echo 'unitedstate' .$_POST['unitedstate'] . '<br>';
    echo 'gender'.$_POST['gender'] . '<br>';
    echo 'Birthday'. $_POST['birthday'] . '<br>';
    echo 'music_info' . implode($_POST['music_info'],',') . '<br>';
    echo 'address' .$_POST['address'] . '<br>';

    $insert = "INSERT INTO userform (username,email,firstname,lastname,password,confirm_password,city,state,united_state,gender,birthday,music_info,address)
    VALUES('".$_POST['username']."', '".$_POST['email']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['password']."', 
    	'".$_POST['confirm_password']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['unitedstate']."', 
    	'".$_POST['gender']."', '".$_POST['birthday']."', '".implode($_POST['music_info'],',')."', '".$_POST['address']."')";
     // echo $insert;exit;
      mysqli_query($connection, $insert);
	  header('location:userform.php');

  }
}

?>
<form method="post">
username:<input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" /><br>

		<?php if($user_error!=""){ ?>
			<p style ="color:red">
				<?php echo $user_error;?>
			</p>
		<?php } ?>

email:<input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"/><br>

		<?php if($email_error!=""){ ?>
			<p style ="color:red">
				<?php echo $email_error;?>
			</p>
		<?php } ?>

firstname:<input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}?>"/><br>

		<?php if($firstname_error!=""){ ?>
			<p style ="color:red">
				<?php echo $firstname_error;?>
			</p>
		<?php } ?>

lastname:<input type="text" name="lastname" value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];}?>" /><br>

		<?php if($lastname_error!=""){ ?>
			<p style ="color:red">
				<?php echo $lastname_error;?>
			</p>
		<?php } ?>

password:<input type="password" name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>" /><br>

		<?php if($password_error!=""){ ?>
			<p style ="color:red">
				<?php echo $password_error;?>
			</p>
		<?php } ?>

confirm password:<input type="password" name="confirm_password" value="<?php if(isset($_POST['confirm_password'])){echo $_POST['confirm_password'];}?>"/><br>

		<?php if($confirm_password_error!=""){ ?>
			<p style ="color:red">
				<?php echo $confirm_password_error;?>
			</p>
		<?php } ?>

city:<input type="city" name="city" value="<?php if(isset($_POST['city'])){echo $_POST['city'];}?>" /><br>

		<?php if($city_error !=""){ ?>
			<p style ="color:red">
				<?php echo $city_error ;?>
			</p>
		<?php } ?>



state:<select name="state">
<option value="">select</option><br>
<option value="alabama">alabama</option><br>
<option value="alaska">alaska</option><br>
<option value="arizona">arizona</option><br>
<option value="arkansas">arkansas</option><br>
<option value="lowa">lowa</option><br>
<option value="florida">florida</option><br>
<option value="gungia">gungia</option><br>
<option value="delaware">delaware</option><br>
<option value="california">california</option><br>
<option value="illinoi">illinoi</option></select></br>

		<?php if($state_error !=""){ ?>
			 <p style ="color:red">
				<?php echo $state_error ;?>
			</p>
		<?php } ?>


unitedstate:<select name="unitedstate">

<option value="">select</option><br>
<option value="unitedkingdom">unitedkingdom</option><br>
<option value="taiwan">taiwan</option><br>
<option value="tajistan">tajistan</option><br>
<option value="turkish">turkish</option><br>
<option value="lowa">lowa</option><br>
<option value="florida">florida</option><br>
<option value="uganda">uganda</option><br>
<option value="sweden">sweden</option></select><br>

		<?php if($unitedstate_error!=""){ ?>
			<p style ="color:red">
				<?php echo $unitedstate_error ;?>
			</p>
		<?php } ?>


gender: <select name="gender" value="<?php if(isset($_POST['gender'])){echo $_POST['gender'];}?>">
 <option value ="">select</option><br>
 <option value ="male">male</option><br>
 <option value ="female">female</option></select><br>

		 <?php if($gender_error!=""){ ?>
			<p style ="color:red">
				<?php echo $gender_error;?>
			</p>
		<?php } ?>


Birthday: <input type = "text" name="birthday" placeholder="mm-dd-yy" value="<?php if(isset($_POST['birthday'])){echo $_POST['birthday'];}?>"/><br>

		<?php if($birthday_error!=""){ ?>
			<p style ="color:red">
				<?php echo $birthday_error;?>
			</p>
		<?php } ?>


music_info: <input type="checkbox" name="music_info[]" value="jazz" />jazz<br>
 <input type="checkbox" name="music_info[]" value="pop" />jazz<br>
 <input type="checkbox" name="music_info[]" value="folk" />folk<br>
 <input type="checkbox" name="music_info[]" value="christian" />christian<br>
 <input type="checkbox" name="music_info[]" value="classical" />classical<br>
 <input type="checkbox" name="music_info[]" value="hardrock" />hardrock<br>
 <input type="checkbox" name="music_info[]" value="rock" />rock<br>
 <input type="checkbox" name="music_info[]" value="country" />country<br>

		 <?php if($music_info_error!=""){ ?>
			 <p style ="color:red">
				<?php echo $music_info_error;?>
			</p> 
		<?php } ?>



artist_info:
<textarea name= "address"></textarea>

		<?php if($address_error !=""){ ?>
			<p style ="color:red">
				<?php echo $address_error ;?>
			</p>
		<?php } ?>

<input type ="submit" name="submit" value="submit">
</form>
