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