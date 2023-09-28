<?php get_header(); ?>



<header class="image-placeholder">
  <?php $thumbnailUrl = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/blog-post-banner.jpeg'; ?>
  <img class="image-placeholder-item" src="<?php echo $thumbnailUrl; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
  <?php

  $wordCount = get_wordcount(get_the_ID());
  $reading_time = readingTime($wordCount, 183);

  ?>
  <section class="post-title">
    <h1><?php the_title(); ?></h1>
    <p><?php echo get_the_date(); ?></p>
    <p>Reading Time : <span><?php echo $reading_time; ?> minutes</span></p>
  </section>
</header>

<div class="me-5">
  <div class="container pt-5 pb-5 text-end me-5">
    <a href="<?php echo get_home_url(); ?>" class="text-center fs-4 text-primary me-5"><i class="bi bi-arrow-left"></i> Back</a>
  </div>
</div>

<div style="padding: 2rem 0; background-color:<?php echo carbon_get_theme_option('single_post_color'); ?>;">
  <main class="container">
    <div class="single-post-container row">
      <div class="post-details col-8 col-xs-12">
        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'article');
          }
        }
        ?>
      </div>

      <div class="related-content col col-xs-12 me-5">
        <?php if (carbon_get_the_post_meta('show_related_content')) : ?>
          <h5>Related Content</h5>
          <?php
          $related_content_id = carbon_get_the_post_meta('show_related_content_select');
          foreach ($related_content_id as $post) :
            $content_post = get_post($post);
            $content = $content_post->post_title;
            $content_excerpt = $content_post->post_excerpt;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
          ?>

            <article class="mb-5 mt-4">
              <a href="<?php echo get_post_permalink($post); ?>">
                <div>
                  <img class="img-thumbnail" src="<?php echo get_the_post_thumbnail_url($post); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post), '_wp_attachment_image_alt', true); ?>">
                  <h3><?php

                      echo $content;
                      ?>
                  </h3>
                  <p class="related-post-excerpt"><?php echo $content_excerpt; ?></p>
                  <a class="border-bottom" href="<?php echo get_post_permalink($post); ?>">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </a>
            </article>

          <?php endforeach; ?>
      </div>
    <?php endif; ?>
    </div>
  </main>
</div>

<?php get_footer(); ?>