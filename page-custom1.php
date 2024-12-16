<?php
/*
Template Name: WebDesign
*/
?>

<?php $id = get_the_ID(); ?>

<?php get_header('web'); ?>



<header>
    <h1><?php echo get_the_title($id) ?></h1>
</header>

<?php $id = get_the_ID();
$thumb = get_the_post_thumbnail_url($id); ?>


<img id="icon" alt="icone de menu - corretora de seguros em santos" src="<?php echo tema ?>/partes/menu/imagens/menu_icon.svg">
<div id="fundao"></div>

<nav class="SegundoMenuTopo">
    <?php wp_nav_menu('topo') ?>
</nav>


<?php
$idImagem = $idImagem = get_post_thumbnail_id($id);
$image_path = get_attached_file($idImagem);
$tamanhos = [
    ['largura' => 1029, 'altura' => 257,   'qualidade' => 50],
    ['largura' => 400, 'altura' => 600,   'qualidade' => 50],
];
$imagens = reduzirImagem($image_path, $tamanhos);
?>
<picture id="thumbPrincipal">
    <source media="(max-width: 768px)" srcset="<?php echo $imagens['urls']['400x600'];  ?>">
    <img src="<?php echo $imagens['urls']['1029x257']; ?>" alt="imagem que representa o  texto">
</picture>


<main>
    <header>
        <h2> <?php echo get_the_excerpt(); ?> </h2>
    </header>
    <?php echo get_the_content(); ?>
</main>


<?php

$desc1Img = get_field('imgdesc', $id);
if ($desc1Img) {
    $imagemContent = "<picture><img src='" . $desc1Img . "' alt='teste' ></picture>";
} else {
    $imagemContent = "";
}





$descricao = get_field('descricao', $id);
$descricao2 = get_field('descricao2', $id);
$desc1Img = get_field('imgdesc', $id);
$desc1Img2 = get_field('imgdesc2', $id);




if ($desc1Img) {
    $imagemContent = "<picture><img src='" . $desc1Img . "' alt='teste' ></picture>";
} else {
    $imagemContent = "";
}
if (isset($descricao)) {
    echo "<div id='descricao' class='backgroundForm' > 
    <div id='texto'>" . $descricao . "</div>  " . $imagemContent . "  </div>";
}




if ($desc1Img2) {
    $imagemContent2 = "<picture><img src='" . $desc1Img2 . "' alt='teste' ></picture>";
} else {
    $imagemContent2 = "";
}
if (isset($descricao2)) {
    echo "<div id='descricao2'><div>" . $descricao2 . "</div>  " . $imagemContent2 . "  </div>";
}

?>













<section id="trabalhosWeb" class="backgroundForm">

<h3>Confira  Alguns de nossos trabalhos:</h3>
    <?php
    $args = array(
        'post_type'      => 'webdesign', // Nome do seu custom post type
        'posts_per_page' => 10,          // Limita a quantidade de posts que serão exibidos
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
    ?>
        
        <ul id="MeusTrabalhos" class="slideDeSites">
            <?php
            while ($query->have_posts()) :
                $query->the_post();
                $imagem_path = ImagemPath(get_the_ID());
                $tamanhos = [
                    ['largura' => 643, 'altura' => 400,   'qualidade' => 90],
                    ['largura' => 1925, 'altura' => 1200,   'qualidade' => 70],
                ];
                $imagens = reduzirImagem($imagem_path, $tamanhos);
                
            ?>
                <li>
                    <?php ///echo $imagens['urls']['443x283']; ?>
                    <a href="<?php echo get_permalink(get_the_ID()) ?>">
                        <div class="ResumoDeTRabalhos"><?php echo get_the_excerpt( get_the_ID(  ) )?></div>
                        <picture>
                            <img src='<?php echo $imagens['urls']['1925x1200']  ?>' width="200" height="200" alt='<?php the_title_attribute(); ?>'>
                        </picture>
                    </a>
                </li>
            <?php
            endwhile;
            ?>
        </ul>
        <div id="trabArrowNext">></div>
        <div id="trabArrowPrev"><</div>
    <?php
        wp_reset_postdata();
    else :
        echo '<p>Nenhum Web Design encontrado.</p>';
    endif;
    ?>
</section>




<?php get_template_part("/partes/rodape/index"); ?>



<?php get_footer(); ?>