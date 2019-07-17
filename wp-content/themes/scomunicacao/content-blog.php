
           
           <?php if(has_post_thumbnail()) : ?>
                <div class="blog-item-img">
                    <a class="img" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?> </a>
                </div>

			
            <div class="blog-post-title">
                <a href="<?php the_permalink(); ?>">
                    <h1><?php the_title(); ?></h1>
                </a>
            </div>

            <div class="meta-tags">
            <span class="date"><i class="lnr lnr-calendar-full" aria-hidden="true"></i> <?php the_time('j F Y'); ?></span>
            <span class="clock"><i class="lnr lnr-clock" aria-hidden="true"></i><?php the_time('G:i '); ?></span>
            <span class="views"><i class="lnr lnr-eye"></i> <?php echo getPostViews(get_the_ID()); ?></span>
            </div>

            <?php endif; ?>

 
            <?php the_excerpt(); ?>


<hr>