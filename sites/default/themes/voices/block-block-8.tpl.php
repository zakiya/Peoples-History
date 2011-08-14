<?php 
// DO NOT INCLUDE ANY CHARACTER ABOVE THE < ?php TAG!!!
// all comments should be bellow
if (arg(0) == 'node' && is_numeric(arg(1)) && !$is_front)
{ 
	$nid = arg(1);
	$node = node_load(array('nid' => $nid));
	if (isset($node->field_content_reference) && current(current($node->field_content_reference))>0)
	{
		sort($node->field_content_reference); //?"sorted":"not sorted";
		if (current(current($node->field_content_reference))>0) // at least one of them is a valid value
		{
		?>
			<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">  
			  <div class="blockinner">
				<!-- block-8 by block-block-8: testimonials --->
				<div class="content">
					<div class="testimonial-block">
						<?php
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
										print "<br class=\"clear-both\" /></div>\n";
									}
									if ($key<count($node->field_content_reference)-1)
									{
										//print "<div class=\"dotted-horizontal\"><!-- empty --></div>\n";
									}
								}
							}
						?>
					</div>
				</div>    
			  </div>
			</div>
				<?php
		}
	}
} 
