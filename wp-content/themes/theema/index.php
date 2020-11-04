<?php get_header(); ?>

<div class="hero">
      <img src="<?php echo get_theme_file_uri('images/hero-img.jpg'); ?>" alt="demo image" class="hero__image">
      
   </div>

   <!-- MAIN -->
   <main>
      <div class="container">
         <h2 class="section__title">Nyheter</h2>

         <?php
          while(have_posts()) {
             the_post(); ?>
         <article class="content__section">
            <div class="article--left">
               <p class="article__text">Skapad av <?php the_author_posts_link(); ?> den <?php the_time('d M Y'); ?> i <?php echo get_the_category_list(', '); ?>.</p>
               <h3 class="article__heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               <?php the_excerpt(); ?>

               <a href="<?php the_permalink(); ?>" class="btn btn--dark">Läs hela artikeln</a>

            </div>
            <?php 
                     
                     $image = get_field('image');
                     
                      ?>
                     
            <div class="article--right">
            <img src=<?php echo esc_url($image['url']);?>" alt="demo image">
            </div>
         </article>
          <?php } ?>
      </div>
   </main>

<?php get_footer(); ?>