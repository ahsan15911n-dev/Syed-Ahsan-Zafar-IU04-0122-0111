<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook signup</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-light">
<div class="container pt-5 pb-5 w-25">
    <div class="row justify-content-center">
    <h1 class="text-center text-primary fw-bold " style="font-size: 66px;">facebook</h1>
    <div class=" form-control card p-4">
    <h2 class="fw-bold fs-4 text-center">Create a new account</h2>
        <p class="text-muted small text-center">It's quick and easy.</p>
    <hr class="mb-3 mt-3">

<form action="fbformsubmit.php" method="POST" >
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
                                <option>year </option>
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
    
            <div><label>Gender</label></div>
        <div class="d-flex gap-4 ms-2">
        <div><label>male</label></div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
        </div>
    <div><label>female</label></div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="female" value ="female">

    </div>
    <div ><label>custom</label></div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="custom" value = "custom">
    </div>
    </div>
    <span id="gender_error" class="text-danger"></span>
    </div>


      <div class="mb-3 mt-2">
        <div class="mb-2 "><label > Email </label></div>
        <input type="email" class="form-control" id="email"  placeholder="email address" name="email">
        <span id="email_error" class="text-danger"></span>
        </div>

        <div class="mb-2 "><label > Contact  </label></div>
        <div class="mb-3">
         <input type="text" class="form-control  border" id="contact" name="contact" placeholder="03323098292">
          <span id="contact_error" class="text-danger"></span>
                    </div>  
                      
        <div class="mb-3">
        <div class="mb-2 "><label > Password  </label></div>
        <input type="password" class="form-control" id="password" name="password" placeholder="password">
        <span id="password_error" class="text-danger"></span>
        </div>
        

               


   <p class="small text-muted mb-2 mt-3">
     By clicking Sign Up, you agree to our Privacy Policy Cookies Policy You may receive SMS notifications from us and can opt out at any time.
</p>
<div class="mb-3 mt-4"><center> <button  type="submit" onclick="formsub(event)" class="form-control w-25 text-bg-success text-center">Signup</button>
    </center></div>
    <div class="text-center">
                        <a href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzYzNTk1MDUwLCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3D" class="text-decoration-none fw-semibold">Already have an account?</a>
                    </div>
                </form>
                </div>  
            </div>

    
   
<script>
    
    function formsub(event) {
    
 
    document.getElementById('first_name_error').innerHTML = "";
    document.getElementById('last_name_error').innerHTML = "";
   document.getElementById('email_error').innerHTML = "";
    document.getElementById('password_error').innerHTML = "";
    document.getElementById('contact_error').innerHTML = "";
    document.getElementById('days_error').innerHTML="";
    document.getElementById('months_error').innerHTML="";
    document.getElementById('years_error').innerHTML="";
    document.getElementById('gender_error').innerHTML="";


    


    
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
        document.getElementById('email_error').innerHTML = "enter email value please"
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

     var Contact = document.getElementById('contact').value
      if (Contact != ''){
        var ContactRegex = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{5})(?: *x(\d+))?\s*$/



        var TestContact = ContactRegex.test(Contact)
        if(TestContact == false){
            document.getElementById('contact_error').innerHTML = "range is 11 to 12 digit use + - and numeric values"
            event.preventDefault();
        }
      } 
      else
    {
        document.getElementById('contact_error').innerHTML = "enter Contact number please"
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
   
var gender1 = document.getElementById('male');
var gender2 = document.getElementById('female');
var gender3 = document.getElementById('custom');

if (gender1.checked == true) {
}
else if (gender2.checked == true) {
}
else if (gender3.checked == true) {
}
else {
    document.getElementById('gender_error').innerHTML = "please select a gender";
    event.preventDefault();
}

}



    </script>
    </body>
    </html>