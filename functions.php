<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}


add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

function crb_attach_theme_options()
{
    $all_posts = [];
    $var_load_posts = new WP_Query([
        'post' => 'posts',
        'orderby' => 'date',
        'posts_per_page' => -1
    ]);

    if ($var_load_posts->have_posts()) :
        while ($var_load_posts->have_posts()) :
            $var_load_posts->the_post();
            $all_posts[get_the_ID()] = get_the_title();
        endwhile;
        wp_reset_postdata();
    endif;


    Container::make('post_meta', __('Related Content'))
        ->where('post_type', '=', 'post')
        ->add_fields(array(
            Field::make('checkbox', 'show_related_content', 'Is Active')
                ->set_option_value('yes'),
            // Field::make('select', 'show_related_content_select', __('Choose Options'))
            //     ->set_options(
            //         $all_posts
            //     ),
                Field::make( 'multiselect', 'show_related_content_select', __( 'Choose Posts' ) )
	->add_options( $all_posts ),
        ));

    Container::make('theme_options', 'Header')
        ->add_tab(__('Date'), array(
            Field::make('checkbox', 'date_visibility', __('Is Active')),
            // Field::make('select', 'crb_select', __('Date Format'))->set_width(50)
            //     ->set_options(array(
            //         'd/m/Y' => '22/08/2023',
            //         'd-m-Y' => '22-08-2023',
            //         'Y-m-d' => '2023-08-22',
            //     )),
            Field::make('color', 'date_text_color', __('Text Color'))->set_default_value('yes')->set_width(50),
            Field::make('color', 'header_background_color', __('Header Background Color'))->set_width(50)

        ))
        ->add_tab(__('Social Media'), array(
            Field::make('checkbox', 'social_link_visibility', __('Is Active'))->set_option_value('yes'),
            Field::make('text', 'facebook_link', __('Facebook Link'))->set_width(50),
            Field::make('text', 'linkedin_link', __('LinkedIn Link'))->set_width(50),
            Field::make('text', 'ws_link', __('WhatsApp Link'))->set_width(50),
            Field::make('html', 'crb_html', __('Section Description'))
                ->set_html(sprintf('<p>If you do not have idea how to create WA link. Click <a href="https://create.wa.link/" target="_blank">here</a></p>'))
        ))
        ->add_tab(__('Navigation Bar'), array(
            Field::make('color', 'nav_bg_color', __('Nav Background Color'))->set_width(50),
        ));

    Container::make('theme_options', 'Front Page')
        ->set_icon('dashicons-admin-page')
        ->add_tab(__('Page'), array(
            Field::make('color', 'page_bg_color', __('Background Color'))->set_default_value('F1F1F1'),
            Field::make('color', 'header_horizontal_line', __('Header Horizontal Line'))->set_width(50),
            Field::make('color', 'footer_horizontal_line', __('Footer Horizontal Line'))->set_width(50),
            Field::make('color', 'load_more_button_color', __('Load More Button Border Color'))->set_default_value('edbb99')->set_width(50),
            Field::make('color', 'load_more_button_text_color', __('Load More Button Text Color'))->set_width(50),
        ))
        ->add_tab(__('Single Post'), array(
            Field::make('color', 'single_post_color', 'Background Color'),
        ))
        ->add_tab(__('Featured Post'), array(
            Field::make('checkbox', 'featured_post_active', __('Is Active'))->set_option_value('yes'),
            Field::make('html', 'featured_post_label')
                ->set_html('<h3>Featured Post Styling</h3>'),
            Field::make('color', 'featured_post_bg_color', __('Background Color'))->set_width(50),
            Field::make('color', 'featured_post_header_color', __('Header Color'))->set_default_value('eb935c')->set_width(50),
            Field::make('color', 'featured_post_text_color', __('Text Color'))->set_width(50),
            Field::make('color', 'featured_post_button_color', __('Button Color'))->set_width(50)->set_default_value('0d6efd'),
            Field::make('html', 'featured_post_data')
                ->set_html('<h3>Featured Post Data</h3>'),
            Field::make('complex', 'featured_post', __('Featured Post'))
                ->add_fields(array(
                    Field::make('text', 'title', __('Slide Title'))->set_width(50),
                    Field::make('image', 'photo', __('Slide Photo'))->set_value_type('url')->set_width(50),
                    Field::make('rich_text', 'excerpt', __('Slide Excerpt'))->set_width(50),
                    Field::make('text', 'link', __('Post URL'))->set_width(50)
                ))
        ))
        ->add_tab(__('Article Card'), array(
            Field::make('color', 'card_bg_color', __('Card Color'))->set_width(50),
            Field::make('color', 'card_text_color', __('Text Color'))->set_default_value('7C7B7A')->set_width(50),
        ))
        ->add_tab(__('Banner'), array(
            Field::make('checkbox', 'banner_post_active', __('Is Active'))->set_option_value('yes'),
            Field::make('text', 'unique_selling_point_title', __('Title'))->set_width(50),
            Field::make('rich_text', 'unique_selling_point_tagline', __('Tagline'))->set_width(50),
            Field::make('text', 'button_name', __('Button Text'))->set_width(50),
            Field::make('text', 'button_link', __('Button Link'))->set_width(50),
            Field::make('radio', 'crb_radio_segment_background', __('Segment Background Option'))
                ->set_options(array(
                    '1' => 'Color',
                    '2' => 'Image',
                )),
            Field::make('color', 'crb_box_background', __('Background Color'))->set_width(50),
            Field::make('image', 'crb_segment_image_background', __('Background Image'))->set_value_type('url')->set_width(50),
            Field::make('color', 'button_text_color', __('Button Text Color'))->set_width(50),
            Field::make('color', 'button_background_color', __('Button Background Color'))->set_width(50),
        ));

    Container::make('theme_options', 'Footer')
        ->add_fields(array(
            Field::make('text', 'copyright_text', __('Copyright Text'))->set_default_value('2023 Weave Asia')->set_width(50),
            Field::make('color', 'footer_bg_color', __('Footer Background Colour'))->set_width(50),
            Field::make('color', 'footer_text_color', __('Text Color'))->set_width(50),
            Field::make('checkbox', 'term_visibility', __('Show Term'))->set_width(50)->set_option_value('yes'),
            Field::make('checkbox', 'privacy_visibility', __('Show Privacy-Policy'))->set_width(50)->set_option_value('yes')
        ));
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
    wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all');
}

add_action('wp_enqueue_scripts', 'registering_styles');

function registering_scripts()
{
    // Enqueue jQuery with a dependency array containing only jQuery itself.
    wp_enqueue_script('weaveasia-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', false);

    // Enqueue other scripts without jQuery as a dependency.
    wp_enqueue_script('semantic-ui-component-js', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/site.min.js', array(), '2.5.0', true);
    wp_enqueue_script('semantic-ui-js', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js', array(), '2.5.0', false);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array(), '5.2.3', false);
    wp_enqueue_script('bootstrap-js-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '5.2.3', false);
    wp_enqueue_script('weaveasia-main', get_template_directory_uri() . "/assets/js/sidebar.js", array(), '1.0', false);
}

add_action('wp_enqueue_scripts', 'registering_scripts');


add_action('wp_enqueue_scripts', 'registering_scripts');

add_filter('manage_posts_columns', 'add_column');
function add_column($wordcount_column)
{
    $wordcount_column['wordcount'] = 'Word Count';
    return $wordcount_column;
}

add_action('manage_posts_custom_column',  'display_wordcount');
function display_wordcount($name)
{
    global $post;
    switch ($name) {
        case 'wordcount':
            //Get the post ID and pass it into the get_wordcount function
            $wordcount = get_wordcount($post->ID);
            echo $wordcount;
    }
}

function get_wordcount($post_id)
{
    //Get the post, remove any unnecessary tags and then perform the word count
    $wordcount = str_word_count(strip_tags(strip_shortcodes(get_post_field('post_content', $post_id))));
    return $wordcount;
}
function readingTime($word_count, $wpm)
{
    $reading_time = $word_count / $wpm;
    return (round($reading_time) + 1);
}

function load_more_posts()
{
    $ajax_posts = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
        'paged' => $_POST['paged'],
    ]);

    $response = '';
    if ($ajax_posts->have_posts()) {
        while ($ajax_posts->have_posts()) :
            $ajax_posts->the_post();
            $response .= get_template_part('template-parts/content', 'card');
        endwhile;
    } else {
        $response = '';
    }

    echo $response;
    exit;
}
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
add_action('wp_ajax_load_more_posts', 'load_more_posts');

add_action('init', 'my_script_enqueuer');

function my_script_enqueuer()
{
    wp_register_script("loadMore", get_template_directory_uri() . "/assets/js/loadmore.js", array('jquery'));
    wp_localize_script('loadMore', 'loadmorepagination', array('ajaxurl' => admin_url('admin-ajax.php')));


    wp_enqueue_script('jquery');
    wp_enqueue_script('loadMore');
}

// privacy term page

if (isset($_GET['activated']) && is_admin()){
      
    $privacy_page_title = 'Privacy Policy Theme';
    $privacy_page_content = '';
    $privacy_page_template = 'privacy.php'; 
  
    addNewPage($privacy_page_title,$privacy_page_content,$privacy_page_template);

    $term_page_title = 'Terms&Conditions Theme';
    $term_page_content = '';
    $term_page_template = 'term.php';

    addNewPage($term_page_title,$term_page_content,$term_page_template);
  
  
}

function addNewPage($page_title = '',$page_content = '',$page_template=''){

    
    if (isset($_GET['activated']) && is_admin()){
      
        $new_page_title = $page_title;
        $new_page_content = $page_content;
        $new_page_template = $page_template; //ex. template-custom.php. Leave blank if you don't want a custom page template.
      
        //don't change the code bellow, unless you know what you're doing
      
        $page_check = get_page_by_title($new_page_title);
        $new_page = array(
            'post_type' => 'page',
            'post_title' => $new_page_title,
            'post_content' => $new_page_content,
            'post_status' => 'publish',
            'post_author' => 1,
        );
        if(!isset($page_check->ID)){
            $new_page_id = wp_insert_post($new_page);
            if(!empty($new_page_template)){
                update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
            }
        }
      
    }
}
