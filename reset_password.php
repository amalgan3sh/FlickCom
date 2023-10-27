<?php
include('connectivity.php');
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
  
	
	$query1=mysqli_query($query ,"UPDATE `tbl_registration` SET `password`='$password' WHERE reg_email = '$email'");
	$result=($query1) or die($query->error);
	 }
	$f = mysqli_insert_id($query);
	if($query1)
	{
		?>

		<script type="text/javascript">
            alert("Password changed Successfuly.");
            window.location = "login.php";
        </script>
<?php
    }

?>