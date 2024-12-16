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
        autoplaySpeed: 5000,

        prevArrow: jQuery('.custom-prev'), // Seta "Anterior"
        nextArrow: jQuery('.custom-next'), // Seta "Próxima"
    });
    /****************************************************************/
    /****************************************************************/
    jQuery('#slidePortifolio').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,

        prevArrow: jQuery('#EsquerdaArrow'), // Seta "Anterior"
        nextArrow: jQuery('#direitaArrow'), // Seta "Próxima"
    });
</script>












<script >
    jQuery('#MeusTrabalhos').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        arrows: true, // Habilita botões personalizados
        prevArrow: jQuery('#trabArrowPrev'),
        nextArrow: jQuery('#trabArrowNext')
    });
</script>












<script>
    jQuery(document).ready(function() {
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
        jQuery(window).resize(function() {
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
    jQuery(document).ready(function() {
        const $tituloBig = jQuery("#tituloBig");

        function bindHoverEvents() {
            jQuery('.servicosHome').hover(
                function() {
                    if (window.innerWidth > 768) { // Verifica largura da tela
                        // Quando o mouse entra
                        const $span = jQuery(this).children('.destaque');
                        if ($span.length) {
                            const info = $span.html(); // Captura o HTML dentro do span
                            $tituloBig.html(info) // Atualiza o conteúdo do elemento com ID 'tituloBig'
                                .addClass("ShowTituloHome") // Adiciona a classe 'ShowTituloHome'
                                .removeClass("fadeTitulo"); // Remove classe de fade, caso ainda esteja ativa
                        }
                    }
                },
                function() {
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
                jQuery("#tituloBig").hide();
            }
        }

        // Executa no carregamento inicial
        handleResize();

        // Monitora alterações de tamanho da janela
        jQuery(window).resize(handleResize);
    });
</script>








<script src="<?php echo tema; ?>/javascript/efeitosTela/DivVerticalHorizontal.js"></script>


<script src="<?php echo tema; ?>/javascript/efeitosTela/AtualizaCSS.js"></script>


<script src="<?php echo tema; ?>/javascript/efeitosTela/Tela.js"></script>


<script src="<?php echo tema; ?>/javascript/efeitosTela/piscandoosBotoes.js"></script>



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






<script>
  
  document.addEventListener("DOMContentLoaded", () => {
        // Configurações
        const minDivs = 5; // Mínimo de divs a serem criadas
        const maxDivs = 10; // Máximo de divs a serem criadas
        const minSpeed = 5; // Velocidade mínima em segundos
        const maxSpeed = 42; // Velocidade máxima em segundos

        const parentElements = document.querySelectorAll('.backgroundForm');

        // Função para gerar um número aleatório dentro de um intervalo
        function random(min, max) {
            return Math.random() * (max - min) + min;
        }

        // Função para criar divs e movimentá-las
        function createAndMoveDivs(parent) {
            // Gera entre `minDivs` e `maxDivs` divs
            const numDivs = Math.floor(random(minDivs, maxDivs + 1));

            for (let i = 0; i < numDivs; i++) {
                const div = document.createElement('div');
                div.classList.add('moveBG');

                // Define uma posição inicial aleatória dentro do pai
                div.style.left = `${random(0, parent.clientWidth - 30)}px`;
                div.style.top = `${random(0, parent.clientHeight - 30)}px`;

                parent.appendChild(div);

                // Função para movimentar a div
                function moveDiv() {
                    const newX = random(0, parent.clientWidth - 30);
                    const newY = random(0, parent.clientHeight - 30);
                    const duration = random(minSpeed, maxSpeed) * 1000; // Velocidade configurada em segundos

                    // Aplica a transição
                    div.style.transition = `transform ${duration}ms linear`;
                    div.style.transform = `translate(${newX - parseFloat(div.style.left)}px, ${newY - parseFloat(div.style.top)}px)`;

                    // Atualiza a posição final após o movimento
                    setTimeout(() => {
                        div.style.left = `${newX}px`;
                        div.style.top = `${newY}px`;
                        div.style.transform = 'none'; // Reseta a transformação
                        moveDiv(); // Recursivamente chama a função
                    }, duration);
                }

                moveDiv();
            }
        }

        // Aplica a lógica para cada elemento com a classe backgroundForm
        parentElements.forEach(parent => createAndMoveDivs(parent));
    });
</script>









<?php wp_footer(); ?>
</body>

</html>