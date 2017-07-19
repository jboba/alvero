    <section id="news">
      <div class="container-fluid">
        <div class="news-box">
          <div class="container">
            <h2><a class="link-novosti" href="novosti.html">Новости</a></h2>
            <div class="news">
              <div class="row">
              <!--выводим только query_posts("cat=1"); категорию новости-->
              <?php if ( have_posts() ) :
                     query_posts("cat=1"); 
                    while ( have_posts() ) : the_post(); 
                 get_template_part('template_parts/content');
                    endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <!-- no posts found -->
              <?php endif; wp_reset_query(); ?>        
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>