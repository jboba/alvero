     
              <div class="col-md-4">
                <div class="tovar-box">
                <a href="<? the_permalink(); ?>">
                  <div class="img-tovar">
                  <?php if(get_field('тип_продукции')!=="Двери"){ ?>
                  <h3><?php the_title(); ?></h3>
                  <img class="img-katalog-other" src="<?php the_field('основное_изображение');?>" alt="">
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
                  </div>
                  <?php } ?>
                  <?php if(get_field('тип_продукции')=="Двери"){ ?>
                   <img src="<?php the_field('основное_изображение');?>" alt="">
                  <div class="description-tovar">
                  <p><?php the_title(); ?></p>
                  <span class="cost-tovar"><?php the_field('цена');?>р</span>
                  </div>
                   <?php } ?>
                    </div>
                </a>
                </div>
              </div>