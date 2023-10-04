<?php

include 'connection.php';

$query = $connection->query('SELECT *, foods.foodName, selections.selectName FROM orders 
                                INNER JOIN foods ON orders.foodID=foods.foodID 
                                INNER JOIN selections ON orders.selection=selections.selectID
                                ORDER BY orders.orderID DESC ');
$result = array();

while ($rowFoodData=$query->fetch_assoc()) {
    $result[] = $rowFoodData;
}

echo json_encode($result);