<?php
        include 'connection.php';

        $hawkerID = isset($_POST['hawkerID'])?$_POST["hawkerID"]: "";
        $storeName = isset($_POST["storeName"])?$_POST["storeName"]: "";
        $storeAddress = isset($_POST["storeAddress"])?$_POST["storeAddress"]: "";
        $phone = isset($_POST["phone"])?$_POST["phone"]:"";

        $connection->query("UPDATE hawkers 
                                SET storeName = ' $storeName ' , storeAddress = ' $storeAddress ', phone = ' $phone ' 
                                WHERE hawkerID = ' ".$hawkerID." ' ");