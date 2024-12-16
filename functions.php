<?php

add_filter('the_content', 'do_shortcode');
date_default_timezone_set('America/Sao_Paulo');
show_admin_bar(false);
add_theme_support('menus', 'widget');
add_post_type_support('page', 'excerpt');
add_post_type_support('post', 'excerpt');
remove_action('init', 'wp_admin_bar_init');
add_theme_support('menus', 'widget');
add_theme_support('title-tag');
/**********************************************************************/
register_nav_menu('menu_principal', 'Menu Principal - Topo');
add_theme_support('post-thumbnails');





/**********************************************************************/
function disable_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    // wp_dequeue_style('wp-block-library-theme');
    // wp_dequeue_style('wc-block-style'); // Se estiver usando o WooCommerce
}
add_action('wp_enqueue_scripts', 'disable_block_library_css', 100);
/**********************************************************************/
$addr = get_template_directory();
$addr = str_replace("\\", "/", $addr);

/***************************************************************************************************/
require_once "" . $addr . "/funcoes/reduzir.php"; //include_once "". $addr . "/funcoes/reduzir.php";
//require_once "".$addr."/funcoes/filter.php"; 
/***************************************************************************************************/


/**********************************************************************/
function meu_tema_sidebar()
{
    register_sidebar(array(
        'name'          => 'Sidebar Principal',
        'id'            => 'sidebar-principal',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'meu_tema_sidebar');
/**********************************************************************/

//add_filter('jpeg_quality', function($arg){ return 50; });





/**************************Criando o custom post WebDesign*********************************/
/******************************************************************************************/
/******************************************************************************************/
/******************************************************************************************/

function criar_custom_post_webdesign()
{
    $labels = array(
        'name'               => 'Web Designs',
        'singular_name'      => 'Web Design',
        'menu_name'          => 'Web Design',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Web Design',
        'edit_item'          => 'Editar Web Design',
        'new_item'           => 'Novo Web Design',
        'view_item'          => 'Ver Web Design',
        'all_items'          => 'Todos os Web Designs',
        'search_items'       => 'Buscar Web Designs',
        'not_found'          => 'Nenhum Web Design encontrado',
        'not_found_in_trash' => 'Nenhum Web Design encontrado na lixeira',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-laptop',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'         => array('category', 'post_tag'), // Habilita categorias e tags
        'rewrite'            => array('slug' => 'webdesign'),
        'show_in_rest'       => true,
    );

    register_post_type('webdesign', $args);
}
add_action('init', 'criar_custom_post_webdesign');

/******************************************************************************************/
/******************************************************************************************/
/******************************************************************************************/
/******************************************************************************************/



























/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/

require_once "" . $addr . "/funcoes/banners.php";


function inserir_html_no_meio_do_conteudo($content, $categoria, $indices_insercao = [2, 4], $conteudos_para_inserir = [])
{
    $result = "";
    $linha = 0;

    if (strpos($content, '</p>') !== false):
        $paragrafos = explode('</p>', $content);

        $x = count($paragrafos);



        foreach ($paragrafos as $p):
            //$result .= "<p>";
            $result .=  $p;
            //$result .= "!!</p>";


            if ($linha === 1):
                $result .= Banner1();
            else: { }
            endif;

            if ($linha === 2):
                $result .= Banner2(GetCategoria($categoria));
            else: { }
            endif;


            /*
            if ($linha === 0):
                $result.="<p>";
                $result.=Banner1();
                $result.="#</p>";
            else:{echo"##";}
            endif;

            if ($linha === 1):
                $result.="<p>";
                $result.=Banner2(GetCategoria($categoria));
                $result.="@</p>";
            else:{echo"##";}
            endif; 
            */


            $linha++;
        endforeach;
    endif;
    return $result;
}


/****************************************************************************************/
function GetCategoria($categoria)
{
    if (isset($categoria[0]->name)) {
        $nome = $categoria[0]->name;
        $link = get_category_link($categoria[0]->term_id);
        return array($nome, $link);
    }
}
/****************************************************************************************/
