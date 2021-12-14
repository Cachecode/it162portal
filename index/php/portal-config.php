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

    case 'aia.php':
        $title = "Matthieu's IT162 AIA Page";
        $logo = 'images/logo.png';
        $PageID = 'Contact Matthieu';

    break;

    case 'flowchart.php':
        $title = "Matthieu's IT162 Final Project Flowchart";
        $logo = 'images/logo.png';
        $PageID = 'Contact Matthieu';

    break;


    default:
    $title = THIS_PAGE;
    $logo = 'fa-home';
    $PageID = 'Welcome';

        
}

$nav1['index.php'] = "Welcome";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['https://bloomsalon.dreamhosters.com'] = "Final Project";
$nav1['contactme.php'] = "Contact Matthieu";


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
*/

function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>
