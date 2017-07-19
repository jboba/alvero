<article id="post-<?php the_ID(); ?>"  <?php post_class("col-md-12"); ?>>
<div class="podrobnee_news">
    <div class="date_box">
        <span><?php echo get_the_date('j') ?></span>
        <p class="month">
            <?php echo get_the_date('F') ?>
        </p>
    </div>
    <div class="full_text_news">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>
    <div class="full_news_img">
                  <img src="<?php bloginfo( 'template_url' ); ?>/img/full_news_img.png" alt="">
                </div>
    </div>
</article>
