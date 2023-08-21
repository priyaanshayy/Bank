<?php
session_start();
include('config.php');
$money=$_POST['money'];
$ID=$_SESSION['ID'];
$remail=$_POST['remail'];
$sql="SELECT * from registration Where Email = '$remail'";
$result=mysqli_query($conn,$sql);
$present=mysqli_num_rows($result);
if ($present>0){
    $sql="SELECT Amount from deposit Where ID='$ID'";
$result=mysqli_query($conn,$sql);
$present2=mysqli_num_rows($result);
if($present2>0){
    $row=mysqli_fetch_array($result);
    $Amount=$row['Amount'];
    if ($Amount>$money){
       $query="SELECT ID from registration Where Email='$remail'";
       $result=mysqli_query($conn,$query);
       $row=mysqli_fetch_array($result);
    $RID=$row['ID'];
    $sql="SELECT Amount from deposit Where ID='$ID'";
    $result=mysqli_query($conn,$sql);
       $present3=mysqli_num_rows($result);

       if($present3>0){
        $sum=$Amount-$money;
       $query="UPDATE deposit SET Amount='$sum' Where ID='$ID'";
       $result=mysqli_query($conn,$query);


       $sql="SELECT Amount from deposit Where ID='$RID'";
    $results=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($results);

$mon=$row['Amount'];
$total=$mon+$money;
    $query="UPDATE deposit SET Amount='$total' Where ID='$RID'";
       $result=mysqli_query($conn,$query);
       $_SESSION['done']='1';
       header("Location:transfer.php");
       
       }
       else{
        $sum=$Amount-$money;
        $query="UPDATE deposit SET Amount='$sum' Where ID='$RID'";
       $result=mysqli_query($conn,$query);
       echo $RID;
        $query="INSERT Into deposit(ID, Amount) VALUES('$RID','$money,)";
       $result=mysqli_query($conn,$query);
      $_SESSION['done']='1';
      header("Location:transfer.php");
       }

    }
    else{
       $_SESSION['nomoney']='1';
       header("Location:transfer.php");
    }
}

}
else{
    $_SESSION['alert']='1';
        header("Location:transfer.php");
}

?>