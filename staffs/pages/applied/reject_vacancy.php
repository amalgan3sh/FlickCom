<?php
include('connectivity.php');

$mid=$_GET['reject_id'];
$re=mysqli_query($query, "SELECT * from tbl_apply where apply_id='$mid'");
$res=mysqli_query($query,"UPDATE `tbl_apply` SET `status`='rejected' where apply_id=$mid");
header("location:applied_vacancy.php");

?>