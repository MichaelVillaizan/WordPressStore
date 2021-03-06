<?php 

function init_tmp(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');


}
add_action('after_setup_theme','init_tmp');


function assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' ,'', '5.1.3', 'all');
    wp_register_style('montserrat','https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&family=Source+Sans+Pro&display=swap','','1.0','all');
    wp_enqueue_style('estilos',get_stylesheet_uri(),array('bootstrap','montserrat'),'1.0','all');
    wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js','','5.0.0',true);

    //para traer mis propios scrips
    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js','','1.0',true);
    
}

add_action('wp_enqueue_scripts','assets');
