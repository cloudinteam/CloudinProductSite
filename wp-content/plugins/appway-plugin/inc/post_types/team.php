<?php
/**
 * Abstract class for register post type
 *
 * @package    WordPress
 * @subpackage Plugin
 * @author     Mahfuzur Rashid <rashidcloud@gmail.com>
 * @version    1.0
 */

namespace APPWAYPLUGIN\Inc\Post_Types;

use APPWAYPLUGIN\Inc\Abstracts\Post_Type;

if ( ! function_exists( 'add_action' ) ) {
	exit;
}

/**
 * Abstract Post Type
 * Implemented by classes using the same CRUD(s) pattern.
 *
 * @version  2.6.0
 * @package  APPWAYPLUGIN/Abstracts
 * @category Abstract Class
 * @author   Wptech
 */
class Team extends Post_Type {

	protected $post_type = 'appway_team';

	protected $menu_icon = 'dashicons-portfolio';

	protected $taxonomies = array();

	public static $instance;


	/**
	 * [instance description]
	 *
	 * @return [type] [description]
	 */
	public static function instance() {

		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * [init description]
	 *
	 * @return [type] [description]
	 */
	public static function init() {

		self::instance()->menu_name = esc_html__( 'Teams', 'wpfixker' );
		self::instance()->singular  = esc_html__( 'Team', 'wpappway' );
		self::instance()->plural    = esc_html__( 'Teams', 'wpappway' );

		add_action( 'init', array( self::instance(), 'register' ) );
	}


}
