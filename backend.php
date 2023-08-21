<?php
session_start();

include ('config.php');

if(!isset($conn))
{

    echo"No connection";
}

$name=$_POST['Name'];
$email=$_POST['Email'];
$password=$_POST['Password'];

$pass=md5($password);
$sql="SELECT * from registration WHERE  Email = '$email'";
$result=mysqli_query($conn , $sql);
$present=mysqli_num_rows($result);
if($present>0)
{
    $_SESSION['email alert']='1';
    header("location:index.php");


}
else{
$query="INSERT INTO registration(name,email,password) VALUES('$name','$email','$pass')";
$result=mysqli_query($conn,$query);
header("location:login.php");

}


?>