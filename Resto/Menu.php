<?php
    include 'mainheader.php';
	require_once 'Controllers/Customercontroller.php';
	if(!isset($_SESSION["uname"])){
	    header("Location: CustomerLogin.php");	
	}
    require_once 'Controllers/foodcontroller.php';
    $foods=  getAllFoods();
	// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	
	
?>
    <!--<h1 align="center" class="text">Welcome <?php //echo $_SESSION["uname"];?></h1>-->
    <script src="js/Foods.js"></script>        
		<fieldset>
		
		    <center>
			    <b class="text">Search Food</b>
		        <input type="text" class="text my-text-field" size="30" onkeyup="search(this)" placeholder="Search Here"  >
	             <div class="text"id="suggestions">
	</div>
			 </center>
		    <legend align="center"><h1>Menu</h1></legend>
		     
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table border="1"align="center" >
					<tr>
					    <!--<td><b>Sl#:<b></td>
					    <td><b>Image:<b></td>-->
						<td></td>
						<td><b>Name:<b></td>
                        <td><b>Category:<b></td>
                        <td><b>Price:<b></td>
						<td><b>Description:<b></td>
                        
            
						
						
					</tr>

                    <?php
                        $i=1;
					    foreach($foods as $f){
                            echo "<tr>";
                                //echo"<td>$i</td>";
                                echo"<td><img src='".$f["image"]."' width='200px' height='200px'></td>";
								echo"<td><b class='text'>".$f["name"]."</b></td>";
                                echo"<td><b class='text'>".$f["c_name"]."</b></td>";
						
                                echo"<td><b class='text price-label'>".$f["price"]." tk</b></td>";
								echo"<td><b class='text'>".$f["recipy"]."<b></td>";
                                
                                echo'<td><a href="cart.php?id='.$f["id"].'"class="btn-mine">Add_to_cart</a></td>';
								echo'<td><a href="give_food_review.php?id='.$f["id"].'"class="btn-mine">Review</a></td>';
                                
                            echo "<tr>";
                            //$i++;
                        }
					?>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
