<?php
// DO NOT INCLUDE ANY CHARACTER ABOVE THE < ?php TAG!!!
// all comments should be bellow
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">  
  <div class="blockinner">
	<!-- block-block-10; comming soon and news and updates block-->
		<div class="L1block events">
		<div class="squeeze">
			<h3>COMING SOON</h3>
			<?php 
				$view = views_get_view('upcoming_events'); 
//				print_r($view);die();
				$items = views_build_view('items', $view, array(),false,$view->nodes_per_block);
				?>
				<div id="view-<?php print $view->name ?>" class="view view-<?php print $view->name ?>">
				<?php 
				$items_count = count($items);
				$i=0;
				//print_r($items);die();
				foreach ($items['items'] as $item)
				{
					$performance = node_load(array('nid' => $item->nid));
//					print_r($performance);die();
					$zebra = $i % 2 ? " odd " :"" ;//class=\"even\" 
					$url = drupal_get_path_alias("node/".$performance->nid);
					?>
					<a href="<?php echo $url ?> ">
						<div class="itemline <?php print $zebra ?>">
							<div class="location-date">
								<div class="item-date">
									<?php echo date("M d",strtotime($performance->field_date[0]['value'])) ?>
								</div>
								<?php // if (isset($performance->venue)) echo '<div class="item-venue">'.$performance->field_venue.'</div>'; ?>
								<?php // if (isset($performance->field_city[0]['value'])) echo '<div class="item-city">'.$performance->field_city[0]['value'].'</div>'; ?>
							</div>
							<div class="item-text">
								<div class="title"><?php print $performance->title ?></div>
							</div>
							<!-- <br class="clear-both" /> -->
						</div>
					</a>
					<?php
					$i++;
				}
				?>
				<div class="itemline <?php print $zebra ?>">
					<div class="location-date">&nbsp; </div>
					<div class="item-text"><!-- events/upcoming-->
						<div class="title"><a href="/events" title="events">EVENTS &rsaquo;</a></div>
					</div>
					<br class="clear-both" />
				</div>

				</div>
				</div>
		</div>
		<div class="L1block news_coverage">
			<div class="squeeze">
				<h3>NEWS &amp; UPDATES</h3>
<?php  
				
					$view = views_get_view('highlights_home');
					$items = views_build_view('items', $view, array(),false,$view->nodes_per_block);
?>
					<div id="view-<?php echo $view->name?>" class="view view-<?php echo $view->name ?>">
					<ul>
	<?php				
					$i=0;
					foreach ($items['items'] as $item)
					{
						$zebra = $i % 2 ? " odd " :" " ;//class=\"even\" 
						if ($item->nid*1>0)
						{
							$node = node_load($item->nid);
							$path = drupal_lookup_path('alias','node/'.$node->nid);
							$path = !$path?('node/'.$node->nid):$path;
	?>
							<li class="item-title<?php echo $zebra ?>">
								<a href="/<?php echo $path; ?>">
									<div class="news-title"><?php echo $node->title ?></div>
								<div class="news-subhead"><?php echo $node->field_subhead[0]['value'] ?></div>
								</a>
							</li>
	<?php				}
						$i++;
					}
	 ?>
				  </ul></div>
					<div class="title">
						<a href="/news">more news items &rsaquo;</a>
					</div>
			</div>
		</div>
  </div>
</div>
