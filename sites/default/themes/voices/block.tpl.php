<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">  
  <div class="blockinner">
     <?php 
	// if subject comes surrounded with angular bracket then do not show
	// ex.: [topnav]
		$i = preg_match ("/<[\w]+>/i",html_entity_decode($block->subject),$matches);
		if (count($matches)==0 && $block->subject )
		{
			print "<h2 class=\"title\">".$block->subject."</h2>"; 
		}

	?>
    <div class="content">
      <?php print $block->content; ?>
    </div>    
  </div>
</div>
