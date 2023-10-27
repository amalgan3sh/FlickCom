<?php
 include('connectivity.php');
?>
<?php
$id = $_GET['film_id'];
$del = mysqli_query($query,"delete from tbl_films where film_id = '$id'");
if($del)
{
	mysqli_close($query);
	header("location:film_record.php");
	echo "alert";
	exit;
}
else
{
	header("location:film_record.php");
}
?>