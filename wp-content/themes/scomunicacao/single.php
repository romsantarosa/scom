<?php get_header(); ?>
    <?php while(have_posts() ) : the_post(); ?>
    <?php endwhile; ?>

    <?php get_template_part('content-single'); ?>

<?php get_footer(); ?>