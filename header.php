<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="header-container">
            <a href="<?php echo home_url(); ?>" class="logo">
                <span class="logo-icon">🐨</span>
                <span>TechyKoala</span>
            </a>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/connect'); ?>">Connect App</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
