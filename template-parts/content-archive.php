<article class="card">
    <div class="image">
    <?php
      $urlSource = (get_the_post_thumbnail_url()) ? 
       get_the_post_thumbnail_url() :  get_template_directory_uri() . '/assets/images/blog-post-banner.jpg';
    ?>
        <img src="<?php echo $urlSource; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
    </div>
    <div class="content">
        <div class="header"><?php the_title(); ?></div>
        <div class="description">
            <?php the_excerpt(); ?>
        </div>
        <div class="read-more-button">
            <a href="<?php the_permalink(); ?>">Read More ></a>
        </div>
    </div>
    <div class="extra content">
        <span class="right floated"> <?php echo get_the_date(); ?> </span>

    </div>
</article>