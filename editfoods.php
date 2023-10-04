<?php
        include 'connection.php';

        $foodID = isset($_POST['foodID'])?$_POST["foodID"]: "";
        $foodName = isset($_POST["foodName"])?$_POST["foodName"]: "";
        $price = isset($_POST["price"])?$_POST["price"]: "";
        $cookingTime = isset($_POST["cookingTime"])?$_POST["cookingTime"]:"";

        $connection->query("UPDATE foods 
                                SET foodName = ' $foodName ' , price = ' $price ', cookingTime = ' $cookingTime ' 
                                WHERE foodID = ' ".$foodID." ' ");