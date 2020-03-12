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

// function Confirm_Login() {      // Proverava da li je admin logovan
//     if (!Login()) {
//        header ("Location: ../Pages/admin.php");
//     }
// }

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
        // return null;
    } else {
        echo "Failed";
        return null;
    }
}
function Message() {
    if (isset($_SESSION["ErrorMesage"])) {
        $output = htmlentities($_SESSION["ErrorMesage"]);
        $_SESSION["ErrorMesage"] = null;
        return $output;
    }
}

function SuccessMessage() {
    if (isset($_SESSION["SuccessMessage"])) {
        $output = htmlentities($_SESSION["SuccessMessage"]);
        $_SESSION["SuccessMessage"] = null;
        return $output;
    }
}
?>