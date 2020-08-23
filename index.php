<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mike Jahans</title>

    <!-- NORMALZE.css -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- custom CSS file -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Roboto font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <!-- material.io icon library -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- JQuery -->
    <script src="jquery-3.5.1.min.js"></script>

    <!-- scroll click JS -->
    <script src="main.js"></script>
    
</head>
<body>

    <header>
        <!-- navbar start -->


        <nav class="navbar">
            <ul>
                <li><a href="#welcome">Welcome</a></li>
                <li><a href="#services-section">Services</a></li>
                <li><a href="#portfolio-section">Portfolio</a></li>
                <li><a href="#contact-section">Contact</a></li>
            </ul>
        </nav>

        <!-- navbar end -->
    </header>
    

    <!-- main heart of the site -->
    <main>

        <!-- landing section start -->

        <section id="landing-section">

            <!-- "hi, my name is" section -->
            <div id="welcome">

            <div class="about-me">
                    <h3>A little about me</h3>
                    <p>Hello there, I am Mike and it is my goal to bring you the best value for your money, regardless of the service you may be in need of. I have a great deal of experience with the highs and lows of each service I offer, and paired with my knowledge and study in each of these fields, I am capable of providing exactly what you need for the exact price you need it done for.
                        <br>
                        <br>
                    I'm a 20-year-old from England, and during my years I have learned a great deal about these fields, with them initially being hobbies and slowly turning into career paths that I have great passion in pursuing.</p>
                </div>


                <img id="mike-cover-image" src="./img/downscale_pfp.png" alt="" draggable="false">


                <div class="intro-text">

                    <!-- name thin -->
                    <div class="name-slide">

                        <h2 id="anim-fade-first">Hey,</h2>
                        <h2 id="anim-fade-second">I'm <em>Mike</em>.</h2>

                    </div>
                    
                    

                    <div class="experience-subtitles">

                        <hr id="subtitle-divider">                


                        <h3 class="experience-subtitle" id="top-subtitle">Video Editor,</h3>
                        <h3 class="experience-subtitle">Web Designer,</h3>
                        <h3 class="experience-subtitle">Game Developer.</h3>

                    </div>
                    

                </div>
            
            </div>

        </section>

        <!-- landing section end -->



        <div class="clearfix"></div>



        <!-- Services section start -->

        <section id="services-section" class="smooth-scroll">

            <h2 id="services-header">Services I offer</h2>


            <div id="services-container">

                <!-- Video Editor service -->
                <div class="video-editor">

                    <h4>Video Editing</h4>

                    <i class="material-icons" id="video-editor-icon">movie_creation</i>

                    <p>Having edited videos for almost a decade - since 2011 - and doing so professionally since 2018, I have experience with just about every field there is. From vlogs and advertisemets to documentaries, list videos, and even logo animations, I can definitely edit the video you desire.</p>

                </div>


                <!-- Web Designer service -->
                <div class="web-deigner">

                    <h4>Web Design</h4>

                    <i class="material-icons" id="web-designer-icon">desktop_mac</i>

                    <p>With over 2 years of study and a few gigs here and there, I can create a great website for your blog, business, or company. Whether you want a static site or something with more bells and whistles, I'll provide exactly that, with a slick appearance and smooth performance.</p>

                </div>


                <!-- Game Developer service -->
                <div class="game-developer">

                    <h4>Game Development</h4>

                    <i class="material-icons" id="game-developer-icon">sports_esports</i>

                    <p>As someone who has been playing games since the age of two years old, I understand what it means to love a game and its mechanics. My goal with development is to inspire those same feelings to players, by providing a beautiful game with deep and fun mechanics. Whether you need a simple time-killing mobile game, or a deep and feature-rich experience for players to keep returning to, I can create exactly that.</p>

                </div>

            </div>

        </section>

        <!-- Services section end -->



        <div class="clearfix"></div>
        


        <!-- Portfolio section start -->

        <section id="portfolio-section" class="smooth-scroll">

            

        </section>

        <!-- Portfolio section end -->



        <div class="clearfix"></div>



        <!-- Contact section start -->

        <section id="contact-section" class="smooth-scroll">

            <h2 id="contact-header">Contact me</h2>


            <div id="contact-container">



                <form action="contactform.php" method="post">

                    <div class="txtb">

                    <label>Full Name: </label>
                    <input type="text" name="name" class="inputfield" placeholder="Enter Name" required>
                    
                    <label>Email: </label>
                    <input type="text" name="email" class="inputfield" placeholder="Enter Email">

                    <label>Subject: </label>
                    <input type="text" name="subject" class="inputfield" placeholder="Subject" required>

                
                    <label>Message: </label>
                    <textarea name="message" class="inputfield" cols="30" rows="10" required></textarea>

                    </div>

                    
    
                    <button class="btn" name="submit" href="">Send Enquiry</button>

                </form>

                

            </div>

        </section>

        <!-- Contact section end -->



        <div class="clearfix"></div>



    </main>


    <footer>
        <p>Mike Jahans &copy; 2020.</p>
    </footer>


    <!-- script for scrolling navbar -->
    <script type="text/javascript">
        window.addEventListener("scroll", function()
        {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>


</body>
</html>