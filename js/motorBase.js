  /******************************************************************/
  const parentElement = document.getElementById("RedesSociais");
  const childElements = parentElement.children;
  var linha = 500;

  for (let i = 0; i < childElements.length; i++) {
      setTimeout(() => {
          console.log(childElements[i]);
          const childElement = childElements[i];
          childElement.classList.add("classe_" + i)
          childElement.classList.add("firstAcess")
      }, linha);

      linha = linha + 500;
  }