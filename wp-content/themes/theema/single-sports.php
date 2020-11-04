<?php acf_form_head(); get_header();?>
<div class="hero">
      <img src="<?php echo get_theme_file_uri('images\hero-img.jpg')?>" alt="demo image" class="hero__image">
           
   </div>
   <main>
   <div class="container">
         <h2 class="section__title"><?php the_title() ?></h2>
<?php
while(have_posts()){
    the_post();?>
    
   
     
         <article class="content__section">
            <div class="article--left">
               <h3 class="article__heading">Här vare <?php the_title() ?></h3>
               <?php the_content() ?> 
              
               <?php echo acf_form();  ?>
            </div>

            <div class="article--right">
               <img src=<?php echo get_theme_file_uri('images\bird-square.jpg')?>" alt="demo image">
            </div>
         </article>
         
   

    
<?php } ?>





      </div>
</main>
<?php get_footer()?>

