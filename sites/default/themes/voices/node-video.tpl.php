<?php
//print_r($node);die();
//$videoSource = "/".$node->field_local_reference[0]['value'];
//$videoSource ='http://www.youtube.com/v/OrnzYF0SMvM&enablejsapi=1&playerapiid=ytplayer';
$flashVars = "";
$swf = "";
if (isset($node->field_vimeo_link) && $node->field_vimeo_link[0]['url']) //first  //_youtube
{
	echo 'vimeo is on ---------------';
	//create second
	$videoSource = $node->field_vimeo_link[0]['url'];
	//$swf = 'swfobject.embedSWF("'.$videoSource.'", "flashcontent", "425", "356", "8", null, flashvars, params, atts);';
}
else if (isset($node->field_youtube_link) && $node->field_youtube_link[0]['url']) //second
	{
		// youtube
		/*	swfobject.embedSWF("<?php print $videoSource; ?>", "flashcontent", "425", "356", "8", null, null, params, atts);*/
		$videoSource = $node->field_youtube_link[0]['url'];
		$videoSource = 'http://www.youtube.com/v/4vr_vKsk_h8&enablejsapi=1&playerapiid=ytplayer';
		$swf = 'swfobject.embedSWF("'.$videoSource.'", "flashcontent", "425", "356", "8", null, null, params, atts);'."\n";
	}
	else if (isset($node->field_local_link))// run local
	{
		$videoSource = $node->field_local_link[0]['value'][0]=="/"?$node->field_local_link[0]['value']:"/".$node->field_local_link[0]['value'];
		$flashVars .= 'var flashvars = {};'."\n";
		$flashVars .= 'flashvars.movieURL = "'.$videoSource.'";'."\n";
		$flashVars .= 'flashvars.allowFullScreen = "true";'."\n";
		$flashVars .= 'flashvars.movieTitle = "This is the movie title";'."\n";

		$swf = 'swfobject.embedSWF("/'.path_to_theme().'/flash/video-player-as2.swf", "flashcontent", "425", "356", "8", null, flashvars, params, atts);'."\n";
	}
	else return;
?>
<!--<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="/sites/default/themes/voices/scripts/AC_RunActiveContent.js" language="javascript"></script>
-->
<!-- node-video.tpl.php -->
<div class="<?php print $node_classes ?>" id="node-<?php print $node->nid; ?>">
  <?php if ($page == 0): ?>
    <h2 class="title">
      <a href="<?php print $node_url ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if ($picture) print $picture; ?>  
  
  <?php if ($submitted): ?>
    <span class="submitted"><?php print t('Posted ') . format_date($node->created, 'custom', "F jS, Y") . t(' by ') . theme('username', $node); ?></span> 
  <?php endif; ?>


  <?php //if (count($taxonomy)): ?>
  	<div class="taxonomy"><?php //print t(' in ') . $terms ?></div>
	<?php //endif; ?>
  

  <div class="content">
	<div id="flashcontent" style="padding:0">
		Flash equivalent content goes here.
	</div>
	<script type="text/javascript">
	<?php 
   // var so = new SWFObject("/sites/default/themes/voices/flash/video-player-as2.swf", "videoPlayer", "360", "295", "8", "#aaa");
	/*var so = new SWFObject("/<?php echo path_to_theme(); ?>/flash/video-player.swf", "videoPlayer", "350", "270", "9", "#aaa");
	so.addParam("wmode", "opaque");
	so.addParam("salign", "lt");
	so.addParam("allowScriptAccess", "always");
	so.addVariable("movieURL", "<?php print $videoSource; ?>");
	so.addVariable("allowFullScreen", "true");
	so.addVariable("movieTitle", "This is the movie title");
	// add fv_ as a prefix to your component's parameters
	so.write("flashcontent");
   */
   ?>
   <?php echo $flashVars; 
   
/*   var flashvars = {};
	flashvars.movieURL = "<?php print $videoSource; ?>";
	flashvars.allowFullScreen = "true";
	flashvars.movieTitle = "This is the movie title";
*/
?>
	var params = { allowScriptAccess: "always",wmode:"opaque"};//, salign:"lt" 
	var atts = { id: "flashcontent" };
<?php
/*
// if local player 
//	swfobject.embedSWF("/<?php echo path_to_theme(); ?>/flash/video-player-as2.swf", "flashcontent", "425", "356", "8", null, flashvars, params, atts);

//http://www.youtube.com/v/dTDVKDzVOcg&enablejsapi=1&playerapiid=ytplayer
*/
 echo "\n".$swf; ?>
   
</script>

		<?php print $content; ?>
  </div>
  
  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
 
</div>
