<form method = "post">
	fname: <input type = "text" name = "fname" /><br>
	lname: <input type = "text" name = "lname" /><br>
	age:   <input type = "text" name = "age" /><br>
	class: <input type = "text" name = "class" /><br>
	marks: <input type = "text" name = "marks" /><br>
	       <input type = "submit" name = "submit" value = "submit"><br>
</form>

<?php
//echo "<pre>";
//print_r($_POST);

if(isset($_POST)){
	 echo 'fname =>' . $_POST['fname'] . '<br>';
	  echo 'lname =>' . $_POST['lname'] . '<br>';
	   echo 'age =>' . $_POST['age']  . '<br>';
	    echo 'class =>' . $_POST['class'] . '<br>';
	     echo 'marks =>' . $_POST['marks'] . '<br>';

}
?>

