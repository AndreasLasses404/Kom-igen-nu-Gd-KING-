<!-- FOOTER -->
<footer>
      <div class="container row--100">
         
            
      

               <ul class="icon__list">
                  <li class="icon__list-item">
                     <i><p>Om oss</p></i>
                  </li>
                  <li class="icon__list-item">
                     <i><p><a href="<?php echo esc_url(site_url('leagues')); ?>"<?php if(is_page('leagues')) echo 'class="current__page"' ?>>Ligor</a></p></i>
                  </li>
                  <li class="icon__list-item">
                  <i><p><a href="<?php echo esc_url(site_url('sports')); ?>"<?php if(is_page('archive-sports')) echo 'class="current__page"' ?>>Sport</a></p></i>
                  </li>
                  <li class="icon__list-item">
                  <i><p><a href="<?php echo  esc_url(site_url('teams')); ?>"<?php if(is_page('teams')) echo 'class="current__page"' ?>>Lag</a></p></i>
                  <li class="icon__list-item">
                  <i><p>Kontakt</p></i>
                  </li>
               </ul>
               
      </div>
      
      
      
      

               <?php  


               $today = date('Ymd');
               $frontpageevents = new WP_Query(array(
                  'meta_key' => 'event_date',
                  'orderby' => 'meta_value_num',
                  'order' => 'ASC', 
                  'posts_per_page' => -1,
                  'post_type' => 'event',
                  'meta_query' => array(
                     array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                     )
                  )

               ));

               while($frontpageevents -> have_posts()){
                  $frontpageevents-> the_post()
               
               ?>

               <li class="events__list-item"><a href="<?php the_permalink() ?>"><i class="far fa-calendar-alt"></i> <?php the_title() ?></a>
               <p><?php echo wp_trim_words(get_the_content(), 10)?></p>
               </li>
               
               <?php } ?>
            </ul>
            
         </div>
      </div>
   </footer>

<?php wp_footer(); ?>

</body>
</html>