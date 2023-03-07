<?php

use zabamd\TravelAgencyTheme\blocks\Block;

class TravelAgencyTheme 
{
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this,'enqueueStyle']);
        add_action('after_setup-theme',[$this,'addThemeSupport']);
        add_action('init', [$this, 'registerPatternsCategory']);
        add_action( 'init', [$this, 'registerPostTypes'] );
        add_action( 'admin_init', [$this,'removeWelcome'] );
        add_filter( 'block_categories_all', [$this, 'registerBlockCategory'] );

    }

    public function addThemeSupport() : void 
    {
        add_theme_support('editor-styles');
        add_editor_style(get_stylesheet_uri());
        add_theme_support('wp-block-styles');
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails' );
    }

    public function enqueueStyle() : void 
    {
        wp_enqueue_style('mainStyle', get_stylesheet_uri());
    }

    public function registerPatternsCategory()
    {
        register_block_pattern_category(
            't-par-agency',
            array(
                'label'=> __( 'T-par Agency Theme', 't-par-agency' ),
            ));
    }
    public function registerBlockCategory(array $block_categories) : array 
    {
        $block_categories[] = array(
            'slug'  =>'travelAgency',
            'title' => __('Travel Agency'),
        );

        return $block_categories;
    }
    public function removeWelcome() : void
    {
        remove_action( 'welcome_panel', 'wp_welcome_panel');
    }

    public function registerPostTypes() : void
    {
        $args = array(
            'public'    => true,
            'label'     => __( 'Destinations', 'textdomain' ),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'rewrite'   => array( 'slug' => 'destination' ),
            'menu_icon' => 'dashicons-admin-site-alt',
            'query_var' => true,
            'show_in_rest' => true,
            'has_archive'  => true,
            'menu_position' => 111,
            'capability_type' => 'post'
        );
        register_post_type( 'destination', $args );

        $args = array(
            'public'    => true,
            'label'     => __( 'Blog Entries', 'textdomain' ),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'rewrite'   => array( 'slug' => 'blog' ),
            'menu_icon' => 'dashicons-welcome-write-blog ',
            'query_var' => true,
            'show_in_rest' => true,
            'has_archive'  => true,
            'menu_position' => 112,
            'capability_type' => 'post'
        );
        register_post_type( 'blog', $args );

        $args = array(
            'public'    => true,
            'label'     => __( 'Hotels', 'textdomain' ),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'menu_icon' => 'dashicons-admin-home',
            'rewrite'   => array( 'slug' => 'hotels' ),
            'query_var' => true,
            'show_in_rest' => true,
            'has_archive'  => true,
            'menu_position' => 113,
            'capability_type' => 'post'
        );
        register_post_type( 'hotels', $args );
    }
}

//theme init
$init = new TravelAgencyTheme();

//Block Init

?>