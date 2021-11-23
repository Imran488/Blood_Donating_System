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

$sql="INSERT INTO login(email,password) VALUES('$_POST[email]','$_POST[password]')";
if(mysqli_query($conn, $sql))
{
	echo" ";
	header("refresh:2;url=index.php");
}
else
{
	echo"error";
}
?>