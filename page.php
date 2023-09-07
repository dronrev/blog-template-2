<?php
get_header();
?>
<div>
  <div class="pusher">
    <main class="ui container">
      <div class="page-title">
        <h1><?php echo get_the_title(); ?></h1>
      </div>
      <div class="ui container">
        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'article');
          }
        }
        ?>
      </div>
    </main>

    <?php get_footer(); ?>