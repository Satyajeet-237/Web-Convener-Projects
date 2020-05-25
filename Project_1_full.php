<? php
define ('ROOT_URL' ,'http://localhost/phpsandbox/') 
$conn = mysql_connect('localhost','root','',myfirst);
if(mysql_connect_errno()) {
    echo "Failed connection".mysql_connect_errno() ;
}
if(isset($_POST['submit']))
{
   $name= ($conn,$_POST["name"]);
$Roll_no= ($conn,$_POST["roll"]); 
}
$query = "INSERT INTO 'mydata'( 'Name', 'Roll_no') VALUES ('$name','$Roll_no')" ;
if(mysqli_query($conn,$query)){
    header('Location :'.ROOT_URL.'') ;
}else {
    echo "Error".mysqli_error($conn) ;
}
/* To display content (but i am getting no respnse from server)
basically */
$query ="SELECT * FROM display_table" ;
$result=mysqli_query($query) ;
//And display here in tabular form but not doing because of no response from server.
?>

<!DOCTYPE html>
<html>
<head>
<title>Project-1_Complete</title>
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
<table>
    <tr>
        <td>Name</td><td></td><td></td>
        <td>Roll Number</td>
    </tr>
  <!--  <? php var_dump($result) ; ?>  NO RESPONSE HERE TOO-->
</table>
</body>
</html>