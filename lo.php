<html>
    <head>

    </head>
    <body>

    <form class="form m-auto col-md-4 col-sm-6 p-5" action="login.php" method="post" onclick="">
                    <h2>Log In</h2>
                
                <div class="form-floating mb-3 col-md-12 mt-5">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    <label for="username">Username</label>
                    <span id="nameerr"></span>
                  </div>
                  <br>
                  <div class="form-floating col-md-12">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                    <span id="nameerr"></span>
                  </div><br><br>
                  <button type="submit" id="submit" class="col-md-5 py-2 px-1">submit</button>
                </form>


            <?php
                $name=$_POST['username'];
                $pass=$_POST['password'];
                echo $name;
                echo $pass;


            ?>
    </body>
</html>