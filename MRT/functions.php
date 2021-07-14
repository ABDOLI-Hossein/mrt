<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}


flush_rewrite_rules( false );
add_theme_support( 'post-thumbnails' );


function load_stylesheets(){

	
	wp_register_style('fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style('fontawesome');

    wp_register_style('fontawesome',get_template_directory_uri() . '/css/fontawesome.min.css',array(),1,'all');
    wp_enqueue_style('fontswesome');

//
//	 wp_register_style('fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
//     wp_enqueue_style('fontawesome');
	


    wp_register_style('styles',get_template_directory_uri() . '/css/styles.css',array(),rand(10,99),'all');
    wp_enqueue_style('styles');

    wp_register_style('mediaQuery',get_template_directory_uri() . '/css/mediaQuery.css',array(),rand(10,99),'all');
    wp_enqueue_style('mediaQuery');

     wp_register_style('OwlCarousel-theme',get_template_directory_uri() . '/css/owl.theme.default.min.css',array(),1,'all');
     wp_enqueue_style('OwlCarousel-theme');

     wp_register_style('OwlCarousel',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),1,'all');
     wp_enqueue_style('OwlCarousel');

    wp_register_style('hover',get_template_directory_uri() . '/css/hover.css',array(),1,'all');
    wp_enqueue_style('hover');

    wp_register_style('vivify',get_template_directory_uri() . '/css/vivify.min.css',array(),1,'all');
    wp_enqueue_style('vivify');
	


//      wp_register_style('hover',get_template_directory_uri() . '/css/hover.css',array(),rand(10,99),'all');
//      wp_enqueue_style('hover');
	


}
add_action('wp_enqueue_scripts','load_stylesheets');




//load scripts
function addjs()
{

    wp_register_script('jquery',get_template_directory_uri() . '/js/jQuery.js',array(),1,1,1);
    wp_enqueue_script('jquery');


	
     wp_register_script('OwlCarousel',get_template_directory_uri() . '/js/owl.carousel.min.js',array(),1,1,1);
     wp_enqueue_script('OwlCarousel');


    wp_register_script('custom',get_template_directory_uri() . '/js/custom.js',array(),rand(10,99),1,1);
    wp_enqueue_script('custom');
	
	


}
add_action('wp_enqueue_scripts','addjs');

add_theme_support('menus');

//Register menus
register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu'),
        'top-menu-2' => __('Top Menu 2')
    )
);





add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}






function tamasbama() {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message1 = $_POST['message'];
    $to = 'office@nexmark.io';
    $subject = "تماس با ما";
    $message = $message1;
    $headers = array('Content-Type: text/html; charset=UTF-8','From:'.$email,'Cc:  rajabitr@gmail.com');
    $m = wp_mail($to, $subject, $message,$headers);
    wp_send_json($m);
    exit();
}
add_action('wp_ajax_tamasbama', 'tamasbama');
add_action("wp_ajax_nopriv_tamasbama", 'tamasbama');





// deleteRow(7);
