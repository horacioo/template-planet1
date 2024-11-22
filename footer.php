<script src="<?php echo tema; ?>/javascript/jquery.slim.min.js"></script>


<?php
if (is_home()) {
    echo "<script src='" . tema . "/partes/menu/javascript/menu.min.js'></script>";
} else {
    echo "<script src='" . tema . "/partes/menu/javascript/menuInterno.min.js'></script>";
}
?>



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





<script>
    jQuery(document).ready(function () {
    function initializeSlick() {
        // Verifica se a largura da janela é maior que 768px
        if (jQuery(window).width() > 768) {
            jQuery('#serviços').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: jQuery('.custom-prev'), // Seta "Anterior"
                nextArrow: jQuery('.custom-next'), // Seta "Próxima"
            });
        }
    }

    // Inicializa o slick na carga da página
    initializeSlick();

    // Verifica a largura novamente ao redimensionar a janela
    jQuery(window).resize(function () {
        if (jQuery(window).width() > 768) {
            // Caso ainda não esteja inicializado
            if (!jQuery('#serviços').hasClass('slick-initialized')) {
                initializeSlick();
            }
        } else {
            // Destroi o slick se a largura for menor ou igual a 768px
            if (jQuery('#serviços').hasClass('slick-initialized')) {
                jQuery('#serviços').slick('unslick');
            }
        }
    });
});

</script>





<script>
  
  jQuery(document).ready(function () {
    const $tituloBig = jQuery("#tituloBig");

    function bindHoverEvents() {
        jQuery('.servicosHome').hover(
            function () {
                if (window.innerWidth > 768) { // Verifica largura da tela
                    // Quando o mouse entra
                    const $span = jQuery(this).children('span');
                    if ($span.length) {
                        const info = $span.html(); // Captura o HTML dentro do span
                        $tituloBig.html(info) // Atualiza o conteúdo do elemento com ID 'tituloBig'
                            .addClass("ShowTituloHome") // Adiciona a classe 'ShowTituloHome'
                            .removeClass("fadeTitulo"); // Remove classe de fade, caso ainda esteja ativa
                    }
                }
            },
            function () {
                if (window.innerWidth > 768) { // Verifica largura da tela
                    // Quando o mouse sai
                    $tituloBig.removeClass("ShowTituloHome") // Remove a classe 'ShowTituloHome'
                        .addClass("fadeTitulo"); // Adiciona a classe 'fadeTitulo'

                    // Remove o fade após 300ms
                    setTimeout(() => $tituloBig.removeClass("fadeTitulo"), 300);
                }
            }
        );
    }

    function unbindHoverEvents() {
        jQuery('.servicosHome').off('mouseenter mouseleave');
    }

    function handleResize() {
        if (window.innerWidth > 768) {
            bindHoverEvents();
        } else {
            unbindHoverEvents();
        }
    }

    // Executa no carregamento inicial
    handleResize();

    // Monitora alterações de tamanho da janela
    jQuery(window).resize(handleResize);
});

</script>





<!----------------------------------------------------------------------------------->
<!----------aqui eu descubro se a div é horizontal ou vertical----------------------->
<script src="<?php echo tema; ?>/javascript/efeitosTela/DivVerticalHorizontal.js"></script>
<!----------------------------------------------------------------------------------->
<!-------------Atualizando o css------------------------------------------------------>
<script src="<?php echo tema; ?>/javascript/efeitosTela/AtualizaCSS.js"></script>
<!----------------------------------------------------------------------------------->
<!---------------Controle da tela do site-------------------------------------------->
<script src="<?php echo tema; ?>/javascript/efeitosTela/Tela.js"></script>
<!----------------------------------------------------------------------------------->
<!---------------------piscando os botões-------------------------------------------->
<script src="<?php echo tema; ?>/javascript/efeitosTela/piscandoosBotoes.js"></script>
<!------------------------------------------------------------------------------------>


<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<script>
    /*
    document.addEventListener("DOMContentLoaded", function() {
        const postsContainer = document.getElementById('postsDoBlog');
        const posts = postsContainer.querySelectorAll('.item');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Adiciona a classe 'visible' gradualmente a cada post
                    posts.forEach((post, index) => {
                        setTimeout(() => {
                            post.classList.add('visible');
                        }, index * 200); // Atraso progressivo de 200ms para cada post
                    });
                    observer.unobserve(postsContainer); // Para de observar depois que a animação acontece
                }
            });
        }, {
            threshold: 0.5
        });

        observer.observe(postsContainer);
    });
    */
</script>
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->



<script>
    // Configuração de distância mínima e fator de movimentação
    const minDistance = 450; // Distância mínima em pixels
    const moveFactor = 0.1; // Fator de movimentação (quanto se mover)
    const smoothingFactor = 0.1; // Fator de suavização (quanto menor, mais suave)
    const maxScale = 1.1; // Fator máximo de escala (aumento)

    // Seleciona os elementos
    const moveElements = document.querySelectorAll('.move');

    // Armazena as posições e escalas alvo e atuais
    const elementData = new Map();

    // Inicializa dados dos elementos
    moveElements.forEach(element => {
        elementData.set(element, {
            currentX: 0,
            currentY: 0,
            targetX: 0,
            targetY: 0,
            currentScale: 1,
            targetScale: 1
        });
    });

    // Função para calcular a distância
    function calculateDistance(x1, y1, x2, y2) {
        return Math.sqrt((x2 - x1) ** 2 + (y2 - y1) ** 2);
    }

    // Função de animação
    function animateElements() {
        moveElements.forEach(element => {
            const data = elementData.get(element);

            // Interpola as posições e a escala
            data.currentX += (data.targetX - data.currentX) * smoothingFactor;
            data.currentY += (data.targetY - data.currentY) * smoothingFactor;
            data.currentScale += (data.targetScale - data.currentScale) * smoothingFactor;

            // Aplica a transformação suavizada
            element.style.transform = `translate(${data.currentX}px, ${data.currentY}px) scale(${data.currentScale})`;
        });

        // Continua o ciclo de animação
        requestAnimationFrame(animateElements);
    }

    // Inicia a animação
    animateElements();

    // Evento de movimento do mouse
    document.addEventListener('mousemove', (event) => {
        const mouseX = event.clientX;
        const mouseY = event.clientY;

        moveElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            const elementX = rect.left + rect.width / 2;
            const elementY = rect.top + rect.height / 2;

            const distance = calculateDistance(mouseX, mouseY, elementX, elementY);

            const data = elementData.get(element);

            if (distance < minDistance) {
                // Calcula as posições e a escala alvo
                data.targetX = (mouseX - elementX) * moveFactor;
                data.targetY = (mouseY - elementY) * moveFactor;

                // Aumenta o elemento gradualmente
                data.targetScale = maxScale;
            } else {
                // Reseta as posições e escala alvo caso esteja fora da distância mínima
                data.targetX = 0;
                data.targetY = 0;
                data.targetScale = 1; // Volta ao tamanho original
            }
        });
    });
</script>
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->




<?php wp_footer(); ?>
</body>

</html>