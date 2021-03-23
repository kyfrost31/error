<?php


// Load Style Sheet


function load_css()

{
           
	wp_register_style('vbot', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('vbot');

	wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);

	wp_register_style('maincss', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
	wp_enqueue_style('maincss');
            
                

}   

add_action('wp_enqueue_scripts', 'load_css');


// Load Javascript
function load_js()
{

			
		
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', 'jquery', false, true);

		wp_enqueue_script('bootstrap');

		wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
		wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js', array( 'AOS' ), null, true);


		wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', 'jquery', false, true);

		wp_enqueue_script('mainjs');

		


}

add_action('wp_enqueue_scripts', 'load_js');


// Load Animation






