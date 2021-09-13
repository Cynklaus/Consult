<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulatancy Firm- Change password</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <script src="css/jquery-3.4.1.min.js"></script>
        <script src="css/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <form class="register" action="login.php" method="post">
                <p>
                    We sent an email to <b><?php echo $_GET['email'] ?></b> to help you recover your account.
                </p>
                <p>Please login into your email account and click on the link we sent to reset your password</p>
            </form>
        </div>

    </body>
</html>