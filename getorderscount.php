<?php
    include 'connection.php';

    $query = $connection->query('SELECT COUNT(orders.foodID) AS counts, orders.foodID, foods.foodName
                                    FROM orders
                                    INNER JOIN foods ON orders.foodID=foods.foodID
                                    GROUP BY orders.foodID');
    $result = array();
    
    while ($rowFoodData=$query->fetch_assoc()) {
        $result[] = $rowFoodData;
    }

    echo json_encode($result);