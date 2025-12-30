
    function add_new(){
        var fname =  document.getElementById('first_name').value
        var lname =  document.getElementById('last_name').value
        var email =  document.getElementById('email').value
        var contact =  document.getElementById('contact').value
        var address =  document.getElementById('address').value
        

        var tabl =  document.getElementsByTagName('table')[0];
        var new_row =tabl.insertRow(tabl.rows.length);

        var cell1 = new_row.insertCell(0)
        var cell2 =   new_row.insertCell(1)
        var cell3 =   new_row.insertCell(2)
           var cell4 =   new_row.insertCell(3)
              var cell5 =   new_row.insertCell(4)

            cell1.innerHTML = fname
            cell2.innerHTML = lname
            cell3.innerHTML = email
            cell4.innerHTML = contact
            cell5.innerHTML = address

clear_form();
    }
function clear_form(){
        first_name =  document.getElementById('first_name').value = ''
        last_name =  document.getElementById('last_name').value= ''
        email =  document.getElementById('email').value= ''
         contact =  document.getElementById('contact').value= ''
        address =  document.getElementById('address').value= ''
}
  