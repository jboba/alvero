<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title><?php bloginfo( 'name' ); ?></title>

    <!-- Bootstrap -->  
    <?php if(is_home()){?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css">
    <? } ?>
    
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->  
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->  
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->  
 <?php wp_head(); ?>
  </head>
  <body <?php if(is_page(31)){body_class('about_company_page');}elseif(is_page(27)){body_class('salony_page_main');}else{body_class($class);} ?>>

         <div class="load-container load8">
  <div class="loader">АЛЬВЕРО</div>
</div>
<nav id="menu">
<header>
<h3><?php bloginfo( 'name' ); ?></h3>
</header>
 <?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'menu-section-list', 'container'=>'false')); ?>
</nav>