<?php 
// DO NOT INCLUDE ANY CHARACTER ABOVE THE < ?php TAG!!!
// all comments should be bellow
	if (arg(0) == 'node' && is_numeric(arg(1)))
	{
		$nid = arg(1);
		$node = node_load(array('nid' => $nid));
		$currentTaxonomy = current($node->taxonomy);
		$parentsTrail= getParentTaxonomyArray($currentTaxonomy); // array of TID's (integers)
		// for the moment, this only works with single relations between categories
		// so the function taxonomy_get_parents will return an array of only one object
		// the synonyms must be in the following format: variableName|value
		// and it will be evaluated to $variableName = value;
		
		$synonym = taxonomy_get_synonyms($parentsTrail[0]); // array
		foreach ($synonym as $key=>$value) 
		{
			$kv = explode("|",$value);
			$eval = "$".$kv[0]." = '$kv[1]';";
			eval ($eval);
		}
		if ($menu && $tree = menu_tree($menu))
		{
?>
			<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module." ".str_replace(" ","-",$currentTaxonomy->name) ?>">  
				<!-- block-block-4.tpl.php -->
				<div class="blockinner">
					<?php 
					// if subject comes surrounded with angular bracket then do not show
					// ex.: [topnav]
					//ul.menu-112 {display:none;}
					if ($block->subject)
					{
						$i = preg_match ("/(<([\w]+)[^>]+>)/",html_entity_decode($block->subject),$matches);
						if (count($matches)==0)
						{
							print  "<h2 class=\"title\">".$block->subject."</h2>"; 
						}
					}
					?> 
					<div class="content">
					<?php 
 						$menuItem = menu_get_item($menu);
						//print  ("<h3 class=\"title\"><a href=\"/".$menuItem['path']."\">".(!is_array($parentTerm)?$parentTerm->name:$currentTaxonomy->name)."</a></h3>"); // so we use the taxonomy term
						print ("\n<ul class=\"menu menu-". $menu . "\">" . "\n". $tree ."\n</ul>\n");
 					?>
					</div>    
			  </div>
		</div>
<?php 
		}
	}

?>