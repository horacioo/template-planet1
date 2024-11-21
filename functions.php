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

































/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/

require_once "" . $addr . "/funcoes/banners.php";


function inserir_html_no_meio_do_conteudo($content, $categoria, $indices_insercao = [2, 4], $conteudos_para_inserir = []) {
    // Obtenha os conteúdos dinâmicos (exemplo de banners)
    $x = Banner1(); // Pode ser qualquer conteúdo dinâmico
    $Cat = GetCategoria($categoria); 
    $y = Banner2($Cat); // Outro conteúdo dinâmico baseado na categoria



    //echo "$categoria";


    // Defina os conteúdos a serem inseridos
    $conteudos_para_inserir[2] = $x;  // Exemplo de como o conteúdo será adicionado a um índice
    $conteudos_para_inserir[4] = $y;

    // Verifica se há parágrafos para dividir
    if (strpos($content, '</p>') !== false) {
        // Divida o conteúdo em parágrafos
        $paragrafos = explode('</p>', $content);

        // Adicione o HTML na posição desejada
        foreach ($paragrafos as $index => &$paragrafo) {
            // Adiciona o `</p>` que foi removido pelo `explode`
            $paragrafo .= '</p>';

            // Insere o conteúdo nos índices desejados
            if (in_array($index, $indices_insercao)) {
                if (isset($conteudos_para_inserir[$index])) {
                    $conteudo = $conteudos_para_inserir[$index];
                    if ($conteudo != null) {
                        $paragrafo .= $conteudo; // Adiciona o conteúdo específico no parágrafo
                    }
                }
            }
        }

        // Recompõe o conteúdo
        $content = implode('', $paragrafos);
    }

    return $content;
}


/****************************************************************************************/
function GetCategoria($categoria)
{
    $nome = $categoria[0]->name;
    $link = get_category_link($categoria[0]->term_id);
    return array($nome, $link);
}
/****************************************************************************************/
