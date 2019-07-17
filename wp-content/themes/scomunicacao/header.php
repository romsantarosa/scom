<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
        content="Comunicação Integrada, Comunicação, Marketing, Político, Mídias, Mídia Digital, Consultoria, Assessoria, Gestão, Planejamento, Estratégia">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Rom Santa Rosa">
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Montserrat|Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/fav.ico" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slicknav.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/line-icons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-lightbox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">


    <!--<?php wp_head(); ?>-->

</head>

<!-- Navbar Start -->

<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo ">

<div class="social-icons-topo">
    <ul>
        <li class="facebook" title="Facebook" alt="Ícone Facebook"><a href="https://www.facebook.com/scomunicaintegrada/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="instagram" title="Instagram" alt="Ícone Instagram"><a href="https://www.instagram.com/scomunicacaointegrada/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li class="twitter" title="Twitter" alt="Ícone Twitter"><a href="https://www.twitter.com/scomunicacao2/" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class="linkedin" title="Linkedin" alt="Ícone Linkedin"><a href="https://www.linkedin.com/in/s-comunica%C3%A7%C3%A3o-integrada-b39918181/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="whats" title="WhatsApp (13) 99118-0384" alt="Ícone Whatsapp"><a href="https://api.whatsapp.com/send?phone=5513991180384" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
    </ul>
</div>

    <div class="container ">
        <div class="navbar-header">
            <div class="collapse navbar-collapse" id="main-navbar">
                
                <ul class="navbar-nav mr-auto w-100 justify-content-left">
                    <li class="nav-item">
                        <a
                            class="nav-link page-scroll"><?php wp_nav_menu(array('theme_location' => 'meu_menu_principal')); ?></a>
                    </li>
                    <?php get_search_form();?>
                </ul>
            </div>
        </div>


    </div>

    <span class="open-slide">
        <a href="#" onclick="openSlideMenu()">
            <svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#ccc" stroke-width="4" />
                <path d="M0,14 30,14" stroke="#ccc" stroke-width="4" />
                <path d="M0,23 30,23" stroke="#ccc" stroke-width="4" />
            </svg>
        </a>
    </span>


    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>

        <div onclick="closeSlideMenu()"><?php wp_nav_menu(array('theme_location' => 'meu_menu_principal')); ?></div>
        <?php get_search_form();?>
    </div>


</nav>

<!-- Navbar End -->
<!-- Header Section End -->