function totable(event){
    

    var fname = document.getElementById("fname").value 
    var lname = document.getElementById("lname").value 
    var email = document.getElementById("email").value
    var password = document.getElementById("password").value
  var gender = "";

if (document.getElementById("male").checked) {
    gender = "male";
} else if (document.getElementById("female").checked) {
    gender = "female";
}

var courses = "";

if (document.getElementById("maths").checked) {
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

var fname = document.getElementById("fname").value
if(fname != ""){
    firstnameregex=/^[a-zA-z]{1,100}$/
    testfirstname=firstnameregex.test(fname)
        if(testfirstname == false){
            document.getElementById("first_name_error").innerHTML = "please write valid values";
             event.preventDefault();  
               
    }
}
else{
       document.getElementById("first_name_error").innerHTML = "please write any value";
       event.preventDefault(); 
}

var lname =document.getElementById("lname").value
if(lname!=""){
    lastnameregex = /^[a-zA-Z]{1,100}$/
    lastnametest = lastnameregex.test(lname)
    if(lastnametest == false){
    document.getElementById("last_name_error").innerHTML = 'write valid values for name'
    event.preventDefault();}
}
else{
    document.getElementById("last_name_error").innerHTML = "write any values"
    event.preventDefault();
}
var gender1 = document.getElementById('male');
var gender2 = document.getElementById('female');

if (gender1.checked == true) {
}
else if (gender2.checked == true) {
}
else {
    document.getElementById('gender_error').innerHTML = "please select a gender";
  event.preventDefault();    
}










var table= document.getElementsByTagName('tbody')[0];
var new_row= table.insertRow(table.rows.length);

var cell1 =new_row.insertCell(0)
var cell2 =new_row.insertCell(1)
var cell3 =new_row.insertCell(2)
var cell4 =new_row.insertCell(3)
var cell5 =new_row.insertCell(4)
var cell6 =new_row.insertCell(5)

cell1.innerHTML =fname
cell2.innerHTML =lname
cell3.innerHTML =email
cell4.innerHTML =password
cell5.innerHTML =gender
cell6.innerHTML = courses


}

