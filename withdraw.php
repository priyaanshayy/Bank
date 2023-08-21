<?php
session_start();
$message='';
if(isset($_SESSION['alert']))
{
    $message='Not Enough Money In Your Account';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw</title>
    
</head>
<body>
    <?php include('master.php'); ?>

    <h1 class="heading">Withdraw Your Money From Here!</h1>
    

    <h2 class="heading2"> <?php echo $message; ?></h2>


    <section>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 sm:px-10">
                <form class="space-y-6" action="withdraw_db.php" method="POST">
                    <div>
                        <form action="deposit_db.php" method="POST">
                        <label for="email" class="block text-xl text-center font-bold text-gray-700">Enter your amount!</label>
                        <div class="mt-1">
                            <input type="double" name="money" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-200 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" fdprocessedid="qudyyg">
                        </div>
                    </div>

                   

                    
                    <div>
                    <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" fdprocessedid="u6ngb">Withdraw</button></form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div> 
<?php unset($_SESSION['alert']); ?>
</body>
</html>