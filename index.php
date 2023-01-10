<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php //Below is to automatically scale on both mobile and desktop ?>
        <meta name="viewport" content="width=devide-width, initial-scale=1.0">
        <title>Barrys's Page</title>
        <link rel="icon" href="img/man.png">
        <link rel="stylesheet" type="text/css" href="style.css" >
    </head>

    <body>
        <!------------------------------------ Main Page ------------------------------------------------->
        <section class="main">
            <nav class="navbar" id="navbar">

                <button class="hamburgerButton" id="hamburger" aria-label="toggle navigation">
                    <span class="hamburger"></span>
                    <img class="threeStripes" src="img/menu.png"  alt="menu">
                </button>

                <ul id="mainMenu">
                    <li><a href="#aboutMe">About Me</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#myPosts">My Projects</a></li>
                    <li><a href="#contactMe">Contact</a></li>                    
                </ul>

                <div class ="mainSocials">
                    <a href="https://www.linkedin.com/in/barrykadeth"
                        target="_blank" rel="noopener noreferrer">
                        <img src="img/linkedin.png" width ="40" alt="linkedin">
                    </a>    
                    <a href="https://www.github.com/barrykadeth"
                        target="_blank" rel="noopener noreferrer">
                        <img src="img/github.png" width ="40" alt="github">
                    </a>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
                        target="_blank" rel="noopener noreferrer">
                        <img src="img/youtube.png" width ="40" alt="youtube">
                    </a>
                    <a href="Barry_Kadeth_CV.pdf"
                        target="_blank" rel="noopener noreferrer">
                        <img src="img/CV.png" width ="40" alt="cv">
                    </a>
                </div>

            </nav>

            <div class="mainArea">
                <div class="mainText">
                    <h1>Barry Kadeth</h1>
                    <p class="mainTextP">Your Friendly Software Developer</p>
                    <!-- <p>Master of Software Development Student</p> -->
                    <a href="#aboutMe">
                        <div class="aboutButton" id="aboutButton">About Me</div>
                    </a>
                </div>
            </div>

            

        </section>

        <!---------------------------------- About Me ------------------------------------------------>
        <section class="sub-section" id="aboutMe">
            
            <div class="blurb">
                <h2>About Me</h2>
                <p class="blurbContent">
                    Hello there! My name is Barry and I am an optometrist who is ready
                    to swap my testing glasses for a laptop. I have always 
                    been passionate about using technology to help people see 
                    things more clearly, and now I am excited to take that passion
                    to the next level by becoming a software developer. 
                    <br>
                    <br>
                    With my background in healthcare and my love for problem-solving, 
                    I believe I have the vision and focus to succeed in this field. 
                    I may not have perfect vision, but I am ready to work hard and 
                    learn everything.
                    <br>
                    <br>
                    Thanks for stopping by and checking out my profile!
                </p>
            </div>
            <div class="barameyPicture">
                <img class="bazPic" src="img/barameyQT.jpg"  alt="Picture of Me!">
            </div>
        </section>

                <!---------------------------- Experience ----------------------------------->
        <section class="sub-sectionExperience" id="experience">
            <h2>Experience</h2>
            <div class="experienceContainer">

                <div class="experienceIndividual">
                    <h3>Software Dev Student<br><em>2022 - 2023</em></h3>
                    <p>
                        I studied at Victoria University and gained a deep understanding 
                        of the latest technologies and techniques in the field, as 
                        well as the opportunity to work on real-world projects.
                    </p>
                </div>

                <div class="experienceIndividual">
                    <h3>Locum Optometrist<br><em>2021 - 2023</em></h3>
                    <p>
                        Supporting and providing optometry cover for clinics throughout New Zealand. 
                        Preparing business documents and using accounting software such as Hnry.
                    </p>
                </div>

                <div class="experienceIndividual">
                    <h3>Optical Dispenser<br><em>2018 - 2019</em></h3>
                    <p>
                        Resolving patient issues, remakes and warranties. Conducted contact 
                        lens teaches, repairing frames and front desk receptionist.
                    </p>
                </div>

                <div class="experienceIndividual">
                    <h3>Medical Research Assistant<br><em>2017 - 2018</em></h3>
                    <p>
                        Collaborated with researchers and wrote protocols, presentations and 
                        reports at the University of Otago. 
                        Analysed research data using MySQL and other statistical 
                        research tools.
                    </p>
                </div>

            </div>
        </section>

        <!------------------------------------ Blog / Personal Projects ------------------------------------>
        <section class="sub-sectionBlog" id="myPosts">
            <h2>Personal Projects</h2>
            <div class="blogContainer">

                <div class="blogIndividual">
                    <h3>Android Web Browser</h3>
                    <div class="blogBlurb">
                        <p>
                            Built a web browser application in Android Studio with tabs
                            and social media sharing that can be downloaded onto Android 
                            phones. 
                        </p>
                    </div>
                    <div class="blogContent">
                        <p>
                            Built a web browser application in Android Studio with tabs
                            and social media sharing that can be downloaded onto Android 
                            phones. 
                            <br>
                        </p>
                        <a href="https://github.com/BarryKadeth/Web-browser-JavaFX" 
                            target="_blank" rel="noopener noreferrer">
                            <img src="img/github.png" width ="50" alt="github">
                        </a>
                    </div>
                </div>

                <div class="blogIndividual">
                    <h3>Bug World Simulator</h3>
                    <div class="blogBlurb">
                        <p>
                            Created a simulation world with animals and plants that
                            would interact with one another using JavaFX and HCI values
                        </p>
                    </div>
                    <div class="blogContent">
                        <p>
                            Created a simulation world with animals and plants that
                            would interact with one another using JavaFX and HCI values.
                            <br>
                        </p>
                        <a href="https://github.com/BarryKadeth/Bug-World-JavaFX/tree/main/AnimationBugWorld"
                            target="_blank" rel="noopener noreferrer">
                            <img src="img/github.png" width ="50" alt="github">
                        </a>
                    </div>
                </div>

                <div class="blogIndividual">
                    <h3>Azure Hosted Website</h3>
                    <div class="blogBlurb">
                        <p>
                            Created a personal website using HTML, CSS and JavaScript 
                            for the front-end and hosted on Azure Services with PHP
                            and MySQL Database serverside. 
                        </p>
                    </div>
                    <div class="blogContent">
                        <p>
                            Created a personal website using HTML, CSS and JavaScript 
                            for the front-end and hosted on Azure Services with PHP
                            and MySQL Database serverside. 
                            <br>
                        </p>
                        <a href="http://kadeth.co.nz/"
                            target="_blank" rel="noopener noreferrer">
                            <img src="img/man.png" width ="50" alt="github">
                        </a>
                    </div>
                </div>
        </section>
        
        <!--------------------- Contact: ---------------------------->
        <footer id="contactMe">
            <br>
            <h2 class="footerTitle">Contact Me!</h2>
            <div class="contactContainer">
                <div class="contactMe">

                <p>Contact me on my socials: </p>

                <div class ="contactSocials">
                    <a href="https://www.linkedin.com/in/barrykadeth"
                        target="_blank" rel="noopener noreferrer">
                        <img src="img/linkedin.png" width ="40" alt="linkedin">
                    </a>    
                    <a href="https://www.github.com/barrykadeth"
                        target="_blank" rel="noopener noreferrer">
                        <img src="img/github.png" width ="40" alt="github">
                    </a>
                    <!-- <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
                        target="_blank" rel="noopener noreferrer">
                        <img src="img/youtube.png" width ="40" alt="youtube">
                    </a> -->
                    <a href="Barry_Kadeth_CV.pdf"
                        target="_blank" rel="noopener noreferrer">
                        <img src="img/CV.png" width ="40" alt="cv">
                    </a>
                </div>
                <p>
                    Or leave your name, email and a message if you'd like to get in touch!
                </p>   

                    <form class="contactInput" action="contact.php" method="post">
                        <p> Name: </p>
                        <input class="inputDetails" type="text" name="name">
                        <p> Email:</p>
                        <input class="inputDetails" type="text" id="email" name="email" required>
                        <p> Message:</p>
                        <textarea class = "message" name="message" rows="6" placeholder="Your Message"></textarea>
                        <!-- <input class="inputMessage" type="text" name="message"> -->
                        <br>
                        <br>
                        <input class="inputButton" type="submit" value="Submit" id="inputButton" onclick="alertContact()">
                    </form>



                </div>
            </div>
        </footer>

        <script src="JSCode.js"></script>
    </body>
</html>