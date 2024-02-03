
display1();
display2();
display3();
display4();
display5();
display6();



function display1(){
    var code=document.getElementById('yourcode1');
    code.innerHTML=localStorage.getItem("p1");
    var m1=document.getElementById('Que1');
    var l1=localStorage.getItem("p1");
    if(l1.length<20){
        m1.style.border="2px solid red";
    }
    else{
        m1.style.border="2px solid green";
    }
                                         
}

function display2(){
    var code1=document.getElementById('yourcode2');
    code1.innerHTML=localStorage.getItem("p2");      
    var m2=document.getElementById('Que2');
    var l2=localStorage.getItem("p2");
    if(l2.length<20){
        m2.style.border="2px solid red";
    }
    else{
        m2.style.border="2px solid green";
    }                      
}
function display3(){
    var code2=document.getElementById('yourcode3');
    code2.innerHTML=localStorage.getItem("p3"); 
    var m3=document.getElementById('Que3');
    var l3=localStorage.getItem("p3");
    if(l3.length<20){
        m3.style.border="2px solid red";
    }
    else{
        m3.style.border="2px solid green";
    }                             
}
function display4(){
    var code3=document.getElementById('yourcode4');
    code3.innerHTML=localStorage.getItem("p4");  
    var m4=document.getElementById('Que4');
    var l4=localStorage.getItem("p4");
    if(l4.length<20){
        m1.style.border="2px solid red";
    }
    else{
        m4.style.border="2px solid green";
    }                         
}
function display5(){
    var code4=document.getElementById('yourcode5');
    code4.innerHTML=localStorage.getItem("p5");
    var m5=document.getElementById('Que5');
    var l5=localStorage.getItem("p5");
    if(l5.length<20){
        m5.style.border="2px solid red";
    }
    else{
        m5.style.border="2px solid green";
    }                            
}
function display6(){
    var code5=document.getElementById('yourcode6');
    code5.innerHTML=localStorage.getItem("p6"); 
    var m6=document.getElementById('Que6');
    var l6=localStorage.getItem("p6");
    if(l6.length<20){
        m6.style.border="2px solid red";
    }
    else{
        m6.style.border="2px solid green";
    }                         
}



function saveData6(){
    localStorage.setItem("i",add.innerHTML);
}
function showTask6(){
    add.innerHTML=localStorage.getItem("i");
}

function certificate(){

    var s1=localStorage.getItem("p1");
    var s2=localStorage.getItem("p2");
    var s3=localStorage.getItem("p3");
    var s4=localStorage.getItem("p4");
    var s5=localStorage.getItem("p5");
    var s6=localStorage.getItem("p6");



    var d1=document.getElementById('text-area1').value;
    var d2=document.getElementById('text-area2').value;
    var d3=document.getElementById('text-area3').value;
    var d4=document.getElementById('text-area4').value;
    var d5=document.getElementById('text-area5').value;
    var d6=document.getElementById('text-area6').value;
    if(s1.length>19 && s2.length>19 && s3.length>19 && s4.length>19 && s5.length>19 && s6.length>19){
        document.location.assign('certificate.php');
    }
    else{
        alert('Please Complete All The Tasks To Get Certificate');
    }

}



function save1(){
    var s1=document.getElementById('text-area1').value;
    var m1=document.getElementById('Que1');

    if(s1==""){
        alert('You are Entered Nothing ..... Please Enter the code');
        var code=document.getElementById('yourcode1');
        code.innerHTML=s1;
        m1.style.border="2px solid red";
        localStorage.setItem("p1",code.innerHTML);
        code.innerHTML=localStorage.getItem("p1");
    }
    else if(s1.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m1.style.border="2px solid red";
        var data=document.getElementById('text-area1').value;
        var code=document.getElementById('yourcode1');
        code.innerHTML=data;
        data.innerHTML="";
        localStorage.setItem("p1",code.innerHTML);
        code.innerHTML=localStorage.getItem("p1");
    }
    else{
        m1.style.border="2px solid green";
        var data=document.getElementById('text-area1').value;
        var code=document.getElementById('yourcode1');
        code.innerHTML=data;
        localStorage.setItem("p1",code.innerHTML);
        code.innerHTML=localStorage.getItem("p1");
    }

}
function save2(){
    var s2=document.getElementById('text-area2').value;
    var m2=document.getElementById('Que2');

    if(s2==""){
        alert('You are Entered Nothing ..... Please Enter the code');
        var code2=document.getElementById('yourcode2');
        code2.innerHTML=s2;
        m2.style.border="2px solid red";
        localStorage.setItem("p2",code2.innerHTML);
        code2.innerHTML=localStorage.getItem("p2");
    }
    else if(s2.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m2.style.border="2px solid red";
        var data2=document.getElementById('text-area2').value;
        var code2=document.getElementById('yourcode2');
        code2.innerHTML=data2;
        localStorage.setItem("p2",code2.innerHTML);
        code2.innerHTML=localStorage.getItem("p2");
    }
    else{
        m2.style.border="2px solid green";
        var data2=document.getElementById('text-area2').value;
        var code2=document.getElementById('yourcode2');
        code2.innerHTML=data2;
        localStorage.setItem("p2",code2.innerHTML);
        code2.innerHTML=localStorage.getItem("p2");
    }

}

function save3(){
    var s3=document.getElementById('text-area3').value;
    var m3=document.getElementById('Que3');

    if(s3==""){
        alert('You are Entered Nothing ..... Please Enter the code');
        var code3=document.getElementById('yourcode3');
        code3.innerHTML=s3;
        m3.style.border="2px solid red";
        localStorage.setItem("p3",code3.innerHTML);
        code3.innerHTML=localStorage.getItem("p3");
    }
    else if(s3.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m3.style.border="2px solid red";
        var data3=document.getElementById('text-area3').value;
        var code3=document.getElementById('yourcode3');
        code3.innerHTML=data3;
        localStorage.setItem("p3",code3.innerHTML);
        code3.innerHTML=localStorage.getItem("p3");
    }
    else{
        m3.style.border="2px solid green";
        var data3=document.getElementById('text-area3').value;
        var code3=document.getElementById('yourcode3');
        code3.innerHTML=data3;
        localStorage.setItem("p3",code3.innerHTML);
        code3.innerHTML=localStorage.getItem("p3");
    }

}



function save4(){
    var s4=document.getElementById('text-area4').value;
    var m4=document.getElementById('Que4');

    if(s4==""){
        alert('You are Entered Nothing ..... Please Enter the code');
        var code4=document.getElementById('yourcode4');
        code4.innerHTML=s4;
        m4.style.border="2px solid red";
        localStorage.setItem("p4",code4.innerHTML);
        code4.innerHTML=localStorage.getItem("p4");
    }
    else if(s4.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m4.style.border="2px solid red";
        var data4=document.getElementById('text-area4').value;
        var code4=document.getElementById('yourcode4');
        code4.innerHTML=data4;
        localStorage.setItem("p4",code4.innerHTML);
        code4.innerHTML=localStorage.getItem("p4");
    }
    else{
        m4.style.border="2px solid green";
        var data4=document.getElementById('text-area4').value;
        var code4=document.getElementById('yourcode4');
        code4.innerHTML=data4;
        localStorage.setItem("p4",code4.innerHTML);
        code4.innerHTML=localStorage.getItem("p4");
    }

}



function save5(){
    var s5=document.getElementById('text-area5').value;
    var m5=document.getElementById('Que5');

    if(s5==""){
        alert('You are Entered Nothing ..... Please Enter the code');
        var code5=document.getElementById('yourcode5');
        code5.innerHTML=s5;
        m5.style.border="2px solid red";
        localStorage.setItem("p5",code5.innerHTML);
        code5.innerHTML=localStorage.getItem("p5");
    }
    else if(s5.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m5.style.border="2px solid red";
        var data5=document.getElementById('text-area5').value;
        var code5=document.getElementById('yourcode5');
        code5.innerHTML=data5;
        localStorage.setItem("p5",code5.innerHTML);
        code5.innerHTML=localStorage.getItem("p5");
    }
    else{
        m5.style.border="2px solid green";
        var data5=document.getElementById('text-area5').value;
        var code5=document.getElementById('yourcode5');
        code5.innerHTML=data5;
        localStorage.setItem("p5",code5.innerHTML);
        code5.innerHTML=localStorage.getItem("p5");
    }

}


function save6(){
    var s6=document.getElementById('text-area6').value;
    var m6=document.getElementById('Que6');

    if(s6==""){
        alert('You are Entered Nothing ..... Please Enter the code');
        var code6=document.getElementById('yourcode6');
        code6.innerHTML=s6;
        m6.style.border="2px solid red";
        localStorage.setItem("p6",code6.innerHTML);
        code6.innerHTML=localStorage.getItem("p6");
    }
    else if(s6.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m6.style.border="2px solid red";
        var data6=document.getElementById('text-area6').value;
        var code6=document.getElementById('yourcode6');
        code6.innerHTML=data6;
        localStorage.setItem("p6",code6.innerHTML);
        code6.innerHTML=localStorage.getItem("p6");
    }
    else{
        m6.style.border="2px solid green";
        var data6=document.getElementById('text-area6').value;
        var code6=document.getElementById('yourcode6');
        code6.innerHTML=data6;
        localStorage.setItem("p6",code6.innerHTML);
        code6.innerHTML=localStorage.getItem("p6");
    }

}
/*
function save2(){
    var s2=document.getElementById('text-area2').value;
    var m2=document.getElementById('Que2');

    if(s2.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m2.style.border="2px solid red";
        var data2=document.getElementById('text-area2').value;
        var code2=document.getElementById('yourcode2');
        code2.innerHTML="";
        
    }
    else{
        m2.style.border="2px solid green";
        var data2=document.getElementById('text-area2').value;
        var code2=document.getElementById('yourcode2');
        code2.innerHTML=data2;
        localStorage.setItem("p2",code2.innerHTML);
        code2.innerHTML=localStorage.getItem("p2");
    }

}

function save3(){
    var s3=document.getElementById('text-area3').value;
    var m3=document.getElementById('Que3');

    if(s3.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m3.style.border="2px solid red";
        var data3=document.getElementById('text-area3').value;
        var code3=document.getElementById('yourcode3');
        code3.innerHTML=""; 
    }
    else{
        m3.style.border="2px solid green";
        var data3=document.getElementById('text-area3').value;
        var code3=document.getElementById('yourcode3');
        code3.innerHTML=data3; 
        localStorage.setItem("p3",code3.innerHTML);
        code3.innerHTML=localStorage.getItem("p3");
    }

}

function save4(){
    var s4=document.getElementById('text-area4').value;
    var m4=document.getElementById('Que4');

    if(s4.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m4.style.border="2px solid red";
        var data4=document.getElementById('text-area4').value;
        var code4=document.getElementById('yourcode4');
        code4.innerHTML="";  
    }
    else{
        m4.style.border="2px solid green";
        var data4=document.getElementById('text-area4').value;
        var code4=document.getElementById('yourcode4');
        code4.innerHTML=data4;  
        localStorage.setItem("p4",code4.innerHTML);
        code4.innerHTML=localStorage.getItem("p4");
    }

}

function save5(){
    var s5=document.getElementById('text-area5').value;
    var m5=document.getElementById('Que5');

    if(s5.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m5.style.border="2px solid red";
        var data5=document.getElementById('text-area5').value;
        var code5=document.getElementById('yourcode5');
        code5.innerHTML=""; 
        
    }
    else{
        m5.style.border="2px solid green";
        var data5=document.getElementById('text-area5').value;
        var code5=document.getElementById('yourcode5');
        code5.innerHTML=data5; 
        localStorage.setItem("p5",code5.innerHTML);
        code5.innerHTML=localStorage.getItem("p5");
    }

}

function save6(){
    var s6=document.getElementById('text-area6').value;
    var m6=document.getElementById('Que6');

    if(s6.length<20){
        alert('you are write wrong code. code must length minimum 20 characters');
        m6.style.border="2px solid red";
        var data6=document.getElementById('text-area6').value;
        var code6=document.getElementById('yourcode6');
        code6.innerHTML=""; 
    }
    else{
        m6.style.border="2px solid green";
        var data6=document.getElementById('text-area6').value;
        var code6=document.getElementById('yourcode6');
        code6.innerHTML=data6; 
        localStorage.setItem("p6",code6.innerHTML);
        code6.innerHTML=localStorage.getItem("p6");
    }

}

*/

