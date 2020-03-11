<?php 
    $dns = 'localhost';
    $uname = 'root';
    $pass = '';
    $dbname = "shop";                           

    $conn = new mysqli($dns, $uname, $pass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // for testing
    //echo "Connected successfully";   
    
$sql = "SELECT ID, IMG, TITLE, DESCR FROM products";
$result = $conn->query($sql);
?>


