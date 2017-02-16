<?php
$name_error = "";
$class_error = "";
if(isset($_POST['submit'])){

	$count=0;

	if($_POST['name']==""){
		$name_error = "value required";
		$count++;
	}

	if($_POST['class']==""){
		$class_error = "value required";
		$count++;
	}
	if($count == 0){
		echo "success";
	}
}

?>

<form method='post'>
name:<input type = "text" name = "name" /></br>
<?php if($name_error!=""){ ?>
<p style = "color:red">
 <?php echo $name_error; ?>
</p>
<?php } ?>

class:<input type = "text" name = "class" /></br>

<?php if($class_error!=""){ ?>
<p style = "color:red"> 
 <?php echo $class_error;?>
 </p>
<?php } ?>
<input type = "submit" name = "submit" value = "submit">
</form>