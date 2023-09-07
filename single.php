<?php get_header(); ?>

<div>
  <div class="image-placeholder pusher">
    <?php $thumbnailUrl = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/blog-post-banner.jpg'; ?>
    <img class="ui fluid image" src="<?php echo $thumbnailUrl; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
    <?php

    $wordCount = get_wordcount(get_the_ID());
    $reading_time = readingTime($wordCount, 183);

    ?>
    <div class="post-title">
      <h1><?php the_title(); ?></h1>
      <p><?php echo get_the_date(); ?></p>
      <p>Reading Time : <span><?php echo $reading_time; ?> minutes</span></p>
    </div>
  </div>

  <div style="padding: 2rem 0; background-color:<?php echo carbon_get_theme_option('single_post_color'); ?>;">
    <main class="ui container">
      <div class="single-post-container">
        <div class="post-details">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('template-parts/content', 'article');
            }
          }
          ?>
        </div>
        <?php if (carbon_get_the_post_meta('show_related_content')) : ?>
          <div class="related-content">
            <h5>Related Content</h5>
            <?php
            $related_content_id =  carbon_get_the_post_meta('show_related_content_select');
            $content_post = get_post($related_content_id);
            $content = $content_post->post_title;
            $content_excerpt = $content_post->post_excerpt;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            ?>
            <article>
              <div>
                <img style="width: 200px; height:300px;" src="<?php echo get_the_post_thumbnail_url($related_content_id); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($related_content_id), '_wp_attachment_image_alt', true); ?>" class="ui big image">
                <h3><?php

                    echo $content;
                    ?>
                </h3>
                <p class="related-post-excerpt"><?php echo $content_excerpt; ?></p>
                <a href="<?php echo get_post_permalink($related_content_id); ?>">Read More</a>
              </div>
            </article>
          </div>
        <?php endif; ?>
      </div>
    </main>
  </div>

  <?php get_footer(); ?>