    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ft</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        
        
    </head>
    <body class="p-3">


            <div class="container">
                    <div class="row">
            <div class="col-md-6">
                <div class="card" >
                    <div class="card-body">
                        <form action="table.php" method="post" >
                        <h1>signup form</h1>
                        <div class="mb-3">
                            <label >First Name</label>
                            <input type="text" class="form-control" placeholder="Enter your first name" id="fname" name="fname">
                            <span id="first_name_error" class="text-danger"></span>
                        </div>
                       
    <div class="mb-3">
        <label> last name
        </label>
        <input type="text" class="form-control" placeholder="enter last name" id="lname" name="lname">
        <span id="last_name_error" class="text-danger"></span>
    </div>
    

    <div>
        <label>email</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="ahsan@gmail.com">
        <span id="email_error" class="text-danger"></span>
    </div>
    <div> 
        <label>password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="abcd.123@#.com">
        <span id="password_error" class="text-danger"></span>
    </div>
    <div class="col-12 mb-2 mt-2  d-inline-flex">
    <select class="form-control me-5" id="year" name="year">year
        <option>year</option>
        <option>2015</option>
        <option>2012</option>
        <option>2010</option>
    </select>
    <span id = "year_error" class="text-danger"></span>
    <select class="form-control me-5" id="day" name="day">date
        <option>day</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>
     <span id = "day_error" class="text-danger"></span>
    <select class="form-control" id="month" name="month">date
        <option>month</option>
        <option>jan</option>
        <option>feb</option>
        <option>march</option>
    </select>
     <span id = "month_error" class="text-danger"></span>
    </div>
    <div>
    <div>gender</div>
    <div class="form-check form-check-inline ">
    <label>male</label>
    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
    
    </div>
    <div class="form-check form-check-inline">
        <label> female</label>
    <input class="form-check-input" type="radio" name="gender" id="female" value="female">

    </div>
    <span id="gender_error" class="text-danger"></span>
    </div>
    <div>select course</div>
    <div class="form-check form-check-inline ">
    <label>mats</label>
    <input class="form-check-input" type="checkbox" name="course[]" id="maths" value="maths">
    
    </div>
    <div class="form-check form-check-inline">
        <label> wpl</label>
    <input class="form-check-input" type="checkbox" name="course[]" id="wpl" value="wpl">

    </div>
    <div class="form-check form-check-inline">
        <label> vpl</label>
    <input class="form-check-input" type="checkbox" name="course[]" id="vpl" value="vpl">

    </div>
    <div class="form-check form-check-inline">
        <label> adbms</label>
    <input class="form-check-input" type="checkbox" name="course[]" id="adbms" value="adbms">

    </div>
    <span id =course_error class="text-danger"></span>


   <div >
   <center> <button type="submit" class=" btn btn-success mt-2 " onclick="totable1(event)" >submit</button></center>
   </div>
    </div>
            
        </div>
    </div>

        </div>
    </div>
    <script>
    function totable1(event){
        firstname = document.getElementById("fname").value
        if(firstname != ''){
           var  firstnameregex = /^[a-zA-Z]{1,100}$/
           var  testfirstname = firstnameregex.test(firstname)
            if(testfirstname == false){
            document.getElementById("first_name_error").innerHTML= "write valid value"
            event.preventDefault()
        }}
        else{
             document.getElementById("first_name_error").innerHTML= "write a value"
            event.preventDefault()
        }

        lastname = document.getElementById("lname").value
        if(lastname != ''){
           var  lastnameregex = /^[a-zA-Z]{1,100}$/
           var  testlastname = lastnameregex.test(lastname)
            if(testlastname == false){
            document.getElementById("last_name_error").innerHTML= "write valid value"
            event.preventDefault()
        }}
        else{
             document.getElementById("last_name_error").innerHTML= "write a value"
            event.preventDefault()
        }

            emailn = document.getElementById("email").value
            if(emailn!=''){
                var emailregex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/
                var testemail=emailregex.test(emailn)
                if(testemail==false){
                    document.getElementById("email_error").innerHTML = "write valid using @ mail"
                    event.preventDefault();
                }
        }
 else{
                    document.getElementById("email_error").innerHTML = "write mail cannot leave blank"
                    event.preventDefault();
                }

                pass = document.getElementById("password").value
                if(pass != ''){
                    var passregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
                    testpassregex = passregex.test(pass)
                    if(testpassregex == false){
                        document.getElementById("password_error").innerHTML = "write valid password"
                    event.preventDefault();
                    }
                }
                else{
                     document.getElementById("password_error").innerHTML = "write password"
                    event.preventDefault();
                }
        var day = document.getElementById("day").value
        if (day =='day'){
            document.getElementById("day_error").innerHTML = "select a date please"
                    event.preventDefault();
        }
        var year = document.getElementById("year").value
          if (year =='year'){
            document.getElementById("year_error").innerHTML = "select a year please"
                    event.preventDefault();
        }
        var  month = document.getElementById("month").value
          if (month =='month'){
            document.getElementById("month_error").innerHTML = "select a month please"
                    event.preventDefault();
        }
    
        gender1 = document.getElementById("male")
        gender2 = document.getElementById("female")

        if(gender1.checked == true){}
           else  if(gender2.checked == true){}
           else{
            document.getElementById("gender_error").innerHTML = "select any gender"
            event.preventDefault();
           }

      

var courses = "";
if (document.getElementById("maths").checked) {x
    courses += "maths ";
}
if (document.getElementById("wpl").checked) {
    courses += "wpl ";
}
if (document.getElementById("vpl").checked) {
    courses += "vpl ";
}
if (document.getElementById("adbms").checked) {
    courses += "adbms ";
}
if(courses == ''){

    document.getElementById("course_error").innerHTML = "please select course"
    event.preventDefault();
}



    }
    </script>
    </body>
    </html>
