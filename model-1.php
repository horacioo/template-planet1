<?php /* Template Name: PageModelo2 */ ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php ob_start();
    define("tema", get_theme_file_uri());  ?>
    <link rel='stylesheet' id='thickbox-css' href='<?php echo tema ?>/css/scss/reset/reset.css' media='all' />
    <link rel='stylesheet' id='thickbox-css' href='<?php echo tema ?>/css/scss/menu/menu.css' media='all' />
    <link rel='stylesheet' id='thickbox-css' href='<?php echo tema ?>/css/scss/page/estilo.css' media='all' />
    <title>Document</title>
    <style>
        .fundao {
            background-color: #0000003b;
            position: fixed;
            width: 100%;
            height: 100%;
            display: inline-block;
            z-index: 12;
            left: 0;
            top: 0;
        }
    </style>
</head>
<!--------------------Header-------------------->

<body style="background-color: black;">
    <header>
        <?php get_template_part('partes/menu'); ?>
    </header>
    <main id="conteudoPrincipal">
        <!------------------------------------------------------------------------>
        <?php while (have_posts()) : the_post();
            $post_id = get_the_ID(); ?>

            <div id="texto"><?php the_content(); ?></div>
        <?php endwhile; ?>
        <!------------------------------------------------------------------------>

        <aside id="imagensBotton">
            <picture id="thumbnail"><img src="<?php echo tema ?>/imagens/sobre/imagem1.jpg" alt="<?php get_the_title() ?>" /> </picture>
            <picture id="thumbnail"><img src="<?php echo tema ?>/imagens/sobre/imagem2.jpg" alt="<?php get_the_title() ?>" /> </picture>
            <picture id="thumbnail"><img src="<?php echo tema ?>/imagens/sobre/imagem3.jpg" alt="<?php get_the_title() ?>" /></picture>
            <picture id="thumbnail"><img src="<?php echo tema ?>/imagens/sobre/imagem4.jpg" alt="<?php get_the_title() ?>" /></picture>
        </aside>

    </main>

    <picture id="Postthumbnail">
        <source media="(min-width:1367px) and (max-width:90000px)" srcset="<?php echo get_the_post_thumbnail_url($post_id, "Post_1920", array('class' => 'alignleft')); ?>">
        <source media="(min-width:1025px) and (max-width:1366px)" srcset="<?php echo get_the_post_thumbnail_url($post_id, "Post_1366", array('class' => 'alignleft')); ?>">
        <source media="(min-width:1000px) and (max-width:1024px)" srcset="<?php echo get_the_post_thumbnail_url($post_id, "Post_1024", array('class' => 'alignleft')); ?>">
        <source media="(min-width:900px) and (max-width:999px)" srcset="<?php echo get_the_post_thumbnail_url($post_id, "Post_900", array('class' => 'alignleft')); ?>">
        <source media="(min-width:768px) and (max-width:899px)" srcset="<?php echo get_the_post_thumbnail_url($post_id, "Post_768", array('class' => 'alignleft')); ?>">
        <source media="(min-width:350px) and (max-width:767px)" srcset="<?php echo get_the_post_thumbnail_url($post_id, "Post_768", array('class' => 'alignleft')); ?>">
        <source media="(min-width:0px) and (max-width:349px)" srcset="<?php echo get_the_post_thumbnail_url($post_id, "Post_350", array('class' => 'alignleft')); ?>">
        <img src="<?php echo get_the_post_thumbnail_url($post_id, "Base"); ?>" />
    </picture>

    <div id="fundao"></div>

    <footer></footer>
    <script src="<?php echo tema ?>/js/jquery.js"></script>


    <script>
        var w = window.innerWidth;
        if (w < 1000) {
            jQuery('nav').hide();
            jQuery('.mobile').click(function() {
                jQuery('nav').show(600);
                jQuery('#fundao').addClass('fundao')
            })
            jQuery('#fundao').click(function() {
                jQuery('nav').hide(600);
                jQuery('#fundao').removeClass('fundao')
            })
        }
    </script>

    <script src="<?php echo tema ?>/js/correcoes.js"></script>
</body>

</html>