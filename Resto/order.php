
<?php
	require_once "Controllers/orderController.php" ;
?>





		
<html> 
		<head> 
		<style>
		    body{
				background-color:rgb(223,223,242);
				
			}
		.my-font{
				font-size:35px;
				font-family:consolas;
			    }
		.btn-mine{
				border:none;
				color:white;
				width:100%;
				background-color:rgb(185,143,221);
				border-radius:5px;
				padding:8px;
				margin-top:15px;
			}	
	 </style> 
		</head>
		
		<body>
		<fieldset align= "center">
              <legend align="center"><h1 id="font">Order from below</h1></legend>

		<form action="" method="post" onsubmit="return validate()">
		<div class="my-font">
		<table align="center",border ="5">
		
					  
					
					<tr>
                        <th><span> Insert Order </span></th>
                        <td><input type="text" id="order" name="order"  placeholder="What do you want to eat?">
                        <span id="err_order"><?php echo $err_order;?></span></td>
                    </tr>
					
					
					
					
					
					
					
					
					<tr>
					    <th><span>Add Quantity</span></th>
						<td>:<input type="text" id="addquantity" name="addquantity"value="<?php echo $addquantity;?>" placeholder="addquantity">
						<span id="err_addquantity" ><?php echo $err_addquantity;?></span></td>
					</tr>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					</div>
					<tr>
						<td colspan="4"><input class="my-font btn-mine" type="submit" name="place_Order" value="Place Order"></td>
					</tr>
		</table>
		
		</form>
	
			<script src="js/order.js"></script>
				

		
		
		
		</fieldset>
		
		</body>
</html> 