<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TheBromance</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<div class="wrapper">
				<ul>
					<li><a href="index.php">Bros4bros</a></li>
				</ul>
				<div class="login-navig">
					
						<a href="index.php" class="current">Home</a>
						<a href="">Relate</a>
						<a href="#">Donate</a>
						<a href="#">AboutUs</a>
						
						<?php
							if (isset($_SESSION['u_id'])) {
								echo '<form action="extras/exit.ex.php" method="POST">
									<button type="submit" name="submit">Exit</button>
								</form>';
							
							}
							else {
								echo '<form action="extras/signin.ex.php" method="POST"><input type="text" name="uid" placeholder="Username/email">
								<input type="password" name="pwd" placeholder="password">
								<button type="submit" name="submit">SignIn</button></form>
								<a href="signup.php">Signup</a>';
							}
							?>
								
						
				</div>
			</div>
		</nav>
	</header>

