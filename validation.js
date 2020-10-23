function validate1()
{
    var name=document.forms["form1"]["name"].value
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var email=document.forms["form1"]["email"].value
    var pwd=document.forms["form1"]["pwd1"].value
    var cpwd=document.forms["form1"]["cpwd"].value

    if(name==""){
        alert("Enter your name");
        return false;
    }
    if (email == ""){
        alert("Email is required");
        return false;
    }
    else
    {

     if (!email.match(mailformat))
     {
        alert("invalid mail");
        return false
    }
    }  

    if (pwd!="" && pwd==cpwd)
    {
        if(pwd.length<8)
        {
            alert("Password must contain atleast 8 characters");
            pwd.focus();
            return false;
        }
        if(pwd==name)
        {
            alert("password must be different from username");
            return false;
        }

        re = /[0-9]/;
        if(!re.test(pwd)) 
        {
            alert("Error: password must contain at least one number (0-9)!");
            pwd.focus();
            return false;
        }
        re = /[a-z]/;
        if(!re.test(pwd)) 
        {
            alert("Error: password must contain at least one lowercase letter (a-z)!");
            pwd.focus();
            return false;
        }
        re = /[A-Z]/;
        if(!re.test(pwd)) 
        {
            alert("Error: password must contain at least one uppercase letter (A-Z)!");
            pwd.focus();
            return false;
        }  
        return true
    }
    else {
        alert("check that you have entered ad confirmed your password");
        return false
    }


}

function validate2(){
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var email=document.forms["form2"]["email"].value
    var pwd=document.forms["form2"]["pwd2"].value
    if (email ==""){
        alert("Email is required");
    }
    else 
    {if (!email.match(mailformat)){
        alert("invalid mail");
        return false
    }}
    if(pwd.length<6){
        alert("password is too short")
    }
}
