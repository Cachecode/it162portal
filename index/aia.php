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
                    <?=makeLinks($nav1)?>
                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>

        </header>
   



        <body>
            <div>


                <pre class="CIinfo">
 ____    ___                       __                       ___                                   __                           
/\  _`\ /\_ \    __               /\ \__      __          /'___\                                 /\ \__  __                    
\ \ \/\_\//\ \  /\_\     __    ___\ \ ,_\    /\_\    ___ /\ \__/  ___   _ __    ___ ___      __  \ \ ,_\/\_\    ___     ___    
 \ \ \/_/_\ \ \ \/\ \  /'__`\/' _ `\ \ \/    \/\ \ /' _ `\ \ ,__\/ __`\/\`'__\/' __` __`\  /'__`\ \ \ \/\/\ \  / __`\ /' _ `\  
  \ \ \L\ \\_\ \_\ \ \/\  __//\ \/\ \ \ \_    \ \ \/\ \/\ \ \ \_/\ \L\ \ \ \/ /\ \/\ \/\ \/\ \L\.\_\ \ \_\ \ \/\ \L\ \/\ \/\ \ 
   \ \____//\____\\ \_\ \____\ \_\ \_\ \__\    \ \_\ \_\ \_\ \_\\ \____/\ \_\ \ \_\ \_\ \_\ \__/.\_\\ \__\\ \_\ \____/\ \_\ \_\
    \/___/ \/____/ \/_/\/____/\/_/\/_/\/__/     \/_/\/_/\/_/\/_/ \/___/  \/_/  \/_/\/_/\/_/\/__/\/_/ \/__/ \/_/\/___/  \/_/\/_/

      </pre>

                <!-- START TABLE -->

                <table class="clientinfo">

                    <tr>

                        <td>Client's name and the final decision maker</td>
                        <td>My client's name is Bianca Long, she is my hairstylist and friend, she is the final decision
                            maker.</td>

                    </tr>

                    <tr>
                        <td>Client's business (website) name</td>
                        <td>The business name is Bloom Salon, It is a private hair salon.</td>

                    </tr>

                    <tr>
                        <td>Redesign or brand new website?</td>
                        <td>This will be a brand new website.</td>
                    </tr>

                    <tr>
                        <td>Type of website </td>
                        <td>It will be an identity and marketing website, with information and social networking
                            aspects.</td>

                    </tr>

                    <tr>
                        <td>Client's goal(s) </td>
                        <td>My client hopes to gain a presence on the internet for her business in order to market the
                            salons services and gain new clients.</td>

                    </tr>
            </div>
            <div>

                </table>

                <!-- END TABLE -->

                <pre class='aiaheader'>
     ______  ______   ______     
    /\  _  \/\__  _\ /\  _  \    
    \ \ \L\ \/_/\ \/ \ \ \L\ \   
     \ \  __ \ \ \ \  \ \  __ \  
      \ \ \/\ \ \_\ \__\ \ \/\ \ 
       \ \_\ \_\/\_____\\ \_\ \_\
        \/_/\/_/\/_____/ \/_/\/_/

      </pre>

                <!-- START TABLE -->

                <table class="aia">

                    <tr>
                        <th>Audience</th>
                        <th>Issues / Concerns / Needs</th>
                        <th>Approach</th>
                    </tr>

                    <!-- ROW 1 -->

                    <tr>
                        <td><b>Potential Clients:</b>
                            Clients may be of any gender and varied in age,
                            They will likely have good, but not expert, computer and internet skills.
                            I predict most will use safari on mobile, a large majority of people are using Iphones, But
                            will keep all popular ways of browsing in mind.
                        </td>

                        <td>
                            <b>Potential Clients</b> are looking for a trustworthy, confident, talented and
                            communicative hairstylsit
                            to provide an important service. They will want to find out:
                            <ul>What services Bloom Salon offers</ul>
                            <ul>What their rates are</ul>
                            <ul>How their services are better than competitors</ul>
                            <ul>Examples of their work</ul>
                            <ul>Contact information to get in touch with them for
                                questions.</ul>
                        </td>

                        <td><b>How I will get the attention of potential clients</b> is by show them very clearly what
                            they want and need to see if they wish to do buisness with Bloom.
                            <ul>List the offered services, what makes Bloom Salon different and a better choice.</ul>
                            <ul> A gallery with examples of previous work, or a portfolio.</ul>
                            <ul>Service rates, and a contact page with a phone number, e-mail address, and contact form.
                            </ul>
                        </td>

                    </tr>

                    <!-- ROW 2 -->

                    <td><b>Current Clients:</b>
                        This group's profile will be similar to potential clients.
                        The clients will have a feel for what bloom salon has to offer, but we want to
                        keep them in the loop if anything was to change, updates, news, or possible special offers for
                        referrals.
                    </td>

                    <td><b>How we will keep current clients buisness</b> will be fairly simple,
                        for they wont be as active because they are already in close communication with bloom salon,
                        but thats not to say the website to be built won't be welcoming to a loyal customer.
                        Current clients will be featured in the gallery if they are asked and choose to,
                        and there will be a possibility of a reward system to grow the buisness.
                        It will be most important just to offer clear and direct information,
                        for that will be the most helpful to all; And the main purpose for the website.
                    </td>

                    <td>
                        <b>How I will keep the attention of returning clients</b> is by providing updated information
                        and news on anything of importance.
                        <ul>updated prices</ul>
                        <ul>promotions</ul>
                        <ul>changes in product</ul>
                        <ul>appointment setting</ul>
                    </td>

                    <!-- ROW 3 -->


                </table>

            </div>

            <!-- END TABLE -->

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