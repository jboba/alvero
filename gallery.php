<?php
/*
Template Name: gallery
*/
?>
<?php get_header(); ?>
<main id="panel">  
<?php  get_template_part("template_parts/headertop"); ?>
<div id="main">
      <section id="main-gallary">
        <div class="container-fluid main-box-filter">
          <div class="container">
            <div class="filter-box">
              <ul>
                <li class="filter">
                  <select class="filter-option">
                    <option value>Модель</option>
                    <option value="filter 1">Фильтр 1</option>
                    <option value="filter 2">Фильтр 2</option>
                    <option value="filter 3">Фильтр 3</option>
                  </select>
                </li>
                <li class="filter">
                  <select class="filter-option">
                    <option value>Коллекция</option>
                    <option value="filter 1">Фильтр 1</option>
                    <option value="filter 2">Фильтр 2</option>
                    <option value="filter 3">Фильтр 3</option>
                  </select>
                </li>
                <li class="filter">
                  <select class="filter-option">
                    <option value>Материал</option>
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
          <div class="main-gallery-container">
          </div>
          </div>
      </section>
    </div>
<?php get_footer(); ?>