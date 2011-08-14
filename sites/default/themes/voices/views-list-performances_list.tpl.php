<?php

	$performance = node_load($node->nid);
	//print_r($performance);die();
	?>

<div class="itemline <?php print $zebra ?>">
	<div class="location-date">
		<h3 class="item-date"><?php echo date("M d \'y",strtotime($performance->field_date[0]['value'])) ?></h3>
	</div>
	<div class="item-text">
	<?php 
	
	$path = drupal_lookup_path('alias', 'node/'.$performance->nid);
	$path = $path?$path:('node/'.$performance->nid);
	
	?>
		<h3 class="title"><?php print l(t($performance->title), $path); ?></h3>
		<div class="city"><?php print t($performance->field_city[0]['value']) ?></div>
		<div class="content"><?php print t($performance->teaser) ?></div>
	</div>
	<br class="clear-both" />
</div>
