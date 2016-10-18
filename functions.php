<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 2016-10-10
 * Time: 16:05
 */

function resources(){
    wp_enqueue_style('style',get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'resources');


//Navigation menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));


//Get top ancestor
function get_top_ancestor_ID(){

    global $post;

    if($post->post_parent){
        $ancestor = array_reverse(get_post_ancestors($post->ID));
        return $ancestor[0];
    }

    return $post->ID;
}
//Does page have children?
function has_children(){

    global $post;

    $pages = get_pages('child_of=' . $post->ID);

    return count($pages);
}