<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"><input type="text" class="search-field" placeholder="<?php _e('Search &hellip;', 'themerex'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php _e('Search for:', 'themerex'); ?>" /><span class="search-button roundButton light ico"><a class="search-field icon-search" href="#"></a></span></form>