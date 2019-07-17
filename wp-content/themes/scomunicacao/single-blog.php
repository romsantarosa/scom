<?php get_header(); ?>

<?php if (have_posts() ) : ?>
            <?php while(have_posts() ) : the_post(); ?>
            
            <?php endwhile;
				endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
                <section class="single-title col-md-8">
                    <h1><?php the_title(); ?></h1>
                       <div class="post-thumb"><?php the_post_thumbnail(); ?></div>

                    <div class="meta-tags-single">
                        <span class="date"><i class="lnr lnr-calendar-full" aria-hidden="true"></i> <?php the_time('j F Y'); ?></span>
                        <span class="clock"><i class="lnr lnr-clock" aria-hidden="true"></i><?php the_time('G:i '); ?></span>
                        
                        <span class="author"><i class="lnr lnr-user" aria-hidden="true"></i>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a></span>
                    </div>

                    <p class="blog-post-meta-excerpt"><?php the_content(); ?></p>

                </section>

            <div class="col-md-2"></div>
            <?php setPostViews(get_the_ID());?>
        </div>
    </div>
    <?php get_footer(); ?>