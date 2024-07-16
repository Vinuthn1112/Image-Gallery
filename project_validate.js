function validate()
{
    const fname=document.getElementById("fname");
    const errorfname=document.getElementById("errorfname");
    
    if(fname.value=="")
    {
        //alert("First Name Shouldn't be empty");
        errorfname.innerHTML="First Name Shouldn't be empty";
        return false;
    }
    const lname=document.getElementById("lname");
    const errorlname=document.getElementById("errorlname");
    
    /*
    const button=document.getElementById("button");*/
    if(lname.value=="")
    {
        errorlname.innerHTML="Last Name Shouldn't be empty";
        return false;
    }
    const email=document.getElementById("email");
    const erroremail=document.getElementById("erroremail");
    if(email.value=="")
    {
        erroremail.innerHTML="Email Shouldn't be empty";
        return false;
    }
    const password=document.getElementById("password");
    const errorpassword=document.getElementById("errorpassword")
    if(password.value=="")
    {
        errorpassword.innerHTML="password should not be empty";
        return false;
    }
    const cpassword=document.getElementById("cpassword");
    const errorcpassword=document.getElementById("errorcpassword")
    if(cpassword.value=="")
    {
        errorcpassword.innerHTML="This field shouldn't be valid";
        return false;
    }
    if(!(password.value==cpassword.value))
    {
        errorcpassword.innerHTML="confirm the password";
        return false;
    }
    

}
