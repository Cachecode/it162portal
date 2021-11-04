<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
	
	<form>
  <ul class="flex-outer">
    <li>
      <label for="first-name">First Name</label>
      <input type="text" id="first-name" placeholder="Enter your first name here">
    </li>
    <li>
      <label for="last-name">Last Name</label>
      <input type="text" id="last-name" placeholder="Enter your last name here">
    </li>
    <li>
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Enter your email here">
    </li>
    <li>
      <label for="phone">Phone</label>
      <input type="tel" id="phone" placeholder="Enter your phone here">
    </li>
    <li>
      <label for="message">Message</label>
      <textarea rows="6" id="message" placeholder="Enter your message here"></textarea>
    </li>
    <li>
      <button type="submit">Submit</button>
    </li>
  </ul>
</form>
	<!-- END HTML FORM -->
