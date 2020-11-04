<?php
    function cms_utitities(){
        wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap');
        wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');   
        wp_enqueue_style('cms_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts','cms_utitities');

    function cms_adjust_queries($query){
        if(!is_admin() and is_singular('match') and $query->is_main_query()){

        
        $today = date('Ymd');
        $query->set('meta_key', 'matchdag');
        $query->set('orderby', 'meta_value_nun');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'matchdag',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        ));
    }
    }
    add_action('pre_get_posts', 'cms_adjust_queries');
    

    function givepoints () {
         $lag1id = get_field('lag1'); $lag2id = get_field('lag2') ?>

               <?php  $lag1 = get_field('lag_1_goals');  $lag2 = get_field('lag_2_goals'); 
                
               if($lag1 < $lag2){
                
                $points1 = get_field('points', $lag2id);
                $sum = $points1+3;
                update_field('points', $sum, $lag2id);
               
               }
               if ($lag1 == $lag2){
                $points1 = get_field('points', $lag1id);
                $sum1 = $points1+1;
                $points2 = get_field('points', $lag2id);
                $sum2 = $points2+1;   
                update_field('points', $sum2, $lag2id);
                update_field('points', $sum1, $lag1id);
                
               }
               if($lag1 > $lag2){
                $points1 = get_field('points', $lag1id);
                $sum = $points1+3;
                update_field('points', $sum, $lag1id);
                
                }
               }   
add_action('post_updated', 'givepoints');
    
    
?>