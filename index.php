<?php 

session_start();
$message='';
if(isset($_SESSION['email alert'])) 
{
    $message='email already exists!';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="panel">

        <div class="side"></div>
              <div class="main">
                  <center>  <h1>Registration Form</h1></center>
                  <center>  <h10> <?php echo $message; ?> </h10></center>
                         <form class="form" action="backend.php" method="post">
                              <label>Name</label><br>
                                   <input type="text" name="Name" required><br>
                                   <label>Email</label><br>
                                   <input type="email" name="Email" required><br>
                                   <label>Password</label><br>
                                   <input type="password" name="Password" required><br>

                                   <input type="submit" name="submit" class="mybutton" value="Register">
                                   <br>

                                   
                        </form>
               </div>
    </div><?php unset($_SESSION['email alert']); ?>
</body>
</html>