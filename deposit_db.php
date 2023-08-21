<?php
session_start();
include('config.php');
$money=$_POST['money'];
$ID=$_SESSION['ID'];
$query="SELECT Amount from deposit Where ID='$ID'";
$result=mysqli_query($conn,$query);
$present=mysqli_num_rows($result);
if($present>0)
{
    $row=mysqli_fetch_array($result);
    $deposit=$row['Amount'];
    $total=$deposit+$money;
    $querys="UPDATE deposit Set Amount='$total' Where ID='$ID' ";
    $result=mysqli_query($conn,$querys);
    header("Location:dashboard.php");

}
else{
    


$sql="INSERT INTO Deposit(ID,Amount)VALUES ($ID,$money)";
$result=mysqli_query($conn,$sql);
header("Location:dashboard.php");
}
?>