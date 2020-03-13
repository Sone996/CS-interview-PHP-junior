<?php
require '../DB/connection.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    $user = $_POST['userData'];
    $pw = $_POST['pwData'];
    if($action == 'login'):
        Login_Attempt($user,$pw); 
    endif;
} 
function Login() {
    if (isset($_SESSION["ID_admin"])) {
        return true;
    }
} 

function Login_Attempt($UserName, $Password) {
    $dns = 'localhost';
    $uname = 'root';
    $pass = '';
    $dbname = "shop";
    $conn = new mysqli($dns, $uname, $pass, $dbname);
    $Query = "SELECT * FROM admins WHERE ADMIN_NAME='$UserName' AND  ADMIN_PASSWORD='$Password'";
    $Execute = mysqli_query($conn, $Query);
    if ($admin = mysqli_fetch_assoc($Execute)) {
        @session_start();
        $_SESSION['ID_admin'] = true;
        echo "Success";
    } else {
        echo "Failed";
        return null;
    }
}

?>