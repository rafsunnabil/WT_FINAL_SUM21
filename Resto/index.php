<?php
	
	require_once 'db_config.php';
	$query = "select id,name,username from users";
	
	$result = get($query);
	echo "<table border='1'>";
	echo "<tr>
		<td>Name</td><td>Id</td><td>Username</td>
	</tr>";
	foreach($result as $row){
		echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["username"]."</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	
	
?>