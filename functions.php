<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

function crb_attach_theme_options()
{
    Container::make('theme_options', 'Header')

        ->add_tab(__('Date'), array(
            Field::make('checkbox', 'date_visibility', __('Show')),
            Field::make('select', 'crb_select', __('Date Format'))->set_width(50)
                ->set_options(array(
                    'd/m/Y' => '22/08/2023',
                    'd-m-Y' => '22-08-2023',
                    'Y-m-d' => '2023-08-22',
                )),
            Field::make('color', 'date_text_color', __('Text Color'))->set_width(50),
            Field::make('color', 'header_background_color', __('Background Color'))->set_width(50)

        ))
        ->add_tab(__('Social Media'), array(
            Field::make('checkbox', 'social_link_visibility', __('Show')),
            Field::make('text', 'facebook_link', __('Facebook Link'))->set_width(50),
            Field::make('text', 'linkedin_link', __('LinkedIn Link'))->set_width(50),
            Field::make('text', 'ws_link', __('WhatsApp Link'))->set_width(50),
            Field::make('html', 'crb_html', __('Section Description'))
                ->set_html(sprintf('<p>If you do not have idea how to create WA link. Click <a href="https://create.wa.link/" target="_blank">here</a></p>'))
        ));

    Container::make('theme_options', 'Front Page')
    ->set_icon( 'dashicons-admin-page' )
        ->add_tab(__('Page'), array(
            Field::make('color', 'page_bg_color', __('Background Color'))->set_width(50),
        ))
        ->add_tab(__('Navigation Bar'), array(
            Field::make('color', 'nav_bg_color', __('Nav Color'))->set_width(50),
        ))
        ->add_tab(__('Featured Post'), array(
            Field::make('complex','featured_post', __('Featured Post'))
            ->add_fields(array(
                Field::make( 'text', 'title', __( 'Slide Title' ) )->set_width(50),
                Field::make( 'image', 'photo', __( 'Slide Photo' ) )->set_value_type( 'url' )->set_width(50),
                Field::make( 'rich_text', 'excerpt', __( 'Slide Excerpt' ) )->set_width(50),
                Field::make( 'text', 'link', __( 'Post URL' ) )->set_width(50)
            ))
        ))
        ->add_tab(__('Card'), array(
            Field::make('color', 'card_bg_color', __('Card Color'))->set_width(50),
            Field::make('color', 'card_text_color', __('Text Color'))->set_width(50),
            // Field::make('color', 'card_bg_color', __( 'Card Color' ))->set_width(50)
        ))
        ->add_tab(__('Banner'), array(
            Field::make('text', 'unique_selling_point_title', __('Title'))->set_width(50),
            Field::make('rich_text', 'unique_selling_point_tagline', __('Tagline'))->set_width(50),
            Field::make('text', 'button_name', __('Button Text'))->set_width(50),
            Field::make('text', 'button_link', __('Button Link'))->set_width(50),
            Field::make('color', 'crb_box_background', __('Background Color'))->set_width(50),
            Field::make('color', 'button_text_color', __('Button Text Color'))->set_width(50)
        ));

    Container::make('theme_options', 'Footer')
        ->add_fields(array(
            Field::make('text', 'copyright_text', __('Copyright Text'))->set_width(50),
            Field::make('color', 'footer_bg_color', __('Footer Background Colour'))->set_width(50),
            Field::make('color', 'footer_text_color', __('Text Color'))->set_width(50),
            Field::make('checkbox', 'term_visibility', __('Show Term'))->set_width(50)->set_option_value('yes'),
            Field::make('checkbox', 'privacy_visibility', __('Show Privacy-Policy'))->set_width(50)->set_option_value('yes')
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

function menus()
{
    $locations = array(
        'primary' => "Top Menu",
        'term-condition-privacy-policy' => 'Terms&Conditions/Privacy Policy',
        'secondary' => 'Sidebar'
    );

    register_nav_menus($locations);
}
add_action('init', 'menus');

function registering_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('weaveasia-style', get_template_directory_uri() . "/style.css", array('weaveasia-bootstrap'), $version, 'all');
    wp_enqueue_style('semantic-ui', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css', array(), '2.5.0', 'all');
    wp_enqueue_style('semantic-ui-container', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/container.min.css', array(), '2.5.0', 'all');
    wp_enqueue_style('semantic-ui-header', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/header.min.css', array(), '2.5.0', 'all');
    wp_enqueue_style('semantic-ui-icon', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/icon.min.css', array(), '2.5.0', 'all');
    wp_enqueue_style('semantic-ui-menu', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/menu.min.css', array(), '2.5.0', 'all');
    wp_enqueue_style('semantic-ui-grid', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/grid.min.css', array(), '2.5.0', 'all');
    wp_enqueue_style('semantic-ui-sidebar', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/sidebar.min.css', array(), '2.5.0', 'all');
    wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all');
}

add_action('wp_enqueue_scripts', 'registering_styles');

function registering_scripts()
{
    wp_enqueue_script('semantic-ui-component-js', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/site.min.js', array(), '2.5.0', true);
    wp_enqueue_script('jquery-theme', 'https://code.jquery.com/jquery-3.7.0.min.js', array(), '3.7.0', false);
    wp_enqueue_script('semantic-ui-js', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js', array(), '2.5.0', false);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array(), '5.2.3', false);
    wp_enqueue_script('bootstrap-js-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '5.2.3', false);
    wp_enqueue_script('weaveasia-main', get_template_directory_uri() . "/assets/js/sidebar.js", array(), '1.0', false);
    wp_enqueue_script('weaveasia-loadmore',get_template_directory_uri() . '/assets/js.sidebar.js',array(),'1.0');
}

add_action('wp_enqueue_scripts', 'registering_scripts');

add_filter('manage_posts_columns', 'add_column');
function add_column($wordcount_column)
{
    $wordcount_column['wordcount'] = 'Word Count';
    return $wordcount_column;
}

//Link the word count to our new column//
add_action('manage_posts_custom_column',  'display_wordcount');
function display_wordcount($name)
{
    global $post;
    switch ($name) {
        case 'wordcount':
            //Get the post ID and pass it into the get_wordcount function//
            $wordcount = get_wordcount($post->ID);
            echo $wordcount;
    }
}

function get_wordcount($post_id)
{
    //Get the post, remove any unnecessary tags and then perform the word count// 
    $wordcount = str_word_count(strip_tags(strip_shortcodes(get_post_field('post_content', $post_id))));
    return $wordcount;
}
function readingTime($word_count, $wpm)
{
    $reading_time = $word_count / $wpm;
    return (round($reading_time) + 1);
}

function load_more_posts(){
    $ajax_posts = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
        'paged' => $_POST['paged'],
    ]);

    $response = '';

    $has_more = $ajax_posts->max_num_pages > $_POST['paged'];

    if($ajax_posts->have_posts()){
        while($ajax_posts->have_posts()) : 
            $ajax_posts->the_posts();
            $response .= get_template_part('template-parts/content','archive');
        endwhile;
    }
    else{
        $response = '';
    }

    echo $response;
    exit;
}
add_action('wp_ajax_load_more_posts','load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts','load_more_posts');