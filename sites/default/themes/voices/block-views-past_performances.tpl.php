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
		//year must be set in the url and must be numberic and with 4 digits log
	  $year = (isset($_GET["year"]) && preg_match ("(\d+)",$_GET["year"])>0 && strlen($_GET["year"])==4 )?$_GET["year"]:date("Y");
	?>
    <div class="content">
		<div class="year-navigation">
	<?php 
		$startYear=2003;
		$currentYear=date("Y")+0;
		for ($y=$startYear; $y<=$currentYear; $y++)
		{
			$YearNavigation[] = '<a href="?year='.$y.'">'.$y.'</a>';
		}
		$YearNavigation = implode(" | ",$YearNavigation);
		echo $YearNavigation ;
	?></div>
	<p>Video excerpts of many of these readings can be found on our <a href="/watch/videos"> Video page</a>.</p>


      <?php //print $block->content; 
	  print("<h2> $year</h2>");
				$view = views_get_view('past_performances'); 
//				$view->args[0]=$year;
//				print_r($view);die();
				$itemCount = $view->num_rows;
//				print("<br /><br />$itemCount<br />");
				$items = views_build_view('items', $view, array(0=>$year));
//				print_r($items);die();
				?>
				<div id="view-<?php print $view->name ?>" class="view view-<?php print $view->name ?>">
				<?php 
				$i=0;
//				print_r($items);die();
				foreach ($items['items'] as $item)
				{
					$zebra = $i % 2 ? " odd " :"" ;//class=\"even\" 
					$i++;
					?>
					<div class="view-item<?php echo $zebra; ?>">
						<div class="title"><?php echo t($item->node_title); ?></div>
						<div class="date"><?php echo t(date("F d, Y",strtotime($item->field_date_value))); ?></div>
						<div class="venue"><?php echo t($item->node_data_field_city_field_city_value); ?></div>
						<div class="subhead"><?php echo t($item->node_data_field_subhead_field_subhead_value); ?></div>
						<div class="url"><?php echo t($item->node_data_field_link_field_link_url); ?></div>
					</div>
				<?php
				}
				?>
				</div>
    </div>    
  </div>
</div>
