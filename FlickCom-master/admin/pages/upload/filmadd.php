<?php
include('connectivity.php');
if(isset($_POST['submit']))
{


	$image = $_POST['img'];
    $imagename = $_FILES['img']['name'];
    $imagetype = $_FILES['img']['type'];
    $imagetemp = $_FILES['img']['tmp_name'];
    $imagePath = "../../../fileupload/films/";

    if(is_uploaded_file($imagetemp)) {
        move_uploaded_file($imagetemp, $imagePath . $imagename);
        }
	
	$b=$_POST['name'];
	$c=$_POST['date'];
	$d=$_POST['type'];	
	$f=$_POST['category'];

	$query3=mysqli_query($query,"INSERT INTO `tbl_films`(`pic`,`film_name`,`release_date`,`film_type`,`release_id`) VALUES ('$imagename','$b','$c','$d','$f')");
	
	if($query3)
	{
		header('location:film_record.php');
	}
}
?>