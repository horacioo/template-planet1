//$(".img").hide();

$(window).scroll(function () {
    var windowHeight = $(window).height();
    var elementTop = $('#imagensBotton').offset().top;
    var scroll = $(window).scrollTop();



    if (elementTop - scroll < windowHeight - 70) { // ajuste esse valor conforme necessário
        $('#elemento').show(1300);
        console.log("ok");
        /********************************************************/
        setInterval(() => { $(".imagem1").addClass("showImages") }, 1);
        setInterval(() => { $(".imagem2").addClass("showImages") }, 1000);
        setInterval(() => { $(".imagem3").addClass("showImages") }, 2000);
        setInterval(() => { $(".imagem4").addClass("showImages") }, 3000);
        /********************************************************/
    } else {
        $('#elemento').hide(1000);

    }

});