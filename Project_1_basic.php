<!DOCTYPE html>
<html>
<head>
<title>Project-1</title>
</head>

<body>

<table>
<form action="" method="post">
<tr>
<td> Name: </td><td><input type="text" name="name"></td>
</tr>
<tr>
<td> Roll_no: </td><td><input type="text" name="roll"></td>
<!-- Kept roll numbers as strings as they can have 19D200127 as we have -->
</tr>
<tr>
<td><input name="submit" type="submit" /></td></tr>

</form>
</table>

<?php
 if (isset($_POST['submit'])) {
 $NAME = $_POST["name"];
 $roll = $_POST["roll"];
 
 echo "Name is = ". $NAME .'</br>';
 echo "roll is = ". $roll .'</br>';
 
 }
 ?>

</body>
</html>