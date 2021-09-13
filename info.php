<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulatancy Firm-Info</title>
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
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/logo2.jpg">
                </div>
                <div class="col-md-9">
                    <p class=""> 
                        InfoTech Consutaltancy,is a leading firm in Information technology consulting services. We create and develop brands
                        and designs with delightful, intuitive user experiences and interactions which work beautifully across all devices,
                        screen sizes and media. Apart from creation and developement.InfoTech also offers the best advice on your IT
                        infrastructure, business automation and infrastructure support and maintenance services. 
                    </p>
                     <p>
                         InfoTech has offered over 20 years of service and boasts of a huge client base and success that has come through the great quality of the
                        organisations personnel. With InfoTech as your partners, we can help your organisation forward with highly effective
                        IT strategies and implement innovative solutions with our IT consultancy services.
                    </p>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-4">
                        <img src="images/clock-icon.png" alt="">
                        <h4 class="text-primary">Experience</h4>
                        <p>
                            Our team offers partners over 20 years of combined and diversified expertise in development, design and proffesional
                            consultation and support services which led to the development of good customer base.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="images/hp-icon-service-4.png" alt="">
                        <h4 class="text-primary">Qualities of work</h4>
                        <p>
                            All team members are committed to high quality of work and this means that all strive to do their job excellent. Most of
                            the project are long lasting and add value to the organisational growth.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="images/icon3.png" alt="">
                        <h4 class="text-primary">Innovations</h4>
                        <p>
                             Our experts are constantly working on reseraching the latest trends, learning most stable and innovative tools of trade,
                            performing self-evaluations and developing technological skills and experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
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