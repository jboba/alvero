<?php
/*
Template Name: catalog
*/
?>
<?php get_header(); ?>
<main id="panel">  
<?php  get_template_part("template_parts/headertop"); ?>
      <section id="katalog">
        <div class="container-fluid main-box-filter">
          <div class="container">
            <div class="filter-box">
              <ul>
                <li class="filter">
                <form id="filter" method="GET">
                  <select class="filter-option">
                    <option value>Тип продукции</option>
                    <option value="filter 1"></option>
                    <option value="filter 2">Фильтр 2</option>
                    <option value="filter 3">Фильтр 3</option>
                  </select>
                </form>
                </li>
                <li class="filter">
                  <select class="filter-option">
                    <option value>Материал</option>
                    <option value="filter 1">Фильтр 1</option>
                    <option value="filter 2">Фильтр 2</option>
                    <option value="filter 3">Фильтр 3</option>
                  </select>
                </li>
                <li class="filter">
                  <select class="filter-option">
                    <option value>Цена</option>
                    <option value="filter 1">Фильтр 1</option>
                    <option value="filter 2">Фильтр 2</option>
                    <option value="filter 3">Фильтр 3</option>
                  </select>
                </li>
              </ul>
            </div>
          </div>
       </div>
              <div class="container">
            <div class="row">
<!-- вывод каталога -->
            <div class="katalog-box">
            <?php 
echo $_GET["filter_1"];
$filter1="Двери";
if($filter1=="Двери"){
              $args = array(
  // 'numberposts' => -1,
                'post_type'   => 'dveri',
                'meta_key'    => 'тип_продукции',
                'meta_value'  => 'Двери'
              );
}
if($filter1=="Инженерная доска"){
              $args = array(
  // 'numberposts' => -1,
                'post_type'   => 'dveri',
                'meta_key'    => 'тип_продукции',
                'meta_value'  => 'Инженерная доска'
              );
}
if($filter1=="Массивная доска"){
              $args = array(
  // 'numberposts' => -1,
                'post_type'   => 'dveri',
                'meta_key'    => 'тип_продукции',
                'meta_value'  => 'Массивная доска'
              );
}
// query
$the_query = new WP_Query( $args );
             ?>
              <?php if ( $the_query->have_posts() ) :
              // $posts = get_posts(array(
              //     'post_type'   => 'dveri',
              //     'meta_key'    => 'тип_продукции',
              //     'meta_value'  => 'Инженерная доска'
              //   ));
                     // query_posts("post_type=dveri"); 
                    while ($the_query->have_posts() ) :$the_query->the_post(); 
                 get_template_part('template_parts/catalog');
                    endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <!-- no posts found -->
              <?php endif; wp_reset_query(); ?>      
            <!-- Другие товары -->
            </div>
            </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p class="desc_down_left">
                  Фабрика «Лидер» предлагает двери Альверо из массива дуба и бука: элегантные, стильные современные модели или изящная классика, простота и минимализм или элитные двери с шикарной отделкой и любыми аксессуарами на Ваш вкус. Корень этого благозвучного имени - «Vero» - настоящий, истинный, неподдельный.
                </p>
              </div>
              <div class="col-md-6">
                <p class="desc_down_right">
                  Двери от «Лидер», изготовленные из массива, по настоящему элитны, уникальная текстура и цвет,  долговечность и износоустойчивость, вот главные характеристики дверей «Alvero», выпущенных заводом Лидер.
                </p>
              </div>
            </div>
          </div>
                  </section>
<?php get_footer(); ?>
