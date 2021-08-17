<?php
	include 'Controllers/ordercontroller.php';
	$key = $_GET["key"];
	$orders = Search($key);
	
	if(count($orders) > 0){
		foreach($orders as $o){
			echo "<a href='edit_order.php?id=".$o["id"]."'>".$o["name"]."</a><br>";
		}
	}
?>