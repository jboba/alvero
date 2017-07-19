<?php
/*
Template Name: news-page
*/
?>
<?php get_header(); ?>
<main id="panel">  
<?php  get_template_part("template_parts/headertop"); ?>
      <section id="news_page">
        <div class="container">
          <div class="row">
				<!--выводим только query_posts("cat=1"); категорию новости-->
              <?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
	'posts_per_page' => 2, // количество постов на странице
	// 'post_type'       => 'artwork', // тип постов
	'paged'           => $current_page // текущая страница
);
query_posts($params);
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
if ( have_posts() ) :
                     // query_posts("cat=1"); 
                    while ( have_posts() ) : the_post(); 
                 get_template_part('template_parts/news-page-tml');
                    endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <!-- no posts found -->
              <?php endif; wp_pagenavi(); ?>      
          </div>
          <div class="pagination">
          <?php   ?>
          </div>
        </div>
      </section>
<?php get_footer(); ?>
