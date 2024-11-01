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
        item.classList.remove('horizontal', 'vertical');

        // Define a nova classe com base na proporção
        if (width > height) {
            item.classList.add('horizontal');
        } else {
            item.classList.add('vertical');
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
    }, { threshold: 0.5 });

    observer.observe(postsContainer);
});
</script>
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->












<?php wp_footer(); ?>
</body>

</html>