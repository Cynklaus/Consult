
<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulatancy Firm-Register</title>
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
                    <a href="#"><img src="images//itcf1.png" height="45" alt="ITCF"></a>
                </a>
                <small class="text-white"> Achieve Success with Technlogy</small>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    <div class="register">
            <div class="container-fluid"> 
                <div class="header">
                    <h4>Register</h4>
                </div>
                    <form method="post" action="register.php">
                        <?php echo display_error(); ?>
                        
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sname" value="<?php echo $sname; ?>" placeholder="Second Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="passowrd" class="form-control" name="password_1" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password_2" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group row">
                                <button type="submit" class="btn btn-primary" name="register_btn">Register</button>
                        </div>
                        <p>
                            <a href="login.php">Sign in</a>
                        </p>
                    </form>
            </div>
    </div>
    <footer style="margin-top: 5px;">
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