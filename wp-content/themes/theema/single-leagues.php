<?php get_header()?>
<div class="hero">
      <img src="<?php echo get_theme_file_uri('images\hero-img.jpg')?>" alt="demo image" class="hero__image">
          
   </div>
   <main>
   <div class="container">
         <h2 class="section__title"><?php the_title() ?></h2>

 <?php
  $team = $post->post_name;

  $args = array(  
         'post_type' => 'teams',
         'tax_query' => array(
          array(
            'taxonomy' => 'ligor', //taxonomy
            'field' => 'slug', //this can be also id
            'terms' => array( 'name' => $team ), //the term in the taxonomy
            'orderby' => 'meta_value meta_value_nun',
            'order' => 'DESC',
            'meta_query', array(
               array(
                   'key' => 'points',
                   'compare' => '>=',
                   'value' => $today,
                   'type' => 'numeric'
               ),
            
            
            ))));


 
    
     $loop = new WP_Query( $args ); 
     ?>
     <article class="content__section">
     <div class="article--left">
   <?php  
while($loop->have_posts()){
    $loop->the_post();  ?>
    
    <?php 
    $teeem = $post->post_name; 
     foreach(array($teeem) as $teams){
        ?>
      <h3 class="article__heading"><a href="<?php the_permalink() ?>"> <?php the_title() ?></a><?php the_field('points')?></h3>
      <?php
   }
    ?>
      <?php } ?>
         
            </div>


            <?php while(have_posts()){
    the_post(); $image=get_field('image'); ?>

            <div class="article--right">
               <img srcset="<?  echo esc_url($image['url'])?> ,<?php echo get_theme_file_uri('images/bird-square.jpg');?>"  
               src ="<?php echo esc_url($image['url'])  ?>">
            </div>
         </article>
         
   
         <?php } ?>
    





      </div>
</main>
<?php get_footer()?>

