jQuery(document).ready(function () {
  // Verifica inicialmente a largura da tela
  if (window.innerWidth < 768) {
    EscondeElementos();
  }
  /*************************************************/
  /*************************************************/
  /*************************************************/
  jQuery(window).resize(function () {
    if (window.innerWidth < 768) {
      EscondeElementos();
    } else {
      jQuery(".SegundoMenuTopo").show();
    }
  });
  /*************************************************/
  /*************************************************/

  jQuery("#icon").click(function () {
    Click();
  });

  /*************************************************/
  /*************************************************/
  jQuery("#fundao").click(function () {
    if (window.innerWidth < 768) {
      // Verifica novamente a largura da tela
      EscondeElementos();
    }
  });

  /*************************************************/
  /*************************************************/
  /*************************************************/
});

function EscondeElementos() {
  jQuery("#fundao").hide();
  jQuery(".SegundoMenuTopo").hide();
}

function Click() {
  jQuery(".SegundoMenuTopo").addClass("openMenu");
  jQuery(".SegundoMenuTopo").show();
  jQuery("#fundao").show();
}
