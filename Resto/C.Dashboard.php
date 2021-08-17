<?php require_once 'mainheader.php';
require_once 'Controllers/Customercontroller.php';
	if(!isset($_SESSION["uname"])){
	    header("Location: CustomerLogin.php");	
	}
   
?>
<style>
   body{
	   background-image: url('Storage/images/Home.jpg');
	   background-repeat: no-repeat;
	   background-attachment: fixed;
	   background-position:center;
	   background-size: 1600px;
	   
   }
</style>
<br></br>
<h1 align="center" class="text" class="text" style="color: white">Hi! <?php echo $_SESSION["uname"];?></h1>
<h1 align="center" class="text" class="text" style="color: white">Welcome To The Table Restaurant</h1>