<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$Dob = $day.'-'. $month.'-'. $year;


$connection = mysqli_connect('localhost', 'root','', 'abcd' );
$query = "INSERT INTO scusers(first_name,last_name,email,password,dateofbirth) values('$first_name','$last_name','$email', '$password','$Dob')";
mysqli_query($connection,$query);
