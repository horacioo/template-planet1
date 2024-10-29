<script src="<?php echo tema; ?>/javascript/jquery.slim.min.js"></script>
<script src="<?php echo tema; ?>/partes/menu/javascript/menu.min.js"></script>
<script src="<?php echo tema; ?>/javascript/slick.min.js"></script>

<script>
    jQuery('.slick-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,

        prevArrow: jQuery('.custom-prev'), // Seta "Anterior"
        nextArrow: jQuery('.custom-next'), // Seta "Próxima"
    });
</script>





<!-------aqui é o balãozinho do blog----------->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const triggerDivs = document.querySelectorAll('.imagens');
    const flipDiv = document.querySelector('.slideFake');
    const segundoElement = document.getElementById('segundo'); // Seleciona o elemento de ID 'segundo'

    triggerDivs.forEach(triggerDiv => {
        const infoContent = triggerDiv.querySelector('.info'); // Seleciona a div com a classe 'info' dentro da imagem

        triggerDiv.addEventListener('mouseenter', function() {
            console.log("Mouse entrou na imagem:");
            flipDiv.classList.add('mostrar-segundo'); // Adiciona a classe para mostrar a div
            segundoElement.innerHTML = infoContent.innerHTML; // Coloca o conteúdo HTML no elemento 'segundo'
        });

        triggerDiv.addEventListener('mouseleave', function() {
            console.log("Mouse saiu da imagem:");
            flipDiv.classList.remove('mostrar-segundo'); // Remove a classe para esconder a div
            segundoElement.innerHTML = ''; // Limpa o conteúdo do elemento 'segundo' quando o mouse sai
        });
    });
});

</script>





<?php wp_footer(); ?>
</body>

</html>