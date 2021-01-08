<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( charset ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?php bloginfo( 'description' ); ?></title>
   <?php wp_head(); ?> 
</head>

<body>
   <header class="header" style="background-image: url(<?php the_field('header') ?>);">
      <div class="container">
         <div class="header__top">
            <nav class="header__nav" id="nav">
               <ul class="menu">
               <?php 
                  $locations = get_nav_menu_locations();
                  $menu_id = $locations['menu-header'];
                  $menu_items = wp_get_nav_menu_items($menu_id);
                  foreach( $menu_items as $menu_item ):
               ?>
               <li class="menu__list">
                     <a href="<?php echo $menu_item->url; ?>" 
                     class="menu__link">
                     <?php echo $menu_item->title; ?>
                     </a>
               </li>
                  <?php endforeach; ?>
               </ul>
            </nav>
            <div class="media-menu" id="nav_toggle">
               <div class="media-menu__btn"></div>
            </div>

            <?php
            $header__social1 = get_field('header__social1');
            if( $header__social1 ): ?>   
              <a class="header__link" href="<?php echo $header__social1['header__link']; ?>">
               <img src="<?php echo $header__social1['header__link-img']; ?>" alt="">
            </a>
            <?php endif; ?>
          
            <?php
            $header__social2 = get_field('header__social2');
            if( $header__social2 ): ?>   
              <a class="header__link" href="<?php echo $header__social2['header__link']; ?>">
               <img src="<?php echo $header__social2['header__link-img']; ?>" alt="">
            </a>
            <?php endif; ?>
          
         </div>
         <div class="header__logo">
            <img src="<?php the_field('header__logo')?>" alt="">
         </div>
         <h1 class="header__subtitle">
         <?php the_field('header__subtitle') ?>
         </h1>
      </div>
   </header>
   