<?php
 include('connectivity.php');
?>
<?php
$id = $_GET['filmtype_id'];
$del = mysqli_query($query,"DELETE from `tbl_filmtype` where `filmtype_id` = '$id'");
if($del)
{
	mysqli_close($query);
	header("location:add-filmtype.php");
	echo "alert";
	exit;
}
else
{
	header("location:add-filmtype.php");
}
?>