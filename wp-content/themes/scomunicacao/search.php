<?php get_header(); ?>

<div class="container-wrap">
<section class="cam">
	
            <?php 
        wp_reset_query();
         if(have_posts()) :
            while (have_posts()) : the_post(); 
  
                 get_template_part('content','search');
            endwhile; else: ?>
            <div class="col-md-12 text-center"><br>
                <h2 class="erro">Desculpe! Não encontramos a palavra que estava procurando.<br><br> Tente outra busca ou volte para a <a
                        href="index.php"> Home</a></h2>
                        
                <?php 
          endif; ?>
            
  
    </div>
</section>
</div>

<br>
<div class="page-numebers text-center">
	<?php wordpress_pagination(); ?>
	</div>
<br>

<?php get_footer(); ?>