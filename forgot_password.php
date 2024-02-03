<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <title>Forgot Password</title>
        <meta name="desciption" content="VENKAIAH KOLLETI">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login.css">
        <script type="text/javascript" src="login.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>

    <?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
          $connection=mysqli_connect("localhost","root","password","WTproject");
          $email=mysqli_real_escape_string($connection,$_POST['email']);
          $dob=mysqli_real_escape_string($connection,$_POST['dob']);
          $password=mysqli_real_escape_string($connection,$_POST['password']);
          $cpassword=mysqli_real_escape_string($connection,$_POST['cpassword']);


          $que="select * from Userdata where regid=? and dob=?;";

          $stmt1=mysqli_stmt_init($connection);

          if(!mysqli_stmt_prepare($stmt1,$que)){
          }

          else{
              mysqli_stmt_bind_param($stmt1,"ss",$email,$dob);
              mysqli_stmt_execute($stmt1);
              $results=mysqli_stmt_get_result($stmt1);
              $data=mysqli_num_rows($results);
              if($data<=0){
                $error="Invalid RegId or DOB Entered for Update Password";
              }
              else{
                $que1="update Userdata set password='$password' where regid='$email';";
                $que2="update Userdata set cpassword='$password' where regid='$email';";
                if(mysqli_query($connection,$que1) and mysqli_query($connection,$que2)){
                $errorsuccess="Password Update Successfully, You Can Login Now with Updated Password";

                }
                else{
                $error="Password Updated Unsuccessful please Retry";

                }
              }            
            
          }

        }
      ?>






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
                            <a href="index.php" class="nav-link"><b>Home</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="login.php" class="nav-link"><b>Log In</b></a>
                        </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div>

        <div class="container-big-2" style="height: auto;">
            <div class="container justify-content-around pt-5">
                <form class="form m-auto col-md-6 col-sm-12 p-5 text-light" action="" method="post">
                    <br><h2 class="text-light">Forgot Password</h2><br>
                    <span class="error"><?php echo $error;?></span>
                    <span class="error text-warning"><?php echo $errorsuccess;?></span>

                <div class="form-floating mb-3 col-md-12 mt-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    <label for="email">RegId</label>
                  </div>
                  

                  <div class="form-floating mb-3 col-md-12 mt-3">
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="dob">
                    <label for="dob">DOB</label>
                  </div>
                  

                  <div class="form-floating col-md-12 mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                    <span id="passworderr" class="text-danger"></label>

                  </div>
                

                  <div class="form-floating col-md-12 mb-3">
                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="cPassword">
                    <label for="cpassword">Confirm Password</label>
                    <span id="nameerr"></span>
                    <span id="cpassworderr" class="text-danger"></label>

                  </div>

                  
                  <br><button type="submit" id="submit" class="col-md-5 py-2 px-1">submit</button><br><br>
                <small>Don't You have an Account ? </small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="register.php" class="text-light">Register</a>

                </form>
                <br><br>
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
              var form=document.querySelector('form');
                form.addEventListener('submit',e=>{
                    if(!validate()){
                        e.preventDefault();
                    };
                });

            function validate(){
                var password=document.getElementById('password').value;
                var cpassword=document.getElementById('cpassword').value;
                var passerr=document.getElementById('passworderr');
                var cpasserr=document.getElementById('cpassworderr');
                let passchk=/(^\w{1,}\W{1,}\d{1,})$/;
                let cpasschk=/(^\w{1,}\W{1,}\d{1,})$/;
                var isvalid=false;
                var ispassword=false;
                var iscpassword=false;

                  if(password==""){
                      passerr.innerText="Please Enter The Password";
                  }
                  else if(!passchk.test(password)){
                      passerr.innerText="Please Enter the Strong Password...Password must be followed by any case alphabets ,special character ended with of digits";
                  }
                  else if(password.length<8){
                      passerr.innerText="Password must be atleast 8 characters";
                  }
                  else{
                      passerr.innerText="";
                      ispassword=true;
                  }


                  if(cpassword==""){
                      cpasserr.innerText="Please Enter The Confirm Password";
                  }
                  else if(password!=cpassword){
                      cpasserr.innerText="Password and Confirm Password Must Be Same";
                  }
                  else{
                      cpasserr.innerText="";
                      iscpassword=true;
                  }

                  if(ispassword && iscpassword){
                    isvalid=true;
                  }
                  return isvalid;                                  

                }

            </script>

    </body>
</html>