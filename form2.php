<form method = "POST">
	fname: <input type = "text" name = "fname"  /><br>
	lname: <input type = "text" name = "lname" /><br>
	class: <input type = "text" name = "class" /><br>
	marks: <input type = "text" name = "marks" /><br>

	gender: <input type = "radio" name = "gender" />male
		    <input type = "radio" name = "gender" />female<br>

    hobbies: <input type = "checkbox" name = "hobbies[]" />cricket <br>
             <input type = "checkbox" name = "hobbies[]" />badminton <br>	
             <input type = "checkbox" name = "hobbies[]" />tennis <br>			    
             <input type = "checkbox" name = "hobbies[]" />basket ball <br>	
             <input type = "checkbox" name = "hobbies[]" />volleyball <br>

    city:    <select name = "cities"><br>
             <option value = "ahemdabad">ahemdabad</option><br>
             <option value = "mumbai">mumbai</option><br>
             <option value = "delhi">delhi</option><br>
             <option value = "punjab">punjab</option><br>

	         <input type ="submit" name = "submit" value = "submit" />
</form>

<?php
// echo "<pre>";
// print_r($_POST);

if(isset($_POST)){
	echo 'fname =>' . $_POST['fname'] . '<br>';
	echo 'lname =>' . $_POST['lname'] . '<br>';
	echo 'class =>' . $_POST['class'] . '<br>';
	echo 'marks =>' . $_POST['marks'] . '<br>';
	echo 'gender =>'. $_POST['gender'] . '<br>';
	echo 'hobbies =>'.implode($_POST['hobbies'], ',') . '<br>';
	echo 'cities =>' . $_POST['cities'] . '<br>';
}


?>