<?php

class lh_custom_posttypes {

	public function __construct(){
		add_action('init', array($this, "create_post_types"));
		add_action('init', array($this, 'register_taxonomies'));
	}
	
	
	/**
	 * register_taxonomies function.
	 *
	 * @access public
	 * @return void
	 */
	public function register_taxonomies(){
		global $wpdb;

		// add Taxonomy Stack-Items -> Stack Category

		$labels = array(
			'name'              => _x( 'Stack', 'taxonomy general name', LANG_NAMESPACE ),
			'singular_name'     => _x( 'Stack', 'taxonomy singular name', LANG_NAMESPACE ),
			'search_items'      => __( 'Search Stacks', LANG_NAMESPACE ),
			'all_items'         => __( 'All Stacks', LANG_NAMESPACE ),
			'parent_item'       => __( 'Parent Stack', LANG_NAMESPACE ),
			'parent_item_colon' => __( 'Parent Stack:', LANG_NAMESPACE ),
			'edit_item'         => __( 'Edit Stack', LANG_NAMESPACE ),
			'update_item'       => __( 'Update Stack', LANG_NAMESPACE ),
			'add_new_item'      => __( 'Add New Stack', LANG_NAMESPACE ),
			'new_item_name'     => __( 'New Stack Name', LANG_NAMESPACE ),
			'menu_name'         => __( 'Stack Category', LANG_NAMESPACE ),
		);

		register_taxonomy(
			'stacks',
			'stack-item',
			array(
				'labels' => $labels,
				'hierarchical'      => true,
				'rewrite' => array( 'slug' => 'stack' ),
			)
		);
	}

	public function create_post_types(){

		$labels = array(
			'name'               => _x( 'Stack Item', 'post type general name', LANG_NAMESPACE ),
			'singular_name'      => _x( 'Stack Item', 'post type singular name', LANG_NAMESPACE ),
			'menu_name'          => _x( 'Stack Items', 'admin menu', LANG_NAMESPACE ),
			'name_admin_bar'     => _x( 'Stack Items', 'add new on admin bar', LANG_NAMESPACE ),
			'add_new'            => _x( 'Add New', 'story', LANG_NAMESPACE ),
			'add_new_item'       => __( 'Add New Stack Item', LANG_NAMESPACE ),
			'new_item'           => __( 'New Stack Item', LANG_NAMESPACE ),
			'edit_item'          => __( 'Edit Stack Item', LANG_NAMESPACE ),
			'view_item'          => __( 'View Stack Item', LANG_NAMESPACE ),
			'all_items'          => __( 'All Stack Items', LANG_NAMESPACE ),
			'search_items'       => __( 'Search Stack Items', LANG_NAMESPACE ),
			'parent_item_colon'  => __( 'Parent Stack Item:', LANG_NAMESPACE ),
			'not_found'          => __( 'No items found.', LANG_NAMESPACE ),
			'not_found_in_trash' => __( 'No items found in Trash.', LANG_NAMESPACE ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'stack-item' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
			'taxonomies'		 => array( 'stack' ),
		);

		register_post_type( 'stack-item', $args );

	}

}
$lh_custom_posttypes = new lh_custom_posttypes();