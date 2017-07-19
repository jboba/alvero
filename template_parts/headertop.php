<!-- если это галвная страница или каталог -->
  <?php if(is_home()||is_page(31)){ ?>
   <header id="header">  
    <div class="header-top">
        <div class="button-menu toggle-button" >
          <a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/button-menu.png" alt=""></a>
        </div>
        <div class="info-box-header">
          <p class="header-contact"><a href="tel:8 (877) 722-90-00">8 (877) 722-90-00</a></p>
          <a class="header-button" href="<?echo get_page_link(27)?>">перейти в каталог</a>
        </div>  
      </div>
         <div class="header-main">
        <div class="container">
          <div class="col-md-12">
          <?php if(is_home()){ ?>
          <h1 class="main-pade-h1"><?php bloginfo( 'name' ); ?></h1>
          <?php }else{ ?>
            <h1 class="main-pade-h1"><?php wp_title(""); ?></h1>
            <?php } ?>
            <p>ООО «Лидер» – производитель дверей из <br> массива под брендом «Альверо»</p>
          </div>
        </div>
      </div>
    </header>
    <?php }else{ ?>
        <header class="header">
      <div class="header-top">
        <div class="button-menu toggle-button" >
          <a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/button-menu.png" alt=""></a>
        </div>
        <div class="info-box-header">
          <p class="header-contact">8 (877) 722-90-00</p>
          <a class="header-button" href="katalog.html">перейти в каталог</a>
        </div>  
      </div>
      <div class="header-main">
        <div class="container">
          <div class="col-md-12">
            <h1><?php wp_title(""); ?></h1>
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' > '); ?>
          </div>
        </div>
      </div>
    </header>
    <?php } ?>