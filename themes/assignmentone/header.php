<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('Assignment 01');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header class="main">
<div>
        <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(home_url('//wp-content/uploads/2024/02/letrinha-09-300x140.png')); ?>" alt="header logo">
        </a>
    </div>
    
    <nav>
        <?php wp_nav_menu(array(
            'menu' => 'main',
            'theme_location' => '',
            'depth' => 3, 
            'fallback' => false
            )); ?>
    </nav>
</header>
