<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulatancy Firm- Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <script src="css/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap.min.js"></script>

</head>
<body>
        <div class="bgnav">
            <nav class="navbar navbar-expand-md navbar-light fixed-top">
                <a href="index.php"><img src="images//itcf1.png" height="45" alt="ITCF"></a>
                <small class="text-white"> Achieve Success with Technlogy</small>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link active text-primary">Home</a>
                        <a href="info.php" class="nav-item nav-link text-white">Info</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown">consultations</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Inbox<span class="badge badge-light">0</span></a>
                                <a href="sent.php" class="dropdown-item">Sent</a>
                                <a href="consult.php" class="dropdown-item">Compose</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown">Settings</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="enter_email.php" class="dropdown-item">Change Password</a>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-nav">
                        <a href="index.php?logout='1'" class="nav-item nav-link text-white">Logout</a>
                    </div>
                </div>            
            </nav>
        </div>
        <div class="hero-image">
            <div class="hero-text text-center muted" style="padding-top: 150px; color:#fff">
                <img src="images/logo2.jpg">
                <h2></h2>
        </div>
    </div>
    <!--Footer section-->
    <footer style="margin-top: 30px;">
        <div class="row">
            <div class="col-md text-md-center">
                <p>ITCF © 2020</p>
            </div>
            <!--<div class=" col-md-6 text-md-right">
                        <a href="#" class="text-dark"> Terms</a>
                        <span class="text-muted mx-2">|</span>
                        <a href="#" class="text-dark"> conditions</a>
                    </div>-->
        </div>
    </footer>
</body>
</html>