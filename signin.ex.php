<?php
/*we could redirect user to a page where user can see his information...more of a profile picture with contact chips where he could upload a picture like redirect him to relation.php*/
session_start();

if(isset($_POST['submit'])) {

	require_once 'dbh.ex.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	if(empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	
	}
	else {
		$sql = "SELECT * FROM bros WHERE bro_uid='$uid";
		$result = @mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		
		}
		else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($pwd, $row['bro_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
				
				exit();
			}
			elseif ($hashedPwdCheck == true) {
				$_SESSION['b_id'] = $row['bro_id'];
				$_SESSION['b_first'] = $row['bro_first'];
				$_SESSION['b_last'] = $row['bro_last'];
				$_SESSION['b_dob'] = $row['bro_dob'];
				$_SESSION['b_uid'] = $row['bro_uid'];
				$_SESSION['b_pwd'] = $row['bro_pwd'];
				$_SESSION['b_residence'] = $row['bro_residence'];
				$_SESSION['b_email'] = $row['bro_email'];
				header("Location: ../index.php?login=success");
				}

			}
		}
	}
}
else {
	header("Location: ../index.php?login+error");
	exit();
}
