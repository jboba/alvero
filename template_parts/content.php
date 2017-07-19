<article id="post-<?php the_ID(); ?>"  <?php post_class("col-md-6"); ?>>
    <div class="date">
        <span><?php echo get_the_date('j') ?></span>
        <p class="month">
            <?php echo get_the_date('F') ?>
        </p>
    </div>
    <div class="news-text">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        
        <a class="read-more-link" href="<? the_permalink(); ?>">подробнее <img src="<?php bloginfo( 'template_url' ); ?>/img/arrow-about.png" alt=""></a>
    </div>
</article>