#<?php
wp_nav_menu(array(
    'menu' => 'menuDeIdiomas', // Substitua pelo nome do seu menu
    'container' => 'div',
    'container_class' => 'idiomasClass', // Define a classe do container como vazia
    'menu_class' => '', // Define a classe do menu como vazia
    'items_wrap' => '<ul>%3$s</ul>', // Remove a tag <div> que envolve o menu
));
?>