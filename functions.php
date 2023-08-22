<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

function crb_attach_theme_options(){
    Container::make('theme_options','Header')
    ->add_tab(__('Date'),array(
        Field::make('checkbox','date_visibility',__('Show')),
        Field::make( 'select', 'crb_select', __( 'Date Format' ) )->set_width(50)
	->set_options( array(
		'd/m/Y' => '22/08/2023',
		'd-m-Y' => '22-08-2023',
		'Y-m-d' => '2023-08-22',
	    ) ),
        Field::make( 'color', 'date_text_color', __( 'Text Color' ) )->set_width(50),
        Field::make( 'color', 'header_background_color', __( 'Background Color' ) )->set_width(50)

        ))
    ->add_tab(__('Social Media'),array(
        Field::make('checkbox','social_link_visibility',__('Show')),
        Field::make('text','facebook_link',__('Facebook Link'))->set_width(50),
        Field::make('text','linkedin_link',__('LinkedIn Link'))->set_width(50),
        Field::make('text','ws_link',__('WhatsApp Link'))->set_width(50),
        Field::make( 'html', 'crb_html', __( 'Section Description' ) )
        ->set_html( sprintf( '<p>If you do not have idea how to create WA link. Click <a href="https://create.wa.link/" target="_blank">here</a></p>' ) )
    ));
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}


function weaveasia_theme_support()
{

    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('post-thumbnails');
    

}

add_action('after_setup_theme', 'weaveasia_theme_support');

function menus(){
    $locations = array(
        'primary' => "Top Menu",
        'term-condition-privacy-policy' => 'Terms&Conditions/Privacy Policy',
        'secondary' => 'Sidebar' 
    );

    register_nav_menus($locations);
}
add_action('init','menus');

function registering_styles(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('weaveasia-style', get_template_directory_uri() . "/style.css", array('weaveasia-bootstrap'), $version, 'all');
    wp_enqueue_style('semantic-ui','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css',array(),'2.5.0','all');
    wp_enqueue_style('semantic-ui-container','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/container.min.css',array(),'2.5.0','all');
    wp_enqueue_style('semantic-ui-header','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/header.min.css',array(),'2.5.0','all');
    wp_enqueue_style('semantic-ui-icon','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/icon.min.css',array(),'2.5.0','all');
    wp_enqueue_style('semantic-ui-menu','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/menu.min.css',array(),'2.5.0','all');
    wp_enqueue_style('semantic-ui-grid','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/grid.min.css',array(),'2.5.0','all');
    wp_enqueue_style('semantic-ui-sidebar','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/sidebar.min.css',array(),'2.5.0','all');
    wp_enqueue_style('bootstrap-cdn','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',array(),'5.2.3','all');
}

add_action('wp_enqueue_scripts','registering_styles');

function registering_scripts(){
    wp_enqueue_script('semantic-ui-component-js','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/site.min.js',array(),'2.5.0',true);
    wp_enqueue_script('jquery-theme','https://code.jquery.com/jquery-3.7.0.min.js',array(),'3.7.0',false);
    wp_enqueue_script('semantic-ui-js','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js',array(),'2.5.0',false);
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js',array(),'5.2.3',false);
    wp_enqueue_script('bootstrap-js-min','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',array(),'5.2.3',false);
    wp_enqueue_script('weaveasia-main', get_template_directory_uri() . "/assets/js/sidebar.js", array(), '1.0', false);
}

add_action('wp_enqueue_scripts','registering_scripts');