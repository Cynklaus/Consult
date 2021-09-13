<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>InfoTech Consultancy Admin</title>
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
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>InfoTech - Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="home.php?logout='1'" style="color: red;">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Admin Panel</h1>
		<div class="stats">
			<a href="create_user.php" class="first">
				<span></span> <br>
				<span>Add user</span>
			</a>
			<a href="view_user.php">
				<span></span> <br>
				<span> System Users</span>
			</a>
			<a href="consultations.php">
				<span></span> <br>
				<span> Consultations</span>
			</a>
			<!--<a class="first">
				<span>43</span> <br>
				<span>Published comments</span>
			</a>
			<a href="view_user.php">
				<span></span> <br>
				<span> System Users</span>
			</a>
			<a href="view_user.php">
				<span></span> <br>
				<span> System Users</span>
			</a>
			<a href="view_user.php" class="first">
				<span></span> <br>
				<span> System Users</span>
			</a>
			<a href="view_user.php">
				<span></span> <br>
				<span> System Users</span>
			</a>
			<a href="view_user.php">
				<span></span> <br>
				<span> System Users</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
		</div>-->
	</div>
</body>
</html>