<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <title>Login page</title>
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
          $password=mysqli_real_escape_string($connection,$_POST['password']);
          $que="select * from Userdata where (email=? or regid=?) and password=?;";

          $stmt1=mysqli_stmt_init($connection);

          if(!mysqli_stmt_prepare($stmt1,$que)){
          }

          else{
              mysqli_stmt_bind_param($stmt1,"sss",$email,$email,$password);
              mysqli_stmt_execute($stmt1);
              $results=mysqli_stmt_get_result($stmt1);
              $data=mysqli_num_rows($results);
              if($data<=0){
                $error="Invalid Email or RegId or Password";
              }
              else{
                while($row=mysqli_fetch_assoc($results)){
                  if($row['level']=='advance'){
                      header("Location:advance.php");
                  }
                  else{
                    header("Location:begginer.php");
                  }
                }
              }            
            
          }

        }
      ?>
      <?php
        session_start();
        $_SESSION['id']=$email;
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
                            <a href="register.php" class="nav-link"><b>Register</b></a>
                        </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div>

        <div class="container-big-2">
            <div class="container justify-content-around pt-5">
                <form class="form m-auto col-md-4 col-sm-12 p-5 text-light" action="" method="post">
                    <h2 class="text-light">Log In</h2><br>
                    <span class="error"><?php echo $error;?></span>
                <div class="form-floating mb-3 col-md-12 mt-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    <label for="email">Email or RegId</label>
                    <span id="nameerr"></span>
                  </div>
                  <br>
                  <div class="form-floating col-md-12 mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                    <span id="nameerr"></span>
                  </div>
                  <span class="text-end">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="forgot_password.php" class="text-light">  Forgot Password</a></span>

                  
                  <br><br><button type="submit" id="submit" class="col-md-5 py-2 px-1">submit</button><br><br>
                <small>Don't You have an Account ? </small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="register.php" class="text-light">Register</a>

                </form>
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

    </body>
</html>