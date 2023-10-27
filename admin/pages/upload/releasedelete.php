<?php
 include('connectivity.php');
?>
<?php
$id = $_GET['release_id'];
$del = mysqli_query($query,"DELETE from `release` where `release_id` = '$id'");
if($del)
{
	mysqli_close($query);
	header("location:add-releasetype.php");
	echo "alert";
	exit;
}
else
{
	header("location:add-releasetype.php");
}
?>