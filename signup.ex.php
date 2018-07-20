<?php

if(isset($_POST['submit'])) {

	require_once 'dbh.ex.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$residence = mysqli_real_escape_string($conn, $_POST['residence']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	if(empty($first) || empty($last) || empty($id) || empty($dob) || empty($uid)) || empty($pwd) || empty($residence) || empty($email)) {
	header("Location: ../signup.php?signup=empty");
	exit();

	}
	else {
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[0-9]*$/", $id) || !preg_match("/^[a-zA-Z0-9]*$/", $residence)) {
			header("Location: ../signup.php?signup=invalid");
			exit();

		}
		else {
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?php?signup=email");
				exit();
			
			}
			else {
				//table called bros
				$sql = "SELECT * FROM bros WHERE bro_uid='$uid'";
				$result = @mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				
				}
				else {
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//attributes bro_frst,bro_last,bro_email,bro_uid,bro_pwd,bro_id,bro_email,bro_dob
					$sql = "INSERT INTO bros(bro_first, bro_last, bro_id, bro_dob, bro_uid, bro_pwd, bro_residence, bro_email) VALUES(?,?,?,?,?,?,?,?)";
					$stmt = mysqli_query($conn, $sql);
					mysqli_stmt_bind_param($stmt, "ssssssss", $first, $last, $id, $dob, $uid, $hashedPwd, $residence, $email);
					mysqli_stmt_execute($stmt);
					$affected_rows = mysqli_stmt_affected_rows($stmt);

					if($affected_rows == 1) {
						header("Location: ../signup.php?signup=success");//you'd have to login to get into the portal
						mysqli_stmt_close($stmt);
						mysqli_close($conn);
						exit();
					
					}
					else {
						echo 'Error occurred<br>';
						mysqli_stmt_close($stmt);
						mysql_close($conn);
						exit();
					}

				}
			}
		}
	}

	}
	else {
		header("Location: ../signup.php");
		exit();
	}