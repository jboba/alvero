<?php if(is_home()){ ?>
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
                 <a class="link-shop" href="<?echo get_page_link(27)?>">Показать ближайший к вам салон</a>
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
                    <a class="link-salony footer-salony-link" href="<?echo get_page_link(27)?>">показать схему проезда</a>
                  </div>
                  <div class="col-md-2 col-xs-4">
                    <h5>Телефон</h5>
                    <p><span>+7 (911) 226-53-36</span><br> <span>+7 (921) 565-01-81</span></p>
                    <a class="link-salony footer-salony-link" href="<?echo get_page_link(27)?>">подробнее</a>
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
                    <a class="link-salony footer-salony-link" href="<?echo get_page_link(27)?>">показать схему проезда</a>
                  </div>
                  <div class="col-md-2 col-xs-4">
                    <h5>Телефон</h5>
                    <p><span>+7 (812) 350-27-58 </span> <br> <span> +7 (953) 366-49-80</span></p>
                    <a class="link-salony footer-salony-link" href="<?echo get_page_link(27)?>">подробнее</a>
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
<?php }
// если это страница о компании
if(is_page(31)){ ?>
<footer id="footer">
  <div class="container-fluid">
    <div class="bg-about-footer">
      <div class="contact-about-footer">
        <h3>Контакты</h3>
        <p>385730, Республика Адыгея, Майкопский район,пгт.Тульский, ул.Западная, д.69</p>
        <p>Тел: +7 (87777) 2-90-00</p>
        <p>Обратная связь</p>
      </div>
    </div>
  </div>
</footer>
<?php }if(is_page(33)||is_page(27)||is_page(29)){ ?>
<!-- если любая другая -->
<footer id="footer">
  <div class="container-fluid footer-katalog-box">
    <div class="footer-katalog">
      <img src="<?php bloginfo( 'template_url' ); ?>/img/bg-katalog.png" alt="">
    </div>
  </div>
</footer>
<?php } if(is_page(35)){?>
<footer id="footer">
  <div class="container-fluid footer-katalog-box">
    <div id="map" class="footer-katalog" style="width:100%; min-height:500px"></div>
  </div>
</footer>
<?php } ?>
</main>

<!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
<?php if(true){?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js"></script>
<script type="text/javascript">
  $('.gallery-top-img').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image'
  // other options
});
</script>
<?}?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/slick/slick.min.js"></script>
<?php if(is_home()||is_page(31)){?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script type="text/javascript">
  var owlcar = $(".owl-carousel");
    owlcar.owlCarousel({
        // center: true,
        items: 4,
        // loop: true,
        margin: 10,
        loop:true,
        touchDrag:false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 4,
                nav: true,
                // loop: false
            }
        }
    });
</script>
<? } ?>
<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/common.js"></script>
<!-- Map Yandex -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/placemark.js" type="text/javascript"></script>
</body>

</html>
