

function validate(){
    var name=document.getElementById('username').value.trim();
    var email=document.getElementById('email').value.trim();
    var mobile=document.getElementById('mobilenumber').value.trim();
    var idnum=document.getElementById('regid').value.trim();
    var dob=document.getElementById('dob').value;
    var clgname=document.getElementById('clgname').value.trim();
    var password=document.getElementById('password').value.trim();
    var cpassword=document.getElementById('cpassword').value.trim();

    /*console.log(name);
    console.log(email);
    console.log(mobile);
    console.log(idnum);
    console.log(dob);
    console.log(clgname);
    console.log(password);
    console.log(cpassword);*/

    var nameerr=document.getElementById('nameerr');
    var emailerr=document.getElementById('emailerr');
    var mobileerr=document.getElementById('mobileerr');
    var regiderr=document.getElementById('regiderr');
    var doberr=document.getElementById('doberr');
    var clgnameerr=document.getElementById('clgnameerr');
    var passerr=document.getElementById('passerr');
    var cpasserr=document.getElementById('cpasserr');

    let namechk=/^[a-z A-Z]{3,}$/;
    let emailchk=/(^[a-z 0-9]+)\@([a-z]{3,7})\.([a-z]{3,6})(\.[a-z]{1,6})?$/;
    let mobilechk=/(^[6-9])([0-9]{9})$/;
    let regidchk=/(^[r/R])([1])([9/8])([0/1])([0-9]{3})$/;
    let clgnamechk=/(^[a-z A-Z \, \. \& ]{5,})$/;
    let passchk=/(^\w{1,}\W{1,}\d{1,})$/;
    let cpasschk=/(^\w{1,}\W{1,}\d{1,})$/;
     
    var isvalid=false;
    var isname=false;
    var isemail=false;
    var ismobile=false;
    var isregid=false;
    var isdob=false;
    var isclgname=false;
    var ispassword=false;
    var iscpassword=false;



    if(name==""){
        nameerr.innerHTML="* Please Enter The Name";
        document.getElementById('username').style.border="1px solid red";
    }
    else if(!namechk.test(name)){
        nameerr.innerHTML="* Please Enter Valid Name";
        document.getElementById('username').style.border="1px solid red";
    }
    else{
        nameerr.innerHTML="";
        document.getElementById('username').style.border="3px solid green";
        isname=true;
    }

    if(email==""){
        emailerr.innerHTML="* Please Enter The Email";
        document.getElementById('email').style.border="1px solid red";

    }
    else if(!emailchk.test(email)){
        emailerr.innerHTML="* Please Enter Valid Email";
        document.getElementById('email').style.border="1px solid red";

    }
    else{
        emailerr.innerHTML="";
        isemail=true;
        document.getElementById('email').style.border="3px solid green";

    }

    if(mobile==""){
        mobileerr.innerHTML="* Please Enter The Mobile";
        document.getElementById('mobilenumber').style.border="1px solid red";

    }
    else if(!mobilechk.test(mobile)){
        mobileerr.innerHTML="* Please Enter Valid Mobile";
        document.getElementById('mobilenumber').style.border="1px solid red";

    }
    else{
        mobileerr.innerHTML="";
        ismobile=true;
        document.getElementById('mobilenumber').style.border="3px solid green";

    }


    if(idnum==""){
        regiderr.innerHTML="* Please Enter The ID Number";
        document.getElementById('regid').style.border="1px solid red";

    }
    else if(!regidchk.test(idnum)){
        regiderr.innerHTML="* Please Enter Valid ID Number";
        document.getElementById('regid').style.border="1px solid red";

    }
    else{
        regiderr.innerHTML="";
        isregid=true;
        document.getElementById('regid').style.border="3px solid green";

    }


    var d=new Date(dob);
    var year=d.getFullYear();
    
    if(year<=2007){
        doberr.innerHTML="";
        isdob=true;
        document.getElementById('dob').style.border="3px solid green";

    }
    else{
        doberr.innerHTML="Please Enter The Correct Date of Birth";
        document.getElementById('dob').style.border="1px solid red";     
    }



    if(clgname==""){
        clgnameerr.innerText="Please Enter Your Collage Name";
        document.getElementById('clgname').style.border="1px solid red";  
    }
    else if(!clgnamechk.test(clgname)){
        clgnameerr.innerText="Please Enter the Collage Name Correctly";
        document.getElementById('clgname').style.border="1px solid red";  
    }
    else{
        clgnameerr.innerText="";
        isclgname=true;
        document.getElementById('clgname').style.border="3px solid green";  

    }


    if(password==""){
        passerr.innerText="Please Enter The Password";
        document.getElementById('password').style.border="1px solid red";  
    }
    else if(!passchk.test(password)){
        passerr.innerText="Please Enter the Strong Password...Password must be followed by any case alphabets ,special character ended with of digits";
        document.getElementById('password').style.border="1px solid red";  
    }
    else if(password.length<8){
        passerr.innerText="Password length must be atleast 8 characters";
        document.getElementById('password').style.border="1px solid red";  
    }
    else{
        passerr.innerText="";
        ispassword=true;
        document.getElementById('password').style.border="3px solid green";  

    }


    if(cpassword==""){
        cpasserr.innerText="Please Enter The Confirm Password";
        document.getElementById('cpassword').style.border="1px solid red";  
    }
    else if(password!=cpassword){
        cpasserr.innerText="Password and Confirm Password Must Be Same";
        document.getElementById('cpassword').style.border="1px solid red";  
    }
    else{
        cpasserr.innerText="";
        iscpassword=true;
        document.getElementById('cpassword').style.border="3px solid green";  
    }

    if(isname && isemail && ismobile && isregid && isdob && isclgname && ispassword && iscpassword){
        isvalid=true;
    }

    return isvalid;

}