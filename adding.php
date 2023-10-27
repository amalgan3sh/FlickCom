<?php
include('connectivity.php');
if(isset($_POST['submit']))
{
	$a=$_POST['fname'];
	$b=$_POST['lname'];
	$c=$_POST['email'];
	$d=$_POST['phoneNumber'];
	$e=$_POST['gender'];
	$g=$_POST['pswd1'];
	$z=$_POST['type'];


	$check=mysqli_query($query,"SELECT * from `tbl_registration` where reg_email='$c'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
   	?>
     <script type="text/javascript">
            alert("Email Already Exists!!.");
            window.location = "signup.php";
        </script>
        <?php

}  
else 
   { 
	
	$query1=mysqli_query($query ,"INSERT IGNORE INTO `tbl_registration`(`Fname`, `Lname`,`reg_email`, `Mobile`, `gender`, `password`,`role_id`) VALUES ('$a','$b','$c','$d','$e','$g','$z')");
	$result=($query1) or die($query->error);
	 }
	$f = mysqli_insert_id($query);
	if($query1)
	{
		?>

		<script type="text/javascript">
            alert("Registration Success.");
            window.location = "login.php";
        </script>
		
<?php



	}
}
?> 