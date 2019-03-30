<?php
session_start();
include_once('temp/base/db.php');
error_reporting(1);

$username = '';
$password = '';

if(isset($_POST['submit']))
	{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$remember = $_POST['remember'];
	
	// CHECK USER IN DATABASE
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
		
	$query = "SELECT * FROM users";
	$result = mysqli_query($con, $query);

		// SET COOCKIES
		if(isset($_POST['remember']))
		{
			setcookie("username", $username, time() + (86400 * 30), "/");
			setcookie("password", $password, time() + (86400 * 30), "/");
		}
			
		while($row = mysqli_fetch_assoc($result)){
			if($row['name'] == $username && $row['password']==$password)
			{
				$_SESSION['username'] = $row['name'];
				$_SESSION['user_id'] = $row['id'];

				
				// WHERE TO REDIRECT
				
				$link = "temp/index.php?menu=pa";
				header("Location: $link");
				die();
			}
			else
			{
			$alert = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Username atau Pssword Salah </div>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=0">
		<link rel="icon" href="temp/assets/img/icon.png" type="image/x-icon" />
		<title>Admin login</title>
		<!-- Bootstrap core CSS -->
		<link href="temp/assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="temp/assets/css/signin.css" rel="stylesheet">
		<script type="text/javascript" src="temp/assets/js/jquery.js"></script>
		<script type="text/javascript" src="temp/assets/js/bootstrap.js"></script>
	</head>

	<body style="background: url(temp/assets/img/background2.jpg);background-position: center; background-repeat: no-repeat;background-size: cover;">
		<div class="container" style="margin-top: 50px;">
			<form class="form-signin" action="" method="post" style="height: 400px">
			<div style="margin-left:50px;"><img src="temp/assets/img/logo.png" style="width: 200px"></div>
				<h3  align="center"><span style="font-size: 17px; color: #000">PDAM Tirta Kamuning Cab.Pasapen</span></h3>
				<div class="form-group">
					<label class="sr-only" for="exampleInputAmount"></label>
					<div class="input-group">
					  <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
					  <input <?php if(isset($_COOKIE['username'])) echo "value='".$_COOKIE['username']."'"; ?> type="text" name="username" class="form-control input-sm" id="exampleInputAmount" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
					  <div class="input-group-addon"><span class="glyphicon glyphicon glyphicon-lock" aria-hidden="true"></span></div>
					  <input <?php if(isset($_COOKIE['password'])) echo "value='".$_COOKIE['password']."'"; ?> type="password" name="password" class="form-control input-sm" id="exampleInputAmount" placeholder="Password">
					</div>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name='remember'>Remember me &nbsp; &nbsp; 
					<a href="help.php">
     				   <span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp; Help</a>
					</label>


				</div>
				
				<button class="btn btn-sm btn-primary btn-block" type="submit" name="submit">Login</button>

				<br/>
				<?php
					if(!$con){
						echo '<div class="alert alert-info" role="alert">DB Connection failed! Use <b>admin/admin</b> to enter DB configuration mode!</div>';
					}
					echo $alert;
				?>
			</form>
		</div> <!-- /container -->
  </body>
</html>
