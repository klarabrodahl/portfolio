<DOCTYPE html>

<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>

<html>
    <head>
        <link rel="reset" href="reset.css">
        <link rel="stylesheet" href="minip.css">
        <meta charset="utf-8">
        <title>Miniproject</title>


    </head>
    <body> 

        <header>

            
            <div class="topnav">
                <img src="logokb.png" alt="KB logo" width="50" height="50"/> &nbsp; &nbsp;
                <a href="#aboutme">About Myself </a> &nbsp; &nbsp;
                <a href="#experience">Experience </a> &nbsp; &nbsp;
                <a href="#experience">Projects </a> &nbsp; &nbsp;
                <a href="#skills">Skills </a> &nbsp; &nbsp;
                <a href="#education">Education</a> &nbsp; &nbsp;
                <a href="#blog">Blog</a> 

                 
                 <button id="myBtn">Login</button>

                 <div id="myModal" class="modal">
 
                 <div class="modal-content">
                 <span class="close">&times;</span>
                 <form action = "minip.php" method = "post">
                     <label for="email">email</label><br>
                     <input type="text" id="email" name="email" required><br>
                     <label for="pword">Password</label><br>
                     <input type="password" id="pword" name="password" required><br><br>
                     <input type="submit" name = "login" value="Login">
                    </form>
                </div>

                <?php

                if (isset($_POST['login'])){
                    $email = $_POST['email'];
                    $Password = $_POST['password'];

                    $select = mysqli_query($conn, "SELECT * FROM USER WHERE email = '$email' AND password = '$Password'");
                    $row = mysqli_fetch_array($select);

                    if (is_array($row)){
                        $_SESSION["email"] = $row ['email'];
                        $_SESSION["password"] = $row ['password'];
                    }
                    else {
                        echo 'alert("Invalid Email or Password")';
                        
                    }
                }
                if(isset($_SESSION["email"])){
                    header("Location:addpost.php");
                }

                ?>

                </div>
                    
                    <script> //Javascript for project

                    // Gets the login modal
                    var modal = document.getElementById("myModal");
                
                    // Get button to open modal
                    var btn = document.getElementById("myBtn");
                
                    // Get element that close modal
                    var span = document.getElementsByClassName("close")[0];
                
                    // The modal will open when button gets clicked
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }
                
                    // The modal closes when the the span element gets clicked on
                    span.onclick = function() {
                        modal.style.display = "none";
                    }
                
                    // Clicking outside modal will close it as well
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                
                    </script>

                </div>

    
            
            <center>
            <hgroup> 
                <img src="logokb.png" alt="KB logo" width="200" height="200" />
                <h1 class="welcome"> Welcome to my portfolio </h1>
            </hgroup>

            <div class="contacthyperlinks">
            <a href="https://www.instagram.com/klarabrodahl/">
                <img alt="Instagram hyperlink" src="iconfinder_social_media_applications_3-instagram_4102579.png"
                width="50" height="50">
             </a>

             <a href="https://www.linkedin.com/in/klara-brodahl-491995150/?originalSubdomain=se">
                <img alt="Linkedin hyperlink" src="iconfinder_1_Linkedin_unofficial_colored_svg_5296501-2.png"
                width="50" height="50">
             </a>

             <a href="wa.link/wz3dal">
                <img alt="Whatsapp hyperlink" src="iconfinder_1_Whatsapp2_colored_svg_5296520.png"
                width="50" height="50">
             </a>

             <a href="https://www.facebook.com/klara.brodahlsvensson">
                <img alt="Facebook hyperlink" src="iconfinder_83-facebook_4202110.png"
                width="50" height="50">
             </a>¨
            </div>
            </center>
            
        </header>

         
       
        
        <article> 
            <section id="aboutme">
                <img src="profilepic.png" alt="profilpicture" width="230" height="300"/> 
                <h1>ABOUT ME</h1>
                <p>
                    <b> Computer Science undergraduate student at Queen Mary University of London.</b>
                    <br>
                    <br>
                My professional aim is to become a successful computer Software engineer. I also find web design very interesting and would love to freelance with that also in the future. My first step to achive my professional goals is to complete my bachelor's degree in Computer Science at Queen Mary University of London. Furthermore, I intend to develop my knowledge in the field with a master's degree. Other than this I am in general a positive, social girl who sees opportunities instead of problems. My problem-solving skills do I also find relative for a job in the IT industry.
                </p>
            </section>

            <section id="experience">
                <h1>PROJECTS & EXPERIENCE</h1>
                <p>
                    <b> Blog designer (2015) - </b>
                    When I were younger I had a blog which I made different blog designs for using html and CSS. I also did layouts for friends blogs as they liked the work I had done for my own blog.
                    <br>
                    <hr>

                    <b>Cookbot (2020) - </b>
                    For my Procedural Programming module at Queen Mary University of London I created a chatbot which helped the user decide what to eat for dinner depending on what ingridients the user had at home, therefor its name "Cookbot".
                    <br>
                    <hr>

                    <b> Race Simulator (2021) - </b>
                    For my Object-Oriented Programming module at Queen Mary University of London I created a program that simulated a race between a number of different cars, decided by the user, with different outputs everytime. The output were depending on the weather condition for each specific race and random happenings as a car getting its engine overheated for example.
                    <br>
                    <hr>

                    <b>Portfolio making (2019-2021) - </b>
                    Other than this portfolio I have created by myself I also created a portfolio for an online-course I took from an initiative called "Tjejer kodar", which means "Girls that code" in Swedish.

                </p>
            </section>

            <section id="skills">
                <p>
                    <img src="Skills.png" alt="Skills Graph" height="300"/>
                </p>
            </section>
            <section id="education">
                <h1>EDUCATION</h1>
    
                    <div class="item">
                    <b>Tjejer Kodar <i> Girls that code</i>, Sweden (2019) </b>
                    <br>
                    <br>
                    One weeks online course on HTML & CSS.
                    </div>

                    <div class="item">
                    <b> Computer Science with Management, Queen Mary University, UK (2019 - To date) </b>
                    <br>
                    <br>
                    Bachelor's degree.
                    </div>
                    
            </section>

        </article>
       
        <footer>
        <p><i>Copyright © 2021 Klara Svensson Brodahl</i></p>
        </footer>

    </body>

</html>