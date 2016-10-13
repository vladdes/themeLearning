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


