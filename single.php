<?php get_header(); ?>

<div>
  <div class="image-placeholder pusher">
    <img class="ui fluid image" src="https://img.allfootballapp.com/www/M00/40/57/720x-/-/-/CgAGVmRPNKuAF4M7AAM9FnkjQKA189.jpg.webp">
    <?php 

    $wordCount = get_wordcount(get_the_ID()); 
    $reading_time = readingTime($wordCount,183);
    
    ?>
    <div class="post-title">
      <h1><?php the_title(); ?></h1>
      <p><?php echo get_the_date(); ?></p>
      <p>Reading Time : <span><?php echo $reading_time; ?> minutes</span></p>
    </div>
  </div>

  <div style="padding: 2rem 0;">
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
        <div class="related-content">
          <h5>Related Content</h5>
          <article>
            <div>
              <img src="https://img.allfootballapp.com/www/M00/40/57/720x-/-/-/CgAGVmRPNKuAF4M7AAM9FnkjQKA189.jpg.webp" alt="" class="ui big image">
              <h3>This is the post title</h3>
              <p class="related-post-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, excepturi ipsum. Rerum natus consequatur debitis. Culpa ullam deserunt soluta, dolor sapiente impedit cum voluptatem ratione praesentium obcaecati porro illum repellendus.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="share-this-post">
        <span>
          Share this post
        </span>
        <div class="share-post-section d-flex">
          <div><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank" class="share-post-item"><i class="facebook icon"></i></a></div>
          <div><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>" target="_blank" class="share-post-item"><i class="linkedin icon"></i></a></div>
          <div><a href="" target="_blank" class="share-post-item"><i class="twitter icon"></i></a></div>
          <div><a href="" target="_blank" class="share-post-item"><i class="whatsapp icon"></i></a></div>
        </div>
      </div>
      <div class="related-post">
        <h4>Related Post</h4>
        <div>
          <h3><a href="">Article 1</a></h3>
          <h3><a href="">Article 2</a></h3>
          <h3><a href="">Article 3</a></h3>
        </div>
      </div>
    </main>
  </div>

  <?php get_footer(); ?>