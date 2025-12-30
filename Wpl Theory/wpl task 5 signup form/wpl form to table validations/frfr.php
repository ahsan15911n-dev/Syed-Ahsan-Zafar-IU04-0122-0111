<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3">

<?php
// Initialize error variables
$first_name_error = "";
$last_name_error = "";
$email_error = "";
$password_error = "";
$day_error = "";
$year_error = "";
$month_error = "";
$gender_error = "";
$course_error = "";
$success_message = "";

// Initialize form values
$fname = "";
$lname = "";
$emailn = "";
$pass = "";
$day = "day";
$year = "year";
$month = "month";
$gender1 = "";
$courses = [];

// Process form if submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get input
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $emailn = $_POST['email'] ?? '';
    $pass = $_POST['password'] ?? '';
    $day = $_POST['day'] ?? 'day';
    $year = $_POST['year'] ?? 'year';
    $month = $_POST['month'] ?? 'month';
    $gender1 = $_POST['gender'] ?? '';
    $courses = $_POST['course'] ?? [];

    // FIRST NAME VALIDATION
    if (empty($fname)) {
        $first_name_error = "First name is required";
    } elseif (!preg_match("/^[a-zA-Z]{1,100}$/", $fname)) {
        $first_name_error = "Only letters allowed (1-100 characters)";
    }

    // LAST NAME VALIDATION
    if (empty($lname)) {
        $last_name_error = "Last name is required";
    } elseif (!preg_match("/^[a-zA-Z]{1,100}$/", $lname)) {
        $last_name_error = "Only letters allowed (1-100 characters)";
    }

    // EMAIL VALIDATION
    if (empty($emailn)) {
        $email_error = "Email is required";
    } elseif (!preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/", $emailn)) {
        $email_error = "Please enter a valid email address";
    }

    // PASSWORD VALIDATION (Fixed - now uses proper password rules)
    if (empty($pass)) {
        $password_error = "Password is required";
    } elseif (strlen($pass) < 8) {
        $password_error = "Password must be at least 8 characters";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,}$/", $pass)) {
        $password_error = "Password must include uppercase, lowercase, number, and special character";
    }

    // DATE VALIDATION
    if ($day == 'day') {
        $day_error = "Please select a day";
    }
    if ($year == 'year') {
        $year_error = "Please select a year";
    }
    if ($month == 'month') {
        $month_error = "Please select a month";
    }

    // GENDER VALIDATION
    if (empty($gender1)) {
        $gender_error = "Please select a gender";
    }

    // COURSE VALIDATION
    if (empty($courses)) {
        $course_error = "Please select at least one course";
    }

    // IF NO ERRORS, INSERT DATA
    if (empty($first_name_error) && empty($last_name_error) && empty($email_error) &&
        empty($password_error) && empty($day_error) && empty($month_error) &&
        empty($year_error) && empty($gender_error) && empty($course_error)) {

        $course = implode(", ", $courses);
        $dob = $day . "-" . $month . "-" . $year;

        // Use prepared statements to prevent SQL injection
        $connection = mysqli_connect('localhost', 'root', '', 'prac');
        
        if ($connection) {
            $stmt = mysqli_prepare($connection, 
                "INSERT INTO rpc(fname, lname, email, password, gender, courses, dob) 
                 VALUES(?, ?, ?, ?, ?, ?, ?)");
            
            // Hash password before storing
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
            
            mysqli_stmt_bind_param($stmt, "sssssss", 
                $fname, $lname, $emailn, $hashed_password, $gender1, $course, $dob);
            
            if (mysqli_stmt_execute($stmt)) {
                $success_message = "Form submitted successfully!";
                // Clear form values
                $fname = $lname = $emailn = $pass = "";
                $day = $year = $month = "day";
                $gender1 = "";
                $courses = [];
            } else {
                $email_error = "Error submitting form. Please try again.";
            }
            
            mysqli_stmt_close($stmt);
            mysqli_close($connection);
        } else {
            $email_error = "Database connection failed";
        }
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <?php if ($success_message): ?>
                        <div class="alert alert-success"><?php echo $success_message; ?></div>
                    <?php endif; ?>
                    
                    <form method="post" action="">
                        <h1>Signup Form</h1>
                        
                        <div class="mb-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="Enter your first name" 
                                   name="fname" value="<?php echo htmlspecialchars($fname); ?>">
                            <span class="text-danger"><?php echo $first_name_error; ?></span>
                        </div>
                       
                        <div class="mb-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter last name" 
                                   name="lname" value="<?php echo htmlspecialchars($lname); ?>">
                            <span class="text-danger"><?php echo $last_name_error; ?></span>
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" 
                                   placeholder="ahsan@gmail.com" value="<?php echo htmlspecialchars($emailn); ?>">
                            <span class="text-danger"><?php echo $email_error; ?></span>
                        </div>
                        
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" 
                                   placeholder="Enter password">
                            <span class="text-danger"><?php echo $password_error; ?></span>
                        </div>
                        
                        <div class="mb-3">
                            <label>Date of Birth</label>
                            <div class="row">
                                <div class="col-4">
                                    <select class="form-control" name="day">
                                        <option value="day">Day</option>
                                        <?php for($i = 1; $i <= 31; $i++): ?>
                                            <option value="<?php echo $i; ?>" <?php echo ($day == $i) ? 'selected' : ''; ?>>
                                                <?php echo $i; ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                    <span class="text-danger"><?php echo $day_error; ?></span>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" name="month">
                                        <option value="month">Month</option>
                                        <?php 
                                        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
                                                   'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                                        foreach($months as $m): ?>
                                            <option value="<?php echo $m; ?>" <?php echo ($month == $m) ? 'selected' : ''; ?>>
                                                <?php echo $m; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="text-danger"><?php echo $month_error; ?></span>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" name="year">
                                        <option value="year">Year</option>
                                        <?php for($i = 2010; $i <= 2015; $i++): ?>
                                            <option value="<?php echo $i; ?>" <?php echo ($year == $i) ? 'selected' : ''; ?>>
                                                <?php echo $i; ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                    <span class="text-danger"><?php echo $year_error; ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label>Gender</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" 
                                       value="male" <?php echo ($gender1 == 'male') ? 'checked' : ''; ?>>
                                <label class="form-check-label">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" 
                                       value="female" <?php echo ($gender1 == 'female') ? 'checked' : ''; ?>>
                                <label class="form-check-label">Female</label>
                            </div>
                            <br><span class="text-danger"><?php echo $gender_error; ?></span>
                        </div>
                        
                        <div class="mb-3">
                            <label>Select Courses</label><br>
                            <?php 
                            $course_options = [
                                'maths' => 'Mathematics',
                                'wpl' => 'WPL',
                                'vpl' => 'VPL',
                                'adbms' => 'ADBMS'
                            ];
                            foreach($course_options as $value => $label): ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="course[]" 
                                           value="<?php echo $value; ?>" 
                                           <?php echo in_array($value, $courses) ? 'checked' : ''; ?>>
                                    <label class="form-check-label"><?php echo $label; ?></label>
                                </div>
                            <?php endforeach; ?>
                            <br><span class="text-danger"><?php echo $course_error; ?></span>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>