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