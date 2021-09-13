<?php include('../functions.php') ?>
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

    $consultation = mysqli_fetch_assoc($result);
    $consultationpath = 'uploads/' . $consultation['name'];

    if (file_exists($consultationpath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($consultationpath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $consultation['name']));
        readfile('uploads/' . $consultation['name']);

        // Now update downloads count
        $newCount = $consultation['download'] + 1;
        $updateQuery = "UPDATE consultations SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ITCF - Consultations</title>
	<link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>InfoTech - Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<a href="home.php" style="color: red;">Back</a>
			</div>
		<?php endif ?>
</div>
<body>
<table>
<thead>
<th>ID</th>
<th>Service</th>
<th>Filename</th>
<th>issue</th>
<th>Date</th>
<th>Seen</th>
<th>Action</th>
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
<td><a href="../sent.php?consultation_id=<?php echo $consultation['id'] ?>">Download</a></td>
</tr>
<?php endforeach;?>
</tbody>
</table>

</body>
</html>