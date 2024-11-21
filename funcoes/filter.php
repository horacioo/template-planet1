<?php 

function inserir_html_no_meio_do_conteudo( $content ) {
    // Defina a variável que você quer incluir
    $x = 'teste';

    // Defina o trecho de HTML que você deseja adicionar, incluindo a variável $x
    $html_inserido = '<div class="meu-trecho">Conteúdo da variável X: ' . esc_html( $x ) . '</div>';

    // Divida o conteúdo em parágrafos
    $paragrafos = explode( '</p>', $content );

    // Defina após qual parágrafo o HTML será inserido
    $posicao_insercao = 2;

    // Adicione o HTML na posição desejada
    foreach ( $paragrafos as $index => &$paragrafo ) {
        // Adiciona o `</p>` que foi removido pelo `explode`
        $paragrafo .= '</p>';
        
        // Insere o HTML na posição desejada
        if ( $index == $posicao_insercao ) {
            $paragrafo .= $html_inserido;
        }
    }

    // Recompõe o conteúdo
    return implode( '', $paragrafos );
}
add_filter( 'the_content', 'inserir_html_no_meio_do_conteudo' );
