<?php get_header(); ?>

<section id="cases" class="section">
    
    <div class="container">
    
        <div class="section-header">
            <h2 class="section-title">Cases</h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos!
                <br>
                Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <?php 
            $args = array('post_type' => 'cases');
            $query = new WP_Query($args);
            while($query->have_posts()) : $query -> the_post(); ?>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cases-item"><?php get_template_part('content-cases'); ?></div>
            <?php endwhile;
				?>

        </div>
</div>

</section>

<?php get_footer(); ?>