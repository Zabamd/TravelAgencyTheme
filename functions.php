<?php

class TParTheme 
{
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this,'enqueueStyle']);
        add_action('after_setup-theme',[$this,'addThemeSupport']);
        add_action('init', [$this, 'registerPatternsCategory']);
    }


    public function addThemeSupport() : void 
    {
        add_theme_support('editor-styles');
        add_editor_style(get_stylesheet_uri());
        add_theme_support('wp-block-styles');
        add_theme_support('title-tag');
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
}

//theme init
$init = new TParTheme();
?>