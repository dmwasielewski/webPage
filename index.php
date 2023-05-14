<!DOCTYPE html>
<html lang="en">

<head>
    <!-- encoding -->
    <meta charset="UTF-8">
    <!-- browsers -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Damian Wasielewski personal page with the web development projects.">
    <title>dmwasielewski</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <!-- js -->
    <script src="./js/index.js" defer></script>
</head>

<body>

    <!-- header -->
    <header>
        <a href="https://dmwasielewski.dev" class="logo-name">dm<span class="logo-s-name">wasielewski</span></a>
        <ul id="mobile-menu-icons">
            <li><a href="#home">
                    <i class="fa-solid fa-house"></i></a></li>
            <li><a href="#projects">
                    <i class="fa-solid fa-list"></i></a></li>
            <li><a href="#about">
                    <i class="fa-solid fa-message"></i></a></li>
            <li><a href="#contact">
                    <i class="fa-solid fa-envelope"></i></a></li>
        </ul>
        <ul class="navbar">
            <li><a href="https://dmwasielewski.dev">Home</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#about">About me</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>

    <!-- home -->
    <section class="home" id="home">
        <div class="home-text">
            <h3>Hello, my name is</h3>
            <h1>Damian Wasielewski</h1>
            <h2>and I'm a Junior web developer</h2>
        </div>
        <div class="home-pp">
            <img src="./images/pp1.png" alt="profile picture" class="home-img-pp">
            <a href="./files/cv_Damian_Wasielewski.pdf" class="btn-cv" download="cv_Damian_Wasielewski.pdf"
                target="_blank">Download CV <i class="fa-solid fa-angles-down"></i></a>
        </div>
    </section>

    <!-- projects -->
    <section class="projects" id="projects">
        <div class="projects-text">
            <h2>Projects</h2>
            <h3>Some Things I’ve Built</h3>
        </div>
        <div class="projects-content">

            <div class="project-card">

                <div class="project-image">
                    <img src="./images/rockPaperScissors.png" alt="project image" class="project-img">
                </div>

                <div class="project-description">
                    <h3>Rock Paper Scissors Game</h3>
                    <p>A classic game - Rock, Paper, Scissors built with JavaScript</p>
                    <p>HTML CSS JS</p>

                </div>

                <div class="project-btn">
                    <a href="https://github.com/dmwasielewski/smallProjects/tree/master/rockPaperScissorsGame"
                        target="_blank" rel="stylesheet">
                        <i class="fa-brands fa-github"></i></a>
                    <a href="https://dmwasielewski.dev/projects/rockPaperScissorsGame/index.html" target="_blank"
                        rel="stylesheet">
                        <i class="fa-solid fa-up-right-from-square"></i></a>
                </div>

            </div>
            <div class="project-card">

                <div class="project-image">
                    <img src="./images/shoppingList.png" alt="project image" class="project-img">
                </div>

                <div class="project-description">
                    <h3>Rock Paper Scissors Game</h3>
                    <p>A classic game - Rock, Paper, Scissors built with JavaScript</p>
                    <p>HTML CSS JS</p>

                </div>

                <div class="project-btn">
                    <a href="https://github.com/dmwasielewski/smallProjects/tree/master/toDoList"
                        target="_blank" rel="stylesheet">
                        <i class="fa-brands fa-github"></i></a>
                    <a href="https://dmwasielewski.dev/projects/toDoList/index.html" target="_blank" rel="stylesheet">
                        <i class="fa-solid fa-up-right-from-square"></i></a>
                </div>

            </div>
            <div class="project-card">

                <div class="project-image">
                    <img src="./images/portfolio1.jpg" alt="project image" class="project-img">
                </div>

                <div class="project-description">
                    <h3>Rock Paper Scissors Game</h3>
                    <p>A classic game - Rock, Paper, Scissors built with JavaScript</p>
                    <p>HTML CSS JS</p>

                </div>

                <div class="project-btn">
                    <a href="https://github.com/dmwasielewski" target="_blank" rel="stylesheet">
                        <i class="fa-brands fa-github"></i></a>
                    <a href="https://twitter.com/dmwasielewski" target="_blank" rel="stylesheet">
                        <i class="fa-solid fa-up-right-from-square"></i></a>
                </div>

            </div>



        </div>
    </section>

    <!-- about-me -->
    <section class="about" id="about">
        <div class="about-pp">
            <img class="about-img-pp" src="./images/5.png" alt="profile picture">
        </div>
        <div class="about-text">
            <h2>About me</h2>
            <h3>Hi there, I'm Damian</h3>
            <p>A self taught junior web developer based near London. I'm always looking for creative people to vibe
                with, let's
                connect through my social channels. My interest lies in solving problems. I love spending time on
                fixing things. I have been interested in IT-related topics for years - starting from assembling my next
                computers, through helping clients as a help desk, to
                getting acquainted with new technologies and news from a wide range of IT. However, recently I have
                decided to take my interest to a slightly higher and more professional level. Using the knowledge
                gathered over the years and as a self-taught person using a number of available courses and training, I
                learned how to design and build websites. For this, I use the latest and most popular tools.</p>
            <h4>"Hard work beats talent when talent doesn't work hard."<sub>- Tim Notke</sub></h4>
        </div>
    </section>

    <!-- contact -->
    <section class="contact" id="contact">
        <div class="contact-me">
            <div class="contact-text">
                <h2>Contact Me</h2>
                <h3>Get In Touch</h3>
                <p>My inbox is always open. Whether you have a question or just want to say hi, I’ll try my best to get
                    back to you!</p>
            </div>


            <div class="contact-form">
                <form method="post" action="./php/mailer.php" id="contact-form">

                    <input type="text" name="name" id="name" placeholder="Enter Your Name:" required pattern="(^[a-zA-Z]{1,30} [a-zA-Z]{1,30}$)">

                    <input type="email" name="email" id="email" placeholder="Enter Your Email:" required >

                    <input type="text" name="subject" id="subject" placeholder="Enter Your Subject:">

                    <textarea name="message" id="message" cols="40" rows="10" placeholder="Enter Your Message:"
                        required></textarea>

                    <button name="submit" value="Submit" class="btn-send"> Submit</button>

                    <?php 
                                    $message = "";
                                    if(isset($_GET['success']))
                                      {
                                        $message = " Your Message Has Been Sent ";
                                        echo '<div class="mailer-success">'.$message.'</div>';
                                      }
                    ?>

                </form>
            </div>
        </div>

        <!-- social-icons-->
        <div class="social" id="social">
            <div class="social-icons">
                <ul>
                    <li><a href="https://www.linkedin.com/in/dmwasielewski/" target="_blank" rel="stylesheet">
                            <i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="https://fosstodon.org/@dmwasielewski" target="_blank" rel="stylesheet">
                            <i class="fa-brands fa-mastodon"></i></a></li>
                    <li><a href="https://twitter.com/dmwasielewski" target="_blank" rel="stylesheet">
                            <i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://github.com/dmwasielewski" target="_blank" rel="stylesheet">
                            <i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>
        </div>

    </section>

    <!-- footer -->
    <footer>
        <h4>dmwasielewski</h4>
        <p>&copy; 2023 by Damian Wasielewski. All rights reserved.</p>
    </footer>

    <!-- top-icon -->
    <div class="top">
        <a href="#" class="top-btn" title="Top"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
</body>

</html>