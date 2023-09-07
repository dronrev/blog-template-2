<?php get_header(); ?>
<div style="background: <?php echo carbon_get_theme_option('page_bg_color'); ?>;">
  <div class="pusher">
    <main class="ui container">
      <div class="page-title">
        <h1><?php echo get_bloginfo(); ?></h1>
      </div>
      <div class="ui container">
        <!-- <button class="btn btn-danger">Woi</button> -->
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">

              <div class="ui two column doubling stackable grid container slide active">
                <div class="column">
                  <div class="featured-post-image">
                    <img src="<?php echo carbon_get_theme_option('featured_post')[0]['photo'] ?>" alt="">
                  </div>
                </div>
                <div class="column">
                  <div class="featured-post-header d-flex justify-content-between align-items-center">
                    <div>
                      <h2>Featured Post</h2>
                    </div>
                    <div class="slider-icon">
                      <button type="button" data-bs-target="#carouselExample" data-bs-slide="prev"><i class="caret left icon"></i></button>
                      <button type="button" data-bs-target="#carouselExample" data-bs-slide="next"><i class="caret right icon"></i></button>
                    </div>
                  </div>
                  <div class="article-detail">
                    <h3 class="article-title"><?php echo carbon_get_theme_option('featured_post')[0]['title'] ?></h3>
                    <p class="article-excerpt"><?php echo carbon_get_theme_option('featured_post')[0]['excerpt'] ?></p>
                    <a href="<?php echo carbon_get_theme_option('featured_post')[0]['link'] ?>">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <?php get_template_part('template-parts/content', 'featured-post'); ?>
          </div>
        </div>
      </div>
      <!-- latest articles section -->
      <h2>Latest Articles</h2>
      <div class="latest-articles d-grid">
        <div class="">
          <div class="article-content-box row align-items-center justify-content-center gap-4">
            <?php
            $var_load_posts = new WP_Query([
              'post' => 'posts',
              'orderby' => 'date',
              'order' => 'DATE',
              'paged' => 1
            ]);

            ?>
            <?php
            if ($var_load_posts->have_posts()) :
              while ($var_load_posts->have_posts()) :
                $var_load_posts->the_post();
                get_template_part('template-parts/content', 'card');

              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>
      </div>
      <div class="load-more">
        <div class="d-flex justify-content-center">
          <a href="#" class="ui huge button load-more-btn">Load More</a>
        </div>
      </div>


      <?php if(carbon_get_theme_option('banner_post_active')): ?>
      <div class="unique-selling-point">
        <?php
        $background = '';
        $dark_bg = 'background-size:cover;overflow: hidden;';
        $segment_style = '';
        switch (carbon_get_theme_option('crb_radio_segment_background')) {
          case '1':
            $background = carbon_get_theme_option('crb_segment_image_background');
            $segment_style = 'style="background:url('. $background .') no-repeat;'. $dark_bg .'"';
            break;
          case '2':
            $background = carbon_get_theme_option('crb_box_background');
            $segment_style = 'style="background:'. $background .';"';
            break;
          default:
            $background = carbon_get_theme_option('crb_box_background');
            $segment_style = 'style="background:'. $background .';"';
            break;
        }


        ?>
        <div class="ui placeholder segment" <?php echo $segment_style; ?> >
          <div class="d-flex align-items-center justify-content-around unique-selling-point-outer">
            <div>
              <div class="ui icon header">
                <h4 class="unique-selling-point-title"><?php echo carbon_get_theme_option('unique_selling_point_title'); ?></h4>
                <p><?php echo carbon_get_theme_option('unique_selling_point_tagline'); ?></p>
              </div>
            </div>
            <div>
              <a style="background-color: <?php echo carbon_get_theme_option('button_background_color') ?>;color: <?php echo carbon_get_theme_option('button_text_color'); ?>;" href="<?php echo carbon_get_theme_option('button_link'); ?>" target="_blank" class="massive ui button"><?php echo carbon_get_theme_option('button_name'); ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </main>
    <?php get_footer(); ?>