<div class="blog-item-wrapper">
    <div class="blog-item-img">
        <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?></a>
    </div>
<div class="blog-item-text">
    <div class="meta-tags">
        <span class="date"><i class="lnr  lnr-clock"></i><?php the_time('G:i '); ?></span>
        <span class="date"><i class="fa  fa-calendar"></i><?php echo the_date(); ?></span>
        <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i><?php get_comments_number('no responses', 'one response', '% responses'); ?></a></span>
    </div>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php endif; ?>
    <p><?php the_excerpt(); ?></p>