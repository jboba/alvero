<?php get_header(); ?>
<main id="panel">  
<?php  get_template_part("template_parts/headertop"); ?>


    <div id="main">
      <section id="view-tovar">
        <div class="container-fluid">
          <div class="container">
            <div class="row">
              <div class="filter-view">
<!--                 <div class="col-md-4">
                  <div class="link-tovar-info">
                    <a href="#">Информация</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="link-tovar-info">
                    <a href="#">Галерея</a>
                  </div>
                </div> -->
                <div class="col-md-12">
                  <div class="link-tovar-info">
                    <a class="active" href="#">Коллекция</a>
                  </div>
                </div>
                </div>             
          </div>
        </div>
      </div>
    </section>

    <section id="img-view">
      <div class="container">
<div class="row gallery-top-img">
<?php if($dynamic_featured_image->get_featured_images()!=""){ 
$fff=$dynamic_featured_image->get_featured_images();
$tmp=count($fff);
for ($i=0; $i < $tmp; $i++){ ?>
          <div class="col-md-2 col-xs-6">
            <div class="view-choose-tovar">
              <a href="<?php  echo $fff[$i]['full']?>"><img class="toggle" src="<?php  echo $fff[$i]['thumb']?>" alt=""></a>
            </div>
          </div>
<?}} ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="info-tovar-view">
              <div class="photo-tovar">
                <img src="<?php the_field('основное_изображение');?>" alt="">
              <?php if(get_field('дополнительное_изображение')!==""){ ?>
                <img src="<?php the_field('дополнительное_изображение');?>" alt="">
              <?php } ?>
              </div>
              <div class="desc-view">
                <h3><?php the_title(); ?></h3>
                <p class="deck-tov">
                  Материал двери: <?php the_field('материал'); ?>
                </p>
                
                <?php the_post();
    the_content(); ?>
                <div class="span-desk-view">
                <?php if(get_field('тип_продукции')=="Двери"){ ?>
                  <span><?php the_field('цена');?> р</span>
                  <a href="<?echo get_page_link(35)?>">где купить</a>
                <?php } ?>
                 <?php if(get_field('тип_продукции')!=="Двери"){ ?>
                  <div class="description-tovar">
                      <ul class="desk_tovar">
                      <?php if(get_field('сорт_селект')!==""){ ?>
                        <li>Сорт Селект</li>
                        <?php } ?>
                        <?php if(get_field('сорт_натур')!==""){ ?>
                        <li>Сорт Натур</li>
                        <?php } ?>
                        <?php if(get_field('сорт_рустик')!==""){ ?>
                        <li>Сорт Рустик</li>
                        <?php } ?>
                      </ul>
                      <ul class="desk_tovar_right">
                      <?php if(get_field('сорт_селект')!==""){ ?>
                        <li><?php the_field('сорт_селект'); ?>р/м2</li>
                      <?php } ?>
                      <?php if(get_field('сорт_натур')!==""){ ?>
                        <li><?php the_field('сорт_натур'); ?>р/м2</li>
                      <?php } ?>
                       <?php if(get_field('сорт_рустик')!==""){ ?>
                        <li><?php the_field('сорт_рустик'); ?>р/м2</li>
                      <?php } ?>
                      </ul>
                      <a class="pricef" href="<?echo get_page_link(35)?>">где купить</a>
                  </div>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xs-12">
          <div class="view-material">
              <div class="part-view-material">
              <?if (in_array("Иней", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/inei_dub.jpg" alt=""><p>Иней</p></div><?}?>
              <?if (in_array("Гранат черный", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/granat-black.jpg" alt=""><p>Гранат черный</p></div><?}?>
              <?if (in_array("Оливковый", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/olivkovyy.jpg" alt=""><p>Оливковый</p></div><?}?>
              <?if (in_array("Беленый дуб", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/belenyy_dub1.jpg" alt=""><p>Беленый дуб</p></div><?}?>
              <?if (in_array("Венге", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/venge1.jpg" alt=""><p>Венге</p></div><?}?>
              <?if (in_array("Венге серебро", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/venge-serebro1.jpg" alt=""><p>Венге серебро</p></div><?}?>
              <?if (in_array("Винтаж", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/vintazh.jpg" alt=""><p>Винтаж</p></div><?}?>
              <?if (in_array("Орех", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/oreh1.jpg" alt=""><p>Орех</p></div><?}?>
              <?if (in_array("Орех золотой", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/oreh_zolotoy1.jpg" alt=""><p>Орех золотой</p></div><?}?>
              <?if (in_array("Орех чёрный", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/oreh_chernyy1.jpg" alt=""><p>Орех чёрный</p></div><?}?>
              <?if (in_array("Натуральный дуб", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/naturalnyy_dub_patina1.jpg" alt=""><p>Натуральный дуб</p></div><?}?>
              <?if (in_array("Сахара", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/sahara.jpg" alt=""><p>Сахара</p></div><?}?>
              <?if (in_array("Седая ночь", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/sedaya_noch1.jpg" alt=""><p>Седая ночь</p></div><?}?>
              <?if (in_array("Янтарь", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/yantar1.jpg" alt=""><p>Янтарь</p></div><?}?>
              <?if (in_array("Дуб беленый браш с золотом", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/dub_belenyy_brash_s_zolotom1.jpg" alt=""><p>Дуб беленый браш с золотом</p></div><?}?>
              <?if (in_array("Дуб беленый браш с серебром", get_field('Цвет'))) {?><div class="view-part"><img src="<? bloginfo( 'template_url' ); ?>/img/view/part/dub_belenyy_brash_s_serebrom1.jpg" alt=""><p>Дуб беленый браш с серебром</p></div><?}?>
              </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-md-12">
            <div class="table-view">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/view/table.png" alt="">
            </div>
            <p class="table-desk">Нестандартными считаются размеры высотой 2100, 2200, 2300 мм.</p>
          </div>
        </div>
        
      </div>
    </section>
  </div>
<?php get_footer(); ?>