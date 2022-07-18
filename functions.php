<?php 
function montheme_supports () {
    add_theme_support('title-tag');
}

function montheme_register_assets () 
{
    wp_register_style('bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css');
    
    wp_enqueue_style('bootstrap');
}


/*
*   ===================================================
*   Ajouter un fichier de style via mon thème WordPress
*   ===================================================
*/
 
//cette fonction sera appelée lors du hook enqueue_scripts, tel que demandée plus bas
//ceci nous sert à dyniquement ajouter des css à notre head, à la sauce
function institut_scripts(){
    //chacun des appels à enqueue_style ajoute un css au head
    //le 3e argument indique quels css doivent D'ABORD être chargés
    wp_enqueue_style('main-css', get_theme_file_uri('assets/css/style.css'), ['reset-css']);
    wp_enqueue_style('reset-css', get_theme_file_uri('assets/css/reset.css'));
}

//demande d'appeler notre fonction onews_scripts() lorsque Wordpress passe par cet événement dans son code
add_action('wp_enqueue_scripts', 'institut_scripts');

add_action('after_setup_theme' , 'montheme_supports');
add_action('wp_enqueue_scripts' , 'montheme_register_assets');

remove_action('wp_head' , 'wp_generator');