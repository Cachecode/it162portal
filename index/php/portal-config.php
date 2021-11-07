<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Matthieu's IT162 Portal";
        $logo = "images/logo.png";
        $pageID = 'Welcome';

    break;

    case 'contactme.php':
        $title = "Matthieu's IT162 Contact Page";
        $logo = 'images/logo.png';
        $PageID = 'Contact Matthieu';

    break;

    default:
    $title = THIS_PAGE;
    $logo = 'fa-home';
    $PageID = 'Welcome';

        
}

?>
