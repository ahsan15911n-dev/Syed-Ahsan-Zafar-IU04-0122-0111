<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$course = implode(", ", $_POST['course']); 
$day = $_POST['day'];
$year = $_POST['year'];
$month = $_POST['month'];
$dob= $day . '-'.$year . '-'.$month ;

$connection = mysqli_connect('localhost','root','', 'prac');
$query = "INSERT INTO rpc(fname,lname,email,password,gender,courses,dob) values('$fname','$lname','$email','$password','$gender','$course','$dob')";
mysqli_query($connection,$query);