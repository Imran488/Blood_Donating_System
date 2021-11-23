<?php
$email_phone=$_POST['email_phone'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","donatetheblood");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `signin` WHERE `email_phone`='$email_phone' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Successful and Welcome to the Admin page";
	$_SESSION['log']=1;
	header("refresh:2;url=dashboard.php");

}
else
{
	echo "Incorrect Password or Email";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}


?>