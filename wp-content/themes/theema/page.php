<?php get_header()?>
<div class="hero">
      <img src="<?php echo get_theme_file_uri('images\hero-img.jpg')?>" alt="demo image" class="hero__image">
      <p class="hero__title">Vi skapar en egen page</p>      
   </div>
   <main>
   <div class="container">
         <h2 class="section__title">Välkommen <?php echo wp_get_current_user()-> user_login ?></h2>

         <?php
            $current_user = wp_get_current_user();
            $current_user_login = $current_user->user_login;
            if(empty ($current_user_login)) { 
             ?>
              <a href="<?php echo esc_url("http://king.local/wp-login.php"); ?>"<?php if(is_page('Hem')) echo 'class="current__page"'  ?>>Login Here</a>
             <?php
            } 
            else {
               ?>
               <article class="content_section">
               <div class="article--left">
                  
                  <h3 class="article__heading">Det här är en rubrik</h3>
                  
                  

                  
                  <?php while ( have_posts() ) : the_post(); ?>
                     
                     <h1><?php  ?></h1>
                     
                  

                    

                  <?php endwhile; ?>

                  <p class="article__text"><?php echo the_content()?></p>
                 
               </div>
   
               <div class="article--right">
                  <img src=<?php echo get_theme_file_uri('images\bird-square.jpg')?>" alt="demo image">
               </div>
               </article>
           <?php } ?>
      </div>
</main>
<?php get_footer()?>


