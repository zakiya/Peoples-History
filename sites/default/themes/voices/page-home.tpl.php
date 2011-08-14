<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">
<head>
  <title><?php print $head_title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<script type="text/javascript" src="<?php print $asset_path ?>/scripts/swfobject.js"></script>
<script src="<?php print $asset_path ?>/scripts/sifr.js" type="text/javascript"></script>
<script src="<?php print $asset_path ?>/scripts/sifr-config.js" type="text/javascript"></script>
<script type="text/javascript">var asset_path = '<?php echo $asset_path; ?>';</script>

<link rel="stylesheet" href="<?php print $asset_path ?>/styles/sIFR-screen.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php print $asset_path ?>/styles/sIFR-print.css" type="text/css" media="print" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="<?php echo $asset_path ?>/ie6-fix.css" /><![endif]-->

</head>

<?php /* different ids allow for separate theming of the home page */ ?>
<body class="<?php print $body_classes; ?>" style="background-color:#333">
<div class="page" id="<?php print $node->type?$node->type:"untyped-page"; ?>">
	<div id="header">
	<?php if ($logo || $site_name ) 
		{ ?>
		<div id="logo-title">
			<?php if ($logo) 
				{ ?>
					<div  id="logo"><a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>"><img src="/files/voices_logo-home.gif" alt="<?php print t('Home'); ?>" /></a></div>
			<?php } ?>
			<div id="home-flash"><div id="flashcontent"> <img src="<?php print $asset_path ?>/images/noflash.gif" width="724" height="222" alt="Voices of a People's History" /></div></div>
			<br class="clear-both" />
		<script type="text/javascript">
		var params = { allowScriptAccess: "sameDomain",wmode:"opaque", salign:"lt", quality:"high"};// 
		var atts = { id: "flashcontent" };
		var flashvars = {}
		flashvars.headlineOne = "<?php print strtoupper($node->field_headline_one[0][value]); ?>";
		flashvars.headlineTwo = "<?php print strtoupper($node->field_headline_two[0][value]); ?>";
		flashvars.subject = "<?php print strtoupper($node->field_subject[0][value]); ?>";
		flashvars.performanceURL = "<?php print "/".$node->field_link[0][url]; ?>";
		swfobject.embedSWF("<?php print $asset_path; ?>/flash/home.swf", "flashcontent", "724", "222", "8", null, flashvars, params, atts);
		</script>
			<!-- /name-and-slogan -->
		</div>
	<?php }?>
			<div id="filmstrip"><img src="<?php print $asset_path; ?>/images/filmstrip-3.jpg" alt="" width="567" height="94" /></div>
		<script type="text/javascript">
		var params = { allowScriptAccess: "sameDomain",wmode:"transparent", salign:"lt"};// 
		var atts = { id: "filmstrip" };

		swfobject.embedSWF("<?php print $asset_path; ?>/flash/filmstrip.swf", "filmstrip", "567", "93", "8", null, null, params, atts);
		</script>			
		<?php print $header;?>
   </div><!-- /header -->
	<?php if ($topnav) {?>
	<div id="topnav">
		<?php print $topnav; ?>
	</div>
	<?php }?>
	<div id="container" class="clear-block">
		<div class="columns-wrapper">
			<!-- start main column -->
			<div id="main" class="<?php print ($sidebar_right?"":"no-right-column ");  ?>column" >
				<div id="squeeze" class="squeeze">
					<?php //print $breadcrumb; ?>
					<?php // no title for the home page ?>
					<?php if ($tabs) {  echo '<div class="tabs">'.$tabs.'</div>'; } ?>
					<?php if ($mission) { echo '<div id="mission">'.$mission.'</div>'; } ?>
					<?php print $help; ?> 
					<?php print $messages; ?> 
					<?php print $content; ?>
					<?php print $feed_icons; ?> 
				</div>
			</div>
			<!-- /squeeze /main -->

			<!-- start left column -->
			<div id="sidebar-left" class="column">
				<div class="squeeze">
				<div class="testimonial-block">
					<?php
							if (isset($node->field_content_reference) && current(current($node->field_content_reference))>0)
								{
									sort($node->field_content_reference); //?"sorted":"not sorted";
									if (current(current($node->field_content_reference))>0) // at least one of them is a valid value
									{
										foreach($node->field_content_reference as $key=>$nid)
										{
											if (is_numeric($nid['nid']))
											{
												$sidebarContent = node_load(array('nid' => $nid['nid']));
												//print_r($sidebarContent);
					//							echo "<b>".$key."</b><br /><b>".$sidebarContent->field_weight[0]['value']."</b><br />";
												print "<div class=\"testimonial content\">";
												print ("<span class=\"hang-quote\">&ldquo;</span><p>".$sidebarContent->body."&rdquo;</p>");
												print "<br class=\"clear-both\" /></div>\n";
												if ($sidebarContent->field_person[0]['value']!="")
												{
													print "<div class=\"testimonial originator-name\">";
													print ("<span class=\"hang-quote\">-</span><p>".$sidebarContent->field_person[0]['value']."</p>");
													print "<br class=\"clear-both\" /></div>\n";
												}
												if ($sidebarContent->field_job_title[0]['value']!="")
												{
													print "<div class=\"testimonial originator-job-title\">";
													print ("<p>".$sidebarContent->field_job_title[0]['value']."</p>");
													print "</div>\n";
												}
												if ($key<count($node->field_content_reference)-1)
												{
													print "<div class=\"dotted-horizontal\"><!-- empty --></div>\n";
												}
											}
										}
									}
								}
					
					?>
					<?php print ($sidebar_left);  ?> 
					</div>
				 </div>
			</div>
			<!-- end left column -->
			
			<!-- start right column -->
			<?php if ($sidebar_right) 
				{ ?>
					<div id="sidebar-right" class="column">
						<div class="squeeze">
							<?php print $sidebar_right; ?>
						</div>
					</div>
				<?php }?>
			<!-- /sidebar-right -->
			<br class="clear-both" />
		</div>
	</div>
	<!-- /container -->
	<div id="footer-wrapper"> <?php print $footer_message; ?></div>
	<!-- /footer -->
	<?php print $closure; ?> </div>
<!-- /page -->
<?php
if ($IE6pingFix)
{
	print "<script src=\"".$asset_path."/scripts/pngfix.js\" type=\"text/javascript\"></script>";
}
?>

</body>
</html>