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
$sql = "SELECT ID, IMG, TITLE, DESCR FROM products";
$result = $conn->query($sql);
//for comments
$sql1 = "SELECT ID_com, USER, MAIL, COMMENT FROM comments";
$result1 = $conn->query($sql1);
//for admins
$sql2 = "SELECT ID_admin, ADMIN_NAME, ADMIN_PASSWORD FROM admins";
$result2 = $conn->query($sql2);
?>


