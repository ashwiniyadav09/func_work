<html>
<style> table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; } td, th { border: 1px solid #dddddd; text-align: left; padding: 8px; } tr:nth-child(even) { background-color: #dddddd; } </style>
<body>

<?php
require 'db_connection.php';

$select = mysqli_query($connection,"SELECT * FROM userform");
echo "<table><tr><th>username</th><th>email</th><th>firstname</th><th>lastname</th><th>password</th><th>confirm_password</th><th>city</th><th>state</th><th>united state</th><th>gender</th>
<th>birthday</th><th>music_info</th><th>address</th><tr>";

while($query = mysqli_fetch_array($select))
{ 
echo "<tr><td>".$query['username']."</td>";
echo "<td>".$query['email']."</td>";
echo "<td>".$query['firstname']."</td>";
echo "<td>".$query['lastname']. "</td>";
echo "<td>".$query['password']. "</td>";
echo "<td>".$query['confirm_password']. "</td>";
echo "<td>".$query['city']. "</td>";
echo "<td>".$query['state']. "</td>";
echo "<td>".$query['united_state']. "</td>";
echo "<td>".$query['gender']. "</td>";
echo "<td>".$query['birthday']. "</td>";
echo "<td>".$query['music_info']. "</td>";
echo "<td>".$query['address']. "</td>";

echo "<td><a href='edit.php?id=".$query['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query['id']."'>delete</a></td><tr>";
}
?>

</ol>
</table>
</body>
</html>