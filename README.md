# Blog Theme Weave Asia

## UI FRAMEWORK
UI designed with Semantic UI combine with bootstrap. Most of the item are built with Semantic UI component.
Please take note that the only bootstrap is using CDN.
[Semantic UI](https://semantic-ui.com/)
[Bootstrap](https://getbootstrap.com/)

## PLUGINS
Plugins are built using CarbonFields library.
[CarbonFields](https://docs.carbonfields.net/)

### CODE EXPLANATION

> Theme and Post Options
Below codes are theme options and post options using carbonfields library

`function crb_attach_theme_options()
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
            Field::make( 'checkbox', 'show_related_content', 'Is Active' )
    ->set_option_value( 'yes' ),
            Field::make('select', 'show_related_content_select', __('Choose Options'))
                ->set_options(
                    $all_posts
                ),
        ));

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
        ->set_icon('dashicons-admin-page')
        ->add_tab(__('Page'), array(
            Field::make('color', 'page_bg_color', __('Background Color')),
            Field::make('color', 'header_horizontal_line', __('Header Horizontal Line'))->set_width(50),
            Field::make('color', 'footer_horizontal_line', __('Footer Horizontal Line'))->set_width(50),
        ))
        ->add_tab(__('Single Post'), array(
            Field::make('color', 'single_post_color', 'Background Color'),
        ))
        ->add_tab(__('Navigation Bar'), array(
            Field::make('color', 'nav_bg_color', __('Nav Color'))->set_width(50),
        ))
        ->add_tab(__('Featured Post'), array(
            Field::make('complex', 'featured_post', __('Featured Post'))
                ->add_fields(array(
                    Field::make('text', 'title', __('Slide Title'))->set_width(50),
                    Field::make('image', 'photo', __('Slide Photo'))->set_value_type('url')->set_width(50),
                    Field::make('rich_text', 'excerpt', __('Slide Excerpt'))->set_width(50),
                    Field::make('text', 'link', __('Post URL'))->set_width(50)
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
            Field::make('radio', 'crb_radio_segment_background', __('Segment Background Option'))
                ->set_options(array(
                    '1' => 'Image',
                    '2' => 'Color',
                )),
            Field::make('color', 'crb_box_background', __('Background Color'))->set_width(50),
            Field::make('image', 'crb_segment_image_background', __('Background Image'))->set_value_type('url')->set_width(50),
            Field::make('color', 'button_text_color', __('Button Text Color'))->set_width(50),
            Field::make('color', 'button_background_color', __('Button Background Color'))->set_width(50),
        ));

    Container::make('theme_options', 'Footer')
        ->add_fields(array(
            Field::make('text', 'copyright_text', __('Copyright Text'))->set_width(50),
            Field::make('color', 'footer_bg_color', __('Footer Background Colour'))->set_width(50),
            Field::make('color', 'footer_text_color', __('Text Color'))->set_width(50),
            Field::make('checkbox', 'term_visibility', __('Show Term'))->set_width(50)->set_option_value('yes'),
            Field::make('checkbox', 'privacy_visibility', __('Show Privacy-Policy'))->set_width(50)->set_option_value('yes')
        ));
}`


> Reading time plugin
This code is to display word count of post to for the reading time plugin
`add_action('manage_posts_custom_column',  'display_wordcount');
function display_wordcount($name)
{
    global $post;
    switch ($name) {
        case 'wordcount':
            //Get the post ID and pass it into the get_wordcount function//
            $wordcount = get_wordcount($post->ID);
            echo $wordcount;
    }
}`

