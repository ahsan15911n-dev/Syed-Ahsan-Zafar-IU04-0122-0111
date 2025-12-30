<?php
$name = $_POST["name"];
$email = $_POST['email'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$Dob = $day.'-'. $month.'-'. $year;


$connection = mysqli_connect('localhost', 'root','', 'abcd' );
$query = "INSERT INTO twitterx(name,email,dateofbirth) values('$name','$email','$Dob')";
mysqli_query($connection,$query);
