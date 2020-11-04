<?php get_header(); ?>

<div class="hero">
      <img src="<?php echo get_theme_file_uri('images/hero-img.jpg'); ?>" alt="demo image" class="hero__image">
      
   </div>

   <!-- MAIN -->
   <main>
      <div class="container">
         <h2 class="section__title"><?php the_archive_title(); ?></h2>

          <?php

          while(have_posts()) {
             the_post(); ?>

         <article class="content__section">
            <div class="article--left">
               <h3 class="article__heading"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
               <?php the_content(); ?>

               <a href="#" class="btn btn--dark">Läs hela artikeln</a>
            </div>

            <div class="article--right">
               <img src="<?php echo get_theme_file_uri('images/bird-square.jpg'); ?>" alt="demo image">
            </div>
         </article>
          <?php } ?>
      </div>
   </main>

<?php get_footer(); ?>