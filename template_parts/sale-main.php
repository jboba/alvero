<section id="sale">
  <div class="container">
    <h2>Акции</h2>
    <div class="row">
     <!--  <div id="first-box" class="sale-box">
        <div class="col-md-5 col-xs-6 col-sm-6">
          <p>С 1 декабря 2016 по 10 января 2017 года <br> фабрика «Лидер» проводит акцию. В эти числа<br> вы можете приобрести новинки 2016 года по <br>приятной цене со скидкой в 20%!</p>
          <a class="read-more-link" href="#">подробнее <img src="<?php// bloginfo( 'template_url' ); ?>/img/arrow-about.png" alt=""></a>
        </div>
        <div class="col-md-7 col-xs-6 col-sm-6">
          <h3>Акция «Новинки <br> 2016 со скидкой!»</h3>
        </div>
      </div> -->
<!--       <div id="second-box" class="sale-box">
        <div class="col-md-7 col-xs-6 col-sm-6">
          <h3 class="head-sale">Акция «Готовое <br> решение Вашего <br>интерьера»</h3>
        </div>
        <div class="col-md-5 col-xs-6 col-sm-6">
          <p>Остановите свой выбор на продукции <br>«Альверо» : двери, пол, плинтуса, - и получите<br> скидку!</p>
          <a class="read-more-link" href="#">подробнее <img src="<?php //bloginfo( 'template_url' ); ?>/img/arrow-about.png" alt=""></a>
        </div>  
      </div> -->
                    <!--выводим только query_posts("cat=1"); категорию новости-->
              <?php if ( have_posts() ) :
                     query_posts("cat=1"); 
                    while ( have_posts() ) : the_post(); ?>
                      <article id="" class="row third-box sale-box">
        <div id="post-<?php the_ID(); ?> "  <?php post_class("col-md-6 col-xs-12 col-sm-6"); ?>>
          <h3><?php the_title(); ?></h3>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6">
          <?php the_excerpt(); ?>
          <a class="read-more-link" href="<? the_permalink(); ?>">подробнее <img src="<?php bloginfo( 'template_url' ); ?>/img/arrow-about.png" alt=""></a>
        </div>
        </article>
                  <?  endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <!-- no posts found -->
              <?php endif; wp_reset_query(); ?>   

    </div>
  </div>
</section>