<?php
/* Essential Grid support functions
------------------------------------------------------------------------------- */

// Check if Ess. Grid installed and activated
if ( !function_exists( 'themerex_exists_essgrids' ) ) {
	function themerex_exists_essgrids() {
		return is_plugin_active('essential-grid/essential-grid.php');
	}
}
?>