<?php
 include('connectivity.php');
?>
<?php
$id = $_GET['vaccancy_id'];
$del = mysqli_query($query,"delete from tbl_vaccancy where vaccancy_id = '$id'");
if($del)
{
	mysqli_close($query);
	header("location:vaccancy-record.php");
	echo "alert";
	exit;
}
else
{
	header("location:vaccancy-record.php");
}
?>