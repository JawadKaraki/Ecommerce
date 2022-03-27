function isEmail() {
    var email = document.forms["myform"]["email"].value;
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     if(!regex.test(email)){
         document.getElementById("error").style.display = "block";
         return false;
    }else{
        document.getElementById("error").style.display = "none";
    }
}
function myFunction() {
    var x = document.getElementById("password");
      x.type = "password";
    
}
myFunction();