<p>Det här drivs av single.php</p>
<?php
while(have_posts()){
    the_post(); ?>
    <h2><?php the_title(); ?> </h2>
    <p><?php the_content();?></p>
    
<?php }
?>
