<?php
 include('connectivity.php');
?>
<?php
$id = $_GET['audition_id'];
$del = mysqli_query($query,"delete from tbl_audition where audition_id = '$id'");
if($del)
{
	mysqli_close($query);
	header("location:Audition-record.php");
	echo "alert";
	exit;
}
else
{
	header("location:Audition-record.php");
}
?>