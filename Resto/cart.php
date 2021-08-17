<?php include'mainheader.php';
      include 'Controllers/customercontroller.php';
      include 'Controllers/foodcontroller.php';
	  $id = $_GET["id"];
	  $foods = getFoods($id);
	 /* if(!isset($_COOKIE[cart])) {
		  header("Location: Menu.php");
		  
	  }*/
?>


<div class="center-login">
<center>
<h2>Cart</h2>
<h3 align="center"><?php echo $err_db;?></h3>

<form action="" method="post">
<table>
<tr>
	<td><input type="hidden" name="id" value="<?php echo $foods["id"];?>"></td>
    <img src ="<?php echo $foods ["image"];?>" width="<?php echo $imageWidth="200px" ?>" height="<?php echo $imageHeight="200px" ?>"/></td>	 
</tr>
<tr>
	<td>Customer Name: </td>
	<td><input type="text" size="30" name="name" value="<?php echo $_SESSION ["uname"];?>" ></td> <!-- ekhane data retrieve korsi only-->						
</tr>
<tr>
	<td>Item Name: </td>
	<td><input type="text" size="30" name="name" value="<?php echo $foods ["name"];?>" ></td>						
</tr>
<tr>
	<td>Price: </td>
	<td><input type="text" size="30" name="price" value="<?php echo $foods ["price"];?>" ></td>						
</tr>
 <tr>
	<td align="center" colspan="3"><br><input type="submit" name="Conform_Order" value="Conform_Order"></button>
	<!--<td align="center"colspan="3"><br><b><a class="btn-mine " href="payment.php">Conform order</a></b></td>-->
	
</tr>


</table>
</form>
</center>
</div>
<?php include'mainfooter.php';?>