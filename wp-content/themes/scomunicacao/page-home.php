<?php get_header(); ?>

<body <?php body_class(); ?>>


    <!-- Header Section Start -->
    <header id="hero-area">
        <img class="img-logo" src="<?php bloginfo('template_url'); ?>/img/scom-logo-teste.png"
            alt="S Comunicação Integrada"></a>


        <div class="container text-center">
            <div class="banner">
                <h1 id="typed"></h1>
            </div>
        </div>

    </header>
    <?php get_template_part('content','whoare'); ?>

    <?php get_template_part('content','team'); ?>

    <?php get_template_part('content','counter'); ?>

    <?php get_template_part('content','solutions'); ?>

    <?php get_template_part('content','mkt'); ?>

    <?php get_template_part('content','contact'); ?>

    <?php get_footer(); ?>