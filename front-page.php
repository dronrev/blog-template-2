<?php get_header(); ?>
<?php
$bg_page_color = '';
if (carbon_get_theme_option('page_bg_color')) :
  $bg_page_color = carbon_get_theme_option('page_bg_color');
?>
  <div class="" style="background-color: <?php echo $bg_page_color; ?>;">
    <?php endif; ?>
    <main class="container px-5">
      <div class="page-title">
        <h1 class="fs-2"><?php echo get_bloginfo(); ?></h1>
      </div>
      <?php if (carbon_get_theme_option('featured_post_active')) : ?>
        <div class="featured-post-container shadow p-2" style="background-color: white;">
          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?php if (carbon_get_theme_option('featured_post')) : ?>
                <article class="carousel-item active">
                  <div class="row">
                    <div class="col ">
                      <div class="featured-post-image text-center d-flex justify-content-center align-items-center">
                        <?php $featured_post_img_id = attachment_url_to_postid(carbon_get_theme_option('featured_post')[0]['photo']); ?>
                        <img class="" src="<?php echo carbon_get_theme_option('featured_post')[0]['photo'] ?>" alt="<?php echo get_post_meta($featured_post_img_id, '_wp_attachment_image_alt', true); ?>" />
                      </div>
                    </div>
                    <div class="col ">
                      <div class="featured-post-right-side mx-2">
                        <div class="featured-post-header d-flex justify-content-between align-items-center" style="background-color: <?php echo carbon_get_theme_option('featured_post_header_color'); ?>">
                          <div class="d-flex justify-content-center align-items-center">
                            <h2 class="fs-3 m-auto">Featured Post</h2>
                          </div>
                          <div class="slider-icon px-2">
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                              <i class="bi bi-caret-left-fill"></i>
                            </button>
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                              <i class="bi bi-caret-right-fill"></i>
                            </button>
                          </div>
                        </div>
                        <div class="article-detail mt-3">
                          <h3 class="fs-3 article-title"><?php echo carbon_get_theme_option('featured_post')[0]['title'] ?></h3>
                          <p class="fs-6 article-excerpt"><?php echo carbon_get_theme_option('featured_post')[0]['excerpt'] ?></p>
                          <?php $btn_color = carbon_get_theme_option('featured_post_button_color'); ?>
                          <a class="fs-6 read-more-button" style="border-color:<?php echo $btn_color; ?>;color: <?php echo $btn_color ?>;" href="<?php echo carbon_get_theme_option('featured_post')[0]['link'] ?>">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              <?php endif; ?>

              <?php get_template_part('template-parts/content', 'featured-post'); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <!-- latest articles section -->
      <h2 class="mt-5 fs-3">Latest Articles</h2>
      <div class="latest-articles">
        <div class="">
          <div class="article-content-box row gap-4">
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
          <a href="" style="border-color<?php echo carbon_get_theme_option('load_more_button_color') ?>;color:<?php echo carbon_get_theme_option('load_more_button_text_color') ?>" class="p-2 load-more-btn">Load More</a>
        </div>
      </div>


      <?php if (carbon_get_theme_option('banner_post_active')) : ?>
        <div class="unique-selling-point">
          <?php
          $check = carbon_get_theme_option('crb_radio_segment_background');
          ?>
          <div class="d-flex justify-content-center">
            <?php if ($check == '2') : ?>
              <div class="card shadow unique-selling-point-container" style="width:70rem; height:30vh;background:white;">
                <img src="<?php echo carbon_get_theme_option('crb_segment_image_background'); ?>" alt="">
              <?php endif; ?>
              <?php if ($check == '1') : ?>
                <div class="card unique-selling-point-container" style=" width:70rem; height: 30vh;background:<?php echo carbon_get_theme_option('crb_box_background');  ?>;">
                <?php endif; ?>

                <div class="card-body-outer">
                  <div class="card-body d-flex justify-content-between align-items-center p-5">
                    <div class="mx-5">
                      <h4 class="unique-selling-point-title"><?php echo carbon_get_theme_option('unique_selling_point_title'); ?></h4>
                      <p><?php echo carbon_get_theme_option('unique_selling_point_tagline'); ?></p>
                    </div>
                    <div class="mx-5">
                      <a class="btn btn-lg banner-button" style="background-color: <?php echo carbon_get_theme_option('button_background_color') ?>;color: <?php echo carbon_get_theme_option('button_text_color'); ?>;" href="<?php echo carbon_get_theme_option('button_link'); ?>" target="_blank"><?php echo carbon_get_theme_option('button_name'); ?></a>
                    </div>
                  </div>
                </div>
                </div>
              </div>
          </div>
        <?php endif; ?>
    </main>
    </div>
    <?php get_footer(); ?>