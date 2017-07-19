<?php get_header(); ?>
<main id="panel">  
<?php  get_template_part("template_parts/headertop"); ?>


    <section id="full_news">
      <div class="container">
        <div class="row">
          <div class="container">
            <div class="news">
              <div class="row">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                 get_template_part('template_parts/content', 'single');
               endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <!-- no posts found -->
              <?php endif; ?>        
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>
<footer id="footer">
  <div class="container-fluid footer-katalog-box">
    <div class="footer-katalog">
      <img src="<?php bloginfo( 'template_url' ); ?>/img/bg-katalog.png" alt="">
    </div>
  </div>
</footer>
<?php get_footer(); ?>

