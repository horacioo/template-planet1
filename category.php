<?php get_header('categoria');  ?>





<img id="icon" alt="icone de menu - corretora de seguros em santos" src="<?php echo tema ?>/partes/menu/imagens/menu_icon.svg">
<div id="fundao"></div>

<nav class="SegundoMenuTopo">
    <?php wp_nav_menu('topo') ?> 
</nav>


<!----------------------------------------------------------->

<main id="categorias">
<!---------------------------->
<!---------------------------->
<?php get_template_part('partes/category/index'); ?>
<!---------------------------->
<!---------------------------->
</main>
<!----------------------------------------------------------->



<?php //get_template_part('partes/contatos_/index'); ?>
<?php get_footer(); ?>