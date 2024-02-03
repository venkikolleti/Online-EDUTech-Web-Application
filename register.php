<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <title>Registration page</title>
        <meta name="desciption" content="VENKAIAH KOLLETI">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="register.css">
        <script type="text/javascript" src="register.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>



    <?php

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $connection=mysqli_connect("localhost","root","password","WTproject");

                $fullname=mysqli_real_escape_string($connection,$_POST['username']);
                $email=mysqli_real_escape_string($connection,$_POST['email']);
                $mobile=mysqli_real_escape_string($connection,$_POST['mobilenumber']);
                $regid=mysqli_real_escape_string($connection,$_POST['regid']);
                $dob=mysqli_real_escape_string($connection,$_POST['dob']);
                $clgname=mysqli_real_escape_string($connection,$_POST['clgname']);
                $password=mysqli_real_escape_string($connection,$_POST['password']);
                $cpassword=mysqli_real_escape_string($connection,$_POST['cpassword']);
                $level='adv/beg';

                $query1="select * from Userdata where email=? or regid=?";

                $stmt1=mysqli_stmt_init($connection);

                if(!mysqli_stmt_prepare($stmt1,$query1)){
                }

                else{
                    mysqli_stmt_bind_param($stmt1,"ss",$email,$regid);
                    mysqli_stmt_execute($stmt1);
                    $results=mysqli_stmt_get_result($stmt1);
                    $data=mysqli_num_rows($results);
                    if($data > 0){
                        header("Location:store1.php");
                    }
                    else{
                        header("Location:store.php");
                    }
                    
                }


                $que="insert into Userdata values('$fullname','$email','$mobile','$regid','$dob','$clgname','$password','$cpassword',0);";
                $query="insert into Userdata values(?,?,?,?,?,?,?,?,?);";

                $stmt=mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt,$query)){
                }
                else{
                    mysqli_stmt_bind_param($stmt,"sssssssss",$fullname,$email,$mobile,$regid,$dob,$clgname,$password,$cpassword,$level);
                    mysqli_stmt_execute($stmt);
                }


            }
    
    ?>

    <?php
        session_start();
        $_SESSION['regid']=$regid;
        $_SESSION['password']=$password;
        $_SESSION['id']=$regid;
    ?>




        <div class="container-big-1">
            <nav class="navbar navbar-expand-lg bg-dark" id="navbar">
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

        <div class="container-big-2 p-5">
            <div class="container justify-content-around pt-4 border col-md-7" id="container-big-2">
                <br>
                <h2 class="text-center text-light">Registration</h2><br>
                <form  action="" method="post" class="text-light">

                    <div class="row gy-3 col-md-10 m-auto justify-content-between">
                        <div class="form-floating col-md-6 col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Full name" >
                            <label class="mx-3" for="username" >Full Name</label>
                            <span id="nameerr" class="error"></span>
                        </div>
                        <div class="form-floating col-md-6 col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                            <label for="email" class="mx-3"> Email</label>
                            <span id="emailerr" class="error"></span>
                        </div>
                    </div>
<br>

                    <div class="row gy-3 col-md-10 m-auto justify-content-between">
                        <div class="form-floating col-md-6 col-sm-10">
                            <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobilenumber" >
                            <label for="mobilenumber" class="mx-3">Mobile Number</label>
                            <span id="mobileerr" class="error"></span>
                        </div>
                        <div class="form-floating col-md-6 col-sm-10">
                            <input type="text" class="form-control" id="regid" name="regid" placeholder="regid" >
                            <label for="regid" class="mx-3">Register Id Number</label>
                            <span id="regiderr" class="error"></span>
                        </div>    
                    </div>
            <br>        
                    
                    <div class="row gy-3 col-md-10 m-auto justify-content-between">
                        <div class="col-md-6 col-sm-10">
                            <label for="dob" class="form-label text-light">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="dob" >
                            <span id="doberr" class="error"></span>
                        </div>
                        <div class="form-floating col-md-6 col-sm-10 mt-4">
                            <input type="text" class="form-control" id="clgname" name="clgname" placeholder="clgname" >
                            <label for="clgname" class="mx-3">Collage Name</label>
                            <span id="clgnameerr" class="error"></span>
                        </div>
                    </div>
            <br>      
                    
                    <div class="row gy-3 col-md-10 m-auto justify-content-between">
                        <div class="form-floating col-md-6 col-sm-10 col-xs-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="password" >
                            <label for="password" class="mx-3">Password</label>
                            <span id="passerr" class="error"></span>
                        </div>
                        <div class="form-floating col-md-6 col-sm-10 col-xs-10">
                            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="cpassword" >
                            <label for="cpassword" class="mx-3">Confirm Password</label>
                            <span id="cpasserr" class="error"></span>
                        </div>
                    </div>
<br><br>
                <div class="text-center">
                    <button type="submit" id="submit"  class="col-md-3 col-sm-10 py-2 px-1">submit</button>
                </div>
                <br><Br>
                </form>
            </div>
        </div>


        <div class="footer bg-dark text-secondary">
                <div class="container pt-5">
                    <div class="row text-center">
                        <div class="col-md-4 col-sm-12">
                            <h5 class="text-light">About Us</h5>
                            <p>Encourage the student in Easiest way of learning. For free of cost
                                based on their Previous knowledge
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12">
                        <h5 class="text-light">Contact Us</h5>
                            <p>learnlot@gmail.com<br>
                                Andhra Pradesh,India.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h5 class="text-light">Social Media</h5>
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

                


       </script>







    </body>
</html>