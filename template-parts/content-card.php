<article class="card_ext col-lg-4 align-items-center" style="background: <?php echo carbon_get_theme_option('card_bg_color'); ?> ;">
<?php
      $urlSource = (get_the_post_thumbnail_url()) ? 
       get_the_post_thumbnail_url() :  get_template_directory_uri() . '/assets/images/blog-post-banner.jpeg';
    ?>
      <img src="<?php echo $urlSource; ?>" alt="card__image" class="card__image">    

    <div class="card__body" style="color: <?php echo carbon_get_theme_option('card_text_color'); ?>">
      <h3><?php the_title(); ?></h3>
      <div class="desc">
      <?php the_excerpt(); ?>
      </div>
      <div class="read-more-button">
            <a href="<?php the_permalink(); ?>">Read More ></a>
        </div>
    </div>
    <div class="card__footer">
    <?php echo get_the_date(); ?>
    </div>
</article>