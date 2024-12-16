<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <?php
    ob_start();

    $path_corrigido = str_replace('\\', '/', get_template_directory());
    define('pasta', $path_corrigido);
    define("tema", get_theme_file_uri());

    ?>





    <style>
        @font-face {
            font-family: "Inter";
            src: url("<?php echo tema; ?>/fontes/LeagueSpartan-Regular.ttf") format('truetype');
        }

        * {
            font-family: 'Inter';
        }
    </style>


    <link rel="stylesheet" href="<?php echo tema; ?>/css/slick/slick.css" media="all">
    <link rel="stylesheet" href="<?php echo tema; ?>/css/index.css" media="all">
    <style>
        <?php echo file_get_contents(tema . "/css/index.css"); ?>
    </style>

    <?php wp_head(); ?>


</head>

<body class='wrapper'>