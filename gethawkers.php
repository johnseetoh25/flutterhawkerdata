<?php

include 'connection.php';

$query = $connection->query('SELECT * FROM hawkers');
$result = array();

while ($rowFoodData=$query->fetch_assoc()) {
    $result[] = $rowFoodData;
}

echo json_encode($result);