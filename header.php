<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo (get_template_directory_uri() . '/assets/semantic-ui/semantic.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/sidebar.min.css" integrity="sha512-4btzzREsMNzS3OyBEIW/Wip+CuRcm+JKLOSrGi8DU3cXtZ1FWCE0cUKmcyVFbwjg1IlR0LlXXoFfppVfbB+2Gw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/site.min.js" integrity="sha512-8UemmJCe6BP6Sgy/MV1UrYXoH4rEH/XdEEawEN+zIDjroLrrHwsyofnvz5UaxHa864UW+NH7OR8V63fVLm55/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?php echo (get_template_directory_uri() . '/style.css'); ?>" />

    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"
      integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="<?php echo (get_template_directory_uri() . '/assets/js/sidebar.js'); ?>"></script>
    <title><?php echo get_bloginfo(); ?> - <?php the_title(); ?></title>
  </head>
  <body>
    
    <header class="page-header" style="background-color: <?php echo carbon_get_theme_option('header_background_color'); ?>;">
      <div class="ui container">
        <div class="d-flex justify-content-space-between align-items-center">
        <div class="current-date"> <?php echo current_time('d-M-Y'); ?> </div>
          <?php if(carbon_get_theme_option('social_link_visibility')): ?>
          <div class="social-media-logo">
            <a href="<?php echo carbon_get_theme_option('facebook_link') ?>" target="_blank"><i style="color: rgb(41, 41, 209)" class="facebook square icon"></i></a>
            <a href="<?php echo carbon_get_theme_option('linkedin_link') ?>" target="_blank"><i style="color: #0077b5" class="linkedin icon"></i></a>
            <a href="<?php echo carbon_get_theme_option('ws_link') ?>" target="_blank"><i style="color: #128c7e" class="whatsapp square icon"></i></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </header>
    <nav class="nav-bar">
      <div class="ui container">
        <div class="d-flex justify-content-space-between align-items-center">
          <div class="ui tiny image">
            <?php if (function_exists('the_custom_logo')){
                              $custom_logo_id = get_theme_mod('custom_logo');
                              $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <?php $url = ($logo) ? $logo[0] : get_template_directory_uri() . '/assets/images/free-logo.png'; ?>
            <a href="<?php echo get_home_url(); ?>">
              <img
              src="<?php echo $url ?>"
              alt="<?php echo wp_get_attachment_image($thumbnail_id, 'full', false, array('alt' => $alt_text)); ?>"
            />
            </a>
          </div>
          <div class="nav-menu">
            <div class="ui secondary menu ">
              <?php 
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<div class="item">%3$s</div>'
                )
              );
              ?>
            </div>
          </div>
          <div class="ui inverted sidebar vertical menu">
          <?php 
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<div class="item">%3$s</div>'
                )
              );
              ?>
        </div>
        <div class="mobile-version-menu-button">
          <button class="ui button" 
          onclick="toggle()">
          <i class="sidebar icon"></i>
      </button>
        </div>
        </div>
      </div>
    </nav>