<?php
global $user;
if (isset($user->roles[5]))
{
include 'page-default.tpl.php';
    return;
	//print_r($user);
}
else
{
drupal_goto("user");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<!-- page-default.tpl.php -->
<head>
  <title>zxcvcfvsdf vsdf| <?php print $head_title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<script type="text/javascript">
var asset_path = '<?php echo $asset_path; ?>';
</script>
  
	<!--   <script type="text/javascript" src="<?php print $asset_path ?>/scripts/swfobject.js"></script> -->
  <script src="<?php print $asset_path ?>/scripts/sifr.js" type="text/javascript"></script> 
  <script src="<?php print $asset_path ?>/scripts/sifr-config.js" type="text/javascript"></script>

  <link rel="stylesheet" href="<?php print $asset_path ?>/styles/sIFR-screen.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php print $asset_path ?>/styles/sIFR-print.css" type="text/css" media="print" />
<?php if ($IE6pingFix) {?><link rel="stylesheet" href="<?php print $asset_path ?>/ie6-fix.css" type="text/css" />
<?php }?>
<script type="text/javascript">
var asset_path = '<?php echo $asset_path; ?>';
</script>

</head>

<?php 
	$siteArchitecture = getTaxonomy($node->taxonomy, SITE_ARCHITECTURE_VOCABULARY_ID);
	$siteArchitecture = strtolower($siteArchitecture->name);
	$siteArchitecture = str_replace(" ","-",$siteArchitecture);
	$siteArchitecture = $siteArchitecture!=""?$siteArchitecture:(arg(0)."-theme")
?>
<body class="<?php print $body_classes; ?>" style="background-color:#CCCCCC">
<div class="page <?php print $siteArchitecture ?>" id="<?php print $node->type?$node->type:"untyped-page"; ?>">
	<!-- start header -->
	<div id="header" class="<?php echo str_replace(" ","-",($node?$node->title:"untitled")); ?>">
		<div id="logo"><a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div>
		<div id="main-menu">
			<div id="filmstrip"><img src="<?php print $asset_path; ?>/images/filmstrip-3.jpg" alt="" width="567" height="94" /></div>

		<script type="text/javascript">
		var params = { allowScriptAccess: "sameDomain",wmode:"transparent", salign:"lt"};// 
		var atts = { id: "filmstrip" };

		swfobject.embedSWF("<?php print $asset_path; ?>/flash/filmstrip.swf", "filmstrip", "567", "93", "8", null, null, params, atts);
		</script>			
		
		<?php print $header;?> 
		</div>
		<br class="clear-both" />
	</div>

	<!-- end header -->
	
	
<!--	 /header -->

	<div id="container" class="clear-block">
		<div class="columns-wrapper">
			<!-- start left column -->
<!--		<div id="sidebar-left" class="column">
			<div class="squeeze">
				<?php //print (($sidebar_left)?$sidebar_left:"<!-- emtpy -->&nbsp;");  ?> 
				</div>
			</div>-->
			<!-- end left column -->
			
			<!-- start main column -->
			<div id="main" class="<?php print (($sidebar_right )?"":"no-right-column ");  ?>column" >
				<div id="squeeze" class="squeeze">
				<?php print strtolower(substr_replace($breadcrumb,($breadcrumb?" : ":"").$title."</div>",-6)); ?>
					<?php if ($title) { ?><h1 class="title" ><?php print strtoupper($title); ?></h1><?php } ?>
					<?php if ($tabs){ ?>
					<div class="tabs"><?php print $tabs; ?></div>
					<?php } ?>
					<?php if ($mission): ?>
					<div id="mission"><?php print $mission; ?></div>
					<?php endif; ?>
					<?php print $help; ?>
					<?php print $messages; ?>
					<?php print $content; ?>
					<?php print $feed_icons; ?>
				</div>
			</div>
			<!-- /squeeze /main -->
			<!-- start right column -->
			<?php if ($sidebar_right)
			{ ?>
				<div id="sidebar-right" class="column"> 
					<div class="squeeze">
						<?php print $sidebar_right; ?> 
					</div>
				</div>
			<?php } ?>
			<!-- /sidebar-right -->
			<br class="clear-both" />
		</div>
	</div>

	<!-- /container -->
	<div id="footer-wrapper">
			<?php print $footer_message; ?></div>
		<!-- /footer -->
    
    <?php print $closure; ?>
    
  </div> <!-- /page -->
<?php
if ($IE6pingFix)
{
	print "<script src=\"".$asset_path."/scripts/pngfix.js\" type=\"text/javascript\"></script>";
}
?>
</body>
</html>


