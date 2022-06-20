<?php
/**
 * WordPress Comment Attachment
 *
 * @package WordPress_Comment_Attachment
 * @author Garegin Hakobyan
 * @copyright 2022
 * @license GPLv2+
 *
 * @since 1.0.0
 *
 * Plugin Name: WordPress Comment Attachment
 * Plugin URI: https://github.com/garikhg/wp-comment-attachment/
 * Description: Allows your visitors to attach files with their comments
 * Version: 2.3.1
 * Author: Garegin Hakobyan
 * Author URI: https://github.com/garikhg
 * License: GPLv2 or later
 * Text Domain: dco-comment-attachment
 */

defined( 'ABSPATH' ) || die;

define( 'DCO_CA_URL', plugin_dir_url( __FILE__ ) );
define( 'DCO_CA_PATH', plugin_dir_path( __FILE__ ) );
define( 'DCO_CA_BASENAME', plugin_basename( __FILE__ ) );
define( 'DCO_CA_VERSION', '2.3.1' );

require_once DCO_CA_PATH . 'includes/functions.php';

require_once DCO_CA_PATH . 'includes/back-compat.php';

require_once DCO_CA_PATH . 'includes/class-dco-ca-base.php';
require_once DCO_CA_PATH . 'includes/class-dco-ca.php';

require_once DCO_CA_PATH . 'includes/class-dco-ca-admin.php';
require_once DCO_CA_PATH . 'includes/class-dco-ca-settings.php';

$GLOBALS['dco_ca']          = new DCO_CA();
$GLOBALS['dco_ca_admin']    = new DCO_CA_Admin();
$GLOBALS['dco_ca_settings'] = new DCO_CA_Settings();
