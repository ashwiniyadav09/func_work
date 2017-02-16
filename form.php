

<form  method = "post">
  student:<input type = "text" name = "student"/><br>
  class:<input type = "text" name = "class"/><br>
  age:<input type = "text" name = "age"/><br>
  marks:<input type = "text" name = "marks"/><br>
        <input type = "submit" name="submit" value = "submit"/><br>

</form>

<?php
// echo "<pre>";
//  print_r($_POST);

if(isset($_POST['submit'])){
	 echo 'student:'. $_POST['student'] .'<br>';
     echo 'class:'. $_POST['class'].'<br>';
     echo 'age:'. $_POST['age'].'<br>';
     echo 'marks:'. $_POST['marks'].'<br>';
}


?>

