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
                <a href="index.php"><img src=<?= $logo ?> class="logo floating" alt="Home Logo"></i> Matthieu Felker -
                    IT162 Portal</a>
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

        <article>

            <pre class=" article flowheader desktop tablet phone">

 _______  _                   _______  _                          
(_______)| |                 (_______)| |                     _   
 _____   | |   ___   _ _ _    _       | |__   _____   ____  _| |_ 
|  ___)  | |  / _ \ | | | |  | |      |  _ \ (____ | / ___)(_   _)
| |      | | | |_| || | | |  | |_____ | | | |/ ___ || |      | |_ 
|_|       \_) \___/  \___/    \______)|_| |_|\_____||_|       \__)
Bloom Salon


            </pre>

            <article class="flowchart">
                <iframe allowfullscreen frameborder="0"
                    src="https://lucid.app/documents/embeddedchart/83bed6ce-3706-4894-bbd8-fdf4bffa52d0"
                    id=".olw6V31I87e">
                </iframe>

            </article>

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

        </article>





















        <!-- END RIGHT COL -->

        <!-- START Footer -->
        <footer class="footerbox">
            <p><small>&copy; 2020-<?= date("Y") ?> by <a href="contact.php"><b>Matthieu Felker</b></a>, All Rights
                    Reserved ~
                    <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html"
                        target="_blank"><b>Valid HTML</b></a> ~
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