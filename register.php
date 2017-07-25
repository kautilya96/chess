<?php

     $con = mysqli_connect("mysql.hostinger.in","u645063705_kauti","poll123456","u645063705_poll");
   
    $firstname = $_POST["firstname"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $statement = mysqli_prepare($con, "INSERT INTO user_data (firstname,lastname,email,password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss", $firstname, $lastname, $email, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>