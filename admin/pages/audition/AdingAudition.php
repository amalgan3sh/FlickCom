<?php
include('connectivity.php');
if(isset($_POST['submit']))
{
	$a=$_POST['feild'];
	$b=$_POST['skills'];
	$c=$_POST['qualification'];
	$d=$_POST['venue'];
	$e=$_POST['date'];
	$query3=mysqli_query($query,"INSERT INTO `tbl_audition`(`category`, `skills`,`qualification`,`venue`,`date`) VALUES ('$a','$b','$c','$d',$e)");
	
	if($query3)
	{
		header('location:Audition-record.php');
	}
}
?>