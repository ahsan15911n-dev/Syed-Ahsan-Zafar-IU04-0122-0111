<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Signup</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">

<div class="container pt-5 pb-5" style="max-width: 600px;">
    <div class="card bg-black p-4 mx-auto">
<div class="text-center mb-3">
            <a href="https://x.com"><img src="images/xtw.jpg" alt="twitter logo" width="100"></a>
        </div>
        <h2 class="fw-bold fs-4 text-white mb-4 text-start ms-5">Create a new account</h2>
        <form action="tformsub.php" method="POST">
            <div class="mb-3 px-5">
                <label class="form-label text-white">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                <span id="first_name_error" class="text-danger"></span>
            </div>
            <div class="mb-3 px-5">
                <label class="form-label text-white">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                <span id="email_error" class="text-danger"></span>
            </div>
   <div class=" form-label mb-3 px-5 py-2">
                        <label class="text-white mb-2">Date of birth </label>
                        <p class="small text-white-50">This will not be shown publicly. Confirm your own age, even if this account is for a business, a pet, or something else.
</p> 
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
            <div class="mb-3 text-center">
                <button type="submit" onclick="tsub(event)"  class="btn btn-dark w-25">Sign up</button>
            </div>
            <div class="text-center">
                <a href="https://x.com/" class="text-decoration-none text-white">
                    Already have an account?
                </a>
                <hr class="bg-white p2">
                 <p class="mb-3 text-center text-white-50"> OR</p>

               
                <div class="mb-3 text-center">
    <center><a href="https://google.com" 
   class="btn btn-dark w-50 p-3 rounded-5 d-flex justify-content-center "> 
    Login with
    <img src="images/g.png" alt="google logo" style="height:20px; margin-left:5px; border-radius:20px;">
</a></center>

            </div>
            </div>
        </form>
    </div>
</div>

<script>
    
    function tsub(event) {

  document.getElementById('first_name_error').innerHTML = "";
     document.getElementById('email_error').innerHTML = "";

    var firstName = document.getElementById('name').value
      if (firstName != ''){
        var firstNameRegex = /^[a-zA-Z ]{1,1000}$/

        var testFirstName = firstNameRegex.test(firstName)
        if(testFirstName == false){
            document.getElementById('first_name_error').innerHTML = "enter valid value please"
            event.preventDefault();
        }

      } 
      else
    {
        document.getElementById('first_name_error').innerHTML = "enter name value please"
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
