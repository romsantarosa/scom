<?php get_header(); ?>

<section id="cases" class="section">

    <div class="container">
        <div class="row ">
        <div class="container">
    
    <div class="section-header">
        <h2 class="section-title">Cases</h2>
        <hr class="lines wow zoomIn" data-wow-delay="0.3s">
        <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos!
            <br>
            Lorem ipsum dolor sit amet, consectetur.</p>
    </div>
</div>

            <?php if (have_posts() ) : ?>
            <?php while(have_posts() ) : the_post(); ?>
            
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item"><?php get_template_part('content', 'cases'); ?></div>
            <?php endwhile;
				endif; ?>

        </div>
</div>

</section>

<?php get_footer(); ?>