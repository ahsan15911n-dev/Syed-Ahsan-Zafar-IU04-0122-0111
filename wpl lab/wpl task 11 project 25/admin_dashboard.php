<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root','','gaming_store');

    if(!isset($_SESSION['admin'])){
        header("Location: signin.php");
        exit();
    }

    $admin = $_SESSION['admin'];
?>