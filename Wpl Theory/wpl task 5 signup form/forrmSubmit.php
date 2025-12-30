<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];

$conn = mysqli_connect('localhost', 'root', '', 'wpll');
$query = "INSERT INTO users(first_name,last_name,email,password,contact) values('$first_name','$last_name','$email','$password','$contact')";
mysqli_query($conn, $query);

?>