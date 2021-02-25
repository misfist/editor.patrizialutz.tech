<?php
namespace SiteGround_Optimizer\Install_Service;
use SiteGround_Optimizer\Htaccess\Htaccess;
use SiteGround_Optimizer\Options\Options;
use SiteGround_Optimizer\Helper\Helper;

class Install_5_7_4 extends Install {

	/**
	 * The default install version. Overridden by the installation packages.
	 *
	 * @since 5.7.4
	 *
	 * @access protected
	 *
	 * @var string $version The install version.
	 */
	protected static $version = '5.7.4';

	public function __construct() {
		$this->htaccess = new Htaccess();
	}

	/**
	 * Run the install procedure.
	 *
	 * @since 5.7.4
	 */
	public function install() {
		if (
			Options::is_enabled( 'siteground_optimizer_enable_browser_caching' ) &&
			! Helper::is_avalon()
		) {
			$this->htaccess->enable( 'browser-caching' );
		}
	}

}