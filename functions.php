<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;


function weaveasia_theme_support()
{

    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'weaveasia_theme_support');

function registering_styles(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('weaveasia-style', get_template_directory_uri() . "/style.css", array('weaveasia-bootstrap'), $version, 'all');
    wp_enqueue_style('semantic-ui','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css',array(),'2.5.0',false);
    wp_enqueue_style('semantic-ui-container','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/container.min.css',array(),'2.5.0',false);
    wp_enqueue_style('semantic-ui-header','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/header.min.css',array(),'2.5.0',false);
    wp_enqueue_style('semantic-ui-icon','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/icon.min.css',array(),'2.5.0',false);
    wp_enqueue_style('semantic-ui-menu','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/menu.min.css',array(),'2.5.0',false);
    wp_enqueue_style('semantic-ui-grid','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/grid.min.css',array(),'2.5.0',false);
    wp_enqueue_style('semantic-ui-sidebar','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/sidebar.min.css',array(),'2.5.0',false);
    wp_enqueue_style('bootstrap-cdn','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',array(),'5.2.3',false);
}

add_action('wp_enqueue_scripts','enqueue_script');

function registering_scripts(){
    wp_enqueue_script('semantic-ui-component-js','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/site.min.js',array(),'2.5.0',false);
    wp_enqueue_script('jquery-theme','https://code.jquery.com/jquery-3.7.0.min.js',array(),'3.7.0',false);
    wp_enqueue_script('semantic-ui-js','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js',array(),'2.5.0',false);
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js',array(),'5.2.3',false);
    wp_enqueue_script('bootstrap-js-min','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',array(),'5.2.3',false);
    wp_enqueue_script('weaveasia-main', get_template_directory_uri() . "/assets/js/sidebar.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts','registering_scripts');