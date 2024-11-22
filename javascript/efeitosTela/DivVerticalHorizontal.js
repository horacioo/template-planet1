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