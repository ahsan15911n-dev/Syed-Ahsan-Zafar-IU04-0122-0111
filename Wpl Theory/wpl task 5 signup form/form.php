<html>
<head>
    <title>Signup Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-md-6 mx-auto mt-5" >
        <div class="card">
            <div class="card-body"> 
        <h2 style = "color:green " >
          Signup Form</h2>
  

    <form action="forrmsubmit.php" method="POST">
        <div>
         <div>
        <label class="mt-3">First Name:</label>
        </div>
        <input type="text" class="form-control" id = "first_name" name = "first_name" placeholder="Your First Name">
          <Span id="first_name_error"></Span>
         <div>
        
        <label class="mt-3">Last Name:</label>
        </div>
        <input type="text" class="form-control" name = "last_name" placeholder="Your Last Name">
         <div>
        <label class="mt-3">Email:</label>
        </div>
        <input type="text" class="form-control" name = "email" placeholder="abc@gmail.com">
        <div class="mt-3">
            <label>Password:</label>
        </div>
        <input type="text" class="form-control" name = "password" placeholder="Your Password">
        <div class="mt-3">
            <label>Contact:</label>
        </div>
        <input type="text" class="form-control" name = "contact" placeholder="+92xxxxxxxxxx">
        <div class="mt-3 text-center">
        <button type="button" class="mt-2 btn btn-success w-50" onclick = "submitform()">Sign Up</button>
        </div>
    </form>
</div>
  </div>
  <script>
function submitform() {
      var firstName = document.getElementById('first_name').value;
      if (firstName != '') {
        firstNameRegex = /^[a-zA-Z]{1,1000}$/
        var testFirstName = firstNameRegex.test(firstName)
      } 
      else {
        document.getElementById('first_name_error').innerHTML = 'Please insert the value'
      }
    }
  </script>

</body>

</html>