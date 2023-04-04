<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
<?php
wp_nav_menu( 
    [
    'theme_location' => 'primary',
    'container' => 'ul',
    'container_class' => 'main-nav',
    ]
);

