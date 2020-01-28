<?php
/**
 * The main template file
 */ 


	get_header();

	echo '<div class="attorna-content-container attorna-container">';
	echo '<div class="attorna-sidebar-style-none" >'; // for max width

	get_template_part('content/archive', 'default');

	echo '</div>'; // attorna-content-area
	echo '</div>'; // attorna-content-container

	get_footer(); 
