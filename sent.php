<?php include('functions.php'); ?>
<?php
$sql = "SELECT * FROM consultations";
$result = mysqli_query($db, $sql);

$consultations = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Downloads files
if (isset($_GET['consultation_id'])) {
    $id = $_GET['consultation_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM consultations WHERE id=$con_id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $consultation['seen'] + 1;
        $updateQuery = "UPDATE consultations SET seen=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulatancy Firm- Sent Messages</title>
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
        <div class="container">
                 <h4>Sent Messages</h4>
            <div class="table-responsive mt-3 ">
                <table class="table  table-borderless table-hover table-stripped">
                    <thead>
                        <th>ID</th>
                        <th>Service</th>
                        <th>Filename</th>
                        <th>issue</th>
                        <th>Date</th>
                        <th>Seen</th>
                        <!--<th>Action</th>-->
                    </thead>
                    <tbody>
                        <?php foreach ($consultations as $consultation): ?>
                            <tr>
                            <td><?php echo $consultation['con_id']; ?></td>
                            <td><?php echo $consultation['service']; ?></td>
                            <td><?php echo $consultation['image']; ?></td>
                            <td><?php echo $consultation['issue']; ?></td>
                            <td><?php echo $consultation['date_sent']; ?></td>
                            <td><?php echo $consultation['downloads']; ?></td>
                            <!--<td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>-->
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>