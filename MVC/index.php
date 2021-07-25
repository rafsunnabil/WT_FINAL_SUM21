<?php
	include 'header.php';
	include 'models/db_config.php';
	$query="select id,name,username,email,password from users";

	$result= get($query);
	echo"<table border='1'>";
	echo"<tr>
	 <td>id</td> <td>name</td> <td>username</td> <td>email</td> <td>password</td> 

	</tr>";


	//while($row= mysqli_fetch_assoc($result)){;
	foreach($result as $row){
		echo"<tr>";
		echo"<td>". $row["id"]. "</td>";
		echo"<td>". $row["name"]. "</td>";
		echo"<td>". $row["username"]. "</td>";
		echo"<td>". $row["email"]. "</td>";
		echo"<td>". $row["password"]. "</td>";
		echo"</tr>"; 
	}
	echo"</table>";
	include 'footer.php';
?>