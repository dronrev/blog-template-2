<article class="card shadow-sm p-2 col-4 article-card" style="background: <?php echo carbon_get_theme_option('card_bg_color'); ?> ;width: 25em;">
  <?php
  $urlSource = (get_the_post_thumbnail_url()) ?
    get_the_post_thumbnail_url() :  get_template_directory_uri() . '/assets/images/blog-post-banner.jpeg';
  ?>
  <div class="card-inner-container">
    <?php if(carbon_get_theme_option('card_text_color')): ?>
    <a class="" href="<?php echo the_permalink(); ?>" style="color: <?php echo carbon_get_theme_option('card_text_color'); ?>;">
    <?php else: ?>
      <a class="" href="<?php echo the_permalink(); ?>" style="color: rgb(83,83,83);">
      <?php endif; ?>
      <img src="<?php echo $urlSource; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" class="card-img-top">
      <div class="card-body">
        <h3 class="card-title fs-3"><?php the_title(); ?></h3>
        <p class="fs-6 fw-light"><?php echo get_the_date(); ?></p>
        <div class="card-desc">
          <p class="fs-5"><?php the_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="read-more-button">Read More ></a>
      </div>
    </a>
  </div>
</article>