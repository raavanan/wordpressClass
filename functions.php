<?php 
//Create new menu

if(function_exists('register_nav_menus'))
{
    register_nav_menus(array('primary' => 'Header'));
}

// to load thumbnails

if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}

if(function_exists('add_image_size')) {
    add_image_size ('post_img', 114, 114, true);
    add_image_size ('feature', 500, 200, true);
}


?>

