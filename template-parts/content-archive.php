<article class="card">
    <div class="ui large image">
    <?php
      $urlSource = (get_the_post_thumbnail_url()) ? 
       get_the_post_thumbnail_url() :  get_template_directory_uri() . '/assets/images/blog-post-banner.jpeg';
    ?>
        <img src="<?php echo $urlSource; ?>" />

    </div>
    <div class="content">
        <div class="header"><?php the_title(); ?></div>
        <div class="description">
            <div class="desc">
            <?php the_excerpt(); ?>
            </div>
        </div>
        <div class="read-more-button">
            <a href="<?php the_permalink(); ?>">Read More ></a>
        </div>
    </div>
    <div class="extra content">
        <span class="right floated"> <?php echo get_the_date(); ?> </span>
    </div>
</article>