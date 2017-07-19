<?php get_header(); ?>
<main id="panel">  
<?php  get_template_part("template_parts/headertop"); ?>
<?php get_template_part("template_parts/about-block"); ?>

<!-- вывод галереи -->
<?php get_template_part('template_parts/gallery-main'); ?>
<!-- вывод новостей -->
<?php get_template_part('template_parts/news'); ?>
<!-- вывод акций  -->
<?php get_template_part('template_parts/sale-main'); ?>
<footer id="footer">
  <div class="container-fluid">
    <div class="footer-box-container">
      <div  id="map" class="container-map"></div>
      <div class="info-footer-container">
      <div class="container">
      <div class="footer-down-inf">
        <div class="row">
          <div class="col-md-3">
            <div class="filter-box-footer">
              <ul>
                <li class="filter">
                  <select class="filter-option">
                    <option value>Санкт-Петербург</option>
                    <option value="filter 1">Фильтр 1</option>
                    <option value="filter 2">Фильтр 2</option>
                    <option value="filter 3">Фильтр 3</option>
                  </select>
                </li>
             </ul>
           </div>
          </div>
          <div class="col-md-3">
          <div class="link-footer">
            <ul>
              <li class="link-shop-box">
                 <a class="link-shop" href="salony.html">Показать ближайший к вам салон</a>
               </li>
            </ul>
          </div>
          </div>
          <div class="col-md-12 col-xs-12">
            <h3>Фирменные салоны</h3>
            <div class="slide-salony footer-salony">
                  <div class="col-md-2 col-xs-4">
                    <h5>Название</h5>
                    <p class="desk-salony">Elitedoors.pro</p>
                    <a class="link-salony footer-salony-link" href="#">посмотреть на карте</a>
                  </div>
                  <div class="col-md-2 col-xs-4">
                    <h5>Адрес</h5>
                    <p>г. Санкт-Петербург, ул. Кантемировская, 37А</p>
                    <a class="link-salony footer-salony-link" href="#">показать схему проезда</a>
                  </div>
                  <div class="col-md-2 col-xs-4">
                    <h5>Телефон</h5>
                    <p><span>+7 (911) 226-53-36</span><br> <span>+7 (921) 565-01-81</span></p>
                    <a class="link-salony footer-salony-link" href="#">подробнее</a>
                  </div>
                </div>
          </div>
          <div class="col-md-12 col-xs-12">
            <div class="slide-salony footer-salony">
                  <div class="col-md-2 col-xs-4">
                    <h5>Название</h5>
                    <p class="desk-salony">Фирменный монобрендовый</p>
                    <a class="link-salony footer-salony-link" href="#">посмотреть на карте</a>
                  </div>
                  <div class="col-md-2 col-xs-4">
                    <h5>Адрес</h5>
                    <p>г. Санкт-Петербург, ул. Железноводская, д.3</p>
                    <a class="link-salony footer-salony-link" href="#">показать схему проезда</a>
                  </div>
                  <div class="col-md-2 col-xs-4">
                    <h5>Телефон</h5>
                    <p><span>+7 (812) 350-27-58 </span> <br> <span> +7 (953) 366-49-80</span></p>
                    <a class="link-salony footer-salony-link" href="#">подробнее</a>
                  </div>
                </div>
          </div>
        </div>
      </div>
        
      </div>
        
      </div>
    </div>
  </div>
</footer>


</main>

<?php get_footer(); ?>

