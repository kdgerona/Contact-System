<?php 

if(isset($_POST['add'])){
    header("location: ../views/contact_form.php");
}

if(isset($_POST['logout'])){
    session_destroy();
    header("location: ../index.php");
}

?>