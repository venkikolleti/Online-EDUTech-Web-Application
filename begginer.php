<?php
    session_start();
    $reg_id=$_SESSION['regid'];

    $connection=mysqli_connect("localhost","root","password","WTproject");
    $que="update Userdata set level='begginer' where regid='$reg_id'";
    if(mysqli_query($connection,$que)){
    }
    else{
    }
?>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <title>Begginer page</title>
        <meta name="desciption" content="VENKAIAH KOLLETI">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="begginer.css">
        <script type="text/javascript" src="begginer.js"></script>
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
                  <p class="nav-item ms-auto mt-3 me-3"><a href="#" class="nav-link" id="jquery"><b  class="text-success">BEGGINER LEVEL</b></a></p>
                </div>
            </nav>


        <div class="container-big-1" id="html-content">

                <div class="html-side col-2" id="html-side">
                    <ul class="list-group" id="navbar-example2">
                       <a href="#basics"><li class="list-group-item text-light">HTML Basic Tags</li></a>
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
                       <a href=""><li class="list-group-item">HTML Inputs Controls</li></a>
                       <a href=""><li class="list-group-item">HTML Inputs Patterns</li></a>

                    </ul>
                </div>

                <div class="container col-md-10 html-body px-5 py-3 scrollspy-example" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"  tabindex="0">
                    <div class="content ms-auto col-md-12 text-end">
                            <a href="tools/html.pdf"><button class="btn btn-info col-md-2 py-3"><strong>Material</strong></button></a>
                    </div>
                    <h2 class="text-light" id="basics">HTML Basics</h2><br>

                    <p>HTML stands for Hyper Text Markup Language. It is used to design web pages using markup language.</p>
                    <p>HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web 
                    pages.</p>
                    <p>Markup language is used to define the text document within tag which defines the structure of web pages.</p>
                    
                    <p>HTML 5 is the fifth and current version of HTML.</p>
                    <p>It has improved the markup available for documents and has introduced application programming
                    interfaces(API) and Document Object Model(DOM).</p>              
                    
                    
                    <br><br>

                    <h2 class="text-light">HTML Documents</h2><br>

                    <p><b>&lt;DOCTYPE! html&gt;</b> A doctype or document type declaration is an instruction that tells
                     the web browser about the markup language in which the current page is written. It is not an element or tag.
                      The doctype declaration is not case-sensitive.</p>

                    <p><b>&lt; html &gt;</b> tag is used to define the root element of HTML document. This tag tells the browser that
                     it is an HTML document. It is the second outer container element that contains all other elements within it.</p>

                    <p><b>&lt; head &gt;</b> This tag is used to define the head portion of the HTML document that contains information
                     related to the document. Elements within the head tag are not visible on the front-end of a webpage.</p>

                    <p><b>&lt; body &gt;</b> The body tag is used to enclose all the visible content of a webpage. In other words, the 
                    body content is what the browser will show on the front end.</p>

                    <br><br>
                    <p>The HTML document itself begins with <b>&lt;html&gt;</b> and ends with <b>&lt;/html&gt;</b>.<br>
                    The visible part of the HTML document is between <b>&lt;body&gt;</b> and <b>&lt;body&gt;</b>. </p>
                    <br><b>Example:</b>
                    <div class="code p-3 col-md-4 col-sm-10 ms-md-5 ms-sm-1 mt-3">
                            <b>&lt;!DOCTYPE html&gt;</b><br>
                            <b>&lt;html&gt;</b><br>
                            <b>&lt;body&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;h1&gt;</b>My First Heading<b>&lt;/h1&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;p&gt;</b>My first paragraph.<b>&lt;/p&gt;</b><br>
                            <b>&lt;/body&gt;</b><br>
                            <b>&lt;/html&gt;</b><br>
                    </div>

                    <br><br><br><br>

                    <h2 class="text-light">HTML Basic Tags Video:</h2><br>
                    <div class="video m-md-5 m-sm-1">
                    <iframe class="col-md-9 col-sm-10" height="400px" src="https://www.youtube.com/embed/X9D9ur7t7vc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="related-video">
                        <h4>Some Of Related Videos</h4><br>
                        <a href="https://youtu.be/MDLn5-zSQQI" target="__blank" class="bg-light ms-5 px-3 py-1">https://youtu.be/MDLn5-zSQQI</a><br><br>
                        <a href="https://youtu.be/dU1Gr3M2XBI" target="__blank" class="bg-light ms-5 px-3 py-1">https://youtu.be/dU1Gr3M2XBI</a><Br><Br>
                        <a href="https://youtu.be/bWPMSSsVdPk" target="__blank" class="bg-light ms-5 px-3 py-1">https://youtu.be/bWPMSSsVdPk</a>
                    </div>
                    <br><br>

                    <br><br><h2 class="text-light">HTML Elements</h2><br>

                    <p>The HTML element is everything from the start tag to the end tag:<br><br>
                    <b>&lt;tagname&gt;</b>Content goes here...<b>&lt;/tagname&gt;</b></p>

                    <p>Examples of some HTML elements:<br><br>
                    <b>&lt;h1&gt;</b>My First Heading<b>&lt;/h1&gt;</b><br><br>
                    <b>&lt;p&gt;</b>My first paragraph.<b>&lt;/p&gt;</b> </p><br>


                    <br><br>
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

                    <br><b>Example:</b>
                    <div class="code p-3 col-md-4 col-sm-10 ms-md-5 ms-sm-1 mt-3">
                            <b>&lt;!DOCTYPE html&gt;</b><br>
                            <b>&lt;html&gt;</b><br>
                            <b>&lt;body&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;h1&gt; Heading 1 &lt;/h1&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;h2&gt; Heading 2 &lt;/h2&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;h3&gt; Heading 3 &lt;/h3&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;h4&gt; Heading 4 &lt;/h4&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;h5&gt; Heading 5 &lt;/h5&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;h6&gt; Heading 6 &lt;/h6&gt;</b><br>
                            <b>&lt;/body&gt;</b><br>
                            <b>&lt;/html&gt;</b><br>
                    </div>

                    <br><br>
                    <h1>Heading 1</h1>
                    <h2>Heading 2</h2>
                    <h3>Heading 3</h3>
                    <h4>Heading 4</h4>
                    <h5>Heading 5</h5>
                    <h6>Heading 6</h6>


                    <br><br><Br>
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
                    <br><b>Example:</b>

                    <div class="code p-3 col-md-4 col-sm-10 ms-md-5 ms-sm-1 mt-3">
                            <b>&lt;!DOCTYPE html&gt;</b><br>
                            <b>&lt;html&gt;</b><br>
                            <b>&lt;body&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;p&gt; This is paragraph one &lt;/p&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;p&gt; This is another paragraph &lt;/p&gt;</b><br>

                            <b>&lt;/body&gt;</b><br>
                            <b>&lt;/html&gt;</b><br>
                    </div>
                    
                    <br><br><br><br><br><BR>

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

                    <br><b>Example:</b>

                    <div class="code p-3 col-md-5 col-sm-10 ms-md-5 ms-sm-1 mt-3">
                            <b>&lt;!DOCTYPE html&gt;</b><br>
                            <b>&lt;html&gt;</b><br>
                            <b>&lt;body&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;p name="para" &gt; This is paragraph one &lt;/p&gt;</b><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp <b>&lt;p class="para2" &gt; This is another paragraph &lt;/p&gt;</b><br>

                            <b>&lt;/body&gt;</b><br>
                            <b>&lt;/html&gt;</b><br>
                    </div>

                    <br><Br><br><br><Br><BR>
                    <div class="video">
                    <h2 class="text-light">HTML Tables and Lists Video</h2><Br><Br>
                    <iframe class="col-md-9 col-sm-10 ms-md-5 ms-sm-1" height="400px" src="https://www.youtube.com/embed/N69xumSjg5Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <br><BR>
                    <div class="related-video"><br>
                        <h4>Some Of Related Videos</h4><br>
                        <a href="https://youtu.be/RLhEfkeoJOY" target="__blank" class="bg-light ms-5 px-3 py-1">https://youtu.be/RLhEfkeoJOY</a><br><br>
                        <a href="https://youtu.be/GuOb9t1zeQg" target="__blank" class="bg-light ms-5 px-3 py-1">https://youtu.be/GuOb9t1zeQg</a><Br><Br>
                        <a href="https://youtu.be/0Fe2WgkwG1o" target="__blank" class="bg-light ms-5 px-3 py-1">https://youtu.be/0Fe2WgkwG1o</a>
                    </div>

                    <br><br><Br><br>

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

                    <div class="code p-3 col-md-5 col-sm-10 ms-md-5 ms-sm-1 mt-3">
                            <b>&lt;!DOCTYPE html&gt;</b><br>
                            <b>&lt;html&gt;</b><br>
                            <b>&lt;body&gt;</b><br>

                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;table border = "1" bordercolor = "green"  bgcolor="skyblue" cellpadding="5" cellspacing="5"><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;tr><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;th>Column 1&lt;/th><Br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;th>Column 2&lt;/th><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;th>Column 3&lt;/th><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;/tr><Br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;tr><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;td rowspan = "2">Row 1 Cell 1&lt;/td><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;td>Row 1 Cell 2&lt;/td><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;td>Row 1 Cell 3&lt;/td><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;/tr><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;tr><Br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;td>Row 2 Cell 2&lt;/td><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;td>Row 2 Cell 3&lt;/td><Br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;/tr><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;tr><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &lt;td colspan = "3">Row 3 Cell 1&lt;/td><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;/tr><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &lt;/table><br>

                            <b>&lt;/body&gt;</b><br>
                            <b>&lt;/html&gt;</b><br>
                    </div>
                        <br><BR>
                    <table border="1" bordercolor = "green"  bgcolor="skyblue" class="ms-5" cellpadding="5" cellspacing="5">
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                        </tr>
                        <tr>
                            <td rowspan = "2">Row 1 Cell 1</td>
                            <td>Row 1 Cell 2</td>
                            <td>Row 1 Cell 3</td>
                        </tr>
                        <tr>
                            <td>Row 2 Cell 2</td>
                            <td>Row 2 Cell 3</td>
                        </tr>
                        <tr>
                            <td colspan = "3">Row 3 Cell 1</td>
                        </tr>
                    </table>

                    


                        <br><Br><Br><Br>
                <div class="container">
                        <div class="todo-app">
                            <h2>Post Questions</h2><br>
                            <div class="row gy-3 d-flex">
                                
                                <input type="text" id="input-box" class="col-md-8 col-sm-8 py-3 px-2" name="q" placeholder="Write Your Questions">
                                <button onclick="addTask()" type="submit" class="col-md-1 col-sm-1 p-md-3 ms-md-4"><b class="text-dark">Post</b></button>
                                
                            </div><br>
                            <p class="text-light">Recently Asked Questions</p>

                            <ul id="list-container" class="col-md-9 col-sm-8 py-3">
                            </ul>
                        </div>
                    </div>
                    <script>
                        const inputBox=document.getElementById("input-box");
                        const listcontainer=document.getElementById("list-container");
                        function addTask(){
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
                                saveData();
                            }
                            inputBox.value="";
                        } 
                        listcontainer.addEventListener("click",function(e){
                            if(e.target.tagName === "LI"){
                                e.target.classList.toggle("checked");
                                saveData();
                            }
                            else if(e.target.tagName === "SPAN"){
                                e.target.parentElement.remove();
                                saveData();
                            }
                        },false);       
                        function saveData(){
                            localStorage.setItem("test",listcontainer.innerHTML);
                        }
                        function showTask(){
                            listcontainer.innerHTML=localStorage.getItem("test");
                        }
                        showTask();
                    </script>



            
                        <br><Br><Br>

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
                <p>A computer program is a list of <b>"instructions"</b> to be <b>"executed"</b> by a computer.<br><br>
                    In a programming language, these programming instructions are called statements.<br><br>
                    A JavaScript program is a list of programming statements.</p><br>

                            <br><br>
                <h2>JavaScript Statements</h2><br>

                <p>JavaScript statements are composed of:<br><br>Values, Operators, Expressions, Keywords, and Comments.<br><br>
                    This statement tells the browser to write "Hello Dolly." inside an HTML element with id="demo":<br>
                <br><br>

                    <h5>Example:</h5>
                <div class="code bg-dark text-light p-3 col-md-4 col-sm-10 ms-md-5 ms-sm-1 mt-3">
                        document.getElementById("demo").innerHTML = "Hello Dolly."; 
                    </div>
                        <br><br>
                    <h2>Javascript Basics Video</h2>
                    <div class="video m-md-5 m-sm-5">
                    <iframe class="col-md-8 col-sm-10 vide" height="400" src="https://www.youtube.com/embed/LO5eTH4Pe8E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    <br><br><br><Br>
                <h2>Javascript Statements</h2><br>
                <h5>Single Line Comments</h5><br>
                    <p>Single line comments start with //.<br><br> Any text between // and the end of the line will be ignored by JavaScript (will not be executed).<br><br>
                    This example uses a single-line comment before each code line:</p><br>

                    
                    <div class="code bg-dark text-light p-3 col-md-4 col-sm-10 ms-md-5 ms-sm-1 mt-3">
                    // Change heading:<br>
                    document.getElementById("myH").innerHTML = "My First Page"; 
                    </div>


                    <br><br><Br><br><br>
                    <h2>Multi-line Comments</h2><br>
                    <p>Multi-line comments start with /* and end with */.<br><br> Any text between /* and */ will be ignored by 
                    JavaScript.<br><br>This example uses a multi-line comment (a comment block) to explain the code:</p>
                    <br>

                    <div class="code bg-dark text-light p-3 col-md-4 col-sm-10 ms-md-5 ms-sm-1 mt-3">
                        /*<br>
                        The code below will change<br>
                        the heading with id = "myH"<br>
                        and the paragraph with id = "myP"<br>
                        in my web page:<br>
                        */<br>
                        document.getElementById("myH").innerHTML = "My First Page";
                    </div>



               

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
                    <h2 class="text-light">PhP Basics</h2><br>
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
                    <h2 >MySQL Basics</h2><br>    
                </div>                  

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
                    <h2 class="text-light">Bootstrap Basic</h2><br>
                    
                </div>
            
        </div>



        <div class="container-big-6 container-big-1" id="jquery-content">
                <div class="html-side col-2" id="html-side">
                    <ul class="list-group">
                       <a href=""><li class="list-group-item ">jQuery Basics</li></a>
                       <a href=""><li class="list-group-item">jQuery Effects</li></a>
                       <a href=""><li class="list-group-item">jQuery HTML</li></a>
                       <a href=""><li class="list-group-item">jQuery CSS</li></a>
                       <a href=""><li class="list-group-item">jQuery Form</li></a>
                       <a href=""><li class="list-group-item">jQuery Events</li></a>
                       <a href=""><li class="list-group-item">jQuery CLick()</li></a>
                       <a href=""><li class="list-group-item">jQuery Bind()</li></a>
                       <a href=""><li class="list-group-item">jQuery Unbind()</li></a>
                       <a href=""><li class="list-group-item">jQuery Select()</li></a>
                       <a href=""><li class="list-group-item">jQuery Submit</li></a>
                       <a href=""><li class="list-group-item">jQuery load()</li></a>
                       <a href=""><li class="list-group-item">jQuery unload()</li></a>
                       <a href=""><li class="list-group-item">jQuery Misc</li></a>


                    </ul>
                </div>

                <div class="container html-body text-center p-5">             
                    <h2 class="text-light">Updated Soon</h2><br><br><br><br>
                    <div class="text-center col-md-6 m-auto border border-info p-5">
                        <h5>To Go To Advance Page Please Complete The below Quiz and Get More Than 6
                        Marks Out of 10 To Qualify for Advance Level Learning . If You are Not selected
                        For Advance Level You Still Want To learn More From Begginer Level..</h5><br>
                        <a href="beg_quiz.php"><button class="btn btn-primary">Start Quiz</button></a>
                    </div>
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