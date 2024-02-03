<html>
    <head>
        <style>

            #img{
                background-image: url('tools/logo.jpg');
                height: 720px;
                background-position: center;
                background-size: cover;
            }
        </style>
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <title>Certificate page</title>
        <meta name="desciption" content="VENKAIAH KOLLETI">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>

    <body class="bg-dark">


            <div class="container text-center text-light pt-5"><br><Br>
                <h2>Please Provide Any Of Below Metioned Document To Print Your Name On The Certificate...</h2>
                <p>(Aadhar Card, Pan Card, Driving Liecense , Passport , Institution Id Card)</p>
                <div class="pt-5 mt-5">
                        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name="img" />
                            <button type="submit">upload</button>
                            <span class="text-danger"><?php echo $error;?></span>
                        </form>
                </div>



                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if ((isset($_FILES["img"])) && ($_FILES["img"]["error"] == 0)) {
                                $allowed = array("jpg", "jpeg", "png");

                                $name = $_FILES["img"]["name"];
                                $type = $_FILES["img"]["type"];
                                $size = $_FILES["img"]["size"];
                                $tmpname = $_FILES["img"]["tmp_name"];


                                $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                                if (!in_array($ext, $allowed)) {
                                    echo "Please select the jpg jpeg png format only";
                                }
                                $maxsize = 1024 * 1024 * 5;
                                if ($size > $maxsize) {
                                     echo "Select the image with size less than 5 MB";
                                }

                                if (in_array($ext, $allowed)) {
                                    if (move_uploaded_file($tmpname, "file_moves/" . $name)) {
                                        header("Location:certificate_generate.php");
                                    } 
                                    else {
                                        echo "Could not upload file";
                                    }
                                } else {
                                    echo "Type not matched";
                                }
                            } else {
                                 echo "Error while uploading the file";
                            }
                        } else {
                            echo "Please select the Image";
                        }

                        ?>

            <!--</div>
        <div class="container-1 bg-dark">
            <div class="container text-center p-5" id="img"><br><Br><Br><Br><br><br>
                    <h4 class="m-5 p-5"><script>document.write(prompt("Enter Your Full Name To Print On Certificate"));</script></h4>
                </p>
            </div>-->

        </div>
    </body>
</html>