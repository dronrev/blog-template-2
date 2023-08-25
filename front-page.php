<?php get_header(); ?>
    <div style="background: <?php echo carbon_get_theme_option('page_bg_color'); ?>;">
      <div class="pusher">
        <main class="ui container">
          <div class="page-title"><h1>Pawn To Code</h1></div>
            <div class="ui container">
              <!-- <button class="btn btn-danger">Woi</button> -->
              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <div class="ui two column doubling stackable grid container slide active">
                      <div class="column">
                        <img
                          class="ui medium image"
                          src="<?php echo carbon_get_theme_option('featured_post')[0]['photo'] ?>"
                        />
                      </div>
                      <div class="column">
                        <div
                          class="featured-post-header d-flex justify-content-between align-items-center"
                        >
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
                  <?php get_template_part('template-parts/content','featured-post'); ?>
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
              <button class="ui huge button">Load More</button>
            </div>
          </div>
    
          <div class="unique-selling-point">
            <div class="ui placeholder segment">
              <div
                class="d-flex align-items-center justify-content-around unique-selling-point-outer"
              >
                <div>
                  <div class="ui icon header">
                    <h4 class="unique-selling-point-title"><?php echo carbon_get_theme_option('unique_selling_point_title'); ?></h4>
                    <p><?php echo carbon_get_theme_option('unique_selling_point_tagline'); ?></p>
                  </div>
                </div>
                <div>
                  <a href="<?php echo carbon_get_theme_option('button_link'); ?>" class="massive ui button"><?php echo carbon_get_theme_option('button_name'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </main>
<?php get_footer(); ?>
