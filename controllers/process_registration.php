<?php
require "../config/connect_db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if(isset($_POST['register']) && $password == $cpassword){
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $res = mysqli_query($db, "INSERT INTO user (name,email,password) VALUES ('$name', '$email', '$hashed')") or die("Error insertion");

    header('location: ../views/successful_registration.php');
}else{
    header('location: ../views/register.php');
}

?>