<?php
if (get_custom_option('slider_show')=='yes') { 
	$slider = get_custom_option('slider_engine');
	$slider_alias = $slider_ids = '';
	if ($slider == 'revo' && revslider_exists())
		$slider_alias = get_custom_option('slider_alias');
	else if ($slider == 'flex' || $slider == 'chop' || $slider == 'swiper') {
		$slider_pagination = get_custom_option("slider_pagination");
		$slider_alias = get_custom_option("slider_category");
		$slider_orderby = get_custom_option("slider_orderby");
		$slider_order = get_custom_option("slider_order");
		$slider_count = $slider_ids = get_custom_option("slider_posts");
		if (themerex_strpos($slider_ids, ',')!==false) {
			$slider_alias = '';
			$slider_count = 0;
		} else {
			$slider_ids = '';
			if (empty($slider_count)) $slider_count = 3;
		}
		$slider_info_box = get_custom_option("slider_info_box");
		$slider_info_fixed = get_custom_option("slider_info_fixed");
		$slider_interval = get_custom_option("slider_interval");
	}

	// If slider exists
	if (!empty($slider_alias) || !empty($slider_ids)) {
		?>
		
		<?php 
	}
}
?>