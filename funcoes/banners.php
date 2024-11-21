<?php


function Banner1()
{
    // Pega a URL principal do site
    $url_principal = get_home_url();

    // Pega o título do site
    $titulo_site = get_bloginfo('name');


    $banner1 = "<p class='promote'>";
    $banner1 .= "Saiba mais sobre ";
    $banner1 .= "<a href='" . $url_principal . "'>" . $titulo_site . "</a>";
    $banner1 .= "</p>";

    return $banner1;
}




function Banner2($categoria)
{
    $url_principal = $categoria[1];
    $titulo_site = $categoria[0];

    ///echo "$&@@@".$url_principal."#$%%$";

    $banner2 = "<p class='promote'>";
    $banner2 .= "veja mais sobre ";
    $banner2 .= "**<a href='" . $url_principal . "'>" . $titulo_site . "**</a>";
    $banner2 .= "</p>";

    return $banner2;
}
