<main>


    <header>
        <h1>Planet1 criação de sites e sistemas</h1>
        <p>A planet1 é uma agência de criação de sites que lhe apoia no seu projeto, seja para criação de sites profissionais, criação de um sistemas, aplicativos em geral. Entre em contato e descubra como podemos apoiá-lo!</p>
        <picture>
            <img src="<?php echo tema ?>/partes/main/imagens/imagemHome.avif" alt="imagem de uma garota que representa a planet1">
        </picture>

    </header>

    <a class='buttom'>mais detalhes</a>
    <a class='buttom2'>Saiba mais</a>

    <h2 id="titulo">Nossos Serviços</h2>














    <?php
    $parent_id = 11; // ID da página pa
    $child_pages = get_pages(array(
        'child_of' => $parent_id,
        'sort_column' => 'menu_order', // Ordenar pelas posições do menu
        'sort_order' => 'ASC',          // Ordem crescente
        'number'      => 7
    ));

    // Verificar se há páginas filhas
    if (! empty($child_pages)) {
        echo '<ul id="serviços">';
        foreach ($child_pages as $page) {
            $img = get_the_post_thumbnail_url($page->ID);
            /**************************************************/
            $imagem_path = ImagemPath($page->ID);
            $tamanhos = [
                ['largura' => 199, 'altura' => 206,   'qualidade' => 90],
                ['largura' => 256, 'altura' => 274,   'qualidade' => 70],
                ['largura' => 373, 'altura' => 386,   'qualidade' => 60],
            ];
            $imagens = reduzirImagem($imagem_path, $tamanhos);
            /**************************************************/

            echo '<li class="servicosHome"> 
                    
                    <div class="destaque">
                    <a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>
                    <p>'.get_the_excerpt( $page->ID ).'</p>
                    </div>

                        <a href="' . get_permalink($page->ID) . '">
                            <picture> 
                                <img src="' . $imagens['urls']['373x386'] . '" alt="' . get_the_title($page->ID) . '">
                            </picture>
                        </a>
            </li>';
        }
        echo '</ul>';
    } else {
        echo '';
    }

    ?>
    <div id="tituloBig"> </div>










    <section id="about">
        <h2>Sobre Nós</h2>

        <p id="paragrafo1">A planet1 é uma agencia de criação de sites que atua junto a nossos cliente com eficiencia na criação de sites profissionais , oferecendo sites de qualidade, atendimento eficiente e hospedagem eficiente para seus clientes.</p>
        <p id="paragrafo2">Ha mais de 20 anos no mundo da programação, trabalhei com muitos clientes, tendo trabalhos realizados para grandes empresas, como Volks, Fiat, GM, Rodobens... além da criação de sites profissionais para as marcas mencionadas acima, também trabalhei com a criação de sistema de gestão de clientes integrados para dar maior flexibilidade a mantenção dos leads vindos de inúmeros sites integrados</p>

        <picture>
            <source srcset="<?php echo tema; ?>/partes/main/imagens/moça1-768.png" media="(max-width: 768px)">
            <source srcset="<?php echo tema; ?>/partes/main/imagens/moça1-1024.png" media="(max-width: 1024px)">
            <img src="<?php echo tema; ?>/partes/main/imagens/moça1.png" alt="imagem de uma garota que representa a planet1">
        </picture>
    </section>

    <div id="separador"></div>


    <section id="englisVersion">
        <h2>We Serve Clients Across the U.S. with Ease!</h2>
        <p>At Planet1, we specialize in delivering high-quality websites and systems, no matter where you are in the United States. From New York to California, we make remote collaboration seamless and efficient.</p>
        <ul>
            <li>Custom Solutions: We design websites that meet your unique business needs.</li>
            <li>Clear Communication: Stay updated throughout the entire project.</li>
            <li>No Time Zone Issues: We’re experienced in working across time zones, making everything run smoothly.</li>
            <li>No matter the distance, we’re ready to help your business stand out online.</li>
        </ul>
        <p id="conclusion">Let’s talk about your project</p>
        <a href="#" id="moreData">more</a>
    </section>


    <div id="separador2"></div>

</main>