<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "dentalweb";

$con = new mysqli($server, $user, $pass, $database);

if (!$con) {
    die("<script>alert('Connection Failed.')</script>");
}

?>