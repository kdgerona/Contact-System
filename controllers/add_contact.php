<?php
require "../config/connect_db.php";

$userId = $_SESSION['userId'];
$name = $_POST['name'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];

if(isset($_POST['addContact'])){
    $res = mysqli_query($db, "INSERT INTO contacts (userId,name,company,phone,email) VALUES ('$userId', '$name', '$company', '$phone', '$email')") or die("Error insertion");

    header('location: ../views/contact.php');
}else{
    header('location: ../views/contact_form.php');
}

?>