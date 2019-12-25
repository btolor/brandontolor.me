<!-- Start of PHP Contact Form Code -->
<?php 
                
                $ToAddress = "brandontolor@yahoo.com";
                $emailSubject = "OPEN URGENT Email from BrandonTolor.me";
                $name = "";
                $email = "";
                $message = "";


                if(isset($_POST['submit'])){
                    if(empty($_POST['name'])){
                        echo "name field error";
                    }else{
                        $name = $_POST['name'];
                    }

                    if(empty($_POST['email'])){
                        echo "email field error";
                    }else{
                        $emailer = $_POST['email'];
                    }

                    if(empty($_POST['mesg'])){
                        echo "message field error";
                    }else{
                        $message = $_POST['mesg'];
                    }

                    $email_header = "From: ". $emailer;
                    $email_txt = "You have an email from ". $name . ".\n\n".$message;

                    mail($ToAddress,$emailSubject,$email_txt,$email_header);
                    header("Location: index.php?EmailSent");
                }
            ?>
            <!-- End of PHP Contact Form Code -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brandon Tolor The Developer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body id="home-page">

    <!-- start of header -->
    <header id="header">
        <div class="container">

            <!-- start of home-title -->
            <div class="home-title">
                <a href="#home-page" id="logo">Brandon Tolor</a>
            </div>
            <!-- end of home-title -->
            <!-- start of nav-bar -->
            <nav class="nav-bar">
                <a href="#about-sec" id="about-link">My Story</a>
                <a href="#work-sec" id="work-examples-link">work examples</a>
                <a href="#contact-sec" id="contact-link">contact</a>
                <a href="http://tolorboy.website/" target="_blank" id="blog-link">blog</a>
            </nav>
            <!-- end of nav-bar -->

            <a href="#" class="mobile-nenu-btn" id="open-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <a href="#" class="mobile-nenu-btn" id="close-mobile-menu"><i class="fa fa-times-circle"
                    aria-hidden="true"></i></a>
        </div>

    </header>
    <!-- end of header -->
    <!-- start of mobile-nav -->
    <div class="mobile-nav" id="mobile-nav">
        <a href="#about-sec" id="about-link">My Story</a>
        <a href="#work-sec" id="work-examples-link">work examples</a>
        <a href="#contact-sec" id="contact-link">contact</a>
        <a href="http://tolorboy.website/" target="_blank" id="blog-link">blog</a>
    </div>
    <!-- end of mobile-nav -->


    <!-- start of content-bg -->
    <div id="content-bg">

        <div class="content">

            <!-- start of lpg-container -->
            <div class="lpg-container">
                <!-- start of top sec -->
                <div id="top">
                    <h1 class="intro">
                        Hello, I'm <br><span id="myName">Brandon Tolor</span>
                    </h1>
                    <h2 id="me">I'm a HTML Email Developer</h2>
                    <p id="welcome">Let me bring you email marketing ideas to life.</p>
                </div>
                <!-- end of top sec -->
                <!-- start of btns -->
                <div class="btns">
                    <a href="#work-sec" id="-work-examples-action">View my work</a>
                    <a href="#contact-sec" id="contact-action">Get in touch</a>
                </div>
                <!-- end of btns -->
                <!-- start of social -->
                <div class="social">
                    <a href="https://github.com/btolor" target="_blank" id="github-link"
                        aria-label="https://github.com/btolor"><i class="fa fa-github-square"
                            aria-hidden="true"></i></a>
                    <a href="https://twitter.com/Tolor_Boy" target="_blank" id="twitter-link"
                        aria-label="https://twitter.com/Tolor_Boy"><i class="fa fa-twitter-square"
                            aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/brandon-tolor-343098106/" target="_blank" id="linkedin-link"
                        aria-label="https://www.linkedin.com/in/brandon-tolor-343098106/"><i
                            class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                </div>
                <!-- end of social -->
            </div>
            <!-- end of lpg-container -->

        </div>

    </div>
    <!-- end of content-bg -->

    <!-- start of about section -->
    <div class="about-sec" id="about-sec">
        <!-- start of container -->
        <div class="container">
            <h1 id="about-title">My Story</h1>

            <p id="story">
                I'm a web and email developer in Dallas/Ft. Worth Tx. I enjoy learning new things and working on
                amazing projects with amazing people. I just received my associates in software programming along
                with
                self-teaching myself HTML, CSS, and Javascript.
            </p>

            <!-- start of skill div -->
            <div class="skills">

                <!-- start of my-skill div -->
                <div class="my-skill">
                    <h2 id="skills-title">My Skills</h2>
                    <p id="skill-set">
                        The skills that I have are <span>HTML, CSS, Javascript, jQuery, and good attention to
                            detail</span>. I am great at turning <span>PSD files into HTML and CSS</span> and I am also
                        familiar
                        with the concepts of object-oriented programming as well.
                    </p>
                </div>
                <!-- end of my-skill div -->

                <!-- start of new-skill div -->
                <div class="new-skill">
                    <h2 id="learning-title">Currently Learning</h2>
                    <p id="skill-goal">
                        I love learning about new technologies and how I can implement them successfully.
                        I am currently learning <span>SCSS SASS, PHP, WordPress CMS, and ZURB Foundation 6</span> for
                        responsive email design.
                    </p>
                </div>
                <!-- end of new-skill div -->

            </div>
            <!-- end of skill div -->

        </div>
        <!-- end of container -->
    </div>
    <!-- end of about section -->

    <!-- start of work-sec -->
    <div class="work-sec" id="work-sec">
        <h1 id="work-title">Work Examples</h1>

        <!-- start of grid -->
        <div id="grid">
            <!-- start of project1 -->
            <div class="project1">
                <img id="project1-img" src="https://i.postimg.cc/4xJm6Zvc/animal-animal-photography-cute-33102.jpg"
                    alt="Puppy landing-page image.">

                <!-- start of info-slide -->
                <div class="info-slide" id="info-slide">
                    <a href="https://btolor.github.io/Puppy-Landing-Page/">
                        <h1>Pupppy</h1>
                    </a>
                    <p>
                        This is a landing page for an eCommerce store called Puppy.This page was built with HTML and
                        CSS/Sass.
                    </p>
                    <div class="project-btns">
                        <a href="https://github.com/btolor/Puppy-Landing-Page" target="_blank">View Code <i
                                class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="https://btolor.github.io/Puppy-Landing-Page/" target="_blank">View Live <i
                                class="fa fa-desktop" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- end of info-slide -->
            </div>
            <!-- end of project1 -->

            <!-- start of project2 -->
            <div class="project2">
                <img id="project2-img" src="https://i.postimg.cc/ZqQnzdGP/lawns.jpg" alt="Lawn Love website image.">

                <!-- start of info-slide -->
                <div class="info-slide" id="info-slide-lawn">
                    <a href="https://btolor.github.io/LawnLove-Landing-Page/#">
                        <h1>Lawn Love</h1>
                    </a>
                    <p>
                        This is a landing page for a lawn care service called Lawn Love. This page was built with HTML,
                        CSS/Sass, and Javascript/jQuery.
                    </p>
                    <div class="project-btns">
                        <a href="https://github.com/btolor/LawnLove-Landing-Page" target="_blank">View Code<i
                                class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="https://btolor.github.io/LawnLove-Landing-Page/#" target="_blank">View Live<i
                                class="fa fa-desktop" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- end of info-slide -->

            </div>
            <!-- end of project2 -->

            <!-- start of project3 -->
            <div class="project3">
                <img id="project3-img" src="https://i.postimg.cc/zfvvQjcX/food.jpg" alt="Foodie landing-page image.">

                <!-- start of info-slide -->
                <div class="info-slide" id="info-slide-foodie">
                    <a href="https://btolor.github.io/Foodie-Landing-Page/">
                        <h1>Foodie</h1>
                    </a>
                    <p>
                        This landing page is for a pop-up restaurant and food educational blog called Foodie to spread
                        its brand awareness.
                        This page was built with HTML and CSS/Sass.
                    </p>
                    <div class="project-btns">
                        <a href="https://github.com/btolor/Foodie-Landing-Page" target="_blank">View Code <i
                                class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="https://btolor.github.io/Foodie-Landing-Page/" target="_blank">View Live <i
                                class="fa fa-desktop" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- end of info-slide -->



            </div>
            <!-- end of project3 -->

            <!-- start of project4 -->
            <div class="project4">
                <img id="project4-img" src="https://i.postimg.cc/2yhVwSXQ/AA.jpg" alt="American Airlines email image.">

                <!-- start of info-slide -->
                <div class="info-slide" id="info-slide-shine">
                    <a href="https://btolor.github.io/transactional-email/">
                        <h1>American Airlines</h1>
                    </a>
                    <p>
                        This is a responsive transactional email template for American Airlines.
                        This email template was built using the Sass version of the ZURB Foundation
                        framework.
                    </p>
                    <div class="project-btns">
                        <a href="https://github.com/btolor/American_Airlines_Email" target="_blank">View Code <i
                                class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="https://btolor.github.io/American_Airlines_Email/" target="_blank">View Live <i
                                class="fa fa-desktop" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- end of info-slide -->

            </div>
            <!-- end of project4 -->

            <!-- start of project5 -->
            <div class="project5">
                <img id="project5-img" src="https://i.postimg.cc/KzgzGYb6/deus.jpg" alt="Deus Ex Machina email image.">

                <!-- start of info-slide -->
                <div class="info-slide" id="info-slide-kohls">
                    <a href="https://btolor.github.io/promo-email/">
                        <h1>Deus Ex Machina</h1>
                    </a>
                    <p>
                        This is a responsive promotional email template for Deus Ex Machina.
                        This email template was built using the Sass version of the ZURB
                        Foundation framework.
                    </p>
                    <div class="project-btns">
                        <a href="https://github.com/btolor/Deus_Email_Template" target="_blank">View Code <i
                                class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="https://btolor.github.io/Deus_Email_Template/" target="_blank">View Live <i
                                class="fa fa-desktop" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- end of info-slide -->

            </div>
            <!-- end of project5 -->

            <!-- start of project6 -->
            <div class="project6">
                <img id="project6-img" src="https://i.postimg.cc/L6kJghPR/apple.jpg" alt="Apple Music email image.">

                <!-- start of info-slide -->
                <div class="info-slide" id="info-slide-apple">
                    <a href="https://btolor.github.io/apple-music-newsletter/">
                        <h1>Apple Music</h1>
                    </a>
                    <p>
                        This is a responsive newsletter email is for the music and video streaming service developed by
                        Apple Inc.
                        This email was built using hand-coded HTML and CSS/Sass.
                    </p>
                    <div class="project-btns">
                        <a href="https://github.com/btolor/apple-music-newsletter" target="_blank">View Code <i
                                class="fa fa-github" aria-hidden="true"></i></a>
                        <a href="https://btolor.github.io/apple-music-newsletter/" target="_blank">View Live <i
                                class="fa fa-desktop" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- end of info-slide -->

            </div>
            <!-- end of project6 -->
        </div>
        <!-- end of grid -->


        <!-- start of project7 -->
        <!-- end of project7 -->

        <!-- start of project8 -->
        <!-- end of project8 -->


    </div>
    <!-- end of work-sec -->

    <!-- start of contact-sec -->
    <div class="contact-sec" id="contact-sec">

        <!-- <img src="/images/contact.jpg" alt=""> -->

        <!-- start of contact-content -->
        <div class="contact-content">

            

            <!-- start of form -->
            <form action="index.php" method="post" id="form">
                <!-- start of container -->
                <div class="container">
                    <h1 id="contact-title">Let's Talk</h1>
                    <!-- <h3 id="form-statement">
                            Give me a shout and lets start on a project togehter.
                        </h3> -->
                    <!-- start of input-sec -->
                    <div class="input-sec">
                        <!-- start of name -->
                        <div class="name" style="position: relative;">
                            <label for="name" style="position: absolute;color: transparent;">Name</label>
                            <input type="text" name="name" id="name" placeholder="Your Name">
                            <!-- <input type="text" name="lName" id="l-name" placeholder="Last Name"> -->
                        </div>
                        <!-- end of name -->

                        <!-- start of email-phone -->
                        <div class="email-phone" style="position: relative;">
                            <label for="email-input" style="position: absolute;color: transparent;">Email</label>
                            <input type="email" name="email" id="email-input" placeholder="Email" required>
                            <label for="phone-input" style="position: absolute;color: transparent;">Phone</label>
                            <input type="tel" name="pNumber" id="phone-input" placeholder="Phone" required>
                        </div>
                        <!-- end of email-phone -->

                        <div style="position: relative;">
                            <label for="mesg" style="position: absolute;color: transparent;">Message</label>
                            <textarea name="mesg" id="msg" placeholder="Say Hello" required></textarea>

                        </div>


                        <input type="submit" name="submit" value="Submit" id="submit-btn">

                    </div>
                    <!-- end of input-sec -->
                </div>
                <!-- end of container -->
            </form>

            <!-- end of form -->

        </div>
        <!-- end of contact-content -->


    </div>
    <!-- end of contact-sec -->

    <!-- start of footer -->
    <footer id="footer">
        <!-- <a href="#home-page" id="top-btn"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a> -->
        <!-- start of social -->
        <div class="social">
            <a href="https://github.com/btolor" target="_blank" id="github-link"
                aria-label="https://github.com/btolor"><i class="fa fa-github-square" aria-hidden="true"></i></a>
            <a href="https://twitter.com/Tolor_Boy" target="_blank" id="twitter-link"
                aria-label="https://twitter.com/Tolor_Boy"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/brandon-tolor-343098106/" target="_blank" id="linkedin-link"
                aria-label="https://www.linkedin.com/in/brandon-tolor-343098106/"><i class="fa fa-linkedin-square"
                    aria-hidden="true"></i></a>
        </div>
        <!-- end of social -->
        <p id="copyrights">© 2019 All Rights Reserved Brandon Tolor</p>
    </footer>
    <!-- end of footer -->
    <!-- Javascript JQuery Scripts -->
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/brandontolor.js"></script>
</body>

</html>