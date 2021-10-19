<!DOCTYPE html>
<html>

<head>
    <title>Matthieu's IT162 Portal</title>
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
                <a href="index.php"><img src="images/logo.png" class="logo floating" alt="Home Logo"></i> Matthieu Felker - IT162 Portal</a>
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
            <h2 class="pageID">Welcome</h2>
            <img src="images/mattavi.gif" class="desktop" alt="matt" />
            <img src="images/polaroid.png" class="phone miniwrapper" alt="matt mtn" />
            <div class="textbox">
                <p><b>My name is Matthieu!</b></p>
                <p>I am an Artist and Web Development student at Seattle Central College. Currently studying the ins and out of the IT field.</p>
                <p>My goal is to further understand of different facets of development; Learn new and useful skills, become proficient with new tools, and combine those skills with my creative nature to unlock a new level for myself and not be held back
                    by barriers.</p>
            </div>
        </section>

        <aside>
            <h3>Right Column</h3>
            <img src="images/mtn.jpg" class="tablet miniwrapper" alt="matt polaroid" />
            <p>Lorem Ipsum place holder text goes here for now</p>
            <p>Lorem Ipsum place holder text goes here for now</p>
            <div class="github-card" data-github="Cachecode" data-width="100%" data-theme="default"></div>
            <ul class="textbox quick-link nav-item">
                <p><b>Links</b></p>


                <li class="nav-item">
                    <a class="quick-link active" href="https://www.linkedin.com/in/matthieufelker">Linkdin</a>
                </li>
                <li class="nav-item">
                    <a class="quick-link" href="#">Github</a>
                </li>
                <li class="nav-item">
                    <a class="quick-link" href="#">Stackoverflow</a>
                </li>
                <li class="nav-item">
                    <a class="quick-link" href="#">Tumblr</a>
                </li>
                <li class="nav-item">
                    <a class="quick-link" href="#">Instagram</a>
                </li>
                <li class="nav-item">
                    <a class="quick-link" href="#">Twitter</a>
                </li>
                <li class="nav-item">
                    <a class="quick-link" href="#">Steam</a>
                </li>
                <li class="nav-item">
                    <a class="quick-link" href="#">Reddit</a>
                </li>
                </li>
            </ul>


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