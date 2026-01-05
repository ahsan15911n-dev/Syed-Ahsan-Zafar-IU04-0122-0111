<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snapchat signup</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-light">
<div class="container pt-5 pb-5 w-75">
    <div class="row justify-content-center">

    <div class="col-md-6">
    <div class="form-control card p-4">
<div class="text-start d-flex align-items-center ">
    <a href="https://snapchat.com">
        <img src="images/scp.png" alt="sc logo" width="80px">
    </a>
    <h2 class="fw-bold  ms-2" style="font-size: 36px;">Sign up</h2>
</div>

    <hr > 
     <center><a href="https://google.com" 
   class="btn  w-75 p-3 bg-light   "> 
    Login with
    <img src="images/g.png" alt="google logo" style="height:20px; margin-left:5px; border-radius:20px;">
</a></center>
<p class="text-center mt-1 mb-1">Or</p>
<hr class="mt-0">


<form action="snapchatsub.php" method="POST" >
 <div class=" row g-2 mb-3">
        <div class="col-6">
             <div class="mb-2 "><label > First name  </label></div>
                 <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name">
                    <span id="first_name_error" class="text-danger"></span>
                        </div>
<div class="col-6">
           <div class="mb-2 "><label > last name  </label></div>
                 <input type="text" class="form-control " placeholder="Lastname" id="last_name" name="last_name">
                    <span id="last_name_error" class="text-danger"></span>
                        </div>
                    </div>
                          <div class=" form-label mb-3">
                        <label >Date of birth </label>
                        <div class="row g-2">
                            <div class="col-4">
                                <select class="form-select" name="day" id="day">
                                <option>day</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                </select>
                                 <span id="days_error" class="text-danger"></span>
                            </div>
                            <div class="col-4">
                                <select class="form-select " name="month" id="month">
                                    <option>month</option>
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    <option>May</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Aug</option>
                                    <option>Sep</option>
                                    <option>Oct</option>
                                    <option>Nov</option>
                                    <option>Dec</option>
                                </select>
                                <span id="months_error" class="text-danger"></span>
                            </div>
                            <div class="col-4">
                                <select class="form-select " name="year" id="year">
                                <option>year</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                                <option>2008</option>
                                <option>2007</option>
                                <option>2006</option>
                                <option>2005</option>
                                <option>2004</option>
                                <option>2003</option>
                                <option>2002</option>
                                <option>2001</option>
                                <option>2000</option>
                                <option>1999</option>
                                <option>1998</option>
                                <option>1997</option>
                                <option>1996</option>
                                <option>1995</option>
                                <option>1994</option>
                                <option>1993</option>
                                <option>1992</option>
                                <option>1991</option>
                                <option>1990</option>
                                </select>
                                <span id="years_error" class="text-danger"></span>
                            </div>
                            </div>
                             </div>
                            <div>
   

      <div class="mb-3 mt-2">
        <div class="mb-2 "><label > Email </label></div>
        <input type="email" class="form-control" id="email"  placeholder="email address" name="email">
        <span id="email_error" class="text-danger"></span>
        </div>

        <div class="mb-3">
        <div class="mb-2 "><label > Password  </label></div>
        <input type="password" class="form-control" id="password" name="password" placeholder="password">
        <span id="password_error" class="text-danger"></span>
        </div>
        
   <p class="small text-muted mb-2 mt-3" style="font-size: small;">
     By tapping "Agree and Continue" below, you agree to the Terms of Service and acknowledge that you have read the Privacy Policy.
</p>
<div class="mb-3 mt-4"><center> <button  type="submit" onclick="snapsub(event)" class="form-control w-50 text-bg-secondary text-center rounded-5 p-2">Sign Up</button>
    </center></div>
    <hr>
    <div class="text-center" style="font-size: small;">
        <p>Already have an account</p>
                        <a href="https://accounts.snapchat.com/v2/login" class="text-decoration-none fw-semibold">login</a>
                    </div>
                </form>
                </div>  
                         </div>

                 </div>
            </div>

<script>
     function snapsub(event) {
    document.getElementById('first_name_error').innerHTML = "";
    document.getElementById('last_name_error').innerHTML = "";
    document.getElementById('email_error').innerHTML = "";

      document.getElementById('password_error').innerHTML = "";
                var firstName = document.getElementById('first_name').value
      if (firstName != ''){
        var firstNameRegex = /^[a-zA-Z]{1,1000}$/
        var testFirstName = firstNameRegex.test(firstName)
        if(testFirstName == false){
            document.getElementById('first_name_error').innerHTML = "enter valid value please"
            event.preventDefault();
        }

      } 
      else
    {
        document.getElementById('first_name_error').innerHTML = "enter first name value please"
        event.preventDefault();
    }

    var lastName = document.getElementById('last_name').value
      if (lastName != ''){
        var lastNameRegex = /^[a-zA-Z]{1,1000}$/
        var testLastName = lastNameRegex.test(lastName)
        if(testLastName == false){
            document.getElementById('last_name_error').innerHTML = "enter valid value please"
            event.preventDefault();
        }
      } 
      else
    {
        document.getElementById('last_name_error').innerHTML = "enter last name value please"
        event.preventDefault();
    }
  var Email = document.getElementById('email').value
      if (Email != ''){
        var EmailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]{1,100}$/
        var TestEmail = EmailRegex.test(Email)
        if(TestEmail == false){
            document.getElementById('email_error').innerHTML = "enter valid value please"
            event.preventDefault();
        }
      } 
      else
    {
        document.getElementById('email_error').innerHTML = "enter email please"
        event.preventDefault();
    }

      var Pass = document.getElementById('password').value
      if (Pass != ''){
        var PassRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,16}$/;
        var TestPass = PassRegex.test(Pass)
        if(TestPass == false){

            document.getElementById('password_error').innerHTML = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:"
            event.preventDefault();
        }
      } 
      else
    {
        document.getElementById('password_error').innerHTML = "enter password please"
         event.preventDefault();
      
    }
     var day = document.getElementById('day').value
   if (day == 'day') {
    document.getElementById('days_error').innerHTML = "please select day";
     event.preventDefault();
    }

    var month = document.getElementById('month').value
   if (month == 'month') {
    document.getElementById('months_error').innerHTML = "please select month";
     event.preventDefault();
    }

    var year = document.getElementById('year').value
   if (year == 'year') {
    document.getElementById('years_error').innerHTML = "please select year";
     event.preventDefault();
    }
}
    
    </script>
</body>
</html>
