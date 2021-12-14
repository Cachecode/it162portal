<?php include 'php/portal-config.php'?>

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
                    <?=makeLinks($nav1)?>
                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>

        </header>


<!-- left column start-->




<!-- start form -->

        <section>


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

    
<!-- end form -->

<!-- left column end-->





<!-- right column start-->

<aside>
            <div class="textbox desktop">
                
            <pre class="mailbox">
     ____
    |    |
    | .--'
,.--| |-------------.
|:\ | |   __       _ \
|#| | |              |
|#| |o|    Felker    |
|#| '-'              |
|#|                  |
 \|__________________|
   [_______________]
              | |
              | |
              | |
            \ | |  / 
            \\| |//
           \ \\ ///
    ====================== 
            </pre>
            
                <b><p>Let's talk!</p></b>
                <p> If getting in contact with me is something you would like to do,
                look no further. Fill out the form on this page for a direct Email,
                OR, check out any of my links. I am not hard to reach!</P><br>
                <p>-Matt</p>

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

<!-- right column end-->


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