<?php acf_form_head(); get_header(); ?>
<div class="hero">
      <img src="<?php echo get_theme_file_uri('images\hero-img.jpg')?>" alt="demo image" class="hero__image">
      <p class="hero__title"><?php the_title()?></p>      
   </div>
   <main>
   <div class="container">

         
<?php
 $team = $post->ID;
 
 $today = date('Ymd');
$args = array(
	
   'post_type'		=> 'match',
   array( 'ID' => $team),
   'meta_key' => 'matchdag',
   'orderby' => 'meta_value meta_value_nun',
   'order' => 'ASC',
   'meta_query', array(
      array(
          'key' => 'matchdag',
          'compare' => '>=',
          'value' => $today,
          'type' => 'numeric'
      ),


));

// query
$query = new WP_Query( $args );



while(have_posts()){
  the_post();?>
    
 
         <article class="content__section">
            <div class="article--left">
               <h3 class="article__heading">Spelare</h3>
               <?php the_content() ?> 


                     <?php  $user=get_field('teamuser'); 
                     if (!empty($user))
                     foreach($user as $users) {

                        ?><h3 class="article__heading"><a href="<?php the_permalink() ?>"><?php echo $users->nickname; ?> </a></h3><?php
                        

                        
                     } ?>
                     
                     
                     
                     <p class="article__text"><?php echo the_content()?></p>

                 
            </div>

            

               <?php while($query->have_posts()){
                           $query->the_post();?>
      <div class="article--right">
      
      

      <?php 
     
       
      if(get_field('lag1') == $team or get_field('lag2') == $team){
      
      ?><h3 class="article__heading"><a href="<?php the_permalink() ?>"><?php echo the_title(); ?> </a></h3>
      
        <ul class="events__list">
            <li class="events__list-item events__list-item--large">
                <div class="event__date">
            <div class = "event__date__day">
                <?php $eventdate = new DateTime(get_field('matchdag'));
                 echo $eventdate->format('d')?></div>
                 
            <div class = "event__date__month"><?php echo $eventdate->format('M')?></div> 
            
            </div>  
            </li> 
      
<?php
       } wp_reset_postdata()?> 
            
  <?php }  ?>
         </div>
      </ul>

         </article>
         
   
         
    
<?php } ?>




      </div>
</main>
<?php get_footer()?>

   