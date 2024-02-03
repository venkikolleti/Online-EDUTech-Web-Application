<?php
    session_start();
    $reg_id=$_SESSION['regid'];

    $connection=mysqli_connect("localhost","root","password","WTproject");
    $que="update Userdata set level='advance' where regid='$reg_id'";
    if(mysqli_query($connection,$que)){
    }
    else{
    }
?>




<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <title>Advance page</title>
        <meta name="desciption" content="VENKAIAH KOLLETI">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="advance.css">
        <script type="text/javascript" src="advance.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>
        
            


            <nav class="navbar navbar-expand-lg " id="navbar">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-col" >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar-col">
                    <ul class="navbar-nav navbar-pills">
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link " id="html"><b>HMTL</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link" id="javascript"><b>JAVASCRIPT</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link" id="php"><b>PHP</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link" id="mysql"><b>MYSLQ</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link" id="bootstrap"><b>BOOTSTRAP</b></a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link" id="jquery"><b>JQUERY</b></a>
                        </li>
                    </ul>
                  </div>
                </div>
            </nav>


        <div class="container-big-1" id="html-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group" id="htm">
                       <a href=""><li class="list-group-item text-light">HTML Basic Tags</li></a>
                       <a href="#heading"><li class="list-group-item">HTML Headings</li></a>
                       <a href="#paragraph"><li class="list-group-item">HTML Paragraphs</li></a>
                       <a href=""><li class="list-group-item">HTML Attributes</li></a>
                       <a href=""><li class="list-group-item">HTML Tables</li></a>
                       <a href=""><li class="list-group-item">HTML Images</li></a>
                       <a href=""><li class="list-group-item">HTML Lists</li></a>
                       <a href=""><li class="list-group-item">HTML Class</li></a>
                       <a href=""><li class="list-group-item">HTML Id</li></a>
                       <a href=""><li class="list-group-item">HTML Frames</li></a>
                       <a href=""><li class="list-group-item">HTML Forms</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs validate</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs patterns</li></a>


                    </ul>
                </div>

                <div class="container col-md-10 html-body p-5">
                    <h2 class="text-light">
                        Html Basics
                    </h2>
                    <div class="code p-3 col-md-4 col-sm-10 ms-5 mt-3">
                            <b>&lt;!DOCTYPE html&gt;</b><br>
                            <b>&lt;html&gt;</b><br>
                            <b>&lt;body&gt;</b><br>
                            //write code for this part in the below questions.....<br>
                            <b>&lt;/body&gt;</b><br>
                            <b>&lt;/html&gt;</b><br>
                    </div>
                    <br><Br><Br><BR>
                    <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que">
                                    <div class="que-text text-light col-md-6 col-sm-5">
                                    <h5 >write two simple paragraph texts and use multiline comment on it.</h5><br>
                                        <span class="text-secondary">Html , html paragraph</span>
                                    </div>
                                    
                                    <div class="bt col-md-6 col-sm-4 text-end "><Br>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Solve challenge</button>&nbsp &nbsp
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" onclick="display1()">&nbsp &nbsp view code &nbsp &nbsp</button>

                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Write code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <textarea rows="5" cols="40" id="text-area1" name="text-area"></textarea>
                                                        </form> 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="sub">save changes</button>
                                                </div>
   
                                                </div>

                                            </div>
                                            </div>


                                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Your code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <p id="yourcode1"></p>
        
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                
                                                </div>

                                            </div>
                                            </div>

                                    </div>
                            </div>
                        </div>
   
<br><br><br>
                        
                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que">
                                    <div class="que-text text-light col-md-6 col-sm-5">
                                    <h5 >Write code using all Heading Types </h5><br>
                                        <span class="text-secondary">Html , html heading</span>
                                    </div>
                                    
                                    <div class="bt col-md-6 col-sm-4 text-end "><Br>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop21">Solve challenge</button>&nbsp &nbsp
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop22" onclick="display2()">&nbsp &nbsp view code &nbsp &nbsp</button>

                                            <div class="modal fade" id="staticBackdrop21" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Write code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <textarea rows="5" cols="40" id="text-area2" name="text-area2"></textarea>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">save changes</button>
                                                </div>
                                                </form>
                                                </div>

                                            </div>
                                            </div>


                                            <div class="modal fade" id="staticBackdrop22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Your code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <p id="yourcode2"></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                
                                                </div>

                                            </div>
                                            </div>

                                    </div>
                            </div>
                        </div>


<br><br><br>

                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que">
                                    <div class="que-text text-light col-md-6 col-sm-5">
                                    <h5>create paragraph element with id and class attributes </h5><Br>
                                        <span class="text-secondary">Html , html attributes</span>
                                    </div>
                                    
                                    <div class="bt col-md-6 col-sm-4 text-end "><Br>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop31">Solve challenge</button>&nbsp &nbsp
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop32" onclick="display3()">&nbsp &nbsp view code &nbsp &nbsp</button>

                                            <div class="modal fade" id="staticBackdrop31" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Write code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <textarea rows="5" cols="40" id="text-area3" name="text-area3"></textarea>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">save changes</button>
                                                </div>
                                                </form>
                                                </div>

                                            </div>
                                            </div>


                                            <div class="modal fade" id="staticBackdrop32" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Your code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <p id="yourcode3"></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                
                                                </div>

                                            </div>
                                            </div>

                                    </div>
                            </div>
                        </div>


<br><br><br>


                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que">
                                    <div class="que-text text-light col-md-6 col-sm-5">
                                    <h5 >create a table with two rows and two columns with sample data </h5><br>
                                        <span class="text-secondary">Html , html table</span>
                                    </div>
                                    
                                    <div class="bt col-md-6 col-sm-4 text-end "><Br>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop41">Solve challenge</button>&nbsp &nbsp
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop42" onclick="display4()">&nbsp &nbsp view code &nbsp &nbsp</button>

                                            <div class="modal fade" id="staticBackdrop41" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Write code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <textarea rows="5" cols="40" id="text-area4" name="text-area2"></textarea>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">save changes</button>
                                                </div>
                                                </form>
                                                </div>

                                            </div>
                                            </div>


                                            <div class="modal fade" id="staticBackdrop42" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Your code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <p id="yourcode4"></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                
                                                </div>

                                            </div>
                                            </div>

                                    </div>
                            </div>
                        </div>


<br><br><br>

                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que">
                                    <div class="que-text text-light col-md-6 col-sm-5">
                                    <h5 >insert an image with width and height 500px </h5><br>
                                        <span class="text-secondary">Html , html image</span>
                                    </div>
                                    
                                    <div class="bt col-md-6 col-sm-4 text-end "><Br>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop51">Solve challenge</button>&nbsp &nbsp
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop52" onclick="display5()">&nbsp &nbsp view code &nbsp &nbsp</button>

                                            <div class="modal fade" id="staticBackdrop51" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Write code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <textarea rows="5" cols="40" id="text-area5" name="text-area2"></textarea>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">save changes</button>
                                                </div>
                                                </form>
                                                </div>

                                            </div>
                                            </div>


                                            <div class="modal fade" id="staticBackdrop52" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Your code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <p id="yourcode5"></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                
                                                </div>

                                            </div>
                                            </div>

                                    </div>
                            </div>
                        </div>



                        <br><br><br>


                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que">
                                    <div class="que-text text-light col-md-6 col-sm-5">
                                    <h5 >insert an image with width and height 500px </h5><br>
                                        <span class="text-secondary">Html , html image</span>
                                    </div>
                                    
                                    <div class="bt col-md-6 col-sm-4 text-end "><Br>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop61">Solve challenge</button>&nbsp &nbsp
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop62" onclick="display6()">&nbsp &nbsp view code &nbsp &nbsp</button>

                                            <div class="modal fade" id="staticBackdrop61" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Write code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <textarea rows="5" cols="40" id="text-area6" name="text-area6"></textarea>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">save changes</button>
                                                </div>
                                                </form>
                                                </div>

                                            </div>
                                            </div>


                                            <div class="modal fade" id="staticBackdrop62" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Your code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <p id="yourcode6"></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                
                                                </div>

                                            </div>
                                            </div>

                                    </div>
                            </div>
                        </div>


<br><Br>




                </div>
        </div>






        <div class="container-big-2 " id="javascript-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item ">Javascript Basics</li></a>
                       <a href=""><li class="list-group-item">Javascript Statements</li></a>
                       <a href=""><li class="list-group-item">Javascript Comments</li></a>
                       <a href=""><li class="list-group-item">Javascript Variables</li></a>
                       <a href=""><li class="list-group-item">Javascript Datatypes</li></a>
                       <a href=""><li class="list-group-item">Javascript Functions</li></a>
                       <a href=""><li class="list-group-item">Javascript Arrays</li></a>
                       <a href=""><li class="list-group-item">Javascript If Else</li></a>
                       <a href=""><li class="list-group-item">Javascript Loops</li></a>
                       <a href=""><li class="list-group-item">Javascript RegExp</li></a>
                       <a href=""><li class="list-group-item">DOM Methods</li></a>
                       <a href=""><li class="list-group-item">DOM Documents</li></a>
                       <a href=""><li class="list-group-item">DOM Elements</li></a>
                       <a href=""><li class="list-group-item">DOM Forms</li></a>
                       <a href=""><li class="list-group-item">DOM Event Listeners</li></a>

                    </ul>
                </div>

                <div class="container p-5">
                <h2>JavaScript Programs</h2><br>
                              

                </div>
            
        </div>







        <div class="container-big-3 container-big-1" id="php-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item ">PHP Basic Tags</li></a>
                       <a href=""><li class="list-group-item">HTML Headings</li></a>
                       <a href=""><li class="list-group-item">HTML Paragraphs</li></a>
                       <a href=""><li class="list-group-item">HTML Paragraphs</li></a>
                       <a href=""><li class="list-group-item">HTML Attributes</li></a>
                       <a href=""><li class="list-group-item">HTML Tables</li></a>
                       <a href=""><li class="list-group-item">HTML Images</li></a>
                       <a href=""><li class="list-group-item">HTML Lists</li></a>
                       <a href=""><li class="list-group-item">HTML Class</li></a>
                       <a href=""><li class="list-group-item">HTML Id</li></a>
                       <a href=""><li class="list-group-item">HTML Frames</li></a>
                       <a href=""><li class="list-group-item">HTML Forms</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs</li></a>


                    </ul>
                </div>

                <div class="container html-body p-5">
                
                </div>
            
        </div>




        <div class="container-big-4 container-big-2" id="mysql-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item ">mysql Basic Tags</li></a>
                       <a href=""><li class="list-group-item">HTML Headings</li></a>
                       <a href=""><li class="list-group-item">HTML Paragraphs</li></a>
                       <a href=""><li class="list-group-item">HTML Paragraphs</li></a>
                       <a href=""><li class="list-group-item">HTML Attributes</li></a>
                       <a href=""><li class="list-group-item">HTML Tables</li></a>
                       <a href=""><li class="list-group-item">HTML Images</li></a>
                       <a href=""><li class="list-group-item">HTML Lists</li></a>
                       <a href=""><li class="list-group-item">HTML Class</li></a>
                       <a href=""><li class="list-group-item">HTML Id</li></a>
                       <a href=""><li class="list-group-item">HTML Frames</li></a>
                       <a href=""><li class="list-group-item">HTML Forms</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs</li></a>


                    </ul>
                </div>

                <div class="container p-5">
                   
                </div>
            
        </div>




        <div class="container-big-5 container-big-1" id="bootstrap-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item ">bootstrap Basic Tags</li></a>
                       <a href=""><li class="list-group-item">HTML Headings</li></a>
                       <a href=""><li class="list-group-item">HTML Paragraphs</li></a>
                       <a href=""><li class="list-group-item">HTML Paragraphs</li></a>
                       <a href=""><li class="list-group-item">HTML Attributes</li></a>
                       <a href=""><li class="list-group-item">HTML Tables</li></a>
                       <a href=""><li class="list-group-item">HTML Images</li></a>
                       <a href=""><li class="list-group-item">HTML Lists</li></a>
                       <a href=""><li class="list-group-item">HTML Class</li></a>
                       <a href=""><li class="list-group-item">HTML Id</li></a>
                       <a href=""><li class="list-group-item">HTML Frames</li></a>
                       <a href=""><li class="list-group-item">HTML Forms</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs</li></a>


                    </ul>
                </div>

                <div class="container html-body p-5">
                    <h2 class="text-light">Javascript Documents</h2><br>
               

                </div>
            
        </div>



        <div class="container-big-6 container-big-1" id="jquery-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item ">jquery Basic Tags</li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>
                       <a href=""><li class="list-group-item"></li></a>


                    </ul>
                </div>

                <div class="container html-body p-5">             
                    <h2>Updated Soon</h2><br>
                </div>
            
        </div>

        <script>
            const activepage=window.location.pathname;
            console.log(activepage);
            const navlinks=document.querySelectorAll('.nav-item a').
            forEach(links=>{
                if(links.href.includes('${activepage}')){
                    links.classList.add('active');
                }
            });

            var html=document.getElementById('html');
            var javascript=document.getElementById('javascript');
            var php=document.getElementById('php');
            var mysql=document.getElementById('mysql');
            var bootstrap=document.getElementById('bootstrap');
            var jquery=document.getElementById('jquery');

            html.addEventListener('click',e=>{
                html.style.backgroundColor="blue";
                javascript.style.backgroundColor="";
                php.style.backgroundColor="";
                mysql.style.backgroundColor="";
                bootstrap.style.backgroundColor="";
                jquery.style.backgroundColor="";
                document.getElementById('html-content').style.display="flex";
                document.getElementById('javascript-content').style.display="none";
                document.getElementById('php-content').style.display="none";
                document.getElementById('mysql-content').style.display="none";
                document.getElementById('bootstrap-content').style.display="none";
                document.getElementById('jquery-content').style.display="none";
            });

            javascript.addEventListener('click',e=>{
                html.style.backgroundColor="";
                javascript.style.backgroundColor="blue";
                php.style.backgroundColor="";
                mysql.style.backgroundColor="";
                bootstrap.style.backgroundColor="";
                jquery.style.backgroundColor="";
                document.getElementById('html-content').style.display="none";
                document.getElementById('javascript-content').style.display="flex";
                document.getElementById('php-content').style.display="none";
                document.getElementById('mysql-content').style.display="none";
                document.getElementById('bootstrap-content').style.display="none";
                document.getElementById('jquery-content').style.display="none";
            });
            
            php.addEventListener('click',e=>{
                html.style.backgroundColor="";
                javascript.style.backgroundColor="";
                php.style.backgroundColor="blue";
                mysql.style.backgroundColor="";
                bootstrap.style.backgroundColor="";
                jquery.style.backgroundColor="";
                document.getElementById('html-content').style.display="none";
                document.getElementById('javascript-content').style.display="none";
                document.getElementById('php-content').style.display="flex";
                document.getElementById('mysql-content').style.display="none";
                document.getElementById('bootstrap-content').style.display="none";
                document.getElementById('jquery-content').style.display="none";
            });
            
            mysql.addEventListener('click',e=>{
                html.style.backgroundColor="";
                javascript.style.backgroundColor="";
                php.style.backgroundColor="";
                mysql.style.backgroundColor="blue";
                bootstrap.style.backgroundColor="";
                jquery.style.backgroundColor="";
                document.getElementById('html-content').style.display="none";
                document.getElementById('javascript-content').style.display="none";
                document.getElementById('php-content').style.display="none";
                document.getElementById('mysql-content').style.display="flex";
                document.getElementById('bootstrap-content').style.display="none";
                document.getElementById('jquery-content').style.display="none";
            });
            
            bootstrap.addEventListener('click',e=>{
                html.style.backgroundColor="";
                javascript.style.backgroundColor="";
                php.style.backgroundColor="";
                mysql.style.backgroundColor="";
                bootstrap.style.backgroundColor="blue";
                jquery.style.backgroundColor="";
                document.getElementById('html-content').style.display="none";
                document.getElementById('javascript-content').style.display="none";
                document.getElementById('php-content').style.display="none";
                document.getElementById('mysql-content').style.display="none";
                document.getElementById('bootstrap-content').style.display="flex";
                document.getElementById('jquery-content').style.display="none";
            });

            jquery.addEventListener('click',e=>{
                html.style.backgroundColor="";
                javascript.style.backgroundColor="";
                php.style.backgroundColor="";
                mysql.style.backgroundColor="";
                bootstrap.style.backgroundColor="";
                jquery.style.backgroundColor="blue";
                document.getElementById('html-content').style.display="none";
                document.getElementById('javascript-content').style.display="none";
                document.getElementById('php-content').style.display="none";
                document.getElementById('mysql-content').style.display="none";
                document.getElementById('bootstrap-content').style.display="none";
                document.getElementById('jquery-content').style.display="flex";
            });
            
            
            
        </script>

    </body>
</html>