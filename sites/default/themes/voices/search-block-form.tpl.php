<?php
/*
<!-- <label for="search_block_form_keys">Custom Search</label> -->
<input type="text" maxlength="128" name="search_block_form_keys" id="edit-search_block_form_keys"  size="25" value="" title="Enter the terms you wish to search for." class="form-text" />
<!-- <input type="submit" name="op" value="Search"  /> -->
<input type="image" src="<?php echo $asset_path ;?>/images/button-search.png" name="op" value="Search">
<input type="hidden" name="form_id" id="edit-search-block-form" value="search_block_form" />
<input type="hidden" name="form_token" id="a-unique-id" value="<?php print drupal_get_token('search_block_form'); ?>" />
*/
?>

<div class="container-inline">
	<div class="form-item edit-search-block-form-keys">
	<script language="JavaScript" type="text/javascript">
		var searchPhrase = 'enter a key word here';
		document.write('<input type="text" maxlength="128" name="search_block_form_keys" id="edit-search-block-form-keys" size="15" value="'+searchPhrase+'" title="Enter the terms you wish to search for." class="form-text"/>');
		var searchText  = document.getElementById("edit-search-block-form-keys");
		searchText.onclick = function () {this.value="";this.onclick=null;};
		function _submit(o)
		{
			if (searchText.value==searchPhrase)
			{
				searchText.value = '';
			}
		}
	</script>
	<noscript>
		<input type="text" maxlength="128" name="search_block_form_keys" id="edit-search-block-form-keys" size="15" value="" title="Enter the terms you wish to search for." class="form-text"/>
	</noscript>
	</div>
	<input type="image" src="<?php echo $asset_path ;?>/images/button-search.png" name="op" value="Search" class="form-submit" onclick="_submit(this);">
	<input type="hidden" name="form_id" id="edit-search-block-form" value="search_block_form" />
	<input type="hidden" name="form_token" id="a-unique-id" value="<?php print drupal_get_token('search_block_form'); ?>" />
</div>

