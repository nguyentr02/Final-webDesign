<?php

    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "finalwebdesign";

    $conn = mysqli_connect($severname,$username,$password,$database);

    if(!$conn){
        echo("Fail Connection!");
    } else {
        echo("Connected!");
    }
?>