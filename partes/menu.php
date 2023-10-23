<object id="menuIcon">
    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_322_559)">
            <path d="M12 72H84V64H12V72ZM12 52H84V44H12V52ZM12 24V32H84V24H12Z" fill="black" />
        </g>
        <defs>
            <clipPath id="clip0_322_559">
                <rect width="96" height="96" fill="white" />
            </clipPath>
        </defs>
    </svg>
</object>
<?php
wp_nav_menu(array(
    'menu' => 'topo', // Substitua pelo nome do seu menu
    //'container' => 'nav',
    'container_class' => '', // Define a classe do container como vazia
    'menu_class' => '', // Define a classe do menu como vazia
    'items_wrap' => '<ul>%3$s</ul>', // Remove a tag <div> que envolve o menu
));
?>