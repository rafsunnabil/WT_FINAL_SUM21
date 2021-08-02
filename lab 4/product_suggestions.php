<?php
    include 'Controllers/productcontroller.php';
    $key = $_GET["key"];
    $products= search($key);

    if (count($products)>0){
        foreach($products as $p){
            echo"<p>".$p["name"]."</p>"
        }
    }
?>