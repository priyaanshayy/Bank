<?php

session_start();

include('config.php');
$email =$_POST['Email'];
$pass =$_POST['Password'];

$mdpass=md5($pass);

$sql="SELECT * from registration WHERE Email = '$email' AND Password = '$mdpass'";
$result=mysqli_query($conn,$sql);
$present=mysqli_num_rows($result);

if($present>0)
{
    $query="SELECT ID From registration Where Email = '$email' AND Password = '$mdpass'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    $_SESSION['ID']=$row['ID'];
    header("Location:dashboard.php");
}
else{
    echo "incorrect";
}

?>