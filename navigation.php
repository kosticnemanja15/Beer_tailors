<?php
/**
 * The navigation for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WP_Ogitive
 */
?>

<?php

$defaults = array(
	'theme_location'  => 'primary',
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

 wp_nav_menu( $defaults );

?>

 <!-- <nav class="menu-navigation-container">
	  <ul id="menu-navigation" class="menu">
	    <li><a href="index.html">Home</a></li>
	    <li><a href="#">Design your beer</a></li>
	    <li><a href="tutorial.html">Tutorial</a></li>
	    <li><a href="#">Events</a>
	      <ul class="sub-menu">
	          <li><a href="events-single.html">Upcomin events</a></li>
	          <li><a href="past-events.html">Past events</a></li>
	          
	      </ul>
	    </li>
	    <li><a href="about-us.html">About us</a></li>
	    <li><a href="contact.html">Contacts</a></li>
	    <li><a href="#" class="btn orange">ORDER ONLINE</a></li>
	    
	   </ul>
</nav>  <!-- menu-navigation-container    --> 
