<?php
require "../config/connect_db.php";

$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST['login'])){
    $res = mysqli_query($db, "SELECT * FROM user WHERE email='$email'");

    if(mysqli_num_rows($res) == 0){
        $_SESSION['loginError'] = true;
        $_SESSION['loginErrorMsg'] = "Invalid Credentials";

        return header("location: ../index.php");
    }

    $user = $res->fetch_assoc();

    if(password_verify($password,$user['password'])){
        $_SESSION['loginError'] = false;
        $_SESSION['loginErrorMsg'] = "";
        $_SESSION['userId'] = $user['id'];

        header("location: ../views/contact.php");
    }else{
        $_SESSION['loginError'] = true;
        $_SESSION['loginErrorMsg'] = "Invalid Credentials";

        header("location: ../index.php");
    }
}

?>