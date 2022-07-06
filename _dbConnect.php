<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "surveydb";

    $conn = mysqli_connect($hostname,$username,$password,$dbName);
    
    if(!$conn){
        echo "Failed to connect.";
    }
?>