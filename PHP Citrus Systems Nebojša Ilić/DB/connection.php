<?php 
    $dns = 'localhost';
    $uname = 'root';
    $pass = '';
    $dbname = "shop";

    $conn = new mysqli($dns, $uname, $pass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
//for product    
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
//for comments
$sql1 = "SELECT * FROM comments";
$result1 = $conn->query($sql1);
//for admins
$sql2 = "SELECT * FROM admins";
$result2 = $conn->query($sql2);
?>


