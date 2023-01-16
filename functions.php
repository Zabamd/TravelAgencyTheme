<?php

class TParTheme 
{
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this,'enqueueStyle']);
        add_action('after_setup-theme',[$this,'addThemeSupport']);
        add_action('init', [$this, 'registerPatternsCategory']);
        add_action( 'init', [$this, 'registerPostTypes'] );

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

    public function registerPostTypes() : void
    {
        $args = array(
            'public'    => true,
            'label'     => __( 'Destinations', 'textdomain' ),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'menu_icon' => 'dashicons-admin-site-alt',
            'show_in_rest' => true
        );
        register_post_type( 'destination', $args );

        $args = array(
            'public'    => true,
            'label'     => __( 'Blog Entries', 'textdomain' ),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'menu_icon' => 'dashicons-welcome-write-blog ',
            'show_in_rest' => true
        );
        register_post_type( 'blog', $args );

        $args = array(
            'public'    => true,
            'label'     => __( 'Hotels', 'textdomain' ),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'menu_icon' => 'dashicons-admin-home',
            'show_in_rest' => true
        );
        register_post_type( 'hotels', $args );
    }
}

//theme init
$init = new TParTheme();
?>