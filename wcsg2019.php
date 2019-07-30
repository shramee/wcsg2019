<?php
/*
 * Plugin Name: Gutenberg blocks in 25 minutes
 * Plugin URI: http://shramee.me/
 * Description: Quick blocks for Gutenberg with Caxton
 * Author: Shramee
 * Version: 1.10.0
 * Author URI: http://shramee.me/
 */

class Gutenberg_Blocks_In_25_Minutes {
	/** @var self Instance */
	private static $_instance;

	/**
	 * Returns instance of current calss
	 * @return self Instance
	 */
	public static function instance() {
		if ( ! self::$_instance ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	protected function __construct() {
		
	}
}