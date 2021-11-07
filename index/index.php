<?php include 'php/portal-config.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title> <?= $title ?> </title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
</head>

<body>
    <!-- START WRAPPER -->
    <main class="wrapper">
        <header class="header">
            <h1>
                <a href="index.php"><img src=<?= $logo ?> class="logo floating" alt="Home Logo"></i> Matthieu Felker - IT162 Portal</a>
            </h1>
            <nav>
                <ul class="topnav" id="myTopnav">

                    <li><a href="index.php" class="selected">Home</a></li>
                    <li><a href="big/index.php">Big</a></li>
                    <li><a href="aia.php">AIA</a></li>
                    <li><a href="flowchart.php">Flowchart/Layout</a></li>
                    <li><a href="fp/index.php">Final Project</a></li>
                    <li><a href="contactme.php">Contact Matthieu</a></li>
                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>
        </header>

        <section>

            <pre class="welcomeheader desktop tablet phone">

  __      __          ___                                        
 /\ \  __/\ \        /\_ \                                       
 \ \ \/\ \ \ \     __\//\ \     ___    ___     ___ ___      __   
  \ \ \ \ \ \ \  /'__`\\ \ \   /'___\ / __`\ /' __` __`\  /'__`\ 
   \ \ \_/ \_\ \/\  __/ \_\ \_/\ \__//\ \L\ \/\ \/\ \/\ \/\  __/ 
    \ \___x____/\ \____\/\____\ \____\ \____/\ \_\ \_\ \_\ \____\
     \/__//___/  \/____/\/____/\/____/\/___/  \/_/\/_/\/_/\/____/


            </pre>

            <img src="images/mattavi.gif" class="desktop" alt="matt" />

            <img src="images/polaroid.png" class="phone miniwrapper" alt="matt mtn" />

            <img class="textbox tablet" src="images/8BITAVI.gif" class="tablet" alt="8bit gif">


        </section>



        <aside>
            <div class="textbox desktop">

                <p><b>My name is Matthieu!</b></p>
                <p>I am an Artist and Web Development student at Seattle Central College. Currently studying the ins and out of the IT field.</p>
                <p>My goal is to further understand of different facets of development; Learn new and useful skills, become proficient with new tools, and combine those skills with my creative nature to unlock a new level for myself and not be held back
                    by barriers.
                </p>

                <div class="github-card" data-github="Cachecode" data-width="100%" data-theme="default"></div>

                <ul class="textbox quick-link nav-item">
                    <small>
                        <h3>Links</h3>
                    </small>
                    <li class="nav-item">
                        <a class="quick-link active" href="https://www.linkedin.com/in/matthieufelker">Linkdin</a>
                    </li>
                    <li class="nav-item">
                        <a class="quick-link" href="https://github.com/Cachecode">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="quick-link" href="https://steamcommunity.com/id/CBNTC1/">Steam</a>
                    </li>
                    <li class="nav-item">
                        <a class="quick-link" href="https://www.reddit.com/user/Globes_">Reddit</a>
                    </li>
                    </li>

                </ul>



            </div>
        </aside>

   

        <!-- END RIGHT COL -->

        <!-- START Footer -->
        <footer class="footerbox">
            <p><small>&copy; 2020-<?= date("Y") ?> by <a href="contact.php"><b>Matthieu Felker</b></a>, All Rights
                    Reserved ~
                    <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank"><b>Valid HTML</b></a> ~
                    <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank"><b>Valid
                            CSS</b></a></small></p>
            <p><small>Made with &hearts; and Coffee</small></p>
        </footer>

        <!-- END Footer -->

    </main>
    <!-- END WRAPPER -->



    <script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>

    <script>
        //https://tinyurl.com/dynamic-html-checker
        document.getElementById("html-checker").setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);

        //manages mobile nav
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>