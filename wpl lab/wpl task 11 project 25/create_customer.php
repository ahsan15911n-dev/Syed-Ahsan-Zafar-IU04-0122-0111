<?php
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

    if(isset($_POST['signupButton'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $name = $fname . " " . $lname;

        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $dob = $day . "-" . $month . "-" . $year;

        $gender = $_POST['gender'];

        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['contact'];

        $query = "INSERT INTO customers(name,dob,gender,email,password,phone) values('$name','$dob','$gender','$email','$password','$phone')";

        mysqli_query($conn, $query);

        header("Location: signin.php");
        exit();
    }
?>