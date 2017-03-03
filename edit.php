 <?php
require('db_connection.php');
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

    $state1 = '';
	$united_state1 ='';
	$gender1 = '';

if(isset($_GET['id']))
{
$id=$_GET['id'];
$select = mysqli_query($connection,"SELECT * FROM userform WHERE id='".$id."'");
$query = mysqli_fetch_assoc($select);

$username1 = $query['username'];
$email1 =$query['email'];
$firstname1 =$query['firstname'];
$lastname1 =$query['lastname'];
$password1 =$query['password'];
$confirm_password1 =$query['confirm_password'];
$city1 =$query['city'];
$state1 =$query['state'];
$united_state1 =$query['united_state'];
$gender1 =$query['gender'];
$birthday1 =$query['birthday'];
$music_info1= explode(",", $query['music_info']);
$address1 =$query['address'];

}


if(isset($_POST['submit']))
{

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

$username =$_POST['username'];
$email =$_POST['email'];
$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$password= $_POST['password'];
$confirm_password= $_POST['confirm_password'];
$city= $_POST['city'];
$state= $_POST['state'];
$united_state= $_POST['unitedstate'];
$gender= $_POST['gender'];
$birthday= $_POST['birthday'];
$music_info=  implode(',',$_POST['music_info']);
$address= $_POST['address'];



$update = mysqli_query($connection ,"UPDATE userform SET username='".$username."', email='".$email."', firstname= '".$firstname."', lastname= '".$lastname."', password= '".$password."', confirm_password= '".$confirm_password."', city= '".$city."', state= '".$state."',
	united_state= '".$united_state."', gender= '".$gender."', birthday= '".$birthday."',
	music_info= '".$music_info."', address= '".$address."'
	WHERE id='".$id."'");



if($update)
{
header('location:list.php');
}
}
} 

?>

<form method="post">
username:<input type="text" name="username"value="<?php if(isset($username1)){echo $username1;}?>" /><br>

		<?php if($user_error!=""){ ?>
			<p style ="color:red">
				<?php echo $user_error;?>
			</p>
		<?php } ?>

email:<input type="text" name="email" value="<?php if(isset($email1)){echo $email1;}?>"/><br>

		<?php if($email_error!=""){ ?>
			<p style ="color:red">
				<?php echo $email_error;?>
			</p>
		<?php } ?>

firstname:<input type="text" name="firstname" value="<?php if(isset($firstname1)){echo      $firstname1;}?>"/><br>

		<?php if($firstname_error!=""){ ?>
			<p style ="color:red">
				<?php echo $firstname_error;?>
			</p>
		<?php } ?>

lastname:<input type="text" name="lastname" value="<?php if(isset($lastname1)){echo         $lastname1;}?>" /><br>

		<?php if($lastname_error!=""){ ?>
			<p style ="color:red">
				<?php echo $lastname_error;?>
			</p>
		<?php } ?>

password:<input type="password" name="password" value="<?php if(isset($password1)){echo     $password1;}?>" /><br>

		<?php if($password_error!=""){ ?>
			<p style ="color:red">
				<?php echo $password_error;?>
			</p>
		<?php } ?>

confirm password:<input type="password" name="confirm_password" value="<?php if(isset(      $confirm_password1)){echo $confirm_password1;}?>"/><br>

		<?php if($confirm_password_error!=""){ ?>
			<p style ="color:red">
				<?php echo $confirm_password_error;?>
			</p>
		<?php } ?>

city:<input type="city" name="city" value="<?php if(isset($city1)){echo $city1;}?>" /><br>

		<?php if($city_error !=""){ ?>
			<p style ="color:red">
				<?php echo $city_error ;?>
			</p>
		<?php } ?>



state:<select name="state">
<option value="">select</option><br>

<option value="alabama" <?php if($state1 == "alabama"){echo 'selected = selected';}?>>alabama</option><br>

<option value="alaska" <?php if($state1 == "alaska"){echo 'selected = selected';}?>>alaska</option><br>

<option value="arizona" <?php if($state1 == "arizona"){echo 'selected = selected';}?>>arizona</option><br>

<option value="arkansas" <?php if($state1 == "arkansas"){echo 'selected = selected';}?>>arkansas</option><br>

<option value="lowa" <?php if($state1 == "arkansas"){echo 'selected = selected';}?>>lowa</option><br>

<option value="florida" <?php if($state1 == "florida"){echo 'selected = selected';}?>>florida</option><br>
<option value="gungia" <?php if($state1 == "gungia"){echo 'selected = selected';}?>>gungia</option><br>
<option value="delaware" <?php if($state1 == "delaware"){echo 'selected = selected';}?>>delaware</option><br>

<option value="california" <?php if($state1 == "california"){echo 'selected = selected';}?>>california</option><br>

<option value="illinoi" <?php if($state1== "illinoi"){echo 'selected = selected';}?>>illinoi</option></select></br>

		<?php if($state_error !=""){ ?>
			 <p style ="color:red">
				<?php echo $state_error ;?>
			</p>
		<?php } 

?>
unitedstate:<select name="unitedstate">

<option value="">select</option><br>

<option value="unitedkingdom" <?php if($united_state1 == 'unitedkingdom'){ echo 'selected= selected';}?>>unitedkingdom</option><br>

<option value="taiwan" <?php if($united_state1 == "taiwan"){ echo 'selected = selected';}?>>taiwan</option><br>

<option value="tajistan" <?php if($united_state1 == "tajistan"){ echo 'selected = selected';}?>>tajistan</option><br>

<option value="turkish" <?php if($united_state1 == "turkish"){ echo 'selected = selected';}?>>turkish</option><br>

<option value="lowa" <?php if($united_state1 == "lowa"){ echo 'selected = selected';}?>>lowa</option><br>

<option value="florida" <?php if($united_state1 == "florida"){ echo 'selected == selected';}?>>florida</option><br>

<option value="uganda" <?php if($united_state1 == "uganda"){ echo 'selected == selected';}?>>uganda</option><br>

<option value="sweden" <?php if($united_state1 == "sweden"){ echo 'selected == selected';}?>>sweden</option></select><br>

		<?php if($unitedstate_error!=""){ ?>
			<p style ="color:red">
				<?php echo $unitedstate_error ;?>
			</p>
		<?php } ?>


gender: <select name="gender">
 <option value ="">select</option><br>

 <option value ="male" <?php if($gender1 == "male"){ echo 'selected = selected';}?>>male</option><br>

 <option value ="female" <?php if($gender1 == "female"){ echo 'selected = selected';}?>>female</option></select><br>

		 <?php if($gender_error!=""){ ?>
			<p style ="color:red">
				<?php echo $gender_error;?>
			</p>
		<?php } ?>


Birthday: <input type = "text" name="birthday" placeholder="mm-dd-yy" value="<?php if(isset($birthday1)){echo $birthday1;}?>"/><br>

		<?php if($birthday_error!=""){ ?>
			<p style ="color:red">
				<?php echo $birthday_error;?>
			</p>
		<?php } ?>


music_info: <input type="checkbox" name="music_info[]" value="jazz" <?php if(!empty($music_info1) && in_array('jazz', $music_info1)){echo 'checked'; }?>/>jazz<br>

 <input type="checkbox" name="music_info[]" value="pop" <?php if(!empty($music_info1) &&in_array('pop', $music_info1)){echo 'checked'; }?> />pop<br> 

 <input type="checkbox" name="music_info[]" value="folk" <?php if(!empty($music_info1) &&in_array('folk', $music_info1)){echo 'checked'; }?>/>folk<br>

 <input type="checkbox" name="music_info[]" value="christian" <?php if(!empty($music_info1) && in_array('christian', $music_info1)){echo 'checked'; }?> />christian<br> 

 <input type="checkbox" name="music_info[]" value="classical" <?php if(!empty($music_info1) && in_array('classical', $music_info1)){echo 'checked'; }?>/>classical<br>

 <input type="checkbox" name="music_info[]" value="hardrock" <?php if(!empty($music_info1) && in_array('hardrock', $music_info1)){echo 'checked'; }?>/>hardrock<br>

 <input type="checkbox" name="music_info[]" value="rock" <?php if(!empty($music_info1) &&in_array('rock', $music_info1)){echo 'checked'; }?>/>rock<br>

 <input type="checkbox" name="music_info[]" value="country" <?php if(!empty($music_info1) &&in_array('country', $music_info1)){echo 'checked'; }?> />country<br>

		 <?php if($music_info_error!=""){ ?>
			 <p style ="color:red">
				<?php echo $music_info_error;?>
			</p> 
		<?php } ?>



artist_info:
<textarea name= "address"></textarea>

		<?php if($address_error !=""){ ?>
			<p style ="color:red">
				<?php echo $address_error;?>
			</p>
		<?php } ?>

<input type ="submit" name="submit" value="submit">
</form>
