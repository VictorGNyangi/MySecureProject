<!DOCTYPE html>
<html>
<head>
	<title>Relation</title>
	<style type="text/css">
		#MeInput {
			background-image: url();
			background-position: 5px 10px;
			background-size: 40px;
			background-repeat: no-repeat;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
			padding: 12px 20px 12px 40px;
			border: 1px solid #ddd;
			margin-bottom: 12px;
			}

		#myTable {
			border-collapse: collapse;
			width: 100%;
			border: 1px solid #ddd;
			font-size: 18px;
		}

		#myTable th, #myTable td {
			text-align: left;
			padding: 12px;
		}

		#myTable tr {
			border-bottom: 1px solid #ddd;
		}

		#myTable tr.header, #myTable tr:hover {
			background-color: #f1f1f1;
		}

		body {
			margin: 0;
			min-width: 250px;
		}

		ul {
			margin: 0;
			padding: 0;
		}

		ul li {
			cursor: pointer;
			position: relative;
			padding: 12px 8px 12px 40px;
			background: #eee;
			font-size: 18px;
			transition: 0.2s;

			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		ul li:nth-child(odd) {
			background: #f9f9f9;
		}

		ul li:hover {
			background: #ddd;
		}

		ul li.checked::before {
			content: '';
			position: absolute;
			border-color: #fff;
			border-style: solid;
			border-width: 0 2px 2px 0;
			top: 10px;
			left: 16px;
			transform: rotate(45deg);
			height: 15px;
			width: 7px;
		}

		.close {
			position: absolute;
			right: 0;
			top: 0;
			padding: 12px 16px 12px 16px;
		}

		.close:hover {
			background-color: #f44336;
			color: white;
		}

		.header {
			background-color: #00b867;
			padding: 30px 40px;
			color: white;
			text-align: center;
		}

		.header:after {
			content: "";
			display: table;
			clear: both;
		}

		input {
			border: none;
			width: 75%;
			padding: 10px;
			float: left;
			font-size: 16px;
			box-sizing: border-box;
		}

		.addBtn {
			padding: 10px;
			box-sizing: border-box;
			width: 25%;
			background: #d9d9d9;
			color: #555;
			float: left;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
			transition: 0.3s;
		}

		.addBtn:hover {
			background-color: #bbb;
		}

		button.sccordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}

		button.accordion.active,button.accordion:hover {
			background-color: #ddd;
		}

		button.accordion:after {
			content: '\02795';/*Unicode character for "minus" sign*/
		}

		div.panel {
			padding: 0 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: 0.6s ease-in-out;
			opacity: 0;
		}

		div.panel.show {
			opacity: 1;
			max-height: 500px;
		}
	</style>
</head>
<body>
<!--Where one can connect with another person, get to know the person's details and maybe how they can connect-->
<!--Filter table with region,region bro/s, -->
<!--A to do List for a person...depending on region or fun activities to be done,accordion showing possible activities(might depend on region)-->

<h2>Counties and regional coordiantors</h2>
<input type="text" name="" id="MeInput" onkeyup="myFunction()" placeholder="Search by county..." title="Type in a county">
<table id="myTable">
	<tr class="header">
		<th style="width: 60%;">County</th>
		<th style="width: 40%;">Town</th>
	</tr>

	<tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr>
</table>

<script>
	function myFunction() {
		var input, filter, table, tr, td, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");

		for(i=0;i<tr.length;i++) {
			td=tr[i].getElementsByTagName("td")[0];

			if(td) {
				if (td.innerHTML.toUpperCase().indexOf(filter)>-1) {
					tr[i].style.display = "";
				}
				else {
					tr[i].style.display = "none";
				}
			}

		}
	}
</script>
<div id="myDiv" class="header">
	<h2 style="margin:5px">To Do List</h2>
	<input type="text" name="" id="myInput" placeholder="Activity...">
	<span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">
	<li>Hit the Gym</li>
	<li class="checked">Pay Bills</li>
	<li>Clean the Car</li>
	<li>Buy Groceries</li>
	<li>Read a book</li>
	<li>Organize Home</li>
</ul>

<script>
	var myNodelist = document.getElementsByTagName("li");
	var i;
	for (i=0; i< myNodelist.length; i++) {
		var span = document.createElement("span");
		var txt = document.createTextNode("\u00D7");
		span.className = "close";
		span.appendChild(txt);
		myNodelist[i].appendChild(span);
	}
	var close = document.getElementsByClassName("close");
	var i;

	for(i=0;i<close.length;i++){
		close[i].onclick = function() {
			var div = this.parentElement;
			div.style.display = "none";
		}
	}

	var list = document.querySelector('ul');
	list.addEventListener('click',function(ev)
	{
		if (ev.target.tagName === 'li') {
			ev.target.classList.toggle('checked');
		}
	},false);

	function newElement() {
		var li = document.createElement("li");
		var inputValue = document.getElementById("myInput").value;
		var t = document.createTextNode(inputValue);
		li.appendChild(t);
		if (inputValue === '') {
			alert("You must write something!");
		}
		else {
			document.getElementById("myUL").appendChild(li);
		}
		document.getElementById("myInput").value = "";
		var span = document.createElement("span");
		var txt = document.createTextNode("\u00D7");

		span.className = "close";
		span.appendChild(txt);
		li.appendChild(span);

		for(i=0;;i<close.length;i++) {
			close[i].onclick = function() {
				var div = this.parentElement;
				div.style.display = "none";
			}
		}
	}

</script>
<h2>Activities</h2>
<p>We have various fun activities to do. These are to help us engage as bros and know each other. Growing
in skills, abilities and talents. Also determining our weaknessess and doing something about them.</p>

<button class="accordion">Football</button>
<div class="panel">
	<p></p>
</div>

<button class="accordion">Skating</button>
<div class="panel">
	<p></p>
</div>

<button class="accordion">Rugby</button>
<div class="panel">
	<p></p>
</div>

<button class="accordion">Tennis</button>
<div class="panel">
	<p></p>
</div>

<button class="accordion">Cricket</button>
<div class="panel">
	<p></p>
</div>

<script>
	var acc=document.getElementsByClassName("accordion");
	var i;

	for(i=0;i<acc.length;i++) {
		acc[i].onclick = function() {
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("show");
		}
	}
</script>
</body>
</html>