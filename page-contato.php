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
    <link rel='stylesheet' id='thickbox-css' href='<?php echo tema ?>/css/scss/idiomas/style.css' media='all' />
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

    <?php get_template_part('partes/idiomas'); ?>

    <main id="conteudoPrincipal">
        <!------------------------------------------------------------------------>
        <?php while (have_posts()) : the_post();
            $post_id = get_the_ID(); ?>

            <div id="texto">
                <h1><?php echo the_title();  ?></h1>
                <?php the_content(); ?>


                <div id="icones">
                    <a href="https://www.instagram.com/cestu_restaurante/" target="new"><img src="<?php echo tema; ?>/imagens/icones/svg/instagram.svg" class="iconLink"></a>
                    <a href="https://www.facebook.com/profile.php?id=100090009788158" target="new"><img src="<?php echo tema; ?>/imagens/icones/svg/facebook.svg" class="iconLink"></a>
                    <a href="https://api.whatsapp.com/send?phone=5513997254471" target="new"><img src="<?php echo tema; ?>/imagens/icones/svg/whatsapp.svg" class="iconLink"></a>
                    <a href="https://www.threads.net/@cestu_restaurante" target="new"><img src="<?php echo tema; ?>/imagens/icones/Threads.png" class="iconLink"></a>
                </div>

                

                
            </div>
        <?php endwhile; ?>
        <!------------------------------------------------------------------------>
        <iframe id="mapaDoRestaurante" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.7905485936944!2d-46.33275452472536!3d-23.96784557665146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0339f5eb2859%3A0xa89c24eb45fb934f!2sCest%C3%B9%20Restaurante!5e0!3m2!1spt-BR!2sbr!4v1694753495324!5m2!1spt-BR!2sbr" width="100%" min-height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <!----------------------------->
        <iframe id="estacionamento" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d718.2099664234009!2d-46.33060792634219!3d-23.968220053076685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce030440524ec9%3A0xe12d372d8ddfecf0!2sR.%20Jorge%20Tibiri%C3%A7%C3%A1%2C%2032%20-%20Gonzaga%2C%20Santos%20-%20SP%2C%2011055-250!5e0!3m2!1spt-BR!2sbr!4v1694755691537!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!------------------------------------------------------------------------>
        <div id="imagensBotton">
            <?php define("fotosFolder", "pasta_" . $post_id); ?>
            <?php get_template_part('partes/fotosBottom'); ?>
        </div>

    </main>

    <aside>
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
    </aside>

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

    <script src="<?php echo tema ?>/js/imagensBottom.js"></script>
    <script src="<?php echo tema ?>/js/correcoes.js"></script>
    <script>
        jQuery('#estacionamento').hide();
        jQuery("#mapaLink").click(function() {
            jQuery('#estacionamento').show(200);
        })
        //jQuery("#mapaLink").dbclick(function(){ jQuery('#estacionamento').hide(200);  })
    </script>
</body>

</html>