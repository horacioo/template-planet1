<?php get_header('page'); ?>

<?php $id = get_the_ID() ?>

<header>
    <h1><?php echo get_the_title() ?></h1>
</header>










<img id="icon" alt="icone de menu - corretora de seguros em santos" src="<?php echo tema ?>/partes/menu/imagens/menu_icon.svg">
<div id="fundao"></div>

<nav class="menuTopo">
    <?php wp_nav_menu() ?>
</nav>




<main>
    <header>
        <h2> <?php echo get_the_excerpt(); ?> </h2>
        <?php
        $idImagem = $idImagem = get_post_thumbnail_id($id);
        $image_path = get_attached_file($idImagem);


        $tamanhos = [
            ['largura' => 1029, 'altura' => 257,   'qualidade' => 50]
        ];
        $imagens = reduzirImagem($image_path, $tamanhos);


        ?>
        <picture><img src="<?php echo $imagens['urls']['1029x257']; ?>" alt="imagem que representa o  texto"></picture>
    </header>


    <span>
        <?php echo get_the_content() ?>
    </span>

</main>
<aside>
    <?php if (is_active_sidebar('sidebar-principal')) : ?>
        <aside id="sidebar" class="sidebar">
            <?php dynamic_sidebar('sidebar-principal'); ?>
        </aside>
    <?php endif; ?>
</aside>








<?php get_footer(); ?>