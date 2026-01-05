<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$Dob = $day.'-'. $month.'-'. $year;


$connection = mysqli_connect('localhost', 'root','', 'abcd' );
$query = "INSERT INTO user2(first_name,last_name,email,password,contact,dateofbirth,gender) values('$first_name','$last_name','$email', '$password','$contact','$Dob','$gender')";
mysqli_query($connection,$query);
