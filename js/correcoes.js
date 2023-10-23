jQuery('document').ready(function () {

    var alturaOriginalDaFoto = 564;
    var alturaDoElemento = jQuery('#conteudoPrincipal,#conteudoPrincipalModel2').height();
    var larguraDaTela = window.innerWidth;

    if (larguraDaTela > 999 && larguraDaTela < 1023) { CalculaTamanhos(alturaDoElemento, larguraDaTela, 17, 22); }
    if (larguraDaTela >= 1024 && larguraDaTela < 1365) { CalculaTamanhos(alturaDoElemento, larguraDaTela, 20, 34); }
    if (larguraDaTela >= 1366 && larguraDaTela < 1560) { CalculaTamanhos(alturaDoElemento, larguraDaTela, 26, 27); }
    /******************************************************************/
    var sistema = NovaClasseDeafastamento();
    /******************************************************************/
    jQuery("#conteudoPrincipal").siblings('header').children('.separador').css("width","83.38vw");
    jQuery("#conteudoPrincipalModel2").siblings('header').children('.separador').css("width","86.4vw");
    //jQuery("#conteudoPrincipalModel2").css('background-color','white');
    /******************************************************************/
})



function CalculaTamanhos(alturaDoElemento, larguraDaTela, diferencaDePadding, diferencaDePaddingRight) {
    /****************************************************/
    var tamanhoCorrigido = alturaDoElemento - diferencaDePadding;
    var tamanhoCorrigidoRight = alturaDoElemento - diferencaDePaddingRight;
    /****************************************************/
    var valorNovo = tamanhoCorrigido / larguraDaTela;
    var valorNovoRight = tamanhoCorrigidoRight / larguraDaTela;
    /****************************************************/
    valorNovo = valorNovo * 100;
    valorNovoRight = valorNovoRight * 100;
    jQuery("#Postthumbnail").css('height', valorNovo + "vw");
    jQuery("#PostthumbnailRight").css('height', valorNovoRight + "vw");
    /****************************************************/
}


function NovaClasseDeafastamento() {
    var userAgent = navigator.userAgent;
    if (/Windows/.test(userAgent)) {
        return "Windows";
    } else if (/Mac/.test(userAgent)) {
        jQuery('nav').children('ul').children('li').addClass("correcaoDistancia");
        jQuery('#conteudoPrincipal, #conteudoPrincipalModel2').children('#imagensBotton').children('picture').addClass("novoEspaçoEntreImagens");
        return "Mac";
    } else if (/Linux/.test(userAgent)) {
        return "Linux";
    } else {
        return "Outro";
    }
}