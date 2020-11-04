<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta charset="<?php bloginfo('charset') ?>">
   <?php wp_head(); ?>
   
</head>
<body <?php body_class() ?>>

<!-- HEADER -->
<header>
      <div class="container row--100">
         <!-- Extra säkerhet med esc_url() -->
         <div class="logo"><a href="<?php echo esc_url(site_url()); ?>">logo</a></div>

         <nav>
            <ul class="nav__list">
               <li class="nav__list-item">
                  <a href="<?php echo esc_url(site_url('sports')); ?>"<?php if(is_page('archive-sports')) echo 'class="current__page"' ?>>Sporter</a>
               </li>
               <li class="nav__list-item">
                  <a href="<?php echo  esc_url(site_url('teams')); ?>"<?php if(is_page('teams')) echo 'class="current__page"' ?>>Lag</a>
               </li>
               <li class="nav__list-item">
                  <a href="<?php echo esc_url(site_url('leagues')); ?>"<?php if(is_page('leagues')) echo 'class="current__page"' ?>>Ligor</a>
               </li>
               <li class="nav__list-item">
               <?php
            $current_user = wp_get_current_user();
            $current_user_login = $current_user->user_login;
            if(empty ($current_user_login)) { ?>
               <a href="<?php echo esc_url("http://king.local/wp-login.php"); ?>"<?php if(is_page('Hem')) echo 'class="current__page"'  ?>>Login</a>
            <?php 
            } 
            else {
               ?>
               <a href="<?php echo esc_url("http://king.local/user/"); ?>"><?php echo $current_user_login ?></a>
            <?php }  ?>


               
               </li>
            </ul>
         </nav>
      </div>
   </header>