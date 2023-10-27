<?php
 include('connectivity.php');
?>
<?php
$id = $_GET['addmemb_id'];
$del = mysqli_query($query,"delete from tbl_addmembers where addmemb_id = '$id'");
if($del)
{
	mysqli_close($query);
	header("location:member_record.php");
	echo "alert";
	exit;
}
else
{
	header("location:member_record.php");
}
?>