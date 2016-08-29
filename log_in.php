<!doctype html>
<?php
	require_once("data_info.php");
	Data::getInstance();
?>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Karim News Login/register
	</title>
	<link rel="stylesheet" href="CSS/main.css">
</head>
<body>
	<header>
		<img src="logo.png" style="width:400px; height:100px;">
	</header>
	<div class="body2">
		<ul>
			<li><a href="Main.php">Home</a></li>
			<li><a href="Offer.php">Latest Offer</a></li>
			<li><a href="Find_us.php">Find us</a></li>
			<li style="float:right; border-right:1px solid rgb(255, 51, 51); border-left:1px solid #fff;"><a href="log_in.php">Log in/Sign up</a></li>
		</ul>
		<div id="block1">
			<h3>REGISTRATION</h3>
			<form action="registered.php">
				Username:<input type="varchar" name="username"><br><br>
				Password: <input type="varchar" name="password"><br><br>
				Re-enter Password: <input type="varchar" name="password2"><br><br>
				Email: <input type="varchar" name="email"><br><br>
				Re-enter email:<input type="varchar" name="LastName"><br><br>
				Address:<input type="varchar" name="address"><br><br>
				Group Type:<select name="carlist" form="carform">
					<option value="1">Admin</option>
					<option value="2">Customer</option>
				</select><br><br>
				<div class="button">
				<input type="submit" value="Register">
				</div>
			</form>
		</div>
		<div id="block2">
			<h3>LOG IN</h3>
			<form action="profile.php">
				Username:<input type="varchar" name="username"><br><br>
				Password: <input type="varchar" name="password"><br><br>
				<div class="button">
				<input type="submit" value="Log in">
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>