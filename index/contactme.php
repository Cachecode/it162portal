<!DOCTYPE html>
<html lang="en">

<head>
    <title>Matthieu Felker's contact page</title>
    <meta charset='utf-8' />
    <meta name='robots' content="noindex,nofollow" />
    <meta name='viewport' conent='width=device-width' />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/forms.css" />
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="big/index.php">Big</a></li>
                    <li><a href="aia.php">AIA</a></li>
                    <li><a href="flowchart.php">Flowchart/Layout</a></li>
                    <li><a href="fp/index.php">Final Project</a></li>
                    <li><a href="contactme.php" class="selected">Contact Matthieu</a></li>
                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>
        </header>

        <section class='formsection'>

            <div class="formbox">
            

                <?php

                include 'includes/contact_include.php'; #site keys & code here

                $toAddress = "mattfelker206@outlook.com";  //place your/your client's email address here
                $toName = "Matthieu Felker"; //place your client's name here
                $website = "Matthieu Felker's Portal Website";  //place NAME of your client's 
                echo loadContact('simple.php');

                ?>
                
            </div>


        </section>

        <aside class='formaside'>
            
            <div class="github-card" data-github="Cachecode" data-width="100%" data-theme="default"></div>
            <ul class="textbox quick-link nav-item">
                <small>
                    <h3>Links</h3>
                </small>
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



</body>


<footer class="footerbox">
    <p><small>&copy; 2020-<?= date("Y") ?> by <a href="contact.php"><b>Matthieu Felker</b></a>, All Rights
            Reserved ~
            <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank"><b>Valid HTML</b></a> ~
            <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank"><b>Valid
                    CSS</b></a></small></p>
    <p><small>Made with &hearts; and Coffee</small></p>
</footer>


</html>

<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>