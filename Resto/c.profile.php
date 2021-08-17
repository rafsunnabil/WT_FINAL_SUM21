<?php require_once 'mainheader.php';
      require_once 'Controllers/customercontroller.php';
	  
	  $id = $_GET["id"];
	  $user = getUser($id);
	  //$user = getUser($id);
	  //$user = getUser($_SESSION["loggeduserid"]);
	  
	 /* if(!isset($_SESSION["uname"])){
	    header("Location: CustomerLogin.php");	
	}*/
	  
	  
?>


<div class="center-login">
<center>
<h2>Customer profile</h2>
<h3 align="center"><?php echo $err_db;?></h3>


<form action="" method="post">
<table>
 
<tr>
	<td>Name: </td>
	<td><input type="hidden" name="id" value="<?php echo $user["id"];?>">
	<input type="text" size="30" name="name" value="<?php echo $user["name"];?>" ></td>						
</tr>
<tr>
	<td>User name: </td>
	<td><input type="text" size="30" name="username" value="<?php echo $_SESSION["uname"];?>" ></td>						
</tr>
<tr>
	<td>Email: </td>
	<td><input type="text" size="30" name="email" value="<?php echo $user ["email"];?>" ></td>						
</tr>
<tr>
	<td>Phone Number: </td>
	<td><input type="text" size="30" name="phonenumber" value="<?php echo $user["phonenumber"];?>" ></td>						
</tr>
<tr>
	<td>Address: </td>
	<td><input type="text" name="address" size="30" value="<?php echo $user ["address"];?>" ></td>						
</tr>


<tr>
	<td align="right" colspan="4"><br><input type="submit" name="edit_profile" value="edit_profile">
</tr>


</table>
</form>
</center>
</div>
<?php include'mainfooter.php';?>
