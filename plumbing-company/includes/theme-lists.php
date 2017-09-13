<?php
// Disable direct call
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Return list of the animations
if ( !function_exists( 'themerex_get_list_animations' ) ) {
	function themerex_get_list_animations($prepend_inherit=false) {
		global $THEMEREX_GLOBALS;
		if (isset($THEMEREX_GLOBALS['list_animations']))
			$list = $THEMEREX_GLOBALS['list_animations'];
		else {
			$list = array();
			$list['none']			= __('none',	'themerex');
			$list['bounced']		= __('bounced',		'themerex');
			$list['flash']			= __('flash',		'themerex');
			$list['flip']			= __('flip',		'themerex');
			$list['pulse']			= __('pulse',		'themerex');
			$list['rubberBand']		= __('rubberBand',	'themerex');
			$list['shake']			= __('shake',		'themerex');
			$list['swing']			= __('swing',		'themerex');
			$list['tada']			= __('tada',		'themerex');
			$list['wobble']			= __('wobble',		'themerex');
			$THEMEREX_GLOBALS['list_animations'] = $list = apply_filters('themerex_filter_list_animations', $list);
		}
		return $prepend_inherit ? array_merge(array('inherit' => __("Inherit", 'themerex')), $list) : $list;
	}
}


// Return list of the enter animations
if ( !function_exists( 'themerex_get_list_animations_in' ) ) {
	function themerex_get_list_animations_in($prepend_inherit=false) {
		global $THEMEREX_GLOBALS;
		if (isset($THEMEREX_GLOBALS['list_animations_in']))
			$list = $THEMEREX_GLOBALS['list_animations_in'];
		else {
			$list = array();
            $list['none']			= __('- None -',	'themerex');
            $list['bounceIn']		= __('bounceIn',			'themerex');
            $list['bounceInUp']		= __('bounceInUp',		'themerex');
            $list['bounceInDown']	= __('bounceInDown',		'themerex');
            $list['bounceInLeft']	= __('bounceInLeft',		'themerex');
            $list['bounceInRight']	= __('bounceInRight',		'themerex');
            $list['fadeIn']			= __('fadeIn',				'themerex');
            $list['fadeInUp']		= __('fadeInUp',			'themerex');
            $list['fadeInDown']		= __('fadeInDown',		'themerex');
            $list['fadeInLeft']		= __('fadeInLeft',		'themerex');
            $list['fadeInRight']	= __('fadeInRight',		'themerex');
            $list['fadeInUpBig']	= __('fadeInUpBig',		'themerex');
            $list['fadeInDownBig']	= __('fadeInDownBig',	'themerex');
            $list['fadeInLeftBig']	= __('fadeInLeftBig',	'themerex');
            $list['fadeInRightBig']	= __('fadeInRightBig',	'themerex');
            $list['flipInX']		= __('flipInX',			'themerex');
            $list['flipInY']		= __('flipInY',			'themerex');
            $list['lightSpeedIn']	= __('lightSpeedIn',		'themerex');
            $list['rotateIn']		= __('rotateIn',			'themerex');
            $list['rotateInUpLeft']		= __('rotateInUpLeft',	'themerex');
            $list['rotateInUpRight']	= __('rotateInUpRight',	'themerex');
            $list['rotateInDownLeft']	= __('rotateInDownLeft',	'themerex');
            $list['rotateInDownRight']	= __('rotateInDownRight','themerex');
            $list['rollIn']				= __('rollIn',			'themerex');
            $list['slideInUp']			= __('slideInUp',		'themerex');
            $list['slideInDown']		= __('slideInDown',	'themerex');
            $list['slideInLeft']		= __('slideInLeft',	'themerex');
            $list['slideInRight']		= __('slideInRight',	'themerex');
            $list['zoomIn']				= __('zoomIn',			'themerex');
            $list['zoomInUp']			= __('zoomInUp',		'themerex');
            $list['zoomInDown']			= __('zoomInDown',	'themerex');
            $list['zoomInLeft']			= __('zoomInLeft',	'themerex');
            $list['zoomInRight']		= __('zoomInRight',	'themerex');
			$THEMEREX_GLOBALS['list_animations_in'] = $list = apply_filters('themerex_filter_list_animations_in', $list);
		}
		return $prepend_inherit ? array_merge(array('inherit' => __("Inherit", 'themerex')), $list) : $list;
	}
}


// Return list of the out animations
if ( !function_exists( 'themerex_get_list_animations_out' ) ) {
	function themerex_get_list_animations_out($prepend_inherit=false) {
		global $THEMEREX_GLOBALS;
		if (isset($THEMEREX_GLOBALS['list_animations_out']))
			$list = $THEMEREX_GLOBALS['list_animations_out'];
		else {
			$list = array();
            $list['none']			= __('- None -',	'themerex');
            $list['bounceOut']		= __('bounceOut',			'themerex');
            $list['bounceOutUp']	= __('bounceOutUp',		'themerex');
            $list['bounceOutDown']	= __('bounceOutDown',		'themerex');
            $list['bounceOutLeft']	= __('bounceOutLeft',		'themerex');
            $list['bounceOutRight']	= __('bounceOutRight',	'themerex');
            $list['fadeOut']		= __('fadeOut',			'themerex');
            $list['fadeOutUp']		= __('fadeOutUp',			'themerex');
            $list['fadeOutDown']	= __('fadeOutDown',		'themerex');
            $list['fadeOutLeft']	= __('fadeOutLeft',		'themerex');
            $list['fadeOutRight']	= __('fadeOutRight',		'themerex');
            $list['fadeOutUpBig']	= __('fadeOutUpBig',		'themerex');
            $list['fadeOutDownBig']	= __('fadeOutDownBig',	'themerex');
            $list['fadeOutLeftBig']	= __('fadeOutLeftBig',	'themerex');
            $list['fadeOutRightBig']= __('fadeOutRightBig',	'themerex');
            $list['flipOutX']		= __('flipOutX',			'themerex');
            $list['flipOutY']		= __('flipOutY',			'themerex');
            $list['hinge']			= __('hinge',			'themerex');
            $list['lightSpeedOut']	= __('lightSpeedOut',		'themerex');
            $list['rotateOut']		= __('rotateOut',			'themerex');
            $list['rotateOutUpLeft']	= __('rotateOutUpLeft',	'themerex');
            $list['rotateOutUpRight']	= __('rotateOutUpRight',		'themerex');
            $list['rotateOutDownLeft']	= __('rotateOutDownLeft',		'themerex');
            $list['rotateOutDownRight']	= __('rotateOutDownRight',	'themerex');
            $list['rollOut']			= __('rollOut',		'themerex');
            $list['slideOutUp']			= __('slideOutUp',		'themerex');
            $list['slideOutDown']		= __('slideOutDown',	'themerex');
            $list['slideOutLeft']		= __('slideOutLeft',	'themerex');
            $list['slideOutRight']		= __('slideOutRight',	'themerex');
            $list['zoomOut']			= __('zoomOut',			'themerex');
            $list['zoomOutUp']			= __('zoomOutUp',		'themerex');
            $list['zoomOutDown']		= __('zoomOutDown',	'themerex');
            $list['zoomOutLeft']		= __('zoomOutLeft',	'themerex');
            $list['zoomOutRight']		= __('zoomOutRight',	'themerex');
			$THEMEREX_GLOBALS['list_animations_out'] = $list = apply_filters('themerex_filter_list_animations_out', $list);
		}
		return $prepend_inherit ? array_merge(array('inherit' => __("Inherit", 'themerex')), $list) : $list;
	}
}


// Return list of categories
if ( !function_exists( 'getCategoriesList' ) ) {
	function getCategoriesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$args = array(
			'type'                     => 'post',
			'child_of'                 => 0,
			'parent'                   => '',
			'orderby'                  => 'name',
			'order'                    => 'ASC',
			'hide_empty'               => 0,
			'hierarchical'             => 1,
			'exclude'                  => '',
			'include'                  => '',
			'number'                   => '',
			'taxonomy'                 => 'category',
			'pad_counts'               => false );
		$categories = get_categories( $args );
		foreach ($categories as $cat) {
			$list[$cat->term_id] = $cat->name;
		}
		return $list;
	}
}

// Return list of post's types
if ( !function_exists( 'getPostsTypesList' ) ) {
	function getPostsTypesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$types = get_post_types();
		foreach ($types as $t) {
			$list[$t] = $t;
		}
		if (function_exists('is_woocommerce') && !isset($list['product'])) $list['product'] = 'product';
		if (class_exists('TribeEvents') && !isset($list['tribe_events'])) $list['tribe_events'] = 'tribe_events';
		return $list;
	}
}


// Return list of registered users
if ( !function_exists( 'getUsersList' ) ) {
	function getUsersList($prepend_inherit=false, $roles=array('administrator', 'editor', 'author', 'contributor', 'shop_manager')) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['none'] = __("Not user", 'themerex');
		$args = array(
			'orderby'	=> 'display_name',
			'order'		=> 'ASC' );
		$users = get_users( $args );
		foreach ($users as $user) {
			$accept = true;
			if (is_array($user->roles)) {
				if (count($user->roles) > 0) {
					$accept = false;
					foreach ($user->roles as $role) {
						if (in_array($role, $roles)) {
							$accept = true;
							break;
						}
					}
				}
			}
			if ($accept) $list[$user->user_login] = $user->display_name;
		}
		return $list;
	}
}

// Return sliders list, prepended inherit and main sidebars item (if need)
if ( !function_exists( 'getSlidersList' ) ) {
	function getSlidersList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["flex"] = __("Posts slider (Flex)", 'themerex');
		$list["swiper"] = __("Posts slider (Swiper)", 'themerex');
		if (revslider_exists())
			$list["revo"] = __("Layer slider (Revolution)", 'themerex');
		return $list;
	}
}

// Return list with popup engines
if ( !function_exists( 'getPopupEnginesList' ) ) {
	function getPopupEnginesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["pretty"] = __("Pretty photo", 'themerex');
		$list["magnific"] = __("Magnific popup", 'themerex');
		return $list;
	}
}

// Return menus list, prepended inherit
if ( !function_exists( 'getMenusList' ) ) {
	function getMenusList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['default'] = __("Default", 'themerex');
		$menus = wp_get_nav_menus();
		if ($menus) {
			foreach ($menus as $menu) {
				$list[$menu->slug] = $menu->name;
			}
		}
		return $list;
	}
}

// Return custom sidebars list, prepended inherit and main sidebars item (if need)
if ( !function_exists( 'getSidebarsList' ) ) {
	function getSidebarsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['sidebar-top'] 	= __("Top sidebar", 'themerex');
		$list['sidebar-main']   = __("Main sidebar", 'themerex');
		$list['sidebar-footer'] = __("Footer sidebar", 'themerex');
		$list['sidebar-panel'] = __("Panel sidebar", 'themerex');
		$sidebars = get_theme_option('custom_sidebars');
		if (is_array($sidebars) && count($sidebars) > 0) {
			foreach ($sidebars as $i=>$sb) {
				if (trim(chop($sb))=='') continue;
				$list['custom-sidebar-'.$i] = $sb;
			}
		}
		return $list;
	}
}

// Return sidebars positions
if ( !function_exists( 'getSidebarsPositions' ) ) {
	function getSidebarsPositions($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['right'] = __('Right', 'themerex');
		$list['left'] = __('Left', 'themerex');
		$list['fullwidth'] = __('Hide (without sidebar)', 'themerex');
		return $list;
	}
}

// Return sidebar class
if ( !function_exists( 'getSidebarClass' ) ) {
	function getSidebarClass($position) {
		if ($position == 'fullwidth')
			$class = 'without_sidebar';
		else if ($position == 'left')
			$class = 'with_sidebar sideBarLeft';
		else
			$class = 'with_sidebar sideBarRight';
		return $class;
	}
}

// Return body styles list, prepended inherit
if ( !function_exists( 'getBodyStylesList' ) ) {
	function getBodyStylesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['boxed'] = __('Boxed',  'themerex');
		$list['wide']  = __('Wide','themerex');
		$list['fullwide'] = __('Fullwide', 'themerex');
		$list['fullscreen'] = __('Fullscreen', 'themerex');
		return $list;
	}
}

// Return skins list, prepended inherit
if ( !function_exists( 'getSkinsList' ) ) {
	function getSkinsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		return array_merge($list, getListFolders("/skins"));
	}
}

// Return blog styles list, prepended inherit
if ( !function_exists( 'getBlogStylesList' ) ) {
	function getBlogStylesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['excerpt']    = __('Blog Excerpt',  'themerex');
//		$list['fullpost']   = __('Blog Fullpost', 'themerex');
		$list['classic1']   = __('Classic (1 column)',   'themerex');
		$list['classic2']   = __('Classic (2 columns)',  'themerex');
		$list['classic3']   = __('Classic (3 columns)',  'themerex');
		$list['classic4']   = __('Classic (4 columns)',  'themerex');
		$list['masonry2']   = __('Masonry (2 columns)',  'themerex');
		$list['masonry3']   = __('Masonry (3 columns)',  'themerex');
		$list['masonry4']   = __('Masonry (4 columns)',  'themerex');
		$list['portfolio1'] = __('Portfolio (1 columns)','themerex');
		$list['portfolio2'] = __('Portfolio (2 columns)','themerex');
		$list['portfolio3'] = __('Portfolio (3 columns)','themerex');
		$list['portfolio4'] = __('Portfolio (4 columns)','themerex');
		return $list;
	}
}

// Return blogger styles list, prepended inherit
if ( !function_exists( 'getBloggerStylesList' ) ) {
	function getBloggerStylesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['regular'] = __('Regular', 'themerex');
		$list['related'] = __('Related', 'themerex');
		$list['date'] = __('Date', 'themerex');
		$list['image_large'] = __('Large featured image', 'themerex');
		$list['image_medium'] = __('Medium featured image', 'themerex');
		$list['image_small'] = __('Small featured image', 'themerex');
		$list['image_tiny'] = __('Tiny featured image', 'themerex');
		$list['accordion_1'] = __('Accordion style 1', 'themerex');
		$list['accordion_2'] = __('Accordion style 2', 'themerex');
		$list['list'] = __('List', 'themerex');
		return themerex_array_merge($list, getBlogStylesList());
	}
}

// Return portfolio filters list, prepended inherit
if ( !function_exists( 'getPortfolioFiltersList' ) ) {
	function getPortfolioFiltersList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["no"] = __('No filters', 'themerex');
		$list["tags"] = __('Tags', 'themerex');
		$list["categories"] = __('Categories', 'themerex');
		return $list;
	}
}

// Return post-formats filters list, prepended inherit
if ( !function_exists( 'getPostFormatsFiltersList' ) ) {
	function getPostFormatsFiltersList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["no"] = __('All posts', 'themerex');
		$list["thumbs"]  = __('With thumbs', 'themerex');
		$list["reviews"] = __('With reviews', 'themerex');
		$list["video"]   = __('With videos', 'themerex');
		$list["audio"]   = __('With audios', 'themerex');
		$list["gallery"] = __('With galleries', 'themerex');
		return $list;
	}
}

// Return single page styles list, prepended inherit
if ( !function_exists( 'getSingleStylesList' ) ) {
	function getSingleStylesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['single-standard']   = __('Standard',  'themerex');
		$list['single-portfolio']  = __('Portfolio','themerex');
		$list['single-portfolio-fullscreen'] = __('Portfolio fullscreen', 'themerex');
		return $list;
	}
}

// Return hover styles list, prepended inherit
if ( !function_exists( 'getHoversList' ) ) {
	function getHoversList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['dir']   = __('Dir',  'themerex');
		$list['shift'] = __('Shift',  'themerex');
		$list['cube']  = __('Cube',  'themerex');
		$list['book']  = __('Book',   'themerex');
		$list['circle effect1']  = __('Circle Effect 1',  'themerex');
		$list['circle effect2']  = __('Circle Effect 2',  'themerex');
		$list['circle effect3']  = __('Circle Effect 3',  'themerex');
		$list['circle effect4']  = __('Circle Effect 4',  'themerex');
		$list['circle effect5']  = __('Circle Effect 5',  'themerex');
		$list['circle effect6']  = __('Circle Effect 6',  'themerex');
		$list['circle effect7']  = __('Circle Effect 7',  'themerex');
		$list['circle effect8']  = __('Circle Effect 8',  'themerex');
		$list['circle effect9']  = __('Circle Effect 9',  'themerex');
		$list['circle effect10'] = __('Circle Effect 10',  'themerex');
		$list['circle effect11'] = __('Circle Effect 11',  'themerex');
		$list['circle effect12'] = __('Circle Effect 12',  'themerex');
		$list['circle effect13'] = __('Circle Effect 13',  'themerex');
		$list['circle effect14'] = __('Circle Effect 14',  'themerex');
		$list['circle effect15'] = __('Circle Effect 15',  'themerex');
		$list['circle effect16'] = __('Circle Effect 16',  'themerex');
		$list['circle effect17'] = __('Circle Effect 17',  'themerex');
		$list['circle effect18'] = __('Circle Effect 18',  'themerex');
		$list['circle effect19'] = __('Circle Effect 19',  'themerex');
		$list['circle effect20'] = __('Circle Effect 20',  'themerex');
		$list['round effect1']  = __('round Effect 1',  'themerex');
		$list['round effect2']  = __('round Effect 2',  'themerex');
		$list['round effect3']  = __('round Effect 3',  'themerex');
//		$list['round effect4']  = __('round Effect 4',  'themerex');
		$list['round effect5']  = __('round Effect 5',  'themerex');
		$list['round effect6']  = __('round Effect 6',  'themerex');
		$list['round effect7']  = __('round Effect 7',  'themerex');
		$list['round effect8']  = __('round Effect 8',  'themerex');
		$list['round effect9']  = __('round Effect 9',  'themerex');
		$list['round effect10'] = __('round Effect 10',  'themerex');
		$list['round effect11'] = __('round Effect 11',  'themerex');
		$list['round effect12'] = __('round Effect 12',  'themerex');
		$list['round effect13'] = __('round Effect 13',  'themerex');
		$list['round effect14'] = __('round Effect 14',  'themerex');
		$list['round effect15'] = __('round Effect 15',  'themerex');
		return $list;
	}
}

// Return extended hover directions list, prepended inherit
if ( !function_exists( 'getHoversDirectionsList' ) ) {
	function getHoversDirectionsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['left_to_right'] = __('Left to Right',  'themerex');
		$list['right_to_left'] = __('Right to Left',  'themerex');
		$list['top_to_bottom'] = __('Top to Bottom',  'themerex');
		$list['bottom_to_top'] = __('Bottom to Top',  'themerex');
		$list['scale_up']      = __('Scale Up',  'themerex');
		$list['scale_down']    = __('Scale Down',  'themerex');
		$list['scale_down_up'] = __('Scale Down-Up',  'themerex');
		$list['from_left_and_right'] = __('From Left and Right',  'themerex');
		$list['from_top_and_bottom'] = __('From Top and Bottom',  'themerex');
		return $list;
	}
}

// Return background tints list, prepended inherit
if ( !function_exists( 'getBgTintList' ) ) {
	function getBgTintList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['none']  = __('None',  'themerex');
		$list['light'] = __('Light','themerex');
		$list['dark']  = __('Dark',  'themerex');
		return $list;
	}
}

// Return custom fields types list, prepended inherit
if ( !function_exists( 'getFieldTypesList' ) ) {
	function getFieldTypesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['text']     = __('Text',  'themerex');
		$list['textarea'] = __('Text Area','themerex');
		$list['password'] = __('Password',  'themerex');
		$list['radio']    = __('Radio',  'themerex');
		$list['checkbox'] = __('Checkbox',  'themerex');
		$list['button']   = __('Button','themerex');
		return $list;
	}
}

// Return Google map styles
if ( !function_exists( 'getGooglemapStylesList' ) ) {
	function getGooglemapStylesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['default'] = __('Default', 'themerex');
		$list['simple'] = __('Simple', 'themerex');
		$list['greyscale'] = __('Greyscale', 'themerex');
		$list['greyscale2'] = __('Greyscale 2', 'themerex');
		$list['invert'] = __('Invert', 'themerex');
		$list['dark'] = __('Dark', 'themerex');
		$list['style1'] = __('Custom style 1', 'themerex');
		$list['style2'] = __('Custom style 2', 'themerex');
		$list['style3'] = __('Custom style 3', 'themerex');
		$list['style4'] = __('Custom style 4', 'themerex');
		return $list;
	}
}

// Return user header's styles
if ( !function_exists( 'getHeaderStylesList' ) ) {
	function getHeaderStylesList($prepend_inherit=false) {
		$list = array();
		$list['none']   = __('Hide area',  'themerex');
		$list['grey']   = __('Grey style','themerex');
		$list['global'] = __('Global style', 'themerex');
		$list['custom'] = __('Custom style', 'themerex');
		return $list;
	}
}

// Return themes list
if ( !function_exists( 'getThemesList' ) ) {
	function getThemesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$dir = get_template_directory() . "/css/themes";
		if ( is_dir($dir) ) {
			$hdir = @ opendir( $dir );
			if ( $hdir ) {
				while (($file = readdir( $hdir ) ) !== false ) {
					$pi = pathinfo( $dir . '/' . $file );
					if ( substr($file, 0, 1) == '.' || is_dir( $dir . '/' . $file ) || $pi['extension'] != 'css' )
						continue;
					$key = themerex_substr($file, 0, themerex_strrpos($file, '.'));
					$list[$key] = themerex_strtoproper(str_replace('_', ' ', $key));
				}
				@closedir( $hdir );
			}
		}
		return $list;
	}
}

// Return iconed classes list
if ( !function_exists( 'getIconsList' ) ) {
	function getIconsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		return array_merge($list, parseIconsClasses(themerex_get_file_dir("/css/fontello/css/fontello-codes.css")));
	}
}

// Return socials list
if ( !function_exists( 'getSocialsList' ) ) {
	function getSocialsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		return array_merge($list, getListFiles("/images/socials", "png"));
	}
}

if ( !function_exists( 'getSocialIconsList' ) ) {
	function getSocialIconsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		return array_merge($list, parseIconsClasses(themerex_get_file_dir("/css/fontello/css/fontello-codes.css")));
	}
}

// Return flags list
if ( !function_exists( 'getFlagsList' ) ) {
	function getFlagsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		return array_merge($list, getListFiles("/images/flags", "png"));
	}
}

// Return list with 'Yes' and 'No' items
if ( !function_exists( 'getYesNoList' ) ) {
	function getYesNoList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["yes"] = __("Yes", 'themerex');
		$list["no"]  = __("No", 'themerex');
		return $list;
	}
}

// Return list with 'On' and 'Of' items
if ( !function_exists( 'getOnOffList' ) ) {
	function getOnOffList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["on"] = __("On", 'themerex');
		$list["off"] = __("Off", 'themerex');
		return $list;
	}
}

// Return list with 'Show' and 'Hide' items
if ( !function_exists( 'getShowHideList' ) ) {
	function getShowHideList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["show"] = __("Show", 'themerex');
		$list["hide"] = __("Hide", 'themerex');
		return $list;
	}
}

// Return list with 'Ascending' and 'Descending' items
if ( !function_exists( 'getOrderingList' ) ) {
	function getOrderingList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["asc"] = __("Ascending", 'themerex');
		$list["desc"] = __("Descending", 'themerex');
		return $list;
	}
}

// Return list with 'Horizontal' and 'Vertical' items
if ( !function_exists( 'getDirectionList' ) ) {
	function getDirectionList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["horizontal"] = __("Horizontal", 'themerex');
		$list["vertical"] = __("Vertical", 'themerex');
		return $list;
	}
}

// Return list with float items
if ( !function_exists( 'getFloatList' ) ) {
	function getFloatList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["none"] = __("None", 'themerex');
		$list["left"] = __("Float Left", 'themerex');
		$list["right"] = __("Float Right", 'themerex');
		return $list;
	}
}

// Return list with alignment items
if ( !function_exists( 'getAlignmentList' ) ) {
	function getAlignmentList($justify=false, $prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["none"] = __("None", 'themerex');
		$list["left"] = __("Left", 'themerex');
		$list["center"] = __("Center", 'themerex');
		$list["right"] = __("Right", 'themerex');
		if ($justify) $list["justify"] = __("Justify", 'themerex');
		return $list;
	}
}

// Return sorting list items
if ( !function_exists( 'getSortingList' ) ) {
	function getSortingList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["date"] = __("Date", 'themerex');
		$list["title"] = __("Alphabetically", 'themerex');
		$list["views"] = __("Popular (views count)", 'themerex');
		$list["comments"] = __("Most commented (comments count)", 'themerex');
		$list["author_rating"] = __("Author rating", 'themerex');
		$list["users_rating"] = __("Visitors (users) rating", 'themerex');
		$list["random"] = __("Random", 'themerex');
		return $list;
	}
}

// Return list with columns widths
if ( !function_exists( 'getColumnsList' ) ) {
	function getColumnsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["none"] = __("None", 'themerex');
		$list["1_1"] = __("100%", 'themerex');
		$list["1_2"] = __("1/2", 'themerex');
		$list["1_3"] = __("1/3", 'themerex');
		$list["2_3"] = __("2/3", 'themerex');
		$list["1_4"] = __("1/4", 'themerex');
		$list["3_4"] = __("3/4", 'themerex');
		$list["1_5"] = __("1/5", 'themerex');
		$list["2_5"] = __("2/5", 'themerex');
		$list["3_5"] = __("3/5", 'themerex');
		$list["4_5"] = __("4/5", 'themerex');
		return $list;
	}
}

// Return list of locations for the dedicated content
if ( !function_exists( 'getDedicatedLocationsList' ) ) {
	function getDedicatedLocationsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list["default"] = __('As in the post defined', 'themerex');
		$list["center"]  = __('Above the text of the post', 'themerex');
		$list["left"]    = __('To the left the text of the post', 'themerex');
		$list["right"]   = __('To the right the text of the post', 'themerex');
		$list["alter"]   = __('Alternates for each post', 'themerex');
		return $list;
	}
}

// Return post-format name
if ( !function_exists( 'getPostFormatName' ) ) {
	function getPostFormatName($format, $single=true) {
		$name = '';
		if ($format=='gallery')		$name = $single ? __('gallery', 'themerex') : __('galleries', 'themerex');
		else if ($format=='video')	$name = $single ? __('video', 'themerex') : __('videos', 'themerex');
		else if ($format=='audio')	$name = $single ? __('audio', 'themerex') : __('audios', 'themerex');
		else if ($format=='image')	$name = $single ? __('image', 'themerex') : __('images', 'themerex');
		else if ($format=='quote')	$name = $single ? __('quote', 'themerex') : __('quotes', 'themerex');
		else if ($format=='link')	$name = $single ? __('link', 'themerex') : __('links', 'themerex');
		else if ($format=='status')	$name = $single ? __('status', 'themerex') : __('statuses', 'themerex');
		else if ($format=='aside')	$name = $single ? __('aside', 'themerex') : __('asides', 'themerex');
		else if ($format=='chat')	$name = $single ? __('chat', 'themerex') : __('chats', 'themerex');
		else						$name = $single ? __('standard', 'themerex') : __('standards', 'themerex');
		return $name;
	}
}

// Return post-format icon name (from Fontello library)
if ( !function_exists( 'getPostFormatIcon' ) ) {
	function getPostFormatIcon($format) {
		$icon = 'icon-';
		if ($format=='gallery')		$icon .= 'camera';
		else if ($format=='video')	$icon .= 'video';
		else if ($format=='audio')	$icon .= 'note';
		else if ($format=='image')	$icon .= 'newspaper';
		else if ($format=='quote')	$icon .= 'quote';
		else if ($format=='link')	$icon .= 'link';
		else if ($format=='status')	$icon .= 'tag';
		else if ($format=='aside')	$icon .= 'book-open';
		else if ($format=='chat')	$icon .= 'list';
		else						$icon .= 'doc-text';
		return $icon;
	}
}

// Return fonts styles list, prepended inherit
if ( !function_exists( 'getThemeFontsStylesList' ) ) {
	function getThemeFontsStylesList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list['i'] = __('I','themerex');
		$list['u'] = __('U', 'themerex');
		return $list;
	}
}

// Return Google fonts list
if ( !function_exists( 'getThemeFontsList' ) ) {
	function getThemeFontsList($prepend_inherit=false) {
		$list = array();
		if ($prepend_inherit) $list['inherit'] = __("Inherit", 'themerex');
		$list = themerex_array_merge($list, getCustomFontsList());
		// Google and custom fonts list:
		//$list['Advent Pro'] = array(
		//		'family'=>'sans-serif',																						// (required) font family
		//		'link'=>'Advent+Pro:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic',	// (optional) if you use Google font repository
		//		'css'=>themerex_get_file_url('/css/font-face/Advent-Pro/stylesheet.css')									// (optional) if you use custom font-face
		//		);
		$list['Advent Pro'] = array('family'=>'sans-serif');
		$list['Alegreya Sans'] = array('family'=>'sans-serif');
		$list['Arimo'] = array('family'=>'sans-serif');
		$list['Asap'] = array('family'=>'sans-serif');
		$list['Averia Sans Libre'] = array('family'=>'cursive');
		$list['Averia Serif Libre'] = array('family'=>'cursive');
		$list['Bree Serif'] = array('family'=>'serif',);
		$list['Cabin'] = array('family'=>'sans-serif');
		$list['Cabin Condensed'] = array('family'=>'sans-serif');
		$list['Caudex'] = array('family'=>'serif');
		$list['Comfortaa'] = array('family'=>'cursive');
		$list['Cousine'] = array('family'=>'sans-serif');
		$list['Crimson Text'] = array('family'=>'serif');
		$list['Cuprum'] = array('family'=>'sans-serif');
		$list['Dosis'] = array('family'=>'sans-serif');
		$list['Economica'] = array('family'=>'sans-serif');
		$list['Exo'] = array('family'=>'sans-serif');
		$list['Expletus Sans'] = array('family'=>'cursive');
		$list['Hind'] = array('family'=>'sans-serif');
		$list['Inconsolata'] = array('family'=>'sans-serif');
		$list['Karla'] = array('family'=>'sans-serif');
		$list['Lato'] = array('family'=>'sans-serif');
		$list['Lekton'] = array('family'=>'sans-serif');
		$list['Lobster Two'] = array('family'=>'cursive');
		$list['Maven Pro'] = array('family'=>'sans-serif');
		$list['Merriweather'] = array('family'=>'serif');
		$list['Montserrat'] = array('family'=>'sans-serif');
		$list['Neuton'] = array('family'=>'serif');
		$list['Noticia Text'] = array('family'=>'serif');
		$list['Old Standard TT'] = array('family'=>'serif');
		$list['Open Sans'] = array('family'=>'sans-serif');
		$list['Orbitron'] = array('family'=>'sans-serif');
		$list['Oswald'] = array('family'=>'sans-serif');
		$list['Overlock'] = array('family'=>'cursive');
		$list['Oxygen'] = array('family'=>'sans-serif');
		$list['PT Serif'] = array('family'=>'serif');
		$list['Puritan'] = array('family'=>'sans-serif');
		$list['Raleway'] = array('family'=>'sans-serif');
		$list['Roboto'] = array('family'=>'sans-serif');
		$list['Roboto Slab'] = array('family'=>'sans-serif');
		$list['Roboto Condensed'] = array('family'=>'sans-serif');
		$list['Rosario'] = array('family'=>'sans-serif');
		$list['Share'] = array('family'=>'cursive');
		$list['Signika'] = array('family'=>'sans-serif');
		$list['Signika Negative'] = array('family'=>'sans-serif');
		$list['Source Sans Pro'] = array('family'=>'sans-serif');
		$list['Tinos'] = array('family'=>'serif');
		$list['Ubuntu'] = array('family'=>'sans-serif');
		$list['Vollkorn'] = array('family'=>'serif');
		return apply_filters('theme_skin_list_fonts', $list);
	}
}

// Return Custom font-face list
if ( !function_exists( 'getCustomFontsList' ) ) {
	function getCustomFontsList($prepend_inherit=false) {
		static $list = false;
		if (is_array($list)) return $list;
		$list = array();
		$dir = themerex_get_folder_dir("/css/font-face");
		if ( is_dir($dir) ) {
			$hdir = @ opendir( $dir );
			if ( $hdir ) {
				while (($file = readdir( $hdir ) ) !== false ) {
					$pi = pathinfo( $dir . '/' . $file );
					if ( substr($file, 0, 1) == '.' || ! is_dir( $dir . '/' . $file ) )
						continue;
					$css = file_exists( $dir . '/' . $file . '/' . $file . '.css' ) 
						? themerex_get_folder_url("/css/font-face/".$file.'/'.$file.'.css')
						: (file_exists( $dir . '/' . $file . '/stylesheet.css' ) 
							? themerex_get_folder_url("/css/font-face/".$file.'/stylesheet.css')
							: '');
					if ($css != '')
						$list[$file.' ('.__('uploaded font', 'themerex').')'] = array('css' => $css);
				}
				@closedir( $hdir );
			}
		}
		return $list;
	}
}

// Return Margin Top list
if ( !function_exists( 'getMarginSet' ) ) {
	function getMarginSet() {
		$list = array();
		$list['none']   = __('0',   'themerex');
		$list['mini']   = __('Mini (120)',  'themerex');
		$list['small']  = __('Small (130)',  'themerex');
		$list['middle'] = __('Middle (140)',  'themerex');
		$list['big']    = __('Big (150)',  'themerex');
		$list['large']  = __('Large (160)',  'themerex');
		$list['5']   = __('5',   'themerex');
		$list['10']  = __('10',   'themerex');
		$list['15']  = __('15',   'themerex');
		$list['20']  = __('20',   'themerex');
		$list['25']  = __('25',   'themerex');
		$list['30']  = __('30',   'themerex');
		$list['35']  = __('35',   'themerex');
		$list['40']  = __('40',   'themerex');
		$list['45']  = __('45',   'themerex');
		$list['50']  = __('50',   'themerex');
		$list['55']  = __('55',   'themerex');
		$list['60']  = __('60',   'themerex');
		$list['65']  = __('65',   'themerex');
		$list['70']  = __('70',   'themerex');
		$list['75']  = __('75',   'themerex');
		$list['80']  = __('80',   'themerex');
		$list['85']  = __('85',   'themerex');
		$list['90']  = __('90',   'themerex');
		$list['95']  = __('95',   'themerex');
		$list['105']  = __('105',   'themerex');
		$list['110']  = __('110',   'themerex');
		$list['115']  = __('115',   'themerex');
		$list['120']  = __('120',   'themerex');
		$list['125']  = __('125',   'themerex');
		$list['130']  = __('130',   'themerex');
		$list['135']  = __('135',   'themerex');
		$list['140']  = __('140',   'themerex');
		$list['145']  = __('145',   'themerex');
		$list['150']  = __('150',   'themerex');
		$list['155']  = __('155',   'themerex');
		$list['160']  = __('160',   'themerex');
		return $list;
	}
}

?>