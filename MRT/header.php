<!DOCTYPE html>
<html lang="en">

<head>


    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/cropped-newfav-32x32-1.png" sizes="32x32" />
    <link rel="icon" href="<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/cropped-newfav-32x32-1.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/cropped-newfav-32x32-1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <?php wp_head(); ?>
</head>

<body>

<div class="siteWrapper">
<div class="next-prev d-none d-flexM">
    <i class="fa fa-chevron-left secnav"></i>
    <div class="navsecWrap"></div>
    <i class="fa fa-chevron-right secnav"></i>
</div>


<header>
	
<div class="per-10 center-of-width w100-m" style="width: 100%">
    <div class="per-9 flex-grow-1 d-flex  mw100-m justify-evenly" style="justify-content: space-between;align-items: center;    padding: 15px 0;">
        <h1>Dr.Mohammad Rajabi Tarkhorani</h1>
        <div class="d-flex" style="align-items: center">
            <a class="lang"><h2>EN</h2></a>
            <div id="navbarMenu">

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu-2',
                        'menu_id'        => 'top-menu-2',
                        'container'      => 'ul',
                        'menu_class'     => 'navbar-nav',

                    )
                );
                ?>
            </div>
<!--            <a  id="navbarBtn"><i class="fa fa-bars"></i></a>-->
            <input type="checkbox" id="menu">
            <label  class="icon">
                <a id="navbarBtn"></a>
            </label>

        </div>
    </div>
</div>

</header>



