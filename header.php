<?php
/**
 * The header for our theme
 *
 * @package SRB_Advertising
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694718535_e639511d050cc119075e.png">

    <!-- Your existing meta tags here -->
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('page-home'); ?>>
<?php wp_body_open(); ?>
<main class="o-scroll" id="js-scroll" data-scroll-container>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694715053_159c16498d0e9a0478c3.png" alt="<?php bloginfo('name'); ?>" class="img-fluid">
                </a>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item menuclose d-lg-none"><a href="javascript:void(0);" class="menuicon"><i class="bi bi-x-lg"></i></a></li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/')); ?>"><span class="rolltxt">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('about-us') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/about-us')); ?>"><span class="rolltxt">About Us</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><span class="rolltxt">What We Do</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/what-we-do/branding')); ?>">Branding</a></li>
                            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/what-we-do/advertising')); ?>">Advertising</a></li>
                            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/what-we-do/signages')); ?>">Signages</a></li>
                            <li><a class="dropdown-item" href="<?php echo esc_url(home_url('/what-we-do/digital')); ?>">Digital</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('portfolio') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/portfolio')); ?>"><span class="rolltxt">Portfolio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('join') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/join')); ?>"><span class="rolltxt">Join</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page('contact-us') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/contact-us')); ?>"><span class="rolltxt">Contact Us</span></a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-lg-0 ms-auto">
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="hellobtn">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1694715167_e89dd86bec1f0d42e1c4.svg" alt="say-hello" class="img-fluid">
                        <span>Say Hello</span>
                    </a>
                    <a href="javascript:void(0);" class="menuicon d-lg-none"><span></span><span></span></a>
                </div>
            </div>
        </nav>
    </header>