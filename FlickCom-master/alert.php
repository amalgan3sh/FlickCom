<?php
session_start();
include('connectivity.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlickCom:Sign In</title>

    <!-- Font Icon -->
    
    <!--Only for demo purpose - no need to add.-->
    
  
    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

  <br>
<br>
<br>   
<br>
<br>

<?php
if (isset($_POST['email']) && isset($_POST['pswd1']))
  {
  $myuser=$_POST['email'];
  $mypass=$_POST['pswd1'];



 // $_SESSION['email']=$_POST['email'];
 //$_SESSION['pswd1']=$_POST['pswd1'];

  $sql="SELECT * FROM `tbl_login` where reg_email='$myuser' and password='$mypass'";
  $result=mysqli_query($query,$sql);

if(mysqli_num_rows($result) === 1)
{
  while($row=mysqli_fetch_array($result)){


if ($row['reg_email'] == $myuser && $row['password'] == $mypass)
{
  if($row['role_id']== 0){
    session_start();

    $_SESSION['id']=$row['l_id'];


header("location:./admin/index.php");

  
}
else if($row['role_id']== 3)
{
  session_start();

    $_SESSION['id']=$row['l_id'];
  header("location:./staffs/index.php");
}
else if($row['role_id']== 2)
{
session_start();

    $_SESSION['id']=$row['l_id'];

header("location:./Freshers/index.php");
}
else
{
  header("location:login.php");
}
    }
else{
    header("location:login.php");
exit();
}


}
}



  
  
  
}

  ?>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</body></html>