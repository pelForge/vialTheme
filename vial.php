<?php
/**
 * class vialTheme
 *
 * @since 1.0a
 */
class vial {
	public $version = '0.1';

	public function __construct() {
		/* -- Define Constants used within the theme -- */
		$this->constants();
	}

	private function constants() {
		# DIRs
		define('VIAL_LIB', TEMPLATEPATH . '/lib');
		define('VIAL_ADMIN', VIAL_LIB . '/admin');
		define('VIAL_CORE', VIAL_LIB . '/core');
		define('VIAL_JS', VIAL_LIB . '/js');
		define('VIAL_SKINS', VIAL_LIB . '/skins');
		# URLs
		define('VIAL_URL', get_bloginfo('template_url')); #wp
		define('VIAL_CSS_URL', VIAL_URL . '/lib/css');
		define('VIAL_JS_URL', VIAL_URL . '/lib/js');
		define('VIAL_IMAGES_URL', VIAL_URL . '/lib/img');
	}

	public function launch() {
		/* -- Load FW Development Core -- */
		require_once(VIAL_LIB . '/devCORE.php');
		
	}
}
$vial->launch();