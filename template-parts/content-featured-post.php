<?php

$featured_post = carbon_get_theme_option('featured_post');
foreach(array_slice($featured_post,1) as $link):

?>

<div class="carousel-item">
<div class="ui two column doubling stackable grid container slide active">
    <div class="column">
        <img class="ui medium image" src="<?php echo $link['photo']; ?>" />
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
            <h3 class="article-title"><?php echo $link['title'] ?></h3>
            <p class="article-excerpt"><?php echo $link['excerpt'] ?></p>
            <a href="<?php echo $link['link'] ?>">Read More</a>
        </div>
    </div>
</div>
</div>

<?php endforeach; ?>

