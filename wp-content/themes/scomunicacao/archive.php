<?php get_header(); ?>

<section id="blog" class="section">
    
    <div class="container">
        <div class="row ">
  
            <?php if (have_posts() ) : ?>
            <?php while(have_posts() ) : the_post(); ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item"><?php get_template_part('content', get_post_format()); ?></div>
            <?php endwhile;
				endif; ?>

        </div>
</div>

</section>

<?php get_footer(); ?>