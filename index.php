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

<?php get_footer(); ?>

