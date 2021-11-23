<?php
$servername="localhost";
$username="root";
$password="";
$db_name="donatetheblood";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{
	die("Connection failed");
}
else
{
 echo"Succesful!!!!!";
}

$sql="INSERT INTO donate_form(name,blood_group,gender,date,dateb,email,contact_no,city,password,c_password) VALUES('$_POST[name]','$_POST[blood_group]','$_POST[gender]','$_POST[date]','$_POST[dateb]','$_POST[email]','$_POST[contact_no]','$_POST[city]','$_POST[password]','$_POST[c_password]')";
if(mysqli_query($conn, $sql))
{
	echo"Now Signin Please. ";
	header("refresh:2;url=Login.php");
}
else
{
	echo"error";
}
?>