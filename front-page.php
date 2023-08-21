<?php
get_header();
?>
<div>
      <div class="pusher">
        <main class="ui container">
          <div class="page-title"><h1>THIS IS THE PAGE TITLE</h1></div>
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
              <article class="card">
                <div class="image">
                  <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp6jiraKAY4PQ3yCgPhvO-AZM6hbxNtVB68g&usqp=CAU"
                  />
                </div>
                <div class="content">
                  <div class="header">Matt Giampietro</div>
                  <div class="description">
                    Matthew is an interior designer living in New York.
                  </div>
                  <div class="read-more-button">
                    <a href="">Read More ></a>
                  </div>
                </div>
                <div class="extra content">
                  <span class="right floated"> 17/8/2023 </span>
    
                </div>
              </article>
              <article class="card">
                <div class="image">
                  <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcmV2nrm2B-ta55cVsO_l4Kqe6LBOIVS3z2A&usqp=CAU"
                  />
                </div>
                <div class="content">
                  <div class="header">Molly</div>
                  <div class="description">
                    Molly is a personal assistant living in Paris.
                  </div>
                  <div class="read-more-button">
                    <a href="">Read More ></a>
                  </div>
                </div>
                <div class="extra content">
                  <span class="right floated"> 17/8/2023 </span>
                </div>
              </article>
              <article class="card">
                <div class="image">
                  <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcmV2nrm2B-ta55cVsO_l4Kqe6LBOIVS3z2A&usqp=CAU"
                  />
                </div>
                <div class="content">
                  <div class="header">Elyse</div>
                  <div class="description">
                    Elyse is a copywriter working in New York.
                  </div>
                  <div class="read-more-button">
                    <a href="">Read More ></a>
                  </div>
                </div>
                <div class="extra content">
                  <span class="right floated"> 17/8/2023 </span>
                </div>
              </article>
              <article class="card">
                <div class="image">
                  <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcmV2nrm2B-ta55cVsO_l4Kqe6LBOIVS3z2A&usqp=CAU"
                  />
                </div>
                <div class="content">
                  <div class="header">Elyse</div>
                  <div class="description">
                    Elyse is a copywriter working in New York.
                  </div>
                  <div class="read-more-button">
                    <a href="">Read More ></a>
                  </div>
                </div>
                <div class="extra content">
                  <span class="right floated"> 17/8/2023 </span>
                </div>
              </article>
              <article class="card">
                <div class="image">
                  <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcmV2nrm2B-ta55cVsO_l4Kqe6LBOIVS3z2A&usqp=CAU"
                  />
                </div>
                <div class="content">
                  <div class="header">Elyse</div>
                  <div class="description">
                    Elyse is a copywriter working in New York.
                  </div>
                  <div class="read-more-button">
                    <a href="">Read More ></a>
                  </div>
                </div>
                <div class="extra content">
                  <span class="right floated"> 17/8/2023 </span>
                </div>
              </article>
              <article class="card">
                <div class="image">
                  <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcmV2nrm2B-ta55cVsO_l4Kqe6LBOIVS3z2A&usqp=CAU"
                  />
                </div>
                <div class="content">
                  <div class="header">Elyse</div>
                  <div class="description">
                    Elyse is a copywriter working in New York.
                  </div>
                  <div class="read-more-button">
                    <a href="">Read More ></a>
                  </div>
                </div>
                <div class="extra content">
                  <span class="right floated"> 17/8/2023 </span>
                </div>
              </article>
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