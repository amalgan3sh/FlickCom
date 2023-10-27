<?php
include('connectivity.php');
if(isset($_POST['submit']))
{
	$a=$_POST['fname'];
	$b=$_POST['lname'];
	$c=$_POST['email'];
	$d=$_POST['password'];
	$e=$_POST['desig'];
	
	
	$query1=mysqli_query($query ,"INSERT INTO `tbl_addmembers`(`Fname`, `Lname`,`Email`, `Designation`, `password`) VALUES ('$a','$b','$c','$d','$e')");
	
	if($query1)
	{
		header('location:addmember.php');
	}
}



if(isset($_POST['submit']))
{
	$x=$_POST['password'];
	$y=$_POST['email'];
	$z=$_POST['type'];

	
	
	$query2=mysqli_query($query ,"INSERT INTO `tbl_login`(`password`,`reg_email`,`role_id`) VALUES ('$x','$y','$z')");
	if($query2)
	{
		header('location:addmember.php');
	}
}




?>