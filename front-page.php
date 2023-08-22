<?php get_header(); ?>
    <div>
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
                          class="ui large image"
                          src="data:image/jpeg;base64,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"
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
                          <h3 class="article-title">THIS IS THE POST TITLE 1</h3>
                          <p class="article-excerpt">Article Excerpt</p>
                          <a href="">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="ui two column doubling stackable grid container slide active">
                      <div class="column">
                        <img
                          class="ui large image"
                          src="data:image/jpeg;base64,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"
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
                          <h3 class="article-title">THIS IS THE POST TITLE 2</h3>
                          <p class="article-excerpt">Article Excerpt</p>
                          <a href="">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="ui two column doubling stackable grid container slide active">
                      <div class="column">
                        <img
                          class="ui large image"
                          src="data:image/jpeg;base64,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"
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
                          <h3 class="article-title">THIS IS THE POST TITLE 3</h3>
                          <p class="article-excerpt">Article Excerpt</p>
                          <a href="">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- latest articles section -->
          <h2>Latest Articles</h2>
          <div class="latest-articles d-grid">
            <div class="ui three cards doubling stackable">
            <?php
    $var_load_posts = new WP_Query([
      'post' => 'posts',
      'posts_per_page' => 6,
      'orderby' => 'date',
      'order' => 'DATE',
      'paged' => 1
    ]);

    ?>
    <?php
    if ($var_load_posts->have_posts()) :
      while ($var_load_posts->have_posts()) :
        $var_load_posts->the_post();
        get_template_part('template-parts/content', 'archive');
      
      endwhile;
    wp_reset_postdata();
    endif;
    ?>
            </div>
          </div>
          <div class="load-more">
            <div class="d-flex justify-content-center">
              <button class="ui huge fluid button">Load More</button>
            </div>
          </div>
    
          <div class="unique-selling-point">
            <div class="ui placeholder segment">
              <div
                class="d-flex align-items-center justify-content-around unique-selling-point-outer"
              >
                <div>
                  <div class="ui icon header">
                    <h4 class="unique-selling-point-title">Unique Selling Point 1</h4>
                    <p>This is the tagline</p>
                  </div>
                </div>
                <div>
                  <div class="massive ui button">Act Now!</div>
                </div>
              </div>
            </div>
          </div>
        </main>
<?php get_footer(); ?>
