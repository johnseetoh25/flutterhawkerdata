<?php
    //$serve = "mysql:host=localhost; dbname=flutterhawkerdatabase";
    $host = "localhost";
    $dbname = "flutterhawkerdatabase";
    $user = "root";
    $pass = "";

    $connection = new mysqli($host, $user, $pass, $dbname);

    if ($connection->connect_errno) {
        printf ('error', $connection->connect_errno);
        exit();
    }else{
        //printf ('success');
    }

    