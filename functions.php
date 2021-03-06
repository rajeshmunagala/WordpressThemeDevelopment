<?php
function learningWordpress_resources(){
    
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'learningWordpress_resources');

//---Navigation menus----
register_nav_menus(array(
    'primary' =>__('Primary Menu'),
    'footer' => __('Footer Menu'),    
));

//Get top ancestor
function get_top_ancestor_id(){
    global $post;
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    else{
        return $post->ID;
    }
    
}

//Does page have children?
function has_children(){
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

//Customize excerpt word length
function custom_excerpt_length(){
    return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');





function learningwordpress_setup(){
        //---Navigation menus----
    register_nav_menus(array(
        'primary' =>__('Primary Menu'),
        'footer' => __('Footer Menu'),    
    ));
    //Featured image support
    add_theme_support( 'post-thumbnails');
    add_image_size('samll-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, true);
}
add_action('after_setup_theme', 'learningwordpress_setup');

