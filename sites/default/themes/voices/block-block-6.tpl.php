<?php 
// DO NOT INCLUDE ANY CHARACTER ABOVE THE < ?php TAG!!!
// all comments should be bellow

	if (arg(0) == 'node' && is_numeric(arg(1)) && $is_front)
{ ?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">  
  <div class="blockinner">
<!--block-block-6.tpl.php-->
    <div class="content">
		<div class="home-feature">
		<div class="title">FEATURED VIDEO</div>
	  <?
//	  Check that the constant VIDEO_PLAY_BUTTON_IMAGE_SRC is set to the proper image button
		$nid = arg(1);
		$node = node_load(array('nid' => $nid));
//		print_r($node);
		//print_r($node);
		if (isset($node->field_video) && current(current($node->field_video))>0)
			{
				sort($node->field_video); //?"sorted":"not sorted";
				if (current(current($node->field_video))>0) // at least one of them is a valid value
				{
					$videoId = current($node->field_video);
					if (is_numeric($videoId['nid']))
					{
						$video = node_load(array('nid' => $videoId['nid']));
						if (isset($video->field_thumb_nail) && current(current($video->field_thumb_nail))>0)
						{
							$imgId = current(current($video->field_thumb_nail));
							$attachedImage = node_load(array('nid' => $imgId));
							if (isset($attachedImage->images['video_thumbnail']))
							//print_r($video);die();
							switch ($video->field_video_source[0]['value'])
							{
								case "vimeo":
									$swfSrc = explode("/",$video->field_vimeo_link[0]['url']);
									$swfSrc = $swfSrc[count($swfSrc)-1];
									$swfSrc = 'http://www.vimeo.com/moogaloop.swf?clip_id='.$swfSrc.'&server=www.vimeo.com&show_title=0&show_byline=0&show_portrait=0&color=&fullscreen=1&autoplay=1';
									$video_link = $swfSrc ;
								break;
								case "youtube":
									$video_link = $video->field_youtube_link[0]['url'];
								break;
								case "local":
									$video_link = $video->field_src[0]['value'];
								break;
							}

							{?>
								<div class="thumbnail">
									<a href="<?php echo $video_link ?>" title="<?php echo $video->title ?>" rel="lightvideo[width:640px; height:360px;][<?php print $node->title?>]">
										<img src="<?php echo $asset_path."/".VIDEO_PLAY_BUTTON_IMAGE_SRC; ?>" class="video-play-button"/>
										<img src="/<?php echo $attachedImage->images['video_thumbnail'] ?>" alt="" />
									</a>
								</div><?php
							}
//							print_r($video);
							print '<div class="video-description">'.$video->body.'</div>';
							print '<a href="node/'.$video->nid.'" title="'.$video->title.'">WATCH VIDEO &rsaquo;</a>';
						}
					}
				}
			}
		?>
		</div>
    </div>    
  </div>
</div>
<?php } ?>