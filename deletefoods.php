<?php

    include 'connection.php';

    $foodID = isset($_POST['foodID'])?$_POST["foodID"]: "";

    $connection->query("DELETE FROM foods WHERE foodID = '$foodID' ");