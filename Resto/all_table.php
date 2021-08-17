<?php
    require_once 'Controllers/table_controllers.php';	 
	$review = getBook_table();
?>

<html>
	<body>
		<fieldset>
		    <legend align="center"><h1>All Reservation</h1></legend>
				<table align="center" border="2">
					<tr>
					    <td align="left"><b><i>Name: <i><b></td>
					    <td align="left"><b><i>Day: <i><b></td>
					    <td align="left"><b><i>Month: <i><b></td>
					    <td align="left"><b><i>Time: <i><b></td>
					    <td align="center"><b><i>Phone: <i><b></td>
						<td align="right"><b><i>Size: <i><b></td>
					</tr>
					
						<?php
							foreach($review as $r){		
							echo "<tr>";
							echo "<td>".$r["name"]."</td>";
							echo "<td>".$r["ddate"]."</td>";
							echo "<td>".$r["ddmonth"]."</td>";
							echo "<td>".$r["time"]."</td>";
							echo "<td>".$r["phone"]."</td>";
							echo "<td>".$r["size"]."</td>";
							echo "<tr>";
							}
						?>
				</table>
			</center>
		</fieldset>
	</body>
</html>