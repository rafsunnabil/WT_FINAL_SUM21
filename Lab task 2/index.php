<?php
	
	include 'db_config.php';
	$query = "select id,name,dob, credit, cgpa from student";
	
	$result = get($query);
	echo "<table border='1'>";
	echo "<tr>
		<td>Id</td><td>Name</td><td>DOB</td><td>Credit</td><td>CGPA</td>
	</tr>";
	foreach($result as $row){
		echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["dob"]."</td>";
			echo "<td>".$row["credit"]."</td>";
			echo "<td>".$row["cgpa"]."</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	
	
?>