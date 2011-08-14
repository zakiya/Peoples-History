<?php

/**	make breadcrumbs links **/

/**
* This snippet loads up different page-type.tpl.php layout
* files automatically. For use in a page.tpl.php file.
*
* This works with Drupal 4.5,  Drupal 4.6 and Drupal 4.7
*/

/*if ($is_front) { check if it's the front page 
*    include 'page-extranet-home.tpl.php'; load a custom front-page.tpl.php 
*    return; }*/
$asset_path =  base_path() . path_to_theme();

//if ($is_front || $node->nid=="17") {		/* check if it's the home page */ /*  or if it's being edited */
if ($node->type == 'homepage') {		/* check if it's the home page */ /*  or if it's being edited */
    include 'page-home.tpl.php';			/* load a page-home.tpl.php */
    return; }

if ($node->type == 'landing_page') {		/* check if it's the landing_page */
    include 'page-L1.tpl.php';				/* load a page-L1.tpl.php */
    return; }

//if ($node->type == 'video' && arg(2) != 'edit') {		
//    include 'page-video.tpl.php';				
//    return; }

include 'page-default.tpl.php'; 			/* if none of the above applies, load the page-default.tpl.php */
    return;
?>
