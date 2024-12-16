<section id="services">



    <div id="portifolio">
        <H2>Nosso Trabalho</H2>
        <p>Explore nosso portfólio e veja de perto como levamos cada negócio a um novo patamar no mundo digital! De sites únicos e funcionais a sistemas completos, cada projeto é pensado do zero, garantindo exclusividade e eficiência para os nossos clientes. Clique abaixo e inspire-se com os sites que já transformaram negócios como o seu!</p>
        
        <?php
        $args = array(
            'post_type'      => 'webdesign', // Nome do seu custom post type
            'posts_per_page' => 10,          // Limita a quantidade de posts que serão exibidos
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
        ?>
         
            <ul id="slidePortifolio" class="slick-slider">
                <?php
                while ($query->have_posts()) :
                    $query->the_post();
                    $imagem_path = ImagemPath(get_the_ID());
                    $tamanhos = [
                        ['largura' => 443, 'altura' => 283,   'qualidade' => 90],
                        ['largura' => 591, 'altura' => 377,   'qualidade' => 90],
                    ];
                    $imagens = reduzirImagem($imagem_path, $tamanhos);
                ?>
                    <li>
                        <?php echo $imagens['urls']['443x283']; ?>
                        <a href="<?php echo get_permalink(get_the_ID()) ?>">
                            <picture>
                                <img src='<?php echo $imagens['urls']['591x377']  ?>' alt='<?php the_title_attribute(); ?>'>
                            </picture>
                        </a>
                    </li>
                <?php
                endwhile;
                ?>
            </ul>
        <?php
            wp_reset_postdata();
        else :
            echo '<p>Nenhum Web Design encontrado.</p>';
        endif;
        ?>


        <img id="EsquerdaArrow" alt="seta Esquerda do slide" height="50" width="50" src="<?php echo tema ?>/partes/services/imagens/setaLeft.png">
        <img id="direitaArrow" alt="seta direita do slide" height="50" width="50" src="<?php echo tema ?>/partes/services/imagens/setaRight.png">
        <div id="botao">Ver Mais</div>
    </div>































    <div id="blog">
        <section id="postsDoBlog" class="container ">
            <div id="bloco1" class="item grid-item">
                <h2>nosso blog</h2>
                <p id="primeiroBlog">Conheça nosso blog, veja algum temas importantes ligados ao mundo da tecnologia, novidades ligadas a criação de sites profissionais, informações no mundo web, aplicativos e muitas notícias da área!</p>
            </div>

            <?php
            $args = array(
                'posts_per_page' => 22, // Define o limite para os 30 posts mais recentes
                'orderby' => 'date',    // Ordena por data
                'order' => 'DESC'       // Do mais recente para o mais antigo
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :  $linha = 1;
                while ($query->have_posts()) :
                    $query->the_post();
                    $id = get_the_id();
                    $img = get_the_post_thumbnail_url($id);
                    $alt_text = get_post_meta($img, '_wp_attachment_image_alt', true);

                    /***********************************************/
                    $imagem_path = ImagemPath($id);
                    /******esse id é o id do post******/
                    $tamanhos = [
                        ['largura' => 150, 'altura' => 150,   'qualidade' => 90],
                        ['largura' => 350, 'altura' => 125,   'qualidade' => 80],
                        ['largura' => 150, 'altura' => 300,   'qualidade' => 70],
                        ['largura' => 350, 'altura' => 350,   'qualidade' => 70],
                    ];
                    $imagens = reduzirImagem($imagem_path, $tamanhos);
                    /***********************************************/
            ?>


                    <div class="imagens item grid-item " id="post<?php echo $linha; ?>" style="">
                        
                        <div class="card">

                            <a href="<?php echo get_permalink($id) ?>">
                                <picture><img alt="<?php echo $alt_text?>" src="<?php echo $imagens['urls']['350x350']; ?>'"></picture>
                            </a>

                            <h2 class="titulo">
                                <?php echo get_the_title($id); ?>
                            </h2>

                            <div class="excerpt">
                                <?php //echo $linha; 
                                ?>
                                <?php echo substr(get_the_excerpt($id), 0, 120); ?>
                            </div>

                            <div class="date">
                                <?php echo get_the_date("d/M"); ?>
                            </div>
                        </div>
                      

                    </div>


            <?php $linha++;
                endwhile;
            endif; ?>
        </section>
    </div>
















    <div id="Contato">
        <picture>
            <img alt="imagem de robo que faz referencia  a tela de contato" src="<?php echo tema; ?>/partes/services/imagens/robo.png">
        </picture>
        <div id="texto">
            <h2>Contato</h2>
            <p>E aí, gostou do nosso site? Você precisa de criação de sites profissionais para o seu empreendimento? Não perca seu tempo, acesse o formulário ao lado, preencha agora mesmo, e vamos entrar em contato com a proposta ideal para você!</p>
            <p>Não deixe seu negócio off-line, faça como as grandes empresas que se destacaram no ramo e apareça para o mundo digital! criação de sites profissionais é com a Planet1</p>
        </div>


        <img class='move' alt="icone que representa programa de contato" id="form1" src="<?php echo tema; ?>/partes/services/imagens/form1.svg">

        <a href="https://api.whatsapp.com/send?phone=5513991159522">
            <img  alt="outro ícone que representa programa de contato" class='move' id="form2" src="<?php echo tema; ?>/partes/services/imagens/phone1.svg">
        </a>

        <a href="https://t.me/@Horacio1976?text=Sua%20mensagem%20predefinida" target="_blank">
            <img  alt="mais icone que representa programa de contato" class='move' id="form3" src="<?php echo tema; ?>/partes/services/imagens/telegran.svg">
        </a>

    </div>





</section>