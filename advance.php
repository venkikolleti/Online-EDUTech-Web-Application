<?php
    session_start();
    $reg_id=$_SESSION['regid'];

    $connection=mysqli_connect("localhost","root","password","WTproject");
    $que="update Userdata set level='advance' where regid='$reg_id' or email='$reg_id'";
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
                  <p class="nav-item ms-auto mt-3 me-3"><a href="#" class="nav-link" id="jquery"><b  class="text-success">ADVANCE LEVEL</b></a></p>
                </div>
            </nav>


        <div class="container-big-1" id="html-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group" id="htm">
                       <a href=""><li class="list-group-item text-light">HTML Basic Tags</li></a>
                       <a href="#Que2"><li class="list-group-item">HTML Headings</li></a>
                       <a href="#Que1"><li class="list-group-item">HTML Paragraphs</li></a>
                       <a href="#Que3"><li class="list-group-item">HTML Attributes</li></a>
                       <a href="#Que4"><li class="list-group-item">HTML Tables</li></a>
                       <a href="#Que5"><li class="list-group-item">HTML Images</li></a>
                       <a href="#Que6"><li class="list-group-item">HTML Lists</li></a>
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
                    </h2><br><br>

                    <p>HTML stands for Hyper Text Markup Language. It is used to design web pages using markup language.</p>
                    <p>HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web 
                    pages.</p>
                    <p>Markup language is used to define the text document within tag which defines the structure of web pages.</p>
                    
                    <p>HTML 5 is the fifth and current version of HTML.</p>
                    <p>It has improved the markup available for documents and has introduced application programming
                    interfaces(API) and Document Object Model(DOM).</p> <br><br>   

                    <div class="code p-3 col-md-4 col-sm-10 ms-5 mt-3">
                            <b>&lt;!DOCTYPE html&gt;</b><br>
                            <b>&lt;html&gt;</b><br>
                            <b>&lt;body&gt;</b><br>
                            //write code for this part in the below questions.....<br>
                            <b>&lt;/body&gt;</b><br>
                            <b>&lt;/html&gt;</b><br>
                    </div>
                    <br><Br><Br><BR>



                   

                    <h2 id="heading"></h2>

                    <h2 class="text-light" >HTML Headings</h2><br>

                    <p>HTML headings are titles or subtitles that you want to display on a webpage.</p>

                    <p>In this article, we will know HTML Headings, & their implementation through examples. 
                    An HTML heading tag is used to define the headings of a page.</p> <p>There are six levels of headings 
                    defined by HTML. These 6 heading elements are h1, h2, h3, h4, h5, and h6; with h1 being the 
                    highest level and h6 being the least.</p>
                    <p><b>&lt;h1></b> is used for the main heading. (Biggest in size)</p>
                    <p><b>&lt;h2></b> is used for subheadings, if there are further sections under the subheadings 
                    then the <b>&lt;h3></b> elements are used.</p>
                    <p><b>&lt;h6></b> for the small heading (smallest one).</p><br><Br>
                        
                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que2">
                                    <div class="que-text text-light col-md-6 col-sm-5">
                                    <h5 >Write code using all Heading Types </h5><br>
                                        <span class="text-secondary">Html , html heading</span>
                                    </div>
                                    
                                    <div class="bt col-md-6 col-sm-4 text-end "><Br>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop21">Solve challenge</button>&nbsp &nbsp
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop22" onclick="display2()">&nbsp &nbsp view code &nbsp &nbsp</button>

                                            <div class="modal fade" id="staticBackdrop21" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" >
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Write code</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <textarea rows="5" cols="40" id="text-area2" name="text-area2"></textarea>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="save2();">save changes</button>
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


<br><br><br><br>


                    <div class="container">
                        <div class="todo-app">
                            <h2>Post Questions</h2><br>
                            <div class="row gy-3 d-flex">
                                
                                <input type="text" id="input-box" class="col-md-8 col-sm-8 py-3 px-2" name="q" placeholder="Write Your Questions">
                                <button onclick="addTask1()" type="submit" class="col-md-1 col-sm-1 p-md-3 ms-md-4"><b class="text-dark">Post</b></button>
                                
                            </div><br>
                            <p class="text-light">Recently Asked Questions</p>

                            <ul id="list-container" class="col-md-9 col-sm-8 py-3">
                            </ul>
                        </div>
                    </div>
                    <script>
                        const inputBox=document.getElementById("input-box");
                        const listcontainer=document.getElementById("list-container");
                        function addTask1(){
                            if(inputBox.value === ''){
                                alert("you must write something!");
                            }
                            else{
                                let li =document.createElement("li");
                                li.innerHTML=inputBox.value;
                                listcontainer.appendChild(li);
                                let span=document.createElement('span');
                                span.innerHTML="\u00d7";
                
                                li.appendChild(span);
                                saveData1();
                            }
                            inputBox.value="";
                        } 
                        listcontainer.addEventListener("click",function(e){
                            if(e.target.tagName === "LI"){
                                e.target.classList.toggle("checked");
                                saveData1();
                            }
                            else if(e.target.tagName === "SPAN"){
                                e.target.parentElement.remove();
                                saveData1();
                            }
                        },false);       
                        function saveData1(){
                            localStorage.setItem("test2",listcontainer.innerHTML);
                        }
                        function showTask1(){
                            listcontainer.innerHTML=localStorage.getItem("test2");
                        }
                        showTask1();
                    </script>



<br><Br><br><Br>

                    <h2 class="text-light" id="paragraph">HTML Paragraphs</h2><br>
                    <p>The HTML <b>&lt;p&gt;</b> element defines a paragraph.<br><br>
                    A paragraph always starts on a new line, and browsers automatically add some 
                    white space (a margin) before and after a paragraph.</p>

                    <p>In this article, we will know the HTML Paragraph, & its basic implementation through
                     the examples. The <b>&lt;p></b> tag in HTML defines a paragraph.</p> <p>These have both opening and closing 
                    tags. So anything mentioned within <b>&lt;p></b> and <b>&lt;/p></b> is treated as a paragraph.</p><p> Most browsers read 
                    a line as a paragraph even if we don't use the closing tag i.e, <b>&lt;/p></b>, but this may raise 
                    unexpected results. So, it is a good convention, and we must use the closing tag.</p>

                    <br>

                    <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que1">
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
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="sub" onclick="save1();">save changes</button>
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
                
                <div class="container">
                        <div class="todo-app">
                            <h2>Post Questions</h2><br>
                            <div class="row gy-3 d-flex">
                                
                                <input type="text" id="input-box1" class="col-md-8 col-sm-8 py-3 px-2" name="q" placeholder="Write Your Questions">
                                <button onclick="addTask2()" type="submit" class="col-md-1 col-sm-1 p-md-3 ms-md-4"><b class="text-dark">Post</b></button>
                                
                            </div><br>
                            <p class="text-light">Recently Asked Questions</p>

                            <ul id="list-container1" class="col-md-9 col-sm-8 py-3">
                            </ul>
                        </div>
                    </div>
                    <script>
                        const inputBox1=document.getElementById("input-box1");
                        const listcontainer1=document.getElementById("list-container1");
                        function addTask2(){
                            if(inputBox1.value === ''){
                                alert("you must write something!");
                            }
                            else{
                                let li =document.createElement("li");
                                li.innerHTML=inputBox1.value;
                                listcontainer1.appendChild(li);
                                let span=document.createElement('span');
                                span.innerHTML="\u00d7";
                
                                li.appendChild(span);
                                saveData2();
                            }
                            inputBox.value="";
                        } 
                        listcontainer1.addEventListener("click",function(e){
                            if(e.target.tagName === "LI"){
                                e.target.classList.toggle("checked");
                                saveData2();
                            }
                            else if(e.target.tagName === "SPAN"){
                                e.target.parentElement.remove();
                                saveData2();
                            }
                        },false);       
                        function saveData2(){
                            localStorage.setItem("test3",listcontainer1.innerHTML);
                        }
                        function showTask2(){
                            listcontainer1.innerHTML=localStorage.getItem("test3");
                        }
                        showTask2();
                    </script>

<br><BR><br>

                    <h2 class="text-light">HTML Attributes</h2><br>
                    
                    <p>In this article, we will know HTML Attributes, and their implementation through examples.</p> 
                    <p>All HTML elements have attributes that will provide additional information about that particular 
                    element. It takes 2 parameters, ie, a name & a value which define the properties of the element 
                    and are placed inside the element tag.</p>
                    <p><b>Points to remember for attributes:</b></p>
                    <ul>
                    <p><li>Attributes always come in name/value pairs like this: attribute_name=”value”. </li></p>
                    <p><li>Attributes are always added to the start tag of an HTML element.</li></p>
                    <p><li>Attribute values should always be enclosed in quotes. Double style quotes (“ ”) 
                    are the most common, but single style quotes (' ') are also allowed.</li></p>
                    <p><li> In some rare situations, like when the attribute value itself contains quotes, it is necessary to use single quotes: 
                    name='venkaiah “Kolleti” venki' and vice-versa.</li></p>
                    </ul>
                    <br>
                    <p>The name parameter takes the name of the property we would like to assign to the element and the 
                    value takes the property value or extent of the property names that can be aligned over the 
                    element. Every name has some value that must be written within quotes.</p>
                    <br>

                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que3">
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
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="save3();">save changes</button>
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

                <div class="container">
                        <div class="todo-app">
                            <h2>Post Questions</h2><br>
                            <div class="row gy-3 d-flex">
                                
                                <input type="text" id="input-box2" class="col-md-8 col-sm-8 py-3 px-2" name="q" placeholder="Write Your Questions">
                                <button onclick="addTask3()" type="submit" class="col-md-1 col-sm-1 p-md-3 ms-md-4"><b class="text-dark">Post</b></button>
                                
                            </div><br>
                            <p class="text-light">Recently Asked Questions</p>

                            <ul id="list-container2" class="col-md-9 col-sm-8 py-3">
                            </ul>
                        </div>
                    </div>
                    <script>
                        const inputBox2=document.getElementById("input-box2");
                        const listcontainer2=document.getElementById("list-container2");
                        function addTask3(){
                            if(inputBox2.value === ''){
                                alert("you must write something!");
                            }
                            else{
                                let li =document.createElement("li");
                                li.innerHTML=inputBox2.value;
                                listcontainer2.appendChild(li);
                                let span=document.createElement('span');
                                span.innerHTML="\u00d7";
                
                                li.appendChild(span);
                                saveData3();
                            }
                            inputBox2.value="";
                        } 
                        listcontainer2.addEventListener("click",function(e){
                            if(e.target.tagName === "LI"){
                                e.target.classList.toggle("checked");
                                saveData3();
                            }
                            else if(e.target.tagName === "SPAN"){
                                e.target.parentElement.remove();
                                saveData3();
                            }
                        },false);       
                        function saveData3(){
                            localStorage.setItem("test4",listcontainer2.innerHTML);
                        }
                        function showTask3(){
                            listcontainer2.innerHTML=localStorage.getItem("test4");
                        }
                        showTask3();
                    </script>


<br><Br>

<h2 class="text-light"> HTML Table</h2><br>
                    <p> An HTML table is defined with the “table” tag. Each table row is defined with the “tr” tag. 
                        A table header is defined with the “th” tag. By default, table headings are bold and centered. 
                        A table data/cell is defined with the “td” tag.</p><br>
                    <b>Table Heading</b>
                    <p>
                    <br>Table heading can be defined using "th" tag. This tag will be put to replace "td" tag, 
                    which is used to represent actual data cell. Normally you will put your top row as table 
                    heading as shown below, otherwise you can use "th" element in any row. Headings, which are 
                    defined in "th" tag are centered and bold by default.
                    </p><br>
                    <b>Cellpadding and Cellspacing Attributes</b><br>
                    <p>
                    <br>There are two attributes called cellpadding and cellspacing which you will use to 
                    adjust the white space in your table cells. The cellspacing attribute defines space 
                    between table cells, while cellpadding represents the distance between cell borders 
                    and the content within a cell.
                    </p>
                    <b>Colspan and Rowspan Attributes</b>
                    <p><br>You will use colspan attribute if you want to merge two or more columns into a single column. 
                        Similar way you will use rowspan if you want to merge two or more rows.</p>

                    
                    <br>


                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que4">
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
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="save4();">save changes</button>
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



            <div class="container">
                        <div class="todo-app">
                            <h2>Post Questions</h2><br>
                            <div class="row gy-3 d-flex">
                                
                                <input type="text" id="input-box3" class="col-md-8 col-sm-8 py-3 px-2" name="q" placeholder="Write Your Questions">
                                <button onclick="addTask4()" type="submit" class="col-md-1 col-sm-1 p-md-3 ms-md-4"><b class="text-dark">Post</b></button>
                                
                            </div><br>
                            <p class="text-light">Recently Asked Questions</p>

                            <ul id="list-container3" class="col-md-9 col-sm-8 py-3">
                            </ul>
                        </div>
                    </div>
                    <script>
                        const inputBox3=document.getElementById("input-box3");
                        const listcontainer3=document.getElementById("list-container3");
                        function addTask4(){
                            if(inputBox3.value === ''){
                                alert("you must write something!");
                            }
                            else{
                                let li =document.createElement("li");
                                li.innerHTML=inputBox3.value;
                                listcontainer3.appendChild(li);
                                let span=document.createElement('span');
                                span.innerHTML="\u00d7";
                
                                li.appendChild(span);
                                saveData4();
                            }
                            inputBox3.value="";
                        } 
                        listcontainer3.addEventListener("click",function(e){
                            if(e.target.tagName === "LI"){
                                e.target.classList.toggle("checked");
                                saveData4();
                            }
                            else if(e.target.tagName === "SPAN"){
                                e.target.parentElement.remove();
                                saveData4();
                            }
                        },false);       
                        function saveData4(){
                            localStorage.setItem("test5",listcontainer3.innerHTML);
                        }
                        function showTask4(){
                            listcontainer3.innerHTML=localStorage.getItem("test5");
                        }
                        showTask4();
                    </script>
                    <br>
<br><Br>

                        <h2 class="text-light">HTML Images</h2><br>
                        <p>In this article, we will know the HTML Image, how to add the image in HTML,
                             along with knowing its implementation & usage through the examples.</p>
                             <p>By providing a full path or address (URL) to access an internet file.</p>
                            <p>By providing the file path relative to the location of the current web page file.</p>
                            <br>
                            <b>Attribute: The &lt;img> tag has following attributes:</b><br>
                            <p><br><b>src:</b> It is used to specify the path to the image.</p>
                            <p><b>alt:</b> It is used to specify an alternate text for the image. 
                            It is useful as it informs the user about what the image means and also due to 
                            any network issue if the image cannot be displayed then this alternate text will be displayed.</p>
                            <p><b>height:</b> It is used to specify the height of the image.</p>
                            <p><b>Width:</b> It is used to specify the width of the image.</p>
                            <br><Br>
                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que5">
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
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="save5();">save changes</button>
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
                        
<div class="container">
                        <div class="todo-app">
                            <h2>Post Questions</h2><br>
                            <div class="row gy-3 d-flex">
                                
                                <input type="text" id="input-box4" class="col-md-8 col-sm-8 py-3 px-2" name="q" placeholder="Write Your Questions">
                                <button onclick="addTask5()" type="submit" class="col-md-1 col-sm-1 p-md-3 ms-md-4"><b class="text-dark">Post</b></button>
                                
                            </div><br>
                            <p class="text-light">Recently Asked Questions</p>

                            <ul id="list-container4" class="col-md-9 col-sm-8 py-3">
                            </ul>
                        </div>
                    </div>
                    <script>
                        const inputBox4=document.getElementById("input-box4");
                        const listcontainer4=document.getElementById("list-container4");
                        function addTask5(){
                            if(inputBox4.value === ''){
                                alert("you must write something!");
                            }
                            else{
                                let li =document.createElement("li");
                                li.innerHTML=inputBox4.value;
                                listcontainer4.appendChild(li);
                                let span=document.createElement('span');
                                span.innerHTML="\u00d7";
                
                                li.appendChild(span);
                                saveData5();
                            }
                            inputBox4.value="";
                        } 
                        listcontainer4.addEventListener("click",function(e){
                            if(e.target.tagName === "LI"){
                                e.target.classList.toggle("checked");
                                saveData5();
                            }
                            else if(e.target.tagName === "SPAN"){
                                e.target.parentElement.remove();
                                saveData5();
                            }
                        },false);       
                        function saveData5(){
                            localStorage.setItem("test6",listcontainer4.innerHTML);
                        }
                        function showTask5(){
                            listcontainer4.innerHTML=localStorage.getItem("test6");
                        }
                        showTask5();
                    </script>
                    <br>
                    <br>
                        
                        <br><Br>

                        <h2 class="text-light">HTML Lists</h2><br>
                        
                        <p><b><u>The HTML Unordered List : </u>( ul )</b> An unordered list starts with the “ul” tag. Each list item 
                            starts with the “li” tag. The list items are marked with bullets i.e small black 
                            circles by default.</p>
                        <p><b><u>HTML Ordered List : </u>( ol )</b> An ordered list starts with the “ol” tag. 
                            Each list item starts with the “li” tag. The list items are marked with numbers by 
                            default</p>

                        <p><b><u>List Item : </u>( li )</b>A list is a record of short pieces of related information or used to display the data or any 
                            information on web pages in the ordered or unordered form. For instance, to purchase the items,
                             we need to prepare a list that can either be ordered or unordered list which helps us to 
                             organize the data & easy to find the item. Please refer to the HTML &lt;li> type Attribute 
                                article for the various types of attributes that can be used with the ordered & unordered
                                 list.</p>
                        <br><Br><Br>
                        <div class="Que">
                            <div class="container text-dark d-flex col-md-10 ms-5 p-5" id="Que6">
                                    <div class="que-text text-light col-md-6 col-sm-5">
                                    <h5>Create Unorder lists</h5><br>
                                        <span class="text-secondary">Html , html lists</span>
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
                                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="save6();">save changes</button>
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


        <div class="container">
                        <div class="todo-app">
                            <h2>Post Questions</h2><br>
                            <div class="row gy-3 d-flex">
                                
                                <input type="text" id="input-box5" class="col-md-8 col-sm-8 py-3 px-2" name="q" placeholder="Write Your Questions">
                                <button onclick="addTask6()" type="submit" class="col-md-1 col-sm-1 p-md-3 ms-md-4"><b class="text-dark">Post</b></button>
                                
                            </div><br>
                            <p class="text-light">Recently Asked Questions</p>

                            <ul id="list-container5" class="col-md-9 col-sm-8 py-3">
                            </ul>
                        </div>
                    </div>
                    <script>
                        const inputBox5=document.getElementById("input-box5");
                        const listcontainer5=document.getElementById("list-container5");
                        function addTask6(){
                            if(inputBox5.value === ''){
                                alert("you must write something!");
                            }
                            else{
                                let li =document.createElement("li");
                                li.innerHTML=inputBox5.value;
                                listcontainer5.appendChild(li);
                                let span=document.createElement('span');
                                span.innerHTML="\u00d7";
                
                                li.appendChild(span);
                                saveData6();
                            }
                            inputBox5.value="";
                        } 
                        listcontainer5.addEventListener("click",function(e){
                            if(e.target.tagName === "LI"){
                                e.target.classList.toggle("checked");
                                saveData6();
                            }
                            else if(e.target.tagName === "SPAN"){
                                e.target.parentElement.remove();
                                saveData6();
                            }
                        },false);       
                        function saveData6(){
                            localStorage.setItem("test7",listcontainer5.innerHTML);
                        }
                        function showTask6(){
                            listcontainer5.innerHTML=localStorage.getItem("test7");
                        }
                        showTask6();
                    </script>
                    <br>

                    <br>



                    <br><Br><Br>

                    <div class="container text-center">
                        <button class="btn btn-info col-md-3 py-3" onclick="certificate();">Generate Certificate</button>
                    </div>

                </div>
        </div>






        <div class="container-big-2 " id="javascript-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item text-dark">Javascript Basics</li></a>
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
                       <a href=""><li class="list-group-item text-light">PHP Basic Tags</li></a>
                       <a href=""><li class="list-group-item">PHP Comments</li></a>
                       <a href=""><li class="list-group-item">PHP Variables</li></a>
                       <a href=""><li class="list-group-item">PHP DataTypes</li></a>
                       <a href=""><li class="list-group-item">PHP Strings</li></a>
                       <a href=""><li class="list-group-item">PHP Operators</li></a>
                       <a href=""><li class="list-group-item">PHP Arrays</li></a>
                       <a href=""><li class="list-group-item">PHP  If Else</li></a>
                       <a href=""><li class="list-group-item">PHP Loops</li></a>
                       <a href=""><li class="list-group-item">PHP Functions</li></a>
                       <a href=""><li class="list-group-item">PHP RegExp</li></a>
                       <a href=""><li class="list-group-item">PHP Formhandling</li></a>
                       <a href=""><li class="list-group-item">PHP Sessions</li></a>
                       <a href=""><li class="list-group-item">PHP Cookies</li></a>
                       <a href=""><li class="list-group-item">PHP File Handling</li></a>
                       <a href=""><li class="list-group-item">PHP Mysqli</li></a>

                    </ul>
                </div>

                <div class="container html-body p-5">
                    <h2 class="text-light">PHP Basics</h2>
                </div>
            
        </div>




        <div class="container-big-4 container-big-2" id="mysql-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item text-dark">MySQL Basics</li></a>
                       <a href=""><li class="list-group-item">MySQL Connect</li></a>
                       <a href=""><li class="list-group-item">MySQL CreateDB</li></a>
                       <a href=""><li class="list-group-item">MySQL Create Table</li></a>
                       <a href=""><li class="list-group-item">MySQL Insert Data</li></a>
                       <a href=""><li class="list-group-item">MySQL Insert Multiple</li></a>
                       <a href=""><li class="list-group-item">MySQL Prepared</li></a>
                       <a href=""><li class="list-group-item">MySQL Select Data</li></a>
                       <a href=""><li class="list-group-item">MySQL Where</li></a>
                       <a href=""><li class="list-group-item">MySQL Order By</li></a>
                       <a href=""><li class="list-group-item">MySQL Delete Data</li></a>
                       <a href=""><li class="list-group-item">MySQL Update Data</li></a>
                       <a href=""><li class="list-group-item">MySQL Limit Data</li></a>
                       <a href=""><li class="list-group-item">MySQL Min Max</li></a>


                    </ul>
                </div>

                <div class="container p-5">
                   <h2>MySQL Basics</h2>
                </div>
            
        </div>




        <div class="container-big-5 container-big-1" id="bootstrap-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item text-light">Bootstrap Basics</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Columns</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Form Control</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Input Group</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Floating Labels</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Validation</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Acoordion</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Card</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Carousel</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Dropdown</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Navbar</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Pagination</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Popovers</li></a>
                       <a href=""><li class="list-group-item">Bootstrap Toats</li></a>


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