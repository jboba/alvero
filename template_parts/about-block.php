    <section id="about">
      <div class="container-fluid">
        <div class="about-company">
          <div class="container">
          <div class="row">
            <h2>О компании</h2>
            <p class="about-text">Коллекция межкомнатных дверей  включает в себя  <span>19</span>  моделей и  <span>24</span> варианта отделки</p>
            <div class="col-md-6">
              <div class="about-box">
                <img class="about-img" src="<?php bloginfo( 'template_url' ); ?>/img/about-icon-1.png" alt="">
                <p class="about-icon-text">При производстве используются <br> проверенные временем столярные <br>традиции в сочетании с современными <br> технологиями и оборудованием.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-box">
                <img class="about-img" src="<?php bloginfo( 'template_url' ); ?>/img/about-icon-2.png" alt="">
                <p class="about-icon-text-2">При производстве используются <br> проверенные временем столярные <br>традиции в сочетании с современными <br> технологиями и оборудованием.</p>
              </div>
            </div>
          </div>
          <?php 
          if(is_home()){?>
          <a class="read-more-link" href="<?echo get_page_link(31)?>">подробнее <img src="<?php bloginfo( 'template_url' ); ?>/img/arrow-about.png" alt=""></a>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>