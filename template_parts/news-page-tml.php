<article  id="post-<?php the_ID(); ?>"  <?php post_class("row news-container"); ?>>
    <div class="first-date">
        <span><?php echo get_the_date('j') ?></span>
        <p><?php echo get_the_date('F') ?></p>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="news-text-box">
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
             <a class="read-more-link read-news" href="<? the_permalink(); ?>">подробнее <img src="<?php bloginfo( 'template_url' ); ?>/img/arrow-about.png" alt=""></a>
        </div>
    </div>
    <div class="col-md-4 col-xs-12">
        <div class="img-news">
         <?php if(get_the_post_thumbnail()){
                echo get_the_post_thumbnail();}
                else { ?>
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/news/1.png" alt="">
                 <?   } ?>
            
        </div>
    </div>
</article>