<?php
get_header();
?>
<div>
      <div class="pusher">
        <main class="ui container">
          <div class="page-title"><h1>THIS IS THE PAGE TITLE</h1></div>
            <div class="ui container">
              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item">
                  </div>
                </div>
              </div>
            </div>
          <!-- latest articles section -->
          <h2>Latest Articles</h2>
          <div class="latest-articles d-grid">
            <div class="ui three cards doubling stackable">
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