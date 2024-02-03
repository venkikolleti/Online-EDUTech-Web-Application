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
                $error="Invalid Email or RegId Entered for Update Password";
              }
              else{
                $que1="update Userdata set password='$password' where regid='$email';";
                $que2="update Userdata set cpassword='$password' where regid='$email';";
                if(mysqli_query($connection,$que1) and mysqli_query($connection,$que2)){
                    echo $password;
                    echo $email;
                    echo $dob;
                    echo "success";
                }
                else{
                    echo "failed";
                }
              }            
            
          }

        }
      ?>
