<form method = 'post'>
	fname:<input type = "text" name = "fname" /><br>
	lname:<input type = "text" name = "lname" /><br>
	department:<input type = "text" name = "department" /><br>
	technology:<input type = "text" name = "technology" /><br>

	 gender: <input type = "radio" name = "gender" value="male" />male
		    <input type = "radio"  name = "gender" value="female" />female<br>

     hobbies: <input type = "checkbox" name = "hobbies[]" value = "cricket" />cricket<br>
              <input type = "checkbox" name = "hobbies[]" value = "badminton" />badminton<br>
              <input type = "checkbox" name = "hobbies[]" value = "tennis" />tennis<br>		    


	cities:<select name = "cities"><br>
	       <option value = "gujrat">ahemdabad </option><br>
	       <option value = "rajasthan">rajasthan</option><br>
	       <option value = "mumbai">mumbai</option><br>
	       <option value = "delhi">delhi</option><br>
         <input type ="submit" name = "submit" value = "submit" />
	
	               

</form>

<?php
echo "<pre>";
print_r($_POST);

if(isset($_POST['submit'])){
	echo 'fname = ' . $_POST['fname'] . '<br>';
	echo 'lname = ' . $_POST['lname'] . '<br>';
	echo 'department = ' . $_POST['department'] . '<br>';
	echo 'technology = ' . $_POST['technology'] . '<br>';
	echo 'gender =' . $_POST['gender'] . '<br>';
	echo 'hobbies ='.implode($_POST['hobbies'], ',') . '<br>';
	echo 'cities =' . $_POST['cities'] . '<br>';
}
?>