<?php require_once 'main.php';?>
<!--About us-->
<!--Contact chips-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.chip {
			display: inline-block;
			padding: 0 25px;
			height: 50px;
			font-size: 18px;
			line-height: 50px;
			border-radius: 25px;
			background-color: #f1f1f1;
		}

		.chip img {
			float: left;
			margin: 0 10px 0 -25px;
			height: 50px;
			width: 50px;
			border-radius: 50%;
		}

		.closebtn {
			padding-left: 10px;
			color: #888;
			font-weight: bold;
			float: right;
			font-size: 20px;
			cursor: pointer;
		}

		.closebtn {
			color: #000;
		}
	</style>
</head>
<body>
<h2>Who W e Are</h2>
<p>Click in the "x" symbol to delete the contact.</p>
<div class="chip">
	<img src="pics/avatar4.png" alt="Person" width="96" height="96">Alex
	<span class="closebtn" onclick="this.parentElement.style.display='none'"> &times; </span>
</div>
</body>
</html>
<?php require_once 'footer.php';?>