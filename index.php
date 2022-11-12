<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


</head>
<body>
    <div class="hero" id="home">
        <nav>
            <h2 class="logo">Portfo<span>lio</span></h2>
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>

            <a href="#" class="btn">Subscribe</a>
        </nav>

        <div class="content">
            <h4>Hello, my name is</h4>
            <h1>Blerta<span> Aliu</span></h1>
            <h3>I'am a Developer</h3>
        </div>
    </div>


    <!--About section-->
    <section class="about" id="about">
        <div class="main">
            <img src="img/blerta.jpg" width="300px" height="400px" alt="">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Developer <span >& Designer</span></h5>
                <p>
                I am Blerta Aliu, third year student of Computer Science and Engineering. 
                I am a person who likes coding, being creative, reading, etc. I am outgoing, dedicated, and open-minded. 
                I get across to people and adjust to changes with ease. 
                I believe that a person should work on developing their professional skills and learning new things all the time.
                I am very motivated every day to learn everything related to coding.
                </p>

                <button type="button">Let's Talk</button>
            </div>
        </div>
    </section>

    <h1>My <span>projects</span></h1>
    <div class="slider">
      <div class="slider-items">
          <div  class="item active">
             <img src="img/project1.jpg" />
             <div class="caption">
                Ditari digjital
             </div>
          </div>
          <div  class="item">
             <img src="img/project2.jpg" />
             <div class="caption">
                Fashion Store
             </div>
          </div>
        </div>
         <!-- slider controls -->
         <div class="left-slide"><</div>
          <div class="right-slide">></div>
        <!-- slider controls -->
      </div>
   </div>
    <!-- skills section-->
    <div class="skills" id="skills">
        <div class="title">
            <h2>Skills</h2>
        </div>
        <div class="box">
            <div class="card">
            <i class="fa-solid fa-code"></i>
                <h5>Tech knowledge</h5>
                <div class="pra">
                    <p>
                        <ol>Html</ol>
                        <ol>CSS</ol>
                        <ol>Java</ol>
                        <ol>JavaScript</ol>
                        <ol>PHP</ol>
                        <ol>MSSQL</ol>
                        <ol>React Js</ol>
                        <ol>C#</ol>
                    </p>
                </div>
            </div>

            <div class="card">
            <i class="fa-solid fa-school"></i>
                <h5>Education</h5>
                <div class="pra">
                    <p>Third year Computer Science and Engineering student at UBT College</p>
                </div>
            </div>
        </div>
    </div>

    <!--Contact me-->
    <div class="contact-forma" id="contact">
        <form class="form" method="POST" action="controllers/verifycontactus.php" onsubmit="return validateContact()" >
          <h1>Contact me</h1>
            <label for="">Name:</label>
            <input type="text" name="name" class="input input-fields" placeholder="Your name" />
            <label for="">Email:</label>
            <input type="email" name="email" class="input input-fields email" placeholder="Your email">
            <label for="">Messsage:</label>
            <textarea name="message" class="input input-fields message" placeholder="Your message"></textarea>
            <input style="justify-content: center;" id="submit" name="submit" type="submit" class="inputsubmit" value="Konfirmo" />
        </form>
      </div>

   
    <!--Footer-->
    <footer>
        <p>for more visit one of my profiles in </p>
        <div class="social">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/blertaaliu_/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/blerta-aliu-978783254/"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <p class="end">&#169; By Blerta Aliu</p>
    </footer>

    <script src="js/script.js">
    </script>
    <script src="js/slider.js"></script>
</body>
</html>