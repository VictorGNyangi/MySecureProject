<?php require_once 'main.php';?>

<div class="container1">
	<div class="wrapper">
		<h2>Sign up and get you own account</h2>
		<form class="signup-form" action="extras/signup.ex.php" method="POST">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="text" name="id" placeholder="Id Number>
			<input type="text" name="dob" placeholder="Date of Birth  00/00/0000">
			<!--Use javascript to calculate one's age-->
			<input type="text" name="uid" placeholder="User name">
			<input type="text" name="phonenum" placeholder="Phone Number">
			<input type="password" name="pwd" placeholder="Account Password">
			<input type="text" name="residence" placeholder="Residence">
			<input type="text" name="email" placeholder="E-mail">
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>
</body>
</html>