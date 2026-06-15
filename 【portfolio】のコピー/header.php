<!DOCTYPE html>
<html <?php language_attributes(); ?> style="scroll-behavior:smooth;">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?></title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Zen+Maru+Gothic&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" class="container">

    <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Piyo atelier">
    </a>

    <ul>
        <li><a href="#top">TOP</a></li>
        <li><a href="#concept">CONCEPT</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#project">PROJECTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
    </ul>

</header>

