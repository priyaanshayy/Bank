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
    <title>Login Form</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <div class="panel">

        <div class="side"></div>
              <div class="main">
                  <center>  <h1>Login Form</h1></center>
                  <center>  <h10> <?php echo $message; ?> </h10></center>
                         <form class="form" action="loginnn.php" method="post">
                              
                                   <label>Email</label><br>
                                   <input type="email" name="Email" required><br>
                                   <label>Password</label><br>
                                   <input type="password" name="Password" required><br>

                                   <input type="submit" name="submit" class="mybutton" value="Login">
                                   <br>

                                   
                        </form>
               </div>
    </div><?php unset($_SESSION['email alert']); ?>
</body>
</html>