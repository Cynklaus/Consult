<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>ITCF - Create user</title>
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
<body style="background:">
	<div class="container content">
		<div class="action">
				<h2 class="page-title">Update User</h2>
			<form method="post" action="create_user.php">
				<?php echo display_error(); ?>		
					<input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name">			
					<input type="text" name="sname" value="<?php echo $sname; ?>" placeholder="Second Name">
					<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
					<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
					<input type="text" name="mobile" value="<?php echo $mobile; ?>"placeholder="Mobile">		
					<select name="user_type" id="user_type" placeholder="User Type" >
						<option value=""></option>
						<option value="admin">Admin</option>
						<option value="user">User</option>
					</select>
					<input type="password" name="password_1" placeholder="Password">
					<input type="password" name="password_2" placeholder="Confirm Password">
				<div class="input-group">
					<button type="submit" class="btn" name="register_btn"> + Create user</button>
				</div>
			</form>
		</div>

		<div class="table-div">
			<!-- Display notification message -->
			<?php include('../includes/messages.php') ?>
				<table class="table">
					<thead>
						<th>N</th>
						<th>User</th>
						<th>Role</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
						<tr>
							<td> 1</td>
							<td>
								Nicholas Odhiambo	
							</td>
							<td> administrator</td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="users.php?edit-admin=<?php echo $user['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete" 
								    href="users.php?delete-admin=<?php echo $user['id'] ?>">
								</a>
							</td>
						</tr>
					</tbody>
				</table>
		</div>
		<!-- // Display records from DB -->
	</div>
</body>
</html>
	</div>
</body>
</html>
<!--<style>
	.container {
    width: 95%;
    margin: 5px auto 50px;
    border: 1px solid #BFBCB3;
    padding: 10px 0px 50px;
}
	.action{
		float:left;
	}
	form {
	width: 75%;
	margin: 70px auto;
	background: white;
	padding: 10px;
	border-radius: 3px;
	}
	input {
	display: block;
	box-sizing: border-box;
	width: 100%;
	padding: 10px;
}
</style>

