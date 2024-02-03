<?php
            
            session_start();
            $reg_id=$_SESSION['regid'];
            $password=$_SESSION['password'];         

?>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <title>Quiz</title>
        <meta name="desciption" content="VENKAIAH KOLLETI">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="quiz.css">
        <script type="text/javascript" src="quiz.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container-big-1">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand ms-3" href="#"><img src="tools/logo2.png" width="150px" height="50px"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-col" >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar-col">
                    <ul class="navbar-nav nav-underline ms-auto me-3">
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link"><b>Home</b></a>
                        </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div>

        <div class="container-bigD. script-2">
            <div class="container p-5">

                <div class="quiz-container m-auto col-md-9 bg-light" id="quiz">

                    <div class="quiz-header row justify-content-between py-5 px-5 col-md-12 m-auto bg-primary">
                        <b class="col text-light" id="que">1 Out Of 10 Questions</b>
                        <div class="col text-end"><b id="countdown">Timer</b></div>                        

                    </div>
                    
                    <div class="quiz-body p-5">
                    <form name="quiz" action="advance.php" method="post">
                        <div class="qa-set" id="al">
                            <h4>1. What does HTML stand for?</h4><br>
                            <div class="qa-ans-row">
                                <input type="radio" name="a1" value="Home Tool Markup Language" onclick="setTimeout(next, 1000);"><span>Home Tool Markup Language</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a1" value="Hyper Text Mark Up Language" valid="valid" onclick="setTimeout(next, 1000);"><span>Hyper Text Mark Up Language</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a1" value="Hyperlinks Text Mark Up Language" onclick="setTimeout(next, 1000);"><span>Hyperlinks Text Mark Up Language</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a1" value="Hyper Tool Markup Language" onclick="setTimeout(next, 1000);"><span>Hyper Tool Markup Language</span>	
                            </div>
                            
                        </div>  
                        
                        <div class="qa-set" id="al2">
                            <h4>2.Choose the correct HTML element for the largest heading ?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a2" value="head" onclick="setTimeout(next, 1000);"><span>head</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a2" value="heading" onclick="setTimeout(next, 1000);"><span>heading</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a2" value="h1" valid="valid" onclick="setTimeout(next, 1000);"><span>h1</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a2" value="h6" onclick="setTimeout(next, 1000);"><span>h6</span>	
                            </div>
                            
                        </div>


                        <div class="qa-set" id="al3">
                            <h4>3. Inside which HTML element do we put the JavaScript..?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a3" value="A. javascript" onclick="setTimeout(next, 1000);"><span>A. javascript</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a3" value="B. scripting" onclick="setTimeout(next, 1000);"><span>B. scripting</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a3" value="C. js" onclick="setTimeout(next, 1000);"><span>C. js</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a3" value="D. script" valid="valid" onclick="setTimeout(next, 1000);"><span>D. script</span>	
                            </div>
                            
                        </div>

                        <div class="qa-set" id="al4">
                            <h4>4. What is the correct syntax for referring to an external script called "xxx.js"?...?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a4" value="1987" onclick="setTimeout(next, 1000);"><span>&lt;script href="xxx.js"&gt;</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a4" value="1978" valid="valid" onclick="setTimeout(next, 1000);"><span>&lt;script src="xxx.js"&gt;</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a4" value="1977" onclick="setTimeout(next, 1000);"><span>&lt;script name="xxx.js"&gt;</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a4" value="1997" onclick="setTimeout(next, 1000);"><span>&lt;script class="xxx.js"&gt;</span>	
                            </div>
                            
                        </div>
                
                
               
                        <div class="qa-set" id="al5">
                            <h4>5. What does PHP stand for.....?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a5" value="hypertext preprocessor" valid="valid" onclick="setTimeout(next, 1000);"><span>hypertext preprocessor</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a5" value="hyper preprocessor" onclick="setTimeout(next, 1000);"><span>hyper preprocessor</span>	
                            </div>
                            
                        </div>
                
                
               
                
                        <div class="qa-set" id="al6">
                            <h4>6. which keyword is used to wrap content in PHP....?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a6" value="echo" valid="valid" onclick="setTimeout(next, 1000);"><span>echo</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a6" value="" onclick="setTimeout(next, 1000);"><span>print</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a6" value="" onclick="setTimeout(next, 1000);"><span>document.write()</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a6" value="" onclick="setTimeout(next, 1000);"><span>console.log()</span>	
                            </div>
                            
                        </div>
                      
                
                
                        <div class="qa-set" id="al7">
                            <h4>7. ______ function is used to connect database through mysqli...?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a7" value="" onclick="setTimeout(next, 1000);"><span>mysqli_connection()</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a7" value="" onclick="setTimeout(next, 1000);"><span>mysqli_con()</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a7" value="mysqli_connect()"  valid="valid" onclick="setTimeout(next, 1000);"><span>mysqli_connect()</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a7" value="" onclick="setTimeout(next, 1000);"><span>connect_mysqli()</span>	
                            </div>
                            
                        </div>


                        <div class="qa-set" id="al8">
                            <h4>8. ______ function is used to run query in mysqli...?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a8" value="" onclick="setTimeout(next, 1000);"><span>mysqli_run()</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a8" value="" onclick="setTimeout(next, 1000);"><span>query()</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a8" value="mysqli_query()"  valid="valid" onclick="setTimeout(next, 1000);"><span>mysqli_query()</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a8" value="" onclick="setTimeout(next, 1000);"><span>query_mysqli()</span>	
                            </div>
                            
                        </div>


                        <div class="qa-set" id="al9">
                            <h4>9. ______ Where we can link the Bootstrap CDN links ...?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a9" value="" onclick="setTimeout(next, 1000);"><span>body</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a9" value="" onclick="setTimeout(next, 1000);"><span>below body</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a9" value="head"  valid="valid" onclick="setTimeout(next, 1000);"><span>head</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a9" value="" onclick="setTimeout(next, 1000);"><span>above head</span>	
                            </div>
                            
                        </div>


                        <div class="qa-set" id="al10">
                            <h4>10. ______ Which contextual class is used to create an orange text color ...?</h4>
                            <div class="qa-ans-row">
                                <input type="radio" name="a10" value="" onclick="setTimeout(next, 1000);"><span>text-orange</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a10" value="" onclick="setTimeout(next, 1000);"><span>text-danger</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a10" value="text-warning"  valid="valid" onclick="setTimeout(next, 1000);"><span>text-warning</span>	
                            </div>
                            <div class="qa-ans-row">
                                <input type="radio" name="a10" value="" onclick="setTimeout(next, 1000);"><span>text-secondary</span>	
                            </div>
                            
                        </div>



                
                    </form>
                     
                        
                        <div class="quiz-footer text-end mx-5 mt-3">
                            <br>
                            <button type="button" class="btn btn-primary px-4" id="btn" >Next</button>
                            <button type="submit" class="btn btn-primary px-4" id="btn2" onclick="che()">Check Your Score</button>
    
                        </div>
                        </div> 
                </div>

                <div class="qa-set-result p-5" id="al11">
                        <div class="result text-center"><br>
                            <h1 id="congratulations">Congratulations</h1><br><Br>
                            <h3 id="marks" class="text-warning"></h3><br><br>
                            <h5 id="level"></h5><br>
                            <a href="advance.php"><button  class="btn btn-primary" id="advance" >Start Learning Advance level</button></a><br><br>
                            <a href="begginer.php"><button class="btn btn-primary" id="beg" >Start Learning Begginer Level</button></a>
                        </div>
                </div>
                       

            </div>
        </div>





        <div class="footer bg-dark text-light">
                <div class="container pt-5">
                    <div class="row text-center">
                        <div class="col-md-4 col-sm-12">
                            <h5>About Us</h5>
                            <p>Encourage the student in Easiest way of learning. For free of cost
                                based on their Previous knowledge
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12">
                        <h5>Contact Us</h5>
                            <p>learnlot@gmail.com<br>
                                Andhra Pradesh,India.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h5>Social Media</h5>
                            <i class="fab fa-telegram"></i>&nbsp &nbsp &nbsp &nbsp
                            <i class="fab fa-instagram"></i>&nbsp &nbsp &nbsp &nbsp
                            <i class="fab fa-facebook"></i>
                            
                        </div>
                    </div>
                </div>
            </div>





                        



        



        <script>

            var btn=document.getElementById('btn');
            var count=0;
            var watch=0;
            var observe=0;
            btn.addEventListener('click',e=>{
                next();
            });



            timer(50);

            function next(){
                if(count===8){
                    document.getElementById('btn').style.display="none";
                    document.getElementById('btn2').style.display="inline";
                }
                var data=document.querySelectorAll('.qa-set');
                var que=document.getElementById('que');
                data[count].style.display="none";
                data[count+1].style.display="inline";
                count=count+1;
                watch=count;
                que.innerHTML=(count+1)+" Out Of 10 Questions";
                

            }


            function timer(timeleft){
                    
                    var l=0;
                    var downloadTimer = setInterval(function(){
                    if(timeleft<=0){
                        clearInterval(downloadTimer);
                        document.getElementById("countdown").innerHTML = "Finished";
                        document.getElementById('btn').style.display="none";
                        document.getElementById('btn2').style.display="inline";
                        var data=document.querySelectorAll('.qa-set');
                        data[count].style.display="none";
                    }
                    else {
                        document.getElementById("countdown").innerHTML = "00 :"+timeleft ;
                    }
                    timeleft -= 1;
                    }, 1000);                

            }

            function timebar(){
                var timeleft = 10;
                    var downloadTimer = setInterval(function(){
                    if(timeleft <= 0){
                        clearInterval(downloadTimer);
                    }
                    document.getElementById("progressBar").value = 10 - timeleft;
                    timeleft -= 1;
                    }, 1000);
            }



            function ches(){
                alert("hii");
            }
            var adv=document.getElementById('advance');
            adv.addEventListener('click',e=>{
                var count=che();
            });

        function che() {
            var c=0;
            document.getElementById('al11').style.display="inline";
            document.getElementById('quiz').style.display="none";
            var q1=document.quiz.a1.value;
            var q2=document.quiz.a2.value;
            var q3=document.quiz.a3.value;
            var q4=document.quiz.a4.value;
            var q5=document.quiz.a5.value;
            var q6=document.quiz.a6.value;
            var q7=document.quiz.a7.value;
            var q8=document.quiz.a8.value;
            var q9=document.quiz.a9.value;
            var q10=document.quiz.a10.value;


            
            if (q1=="Hyper Text Mark Up Language"){ (c++)}
            if (q2=="h1"){ (c++)}
            if (q3=="D. script"){ (c++)}
            if (q4=="1978"){(c++)}
            if (q5=="hypertext preprocessor"){(c++)}
            if (q6=="echo"){(c++)}
            if (q7=="mysqli_connect()"){(c++)}
            if (q8=="mysqli_query()"){(c++)}
            if (q9=="head"){(c++)}
            if (q10=="text-warning"){(c++)}
  


            var marks=document.getElementById('marks');
            marks.innerHTML="You Got "+c+" Marks Out of 10"

            var level=document.getElementById('level');
            var advance=document.getElementById('advance');
            var begginer=document.getElementById('begginer');
            console.log("count"+c);
            if(c>=7){
                level.innerHTML="You Are Qualified To Advance Level";
                document.getElementById('beg').style.display="none";
                                
            }
            else{
                level.innerHTML="You Are Qualified To Begginer Level";
                document.getElementById('advance').style.display="none";
            }
                         
        }

        </script>





    </body>
</html>