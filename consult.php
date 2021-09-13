<?php include('functions.php'); ?>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "consults");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get service
    $service = mysqli_real_escape_string($db, $_POST['service']);
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$issue = mysqli_real_escape_string($db, $_POST['issue']);

  	// image file directory
  	$target = "uploads/".basename($image);

  	$sql = "INSERT INTO consultations (service, image, issue) VALUES ('$service','$image', '$issue')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		echo '<script type="text/javascript">
            alert("Message sent Successfully!");
            window.location.href = "consult.php";
          </script>';
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM consultations");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulatancy Firm- Consult</title>
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
                                <a href="#" class="dropdown-item">Inbox</a>
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
    <div class="container " id="consult">
        <form action="consult.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Consultation</legend>
                <div class="form-group">
                    <label class="mr-3">
                        <input type="radio" class="mr-1" name="service" value="network ">Networking
                    </label>
                    <label class="mr-3">
                        <input type="radio" class="mr-1" name="service" value="webdesign">Design
                    </label>
                    <label class="mr-3">
                        <input type="radio" class="mr-1" name="service" value="network ">Security Assessments
                    </label>
                    <label class="mr-3">
                        <input type="radio" class="mr-1" name="service" value="Webdesign">Managed IT Services
                    </label>
                </div>
                <div class="form-group">
                    <label class="mr-3">
                        <input type="radio" class="mr-1" name="service" value="webdesign">Software Development
                    </label>
                    <label class="mr-3">
                        <input type="radio" class="mr-1" name="service" value="webdesign">Infrastructure Support
                    </label>
                    <label class="mr-3">
                        <input type="radio" class="mr-1" name="service" value="webdesign">IT Consultancy
                    </label>
                    <label class="mr-3">
                        <input type="radio" class="mr-1" name="service" value="other">Other
                    </label>
                </div>
            </fieldset>
            <h4>Upload File</h4>
            <input type="file" name="image"> <br>
            <h4> Describe the problem</h4>
            <textarea rows="4" cols="30" name="issue" id="text"></textarea> <br>
            <br>
            <button type="submit" class="btn btn-primary" name="upload">Submit</button>
        </form>
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