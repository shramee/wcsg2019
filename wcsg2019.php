<?php
/*
 * Plugin Name: Gutenberg blocks in 25 minutes
 * Plugin URI: http://shramee.me/
 * Description: Quick blocks for Gutenberg with Caxton
 * Author: Shramee
 * Version: 1.10.0
 * Author URI: http://shramee.me/
 */

/**
 * Class Gutenberg_Blocks_In_25_Minutes
 * Enqueues scripts and styles for blocks.
 * Displays a notice to admin if Caxton is not installed.
 */
class Gutenberg_Blocks_In_25_Minutes {

	/** @var self Instance */
	private static $_instance;

	/**
	 * Returns instance of current class
	 * @return self Instance
	 */
	public static function instance() {
		if ( ! self::$_instance ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Gutenberg_Blocks_In_25_Minutes constructor.
	 */
	protected function __construct() {
		self::$file    = __FILE__;
		self::$url     = plugin_dir_url( __FILE__ );
		self::$path    = plugin_dir_path( __FILE__ );
		self::$version = '1.3.1';

		add_action( 'init', [ $this, 'init' ] );
	}

	/**
	 * Initiates hooks
	 * @action init
	 */
	public function init() {

		if ( ! class_exists( 'Caxton' ) ) {
			// Caxton not installed
			add_action( 'admin_notices', array( $this, 'caxton_required_notice' ) );
		} else {
			add_action( 'enqueue_block_editor_assets', array( $this, 'editor_enqueue' ), 7 );
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
			// All clear! Initiate hooks
		}
	}

	/**
	 * Enqueues editor styles
	 * @action enqueue_block_editor_assets
	 */
	public function editor_enqueue() {
	}

	/**
	 * Enqueues front end styles
	 * @action wp_enqueue_scripts
	 */
	public function enqueue() {
	}

	/**
	 * Adds notice if Caxton is not installed.
	 * @action admin_notices
	 */
	public function caxton_required_notice() {
		echo
			'<div class="notice is-dismissible error">' .
			'<p>' .
			sprintf(
				__( '%s requires that you have our free plugin %s installed and activated.', 'gbb25m' ),
				'<b>Gutenberg blocks in 25 minutes</b>',
				'<a href="' . admin_url( 'plugin-install.php?s=caxton&tab=search&type=term' ) . '">Caxton</a>'
			) .
			'</p>' .

			'<p>' .

			'<a  href="' . admin_url( 'plugin-install.php?s=caxton&tab=search&type=term' ) . '" class="button-primary">' .
			__( 'Install Caxton', 'gbb25m' ) . '</a>' .

			'</p>' .

			'</div>';
	}
}