<?php

	$nodeFull = node_load($node->nid);
//print_r($node);die();

 $img_node =node_load($node->node_data_field_thumb_nail_field_thumb_nail_nid);
  ?>

	<a href="<?php echo $node->node_data_field_link_field_link_url; ?>"  title="click to buy it from <?php echo $node->node_data_field_link_field_link_title; ?>" ><img src='/<?php echo $img_node->images['thumbnail']; /*$img_node->images['product_shot'];*/ ?>' alt=''/></a>
</td> 


<td class="product-list-text">
  	<h3 class="video-list title"><a href="<?php echo $node->node_data_field_link_field_link_url; ?>" title="<?php print($node->node_title) ?>"><?php print($node->node_title) ?></a></h3> <!-- video title  -->
	<div class="content">
		<?php print($node->node_data_field_subhead_field_subhead_value) ?>
		<p><?php print(t($nodeFull->body)) ?></p>
	</div>	
	<div class="viewVideo">
		purchase it from <a href="<?php echo $node->node_data_field_link_field_link_url; ?>" ><?php echo $node->node_data_field_link_field_link_title; ?> &#8250;</a>
	</div>
</td>
</tr>
 
 
 