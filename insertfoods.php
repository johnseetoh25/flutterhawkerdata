<?php
    include 'connection.php';

    $foodName = isset($_POST["foodName"])?$_POST["foodName"]: "";
    $price = isset($_POST["price"])?$_POST["price"]:"";
    $cookingTime = isset($_POST["cookingTime"])?$_POST["cookingTime"]:"";

    $connection->query ("INSERT INTO foods(foodName, price, cookingTime) 
    VALUES (' ".$foodName."', ' ".$price." ', ' ".$cookingTime." ')");

    

?>