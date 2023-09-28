<?php

$featured_post = carbon_get_theme_option('featured_post');
foreach (array_slice($featured_post, 1) as $link) :

?>

    <article class="carousel-item">
        <div class="row">
            <div class="col ">
                <div class="featured-post-image text-center d-flex justify-content-center align-items-center">
                    <?php $featured_post_img_id = attachment_url_to_postid($link['photo']); ?>
                    <img class="" src="<?php echo $link['photo']; ?>" alt="<?php echo get_post_meta($featured_post_img_id, '_wp_attachment_image_alt', true); ?>" />
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
                        <h3 class="fs-3 article-title"><?php echo $link['title'] ?></h3>
                        <p class="fs-6 article-excerpt"><?php echo $link['excerpt'] ?></p>
                        <?php $btn_color = carbon_get_theme_option('featured_post_button_color'); ?>
                        <a class="fs-6 read-more-button" style="border-color:<?php echo $btn_color; ?>;color: <?php echo $btn_color ?>;" href="<?php echo $link['link'] ?>">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- <article class="carousel-item">
        <div class="row">
            <div class="col">
                <div class="featured-post-image">
                    <img class="img-fluid" src="<?php echo $link['photo']; ?>" alt="" />
                </div>
            </div>
            <div class="col">
                <div class="featured-post-header d-flex justify-content-between align-items-center" style="background-color: rgb(236, 169, 144)">
                    <div class="px-4">
                        <h2>Featured Post</h2>
                    </div>
                    <div class="slider-icon px-4">
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <i class="bi bi-caret-left-fill"></i>
                        </button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <i class="bi bi-caret-right-fill"></i>
                        </button>
                    </div>
                </div>
                <div class="article-detail mt-4">
                    <h3 class="article-title"><?php echo $link['title'] ?></h3>
                    <p class="article-excerpt"><?php echo $link['excerpt'] ?></p>
                    <a class="btn btn-outline-primary" href="<?php echo $link['link'] ?>">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </article> -->

<?php endforeach; ?>