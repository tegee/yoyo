<?php ?>

<html>
	<head>
		<link type="text/css" rel="Stylesheet" href="admin.css">
		<title> Admin Page </title>
	</head>
	<body>
	<div class="Outline">
		<div class="header">
			<img src="logo.png" class="logo">
			<h3 style="left:70px;display:inline;color:white;">YOYO</h3>
			<h2 class="Name">Dashboard</h2>
		</div>

	<ul>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Add</a>
			<div class="dropdown-content">
				<a href="Add Item.php">Item</a>
				<a href="./Add Sup.php">Supplier</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Edit</a>
			<div class="dropdown-content">
				<a href="#">Items</a>
				<a href="#">Suppliers</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Manage Users</a>
			<div class="dropdown-content">
				<a href="#">User</a>
				<a href="#">Permission</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Reports</a>
			<div class="dropdown-content">
				<a href="#">About Users</a>
				<a href="#">About Items</a>
			</div>
		</li>		
	</ul>

<p><strong>Note:</strong> add something</p>
</div>
</body>
</html>
