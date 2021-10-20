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

<head>
    <title>IT162 Portal - Edit this code to make it your own!</title>
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