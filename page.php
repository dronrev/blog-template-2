<?php
get_header();
?>
<main class="container vh-100">
  <div class="page-title">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <div class="container">
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