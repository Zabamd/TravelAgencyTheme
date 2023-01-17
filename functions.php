<?php

class TParTheme 
{
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this,'enqueueStyle']);
        add_action('after_setup-theme',[$this,'addThemeSupport']);
        add_action('init', [$this, 'registerPatternsCategory']);
        add_action( 'init', [$this, 'registerPostTypes'] );
        add_action( 'admin_init', [$this,'removeWelcome'] );
        add_filter('register_post_type_args', [$this, 'removeDefaultPostType'], 0, 2);
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
    public function removeWelcome() : void
    {
        remove_action( 'welcome_panel', 'wp_welcome_panel');
    }

    public function registerPostTypes() : void
    {
        $args = array(
            'public'    => true,
            'label'     => __( 'Destinations', 'textdomain' ),
            'description' => __('Post type to display locations on front page in the Destination Content Section Pattern'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'rewrite'   => array( 'slug' => 'destination' ),
            'menu_icon' => 'dashicons-admin-site-alt',
            'query_var' => true,
            'show_in_rest' => true,
            'has_archive'  => false,
            'menu_position' => 111,
            'capability_type' => 'post'
        );
        register_post_type( 'destination', $args );

        $args = array(
            'public'    => true,
            'label'     => __( 'Blog Entries', 'textdomain' ),
            'description' => __('Blog post type'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'rewrite'   => array( 'slug' => 'blog' ),
            'menu_icon' => 'dashicons-welcome-write-blog ',
            'query_var' => true,
            'show_in_rest' => true,
            'has_archive'  => false,
            'menu_position' => 112,
            'capability_type' => 'post'
        );
        register_post_type( 'blog', $args );

        $args = array(
            'public'    => true,
            'label'     => __( 'Hotels', 'textdomain' ),
            'description' => __('Post type to manage list of hotels'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'menu_icon' => 'dashicons-admin-home',
            'rewrite'   => array( 'slug' => 'hotels' ),
            'query_var' => true,
            'show_in_rest' => true,
            'has_archive'  => false,
            'menu_position' => 113,
            'capability_type' => 'post'
        );
        register_post_type( 'hotels', $args );

        $args = array(
            'public'    => true,
            'label'     => __( 'Client Opinions', 'textdomain' ),
            'description' => __('Post type to manage client opinions on front page'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'menu_icon' => 'dashicons-admin-users',
            'rewrite'   => array( 'slug' => 'hotels' ),
            'query_var' => true,
            'show_in_rest' => true,
            'has_archive'  => false,
            'menu_position' => 114,
            'capability_type' => 'post'
        );
        register_post_type( 'clients', $args );
    }

    public function removeDefaultPostType($args, $postType) : array
    {
        if ($postType === 'post') {
            $args['public']                = false;
            $args['show_ui']               = false;
            $args['show_in_menu']          = false;
            $args['show_in_admin_bar']     = false;
            $args['show_in_nav_menus']     = false;
            $args['can_export']            = false;
            $args['has_archive']           = false;
            $args['exclude_from_search']   = true;
            $args['publicly_queryable']    = false;
            $args['show_in_rest']          = false;
        }
    
        return $args;
    }  
}

//theme init
$init = new TParTheme();
?>