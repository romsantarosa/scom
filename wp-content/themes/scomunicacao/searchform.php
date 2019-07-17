<form role="search" method="get" id="searchform"  action="<?php echo home_url('/'); ?>">
    
<div class="blocoicons">
    <input class="sizeinput" type="search" autocomplete="yes" placeholder="Pesquise aqui..." value="<?php echo get_search_query(); ?>"
            name="s" title="Pesquisa" />
        <button type="submit"><img src="<?php bloginfo('template_url'); ?>/img/lupa-b.png"></button>
    </div>
    </div>
</form>