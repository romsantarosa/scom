<article class="container col-md-6 cardfull">
    <div class="card">
        <div class="img-box">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
            <a href="<?php the_permalink(); ?>"><h1 class=""><?php the_title(); ?></h1></a>
                    <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
                    <p><?php the_tags('Tags: ', ', '); ?></p>
                    <p><?php the_content(); ?></p>
        </div>
    </div>
</article>








