<?php include('../functions.php') ?>
<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($db, $sql);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ITCF - view users</title>
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
                <th>FIRST NAME</th>
                <th>SECOND NAME</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>PHONE NO:</th> 
                <th>USER_TYPE</th>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['fname']; ?></td>
            <td><?php echo $user['sname']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['mobile']; ?></td>
            <td><?php echo $user['user_type']; ?></td>
            </tr>
            <?php endforeach;?>
            </tbody>
            <tbody>
        </table>
    </body>
</html>