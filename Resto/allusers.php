 <?php include 'mainheader.php';
       include 'Controllers/customercontroller.php';
	   $user = getAlluser();
	   //echo "<pre>";
	   //print_r($categories);
	   //echo "</pre>";
 ?>


 <center>
     <a href="addcategory.php">Menu(optional)</a>
	 
	 <table border="2">
		 <tr>
			 <!--<td>Sl#</td>-->
			 
			 <td> Name</td>
			 <td>user name </td>
			 <td></td>
			 <td></td>
			
		 </tr>
		 <tbody>
			 <?php
			     
			     //$i=1;
				 foreach($user as $u){
					
					 echo "<tr>";
					     //echo "<td>".$c["id"]."</td>";
						
						 //echo "<td></td>";
						 echo "<td>".$u["name"]."</td>";
						 //echo "<td>".$u["uname"]."<td>";
						 echo '<td><button><a href="c.profile.php?id='.$u["id"].'">Edit</a></button></td>';
						 //echo '<td><button><a href="deletecategory.php?id='.$c["id"].'">delete</a></button></td>';
					 echo "</tr>";
					// $i++;
				 }
			 ?>

			
		 </tbody>
	 </table>
	 </center>
 </div>