<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$connection =  mysqli_connect('localhost','root','','prac');
$query = "INSERT INTO prac(fname,lname,email,password,gender) values('$fname','$lname','$email','$password','$gender')";
mysqli_query($connection,$query);
