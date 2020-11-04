<?php 

function cms_post_types() {
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array('editor', 'title', 'excerpt'),
        'public' => true,
        'has_archive' => true,  
        'labels' => array(
            'name'=> 'Event',
            'add_new_item' => 'Lägg till nytt event',
            'edit_item' => 'Redigera event',
            'all_items' => 'Alla event',
            'singular_name' => 'Event',


        ),
        'menu_icon' => 'dashicons-calendar-alt',
    ));
}

add_action('init', 'cms_post_types');


function cms_team_types() {
    register_post_type('teams', array(
        'show_in_rest' => true,
        'show_in_menu' => true,
        'supports' => array('editor', 'author', 'title', 'excerpt'),
        'public' => true,
        'has_archive' => true,  
        'labels' => array(
            'name'=> 'Team',
            'add_new_item' => 'Lägg till nytt team',
            'insert_into_post' => 'Vilken liga?', 
            'edit_item' => 'Redigera team',
            'all_items' => 'Alla teams',
            'singular_name' => 'team',
            
            


        ),
        'menu_icon' => 'dashicons-games',
    ));
}

add_action('init', 'cms_team_types');


function cms_sport_types() {
    register_post_type('sports', array(
        'show_in_rest' => true,
        'supports' => array('editor', 'title', 'excerpt'),
        'public' => true,
        'has_archive' => true,  
        'labels' => array(
            'name'=> 'Sport',
            'add_new_item' => 'Lägg till nytt sport',
            'edit_item' => 'Redigera sport',
            'all_items' => 'Alla sporter',
            'singular_name' => 'sport',


        ),
        'menu_icon' => 'dashicons-money-alt',
    ));
}

add_action('init', 'cms_sport_types');

function cms_league_types() {
    register_post_type('leagues', array(
        'show_in_rest' => true,
        'supports' => array('editor', 'title', 'excerpt'),
        'public' => true,
        'has_archive' => true,  
        'labels' => array(
            'name'=> 'Leagues',
            'add_new_item' => 'Lägg till nytt liga',
            'edit_item' => 'Redigera liga',
            'all_items' => 'Alla ligor',
            'singular_name' => 'leagues',


        ),
        'menu_icon' => 'dashicons-buddicons-activity',
    ));
}

add_action('init', 'cms_league_types');




function cms_match_types() {
    register_post_type('match', array(
        'show_in_rest' => true,
        'supports' => array('editor', 'title', 'excerpt'),
        'public' => true,
        'has_archive' => true,  
        'labels' => array(
            'name'=> 'Matcher',
            'add_new_item' => 'Lägg till nytt Match',
            'edit_item' => 'Redigera match',
            'all_items' => 'Alla matcher',
            'singular_name' => 'match',


        ),
        'menu_icon' => 'dashicons-superhero',
    ));
}

add_action('init', 'cms_match_types');

function button() {
    register_post_type('match', array(
        'show_in_rest' => true,
        'supports' => array('editor', 'title', 'excerpt'),
        'public' => true,
        'has_archive' => true,  
        'labels' => array(
            'name'=> 'Matcher',
            'add_new_item' => 'Lägg till nytt Match',
            'edit_item' => 'Redigera match',
            'all_items' => 'Alla matcher',
            'singular_name' => 'match',


        ),
        'menu_icon' => 'dashicons-superhero',
    ));
}

add_action('init', 'cms_match_types');


?>

