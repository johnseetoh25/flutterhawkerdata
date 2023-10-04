<?php
    include 'connection.php';

    $foodID = isset($_POST["foodID"])?$_POST["foodID"]: "";
    $quality = isset($_POST["quality"])?$_POST["quality"]:"";
    $numberTable = isset($_POST["numberTable"])?$_POST["numberTable"]:"";
    $selection = isset($_POST["selection"])?$_POST["selection"]:"";

    $connection->query ("INSERT INTO orders(foodID, quality, numberTable, selection) VALUES (' ".$foodID." ', ' ".$quality." ', ' ".$numberTable." ', ' ".$selection." ')  ");

?>