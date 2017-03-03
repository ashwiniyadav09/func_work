<html>
<style> table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; } td, th { border: 1px solid #dddddd; text-align: left; padding: 8px; } tr:nth-child(even) { background-color: #dddddd; } </style>
<body>


<?php
require 'db1_connection.php';

$select = mysqli_query($connection, "SELECT * FROM userform1");
 echo "<table><tr><th>id</th><th>fname</th><th>lname</th><tr>";

 while($query = mysqli_fetch_array($select)){
 	echo "<tr><td>".$query['id']."</td>";
    echo "<td>".$query['fname']."</td>";
    echo "<td>".$query['lname']."</td>";

    echo "<td><a href='edit1.php?id=".$query['id']."'>Edit</a></td>";
    echo "<td><a href='delete1.php?id=".$query['id']."'>delete</a></td><tr>";
 }



 
?>
</ol>
</table>
</body>
</html>