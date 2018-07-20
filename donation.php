<?php require_once 'main.php';?>
<!DOCTYPE html>
<!--Donate-->
<!--Redirect page if one takes long like more than 10 minutes/20 minutes-->
<!--responsive donation table-->
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial scale=1.0" charset="utf-8">
	<style type="text/css">
		* {
			box-sizing: border-box;
		}
		.columns {
			float: left;
			width: 33.3%;
			padding: 8px;
		}

		.price {
			list-style-type: none;
			border: 1px solid solid #eee;
			margin: 0;
			padding: 0;
			-webkit-transition: 0.3s;
			transition: 0.3s;
		}

		/*Add shadows on hover*/
		.price:hover {
			box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
		}

		.price .header {
			background-color: #111;
			color: white;
			font-size: 25px;
		}

		.price li {
			border-bottom: 1px solid #eee;
			padding: 20px;
			text-align: center;
		}

		.price .grey {
			background-color: #eee;
			font-size: 20px;
		}

		.button {
			background-color: #48d1cc;
			border: none;
			color: white;
			padding: 10px 25px;
			text-align: center;
			text-decoration: none;
			font-size: 18px;
		}
		/*To stack horizontally on small screens*/
		@media only screen and (max-width:600px ) 
		{.columns{width: 100%;}}

	</style>
</head>
<body>

<h2>Responsive Pricing Tables</h2>
<div class="columns">
	<ul class="price">
		<li class="header">Basic</li>
		<li class="grey">a ' 600 / year</li>
		<li>12 GB storage</li>
		<li>12 emails</li>
		<li>12 Domains</li>
		<li>12GB Bandwidth</li>
		<li class="grey"><a href="#" class="button">Donate</a></li>
	</ul>
</div>

<div class="columns">
	<ul class="price">
		<li class="header" style="background-color: #48d1cc">Pro</li>
		<li class="grey">a, ' 4000 / year</li>
		<li>80GB Storage</li>
		<li>80 Emails</li>
		<li>40GB Bandwidth</li>
		<li class="grey"><a href="#" class="button">Donate</a></li>
	</ul>
</div>
</body>
</html>



<?php require_once 'footer.php';?>