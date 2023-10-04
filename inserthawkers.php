<?php
    include 'connection.php';

    $storeName = isset($_POST["storeName"])?$_POST["storeName"]: "";
    $storeAddress = isset($_POST["storeAddress"])?$_POST["storeAddress"]:"";
    $phone = isset($_POST["phone"])?$_POST["phone"]:"";

    //$storeName = $_POST['storeName'];
    //$storeAddress = $_POST['storeAddress'];

    /*$hawkerquery = "INSERT INTO hawkers(storeName, storeAddress) VALUES ('$storeName', '$storeAddress')";

    $result = mysqli_query($connection, $hawkerquery);

    if ($result) {
        echo "success";
    }else{
        echo "error";
    }*/

    
    $connection->query ("INSERT INTO hawkers(storeName, storeAddress, phone) 
    VALUES (' ".$storeName."', ' ".$storeAddress." ', ' ".$phone." ')");

    //$statement = $connection->prepare($hawkerquery);
    
    //$statement->execute();

    //echo json_encode("Inserted success");

?>