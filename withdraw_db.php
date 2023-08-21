<?php
session_start();
include('config.php');
$money=$_POST['money'];
$ID=$_SESSION['ID'];
$sql="SELECT Amount from deposit Where ID='$ID'";

$result=mysqli_query($conn,$sql);
$present=mysqli_num_rows($result);
if($present>0)
{
    $row=mysqli_fetch_array($result);
    $Amount=$row['Amount'];
    if($Amount>$money){
        $sum=$Amount-$money;
        $querys="UPDATE deposit Set Amount='$sum' Where ID='$ID' ";
    $result=mysqli_query($conn,$querys);
    
    header("Location:dashboard.php");
}
else{
    
$_SESSION['alert']='No Money';
header("Location:withdraw.php");

}
}
?>