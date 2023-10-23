<?php 
if(!is_admin()){
	wp_deregister_script('jquery');
}

add_filter('the_content', 'do_shortcode');
date_default_timezone_set('America/Sao_Paulo');
show_admin_bar( false );
add_theme_support('menus', 'widget');
add_post_type_support('page', 'excerpt');
add_post_type_support('post', 'excerpt');
remove_action('init', 'wp_admin_bar_init');
add_theme_support('menus', 'widget');
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
/**********************************************************************/
register_nav_menu('menu_principal', 'Menu Principal - Topo');
register_nav_menu('menuIdiomas', 'menuIdiomas');
register_nav_menu('menu_home', 'Menu home - lateral');
register_nav_menu('menu_bottom', 'Menu bottom - baixo');
register_nav_menu('erro', 'erro');
/**********************************************************************/




/*******************************************************/
/*******************************************************/
add_image_size("img1",714,367,true,array( 'left', 'top' ));
add_image_size("img2",720,182,true,array( 'left', 'top' ));
add_image_size("img3",235,556,true,array( 'left', 'top' ));
add_image_size("img4",234,181,true,array( 'left', 'top' ));
add_image_size("mobile",234,234,true,array( 'left', 'top' ));
/*******************************************************/
/*******************************************************/




/**********************************************************************/
register_sidebar( 
 array(
	'name'          => "content",
	'id'            => 'content',    // ID should be LOWERCASE  ! ! !
	'description'   => 'dados da parte de baixo das páginas de conteúdo/blogs',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
   )

/************************************************************************/
);


