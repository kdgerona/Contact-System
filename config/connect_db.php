<?php

$db = mysqli_connect("localhost","root","","contact_system","8080");

if(!$db) {
    die('<strong>You were not able to connect to your database because ' . mysqli_error() . '</strong>');
}

?>