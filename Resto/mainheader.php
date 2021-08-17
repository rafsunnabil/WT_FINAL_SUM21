
<html>
<head>
<title>Page</title>
<link rel="stylesheet" href="css/resto.css">

</head>
<body>

<fieldset>
<div align="right" class="header-index ">
<!-- Navbar -->
<b><a class="btn-mine " href="C.Dashboard.php">HOME</a></b>

<b><a class="btn-mine" href="Menu.php">MENU</a></b>

<b><a class="btn-mine" href="Book_table.php">Book table</a></b>

<b><a class="btn-mine" href="About.php">ABOUT US</a></b>

<b><a class="btn-mine"<?php echo '<a href="c.profile.php?id='."id".'">Profile</a>';?></a></b>

<b><a class="btn-mine" href="Contact.php">CONTACT</a></b>

<b><a class="btn-mine" href="CustomerLogin.php">LOG OUT</a></b>
</div>




<!--if(session_destroy())
			{
				header("Location: CustomerLogin.php");
			}-->