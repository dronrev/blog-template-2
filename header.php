<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="<?php echo (get_template_directory_uri() . '/style.css'); ?>" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/site.min.js" integrity="sha512-8UemmJCe6BP6Sgy/MV1UrYXoH4rEH/XdEEawEN+zIDjroLrrHwsyofnvz5UaxHa864UW+NH7OR8V63fVLm55/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js" integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="module" id="test" src='<?php echo get_template_directory_uri() . "/assets/js/loadmore.js" ?>'></script>
  <title><?php echo get_bloginfo(); ?> - <?php the_title(); ?></title>
</head>

<body style="background-color: rgb(242, 243, 244 );">
  <div class="header-container" style="background-color: rgb(229, 231, 233);">
    <header class="page-header py-1" style="background-color: <?php echo carbon_get_theme_option('header_background_color'); ?>;border-bottom-color: <?php echo carbon_get_theme_option('header_horizontal_line'); ?>;">
      <div class="container px-5">
        <div class="d-flex justify-content-between align-items-center">
          <?php if (carbon_get_theme_option('date_visibility')) : ?>
            <div class="current-date"> <span class=""><?php echo current_time('d-M-Y'); ?></span> </div>
          <?php endif; ?>
          <?php if (carbon_get_theme_option('social_link_visibility')) : ?>
            <div class="social-media-logo fs-4 d-flex gap-3">
              <a href="<?php echo carbon_get_theme_option('facebook_link') ?>" target="_blank"><i style="color: rgb(41, 41, 209)" class="bi bi-facebook"></i></a>
              <a href="<?php echo carbon_get_theme_option('linkedin_link') ?>" target="_blank"><i style="color: #0077b5" class="bi bi-linkedin"></i></a>
              <a href="<?php echo carbon_get_theme_option('ws_link') ?>" target="_blank"><i style="color: #128c7e" class="bi bi-whatsapp"></i></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg nav-bar" style="background-color: <?php echo carbon_get_theme_option('header_background_color'); ?>;">
      <div class="container justify-content-between mx-5">
        <!-- Left elements -->
        <div class="d-flex mx-5">
          <!-- Brand -->
          <?php if (function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
          ?>
          <?php $url = ($logo) ? $logo[0] : get_template_directory_uri() . '/assets/images/free-logo.png'; ?>
          <a class="navbar-brand mb-1 d-flex align-items-center" href="<?php echo get_home_url(); ?>">
            <img class="img-logo" src="<?php echo $url ?>" alt="<?php echo get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true); ?>">
          </a>
        </div>
        <!-- Left elements -->

        <!-- Right elements -->
        <div>
          <ul class="navbar-nav flex-row gap-3">
            <li class="nav-item me-3 me-lg-1">
              <?php
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'menu_class' => '',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<div class="nav-item" >%3$s</div>'
                )
              );
              ?>
            </li>
          </ul>
        </div>
        <!-- Right elements -->
      </div>
    </nav>
  </div>