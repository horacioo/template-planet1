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


<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------aqui eu descubro se a div é horizontal ou vertical----------------------->
<script>
    document.addEventListener("DOMContentLoaded", updateOrientationClasses);
    window.addEventListener("resize", updateOrientationClasses);

    function updateOrientationClasses() {
        const gridItems = document.querySelectorAll('.grid-item');

        gridItems.forEach(item => {
            const rect = item.getBoundingClientRect();
            const width = rect.width;
            const height = rect.height;

            // Remove classes antigas, se houver
            item.classList.remove('horizontal', 'vertical', 'nano');

            // Verifica se é "nano" primeiro
            if (width < 200 || height < 200) {
                item.classList.add('nano');
            } else {
                // Define a nova classe com base na proporção, caso não seja "nano"
                if (width > height) {
                    item.classList.add('horizontal');
                } else {
                    item.classList.add('vertical');
                }
            }
        });
    }
</script>

<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->








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





<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!-------------Atualizando o css------------------------------------------------------>
<script>
    function isLocalhost() {
        if (document.location.hostname === 'localhost') {
            console.log("Estamos no ambiente localhost");
            return true;
        } else {
            console.log("Não estamos no ambiente localhost");
            return false;
        }
    }

    // Função para verificar atualizações nos arquivos CSS e recarregar o cache
    function updatePageOnCssChange() {
        if (isLocalhost()) {
            const cssFiles = document.querySelectorAll('link[rel="stylesheet"]');

            if (cssFiles.length === 0) {
                console.log("Nenhum arquivo CSS encontrado na página");
            } else {
                console.log(`${cssFiles.length} arquivo(s) CSS encontrado(s) na página`);
            }

            // Atualiza o href de cada CSS a cada 5 segundos para garantir uma nova versão
            setInterval(() => {
                cssFiles.forEach((cssFile) => {
                    const originalHref = cssFile.getAttribute('href').split('?')[0];

                    // Adiciona timestamp para forçar o cache-busting
                    cssFile.setAttribute('href', `${originalHref}?timestamp=${new Date().getTime()}`);

                    //alert(`Arquivo CSS atualizado: ${cssFile.href}`);
                });
            }, 2000); // Verifica a cada 5 segundos
        }
    }

    // Executa a função para atualizar a página sempre que o CSS é alterado
    updatePageOnCssChange();
</script>



<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->






<!----------------------------------------------------------------------------------->
<!---------------Controle da tela do site-------------------------------------------->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const openDiv = document.querySelector('.open');

        openDiv.addEventListener('click', function() {
            if (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement) {
                // Sai do modo tela cheia
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.mozCancelFullScreen) { // Suporte para Firefox
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) { // Suporte para Chrome, Safari e Opera
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) { // Suporte para IE/Edge
                    document.msExitFullscreen();
                }
            } else {
                // Entra no modo tela cheia
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) { // Suporte para Firefox
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) { // Suporte para Chrome, Safari e Opera
                    document.documentElement.webkitRequestFullscreen();
                } else if (document.documentElement.msRequestFullscreen) { // Suporte para IE/Edge
                    document.documentElement.msRequestFullscreen();
                }
            }
        });
    });
</script>
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->





<!---------------------piscando os botões-------------------------------------------->
<script>
   document.addEventListener("DOMContentLoaded", function () {
  setInterval(() => {
    // Seleciona todas as divs com a classe "widget"
    const widgetDivs = document.querySelectorAll('.widget');

    widgetDivs.forEach(widget => {
      // Seleciona todas as ul dentro dessas divs
      const ulElements = widget.querySelectorAll('ul');

      ulElements.forEach(ul => {
        // Seleciona todas as li dentro dessas ul
        const liElements = ul.querySelectorAll('li');

        liElements.forEach((li, index) => {
          // Define um atraso baseado no índice
          setTimeout(() => {
            li.classList.toggle('blink');
          }, index * 1000); // Cada `li` tem 1 segundo de diferença
        });
      });
    });
  }, 1000 * document.querySelectorAll('.widget ul li').length); // Reseta o loop após todas piscarem
});

</script>
<!------------------------------------------------------------------------------------>




<?php wp_footer(); ?>
</body>

</html>