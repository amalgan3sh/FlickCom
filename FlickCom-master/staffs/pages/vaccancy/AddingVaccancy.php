<?php
include('connectivity.php');
if(isset($_POST['submit']))
{
	$a=$_POST['field'];
	$b=$_POST['novaccancy'];
	$c=$_POST['qualification'];
	$d=$_POST['experience'];
	$e=$_POST['deadline'];
	$query3=mysqli_query($query,"INSERT INTO `tbl_vaccancy`(`Vaccancy_feild`, `Total_vaccancy`,`qualification`,`experience`,`deadline`) VALUES ('$a','$b','$c','$d',$e)");
	
	if($query3)
	{
		header('location:vaccancy-record.php');
	}
}
?>