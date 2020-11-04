<?php get_header()?>
<div class="hero">
      <img src="<?php echo get_theme_file_uri('images\hero-img.jpg')?>" alt="demo image" class="hero__image">
           
   </div>
   <main>
   <div class="container">
         <h2 class="section__title">Sporter</h2>
      

 
<?php
 
 

 
while(have_posts()){
    the_post();?>
    
    
   
        
    
     
        <article class="content__section">
        <ul class="events__list">
            <li class="events__list-item events__list-item--large">
                <div class="event__date">
            <div class = "event__date__day">
                <?php $eventdate = new DateTime(get_field('event_date'));
                 echo $eventdate->format('d')?></div>
            <div class = "event__date__month"><?php echo $eventdate->format('M')?></div> 
            
            </div>   
            <?php  the_taxonomies(array('template' => '% %l')) ?>
               <p><?php echo wp_trim_words(get_the_content(), 10)?></p>
            </li>
        </ul>       
        </article>

<?php } ?>




      </div>
</main>
<?php get_footer()?>


