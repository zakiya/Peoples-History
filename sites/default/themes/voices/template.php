<?php

define("SITE_ARCHITECTURE_VOCABULARY_ID","2");
define("FOR_ORGANIZERS_ROLE_ID",5);
define("FOR_TEACHERS_ROLE_ID",6);
define("VIDEO_PLAY_BUTTON_IMAGE_SRC","images/button-play-white-60.png");
define("ASSETS_PATH",base_path() . path_to_theme());

global $roleMap;
$roleMap = array("organizer/resources/new"=>"organizer","teachers/resources"=>"teacher");
function voices_regions() {
  return array(
		'left' => t('left sidebar'),
		'right' => t('right sidebar'),
		'content' => t('content'),
		'content_top' => t('content top'),
		'header' => t('header'),
		'footer' => t('footer')
  );
} 
drupal_add_js(path_to_theme()."/scripts/swfobject.js");
 /**
  * Return a themed breadcrumb trail.
  *
  * @param $breadcrumb
  *   An array containing the breadcrumb links.
  * @return a string containing the breadcrumb output.
  */
 function voices_breadcrumb($breadcrumb) {
   if (!empty($breadcrumb)) {
     return '<div id="breadcrumb">'. implode(' : ', $breadcrumb). '</div>';
   }
 }
 
 // $Id: template.php,v 1.3.2.4 2007/03/05 22:19:04 yched Exp $
function phptemplate_field(&$node, &$field, &$items, $teaser, $page) {
  $field_empty = TRUE;
  foreach ($items as $delta => $item) {
    if (!empty($item['view']) || $item['view'] === "0") {
      $field_empty = FALSE;
      break;
    }
  }
  $variables = array(
    'node' => $node,
    'field' => $field,
    'field_type' => $field['type'],
    'field_name' => $field['field_name'],
    'field_type_css' => strtr($field['type'], '_', '-'),
    'field_name_css' => strtr($field['field_name'], '_', '-'),
    'label' => t($field['widget']['label']),
    'label_display' => isset($field['display_settings']['label']['format']) ? $field['display_settings']['label']['format'] : 'above',
    'field_empty' => $field_empty,
    'items' => $items,
    'teaser' => $teaser,
    'page' => $page,
  );

  return _phptemplate_callback('field', $variables, array('field-'. $field['field_name']));
}

 
 
function _phptemplate_variables($hook, $vars = array()) {
      global $user;
      
      // An anonymous user has a user id of zero.      
      if ($user->uid > 0) {
        // The user is logged in.
        $vars['logged_in'] = TRUE;
		if ($user->uid==1)
		{
			$vars['administrator']=TRUE;
		}
      }
      else {
        // The user has logged out.
        $vars['logged_in'] = FALSE;
      }

  switch ($hook) {
    // Send a new variable, $logged_in, to page.tpl.php to tell us if the current user is logged in or out.
    case 'page':
      // get the currently logged in user
      
      $body_classes = array();
      // classes for body element
      // allows advanced theming based on context (home page, node of certain type, etc.)
      $body_classes[] = ($vars['is_front']) ? 'front' : 'not-front';
      $body_classes[] = ($vars['logged_in']) ? 'logged-in' : 'not-logged-in';
      if ($vars['node']->type) {
        $body_classes[] = 'ntype-'. voices_id_safe($vars['node']->type);
      }
      switch (TRUE) {
      	case $vars['sidebar_left'] && $vars['sidebar_right'] :
      		$body_classes[] = 'both-sidebars';
      		break;
      	case $vars['sidebar_left'] :
      		$body_classes[] = 'sidebar-left';
      		break;
      	case $vars['sidebar_right'] :
      		$body_classes[] = 'sidebar-right';
      		break;
      }
      // implode with spaces
      $vars['body_classes'] = implode(' ', $body_classes);
      
      break;
      
    case 'node':
      // get the currently logged in user
      // set a new $is_admin variable
      // this is determined by looking at the currently logged in user and seeing if they are in the role 'admin'
      //$vars['is_admin'] = in_array('admin', $user->roles);

      
      $node_classes = array('node');
      if ($vars['sticky']) {
      	$node_classes[] = 'sticky';
      }
      if (!$vars['node']->status) {
      	$node_classes[] = 'node-unpublished';
      }
      $node_classes[] = 'ntype-'. voices_id_safe($vars['node']->type);
      // implode with spaces
      $vars['node_classes'] = implode(' ', $node_classes);
      
      break;
      
    case 'comment':
      // we load the node object that the current comment is attached to
      $node = node_load($vars['comment']->nid);
      // if the author of this comment is equal to the author of the node, we set a variable
      // then in our theme we can theme this comment differently to stand out
      $vars['author_comment'] = $vars['comment']->uid == $node->uid ? TRUE : FALSE;
      break;
  }
  	$agent = $_SERVER['HTTP_USER_AGENT'];
	if(eregi("msie",$agent))
	{
		$val = explode(" ",stristr($agent,"msie"));
		$bd['browser'] = $val[0];
		$bd['version'] = $val[1]+0;
		if ($bd['version']<7)
		{
			$IE6pingFix=TRUE;
		}
	}
	$vars['IE6pingFix']=$IE6pingFix;
	$vars['asset_path'] = ASSETS_PATH;
  return $vars;
}

/**
* Converts a string to a suitable html ID attribute.
* - Preceeds initial numeric with 'n' character.
* - Replaces space and underscore with dash.
* - Converts entire string to lowercase.
* - Works for classes too!
* 
* @param string $string
*  the string
* @return
*  the converted string
*/
function voices_id_safe($string) {
  if (is_numeric($string{0})) {
    // if the first character is numeric, add 'n' in front
    $string = 'n'. $string;
  }
  return strtolower(preg_replace('/[^a-zA-Z0-9-]+/', '-', $string));
}

function admin_edit_content($nid,$administrator)
{
	if ($administrator)
	 {
		 return '<a href="/node/'.$nid.'/edit">or edit this content</a>';
	 }
	 else
	 {
		 return NULL;
	 }
}


/** unique classes for menu items **/
function phptemplate_menu_tree($pid = 1) {
  if ($tree = menu_tree($pid)) {
    return "\n<ul class=\"menu menu-". $pid . "\">" . "\n". $tree ."\n</ul>\n";//<br class=\"clear-both\" />
  }
}


function phptemplate_menu_item($mid, $children = '', $leaf = TRUE) {
  return '<li class="'. ($leaf ? 'leaf' : ($children ? 'expanded' : 'collapsed')) .' menu-' . $mid . '">'. menu_item_link($mid) . $children ."</li>\n";
}


/** add images to menu titles **/
function phptemplate_menu_item_link($item, $link_item) {
    // Allow HTML if the menu text is an image tag: call l() with 7th argument set to TRUE
    // See <a href="http://api.drupal.org/api/4.7/function/l
	$query = NULL;
	$url=parse_url($item['path']); 
	if (isset($url['query']))
	{
		$query = $url['query'];
		$item['path'] = $url['path'];
		$link_item['path'] = $url['path'];
	}
	 
if( strpos($item['title'], '<img') === 0 || strpos($item['title'], '<div') === 0) 
{
	return l($item['title'], $link_item['path'], !empty($item['description']) ? array('title' => $item['description']) : array(), $query, NULL, FALSE, TRUE);
}
   
  return l($item['title'], $link_item['path'], !empty($item['description']) ? array('title' => $item['description']) : array(), $query);
}


/** please refere to http://drupal.org/node/154137 */
function phptemplate_search_block_form($form) {
  /**
   * This snippet catches the default searchbox and looks for
   * search-block-form.tpl.php file in the same folder
   * which has the new layout.
   */
  return _phptemplate_callback('search-block-form', array('form' => $form));
}


function NOT_voices_user_login($form) {
	$vars = array();
	print_r($form);
	$a = $form['#action']; // => /user/register?destination=organize/resources
	$a = urldecode($a);
	$output =  _phptemplate_callback('user_registration_form', $vars);
	$output .= drupal_render($form);
	return $output;
}



function voices_user_register($form) 
{
	global $roleMap;
	$vars = array();
	$url = parse_url($form['#action']); // => /user/register?destination=organize/resources
	/*
	Array
	(
		[path] => /user/register
		[query] => destination=organize/resources
	)
	*/
	$str = parse_str($url['query']);
	if ($destination)
	{
		if (isset($form['autoassignrole_user']))
		{
			$roles = $form['autoassignrole_user']['AUTOASSIGNROLE_ROLE_USER']['#options'];

			if (count($roles)>0)
			{
				foreach ($roles as $k=>$userRole)
				{
					$role = $roleMap[$destination];
					if ($role == $form['autoassignrole_user']['AUTOASSIGNROLE_ROLE_USER'][$k]['#title'])
					{
						$form['autoassignrole_user']['AUTOASSIGNROLE_ROLE_USER'][$k]['#value'] = $role;
					}
					else
					{
						//unset($form['autoassignrole_user']['AUTOASSIGNROLE_ROLE_USER']['#options'][$k]);
						//$form['autoassignrole_user']['AUTOASSIGNROLE_ROLE_USER'][$k]['#attributes'] = array("disabled"=>"disabled");
					}
				}
			}
		}
	}
	//print_r($form);die();
//	$form['roles'][]='organizer';
//	$form['roles'][]='teacher';
//	print_r($form);die();
	$output =  _phptemplate_callback('user_registration_form', $vars);
	$output .= drupal_render($form);
	return $output;
}


/** adds code to the bottom of the page **/
/*function phptemplate_closure($main = 0) { 
	$footer = module_invoke_all('footer', $main); 
	$google  = '<script type="text/javascript"> var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));</script>';
	$google .= '<script type="text/javascript"> var pageTracker = _gat._getTracker("UA-2417967-1"); pageTracker._initData(); pageTracker._trackPageview();</script>';
	$output .= '<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script><script t<strong></strong>ype="text/javascript">_uacct = "UA-4759621-1";urchinTracker();</script>';
	$output .= implode("\n", $footer) . drupal_get_js('footer');
	$output .= $google;
	$output  ='<!-- google analytics are disabled while in development -->';
	return $output;
}*/


function getTaxonomy($taxonomy, $vocabulary)
{
	if ($taxonomy == NULL || $vocabulary == NULL || $vocabulary <= 0) {return FALSE;}
	foreach ($taxonomy as $k=>$taxon)
	{
		if ($taxon->vid==$vocabulary) { return $taxon;}
	}
	return FALSE;
}

function getParentTaxonomyArray($taxon)
{
	$parentArray = array();
	array_push($parentArray,$taxon->tid);
	$parentTerm = current(taxonomy_get_parents($taxon->tid));
	$c=0;
	while (isset($parentTerm->tid))
	{
		array_push($parentArray,$parentTerm->tid);
		$parentTerm = current(taxonomy_get_parents($parentTerm->tid));
	}
	return array_reverse($parentArray);
	
}

function phptemplate_views_view_list_upcoming_events_all($view, $nodes, $type) 
{
		//print_r($view);die();
	$output = '<!-- upcoming-events_all --><div id="view-'.$view->name.'" class="view view-'.$view->name.'" location="template.php">';
	$nodes_count = count($nodes);
	$i=0;
	foreach ($nodes as $i => $node)
	{

		$i++;
		$zebra = $i % 2 ? " class=\"odd\" " :" " ;//class=\"even\" 
		$output .= _phptemplate_callback('views-list-performances_list', array('node' => $node,'nodes_count'=>$nodes_count, 'zebra'=>$zebra));
	}
	$output .= "</div>";
//		print($output);die();
	return $output;
}



function phptemplate_views_view_list_video_list($view, $nodes, $type) 
{
	$output = $javascript ."<table id=\"video_jukebox_videoList\">";
	$nodes_count = count($nodes);
	$i=0;
	foreach ($nodes as $i => $node)
	{
		$i++;
		$zebra = $i % 2 ? " class=\"odd\" " :" " ;//class=\"even\" 
		$output .= " <tr ".$zebra." valign=\"top\"><td class=\"video-list-thumb\">"._phptemplate_callback('views-list-video_list', array('node' => $node,'nodes_count'=>$nodes_count));
	}
	$output .= "</table>";
//		print($output);die();
	return $output;
}


function phptemplate_views_view_list_videos_promoted($view, $nodes, $type) 
{

	$fisrtNode = $nodes[0];
	unset($nodes[0]);

	$img_node =node_load($fisrtNode->node_data_field_thumb_nail_field_thumb_nail_nid);
	$video = node_load($fisrtNode->nid);
	switch ($video->field_video_source[0]['value'])
	{
		case "vimeo":
			$swfSrc = explode("/",$video->field_vimeo_link[0]['url']);
			$swfSrc = $swfSrc[count($swfSrc)-1];
			$swfSrc = 'http://www.vimeo.com/moogaloop.swf?clip_id='.$swfSrc.'&server=www.vimeo.com&show_title=0&show_byline=0&show_portrait=0&color=&fullscreen=1&autoplay=1';
			$video_link = $swfSrc ;
		break;
		case "youtube":
			$video_link = $video->field_youtube_link[0]['url'];
		break;
		case "local":
			$video_link = $video->field_src[0]['value'];
		break;
	}
$output = "<div class='watch-videos-first'>\n<div class='video-list-wrapper'>\n<div class='video-list-thumbnail'>\n<a href='".$video_link."' rel='lightvideo[width:640px\; height:360px\;][".$fisrtNode->title."]'>\n<img src='".ASSETS_PATH."/".VIDEO_PLAY_BUTTON_IMAGE_SRC."' class='video-play-button'/>\n<img src='/".$img_node->images['video_thumbnail']."' alt=''/>\n</a>\n</div>\n<div class='video-list-text'>";
$output .= "<h3 class='title'>\n<a href='".$video_link."' rel='lightvideo[width:640px; height:360px;][".$fisrtNode->title."]'>".$fisrtNode->node_title."</a>\n</h3>\n<div class='text-body'>\n<p>".t($video->body)."</p>\n<div class='view-field view-data-field-video-source-value'>\n<a href='".$video_link."' rel='lightvideo[width:640px; height:360px;][".$fisrtNode->title."]'>watch this video &rsaquo;</a>".admin_edit_content($fisrtNode->nid,$administrator)."</div>\n</div>\n</div><br class='clear-both' />\n</div>\n</div>";
	return $output.phptemplate_views_view_list_video_list($view, $nodes, $type);
}


//[views]-[view]-[list]-[view-name]=>(arguments)[view,nodes,type]
function phptemplate_views_view_list_product_list($view, $nodes, $type) 
{
	$output = "<table id=\"product_list_table\" cellspacing=\"0\" cellpadding=\"5\">";
	$nodes_count = count($nodes);
	$i=0;
	foreach ($nodes as $i => $node)
	{
		$i++;
		//$zebra = $i % 2 ? " class=\"odd\" " :" " ;//class=\"even\" 
		$output .= " <tr valign=\"top\"><td class=\"product-list-thumb\" align=\"right\">"._phptemplate_callback('views-list-product_list', array('node' => $node,'nodes_count'=>$nodes_count));
	}
	$output .= "</table>";
//		print($output);die();
	return $output;
}

