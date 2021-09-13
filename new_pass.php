<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulatancy Firm-Password-Reset</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <script src="css/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap.min.js"></script>

</head>

<body>
    <div class="bgnav">
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
            <a href="#" class="navbar-brand">
                <a href="index.php"><img src="images//itcf1.png" height="45" alt="ITCF"></a>
            </a>
            <small class="text-white"> Achieve Success with Technlogy</small>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <div class="register">
        <div class="container-fluid">
            <form action="new_password.php" method="post">
                <h4>New password</h4>
            <?php include('messages.php'); ?>

                <div class="form-group row">
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="new_pass" placeholder="New Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-9">
                        <input type="passowrd" class="form-control" name="new_pass_c" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary" name="new_password">Submit</button>
                    <!--<input type="reset" class="btn btn-secondary" value="Reset">-->
                </div>
        </div>
        </form>
    </div>
    </div>
    </div>

    <!--Footer section-->
    <footer style="margin-top: 30px;">
        <div class="row">
            <div class="col-md text-md-center"">
                <p>ITCF © 2020</p>
            </div>
            <!--<div class=" col-md-6 text-md-right">
                <a href="#" class="text-dark"></a>
                <span class="text-muted mx-2"></span>
                <a href="#" class="text-dark"></a>
            </div>-->
        </div>
    </footer>

</body>

</html>