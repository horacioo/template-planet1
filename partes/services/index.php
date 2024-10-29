<section id="services">


    <!------------------------------------------------------------->
    <div id="portifolio">
        <H2>Nosso Trabalho</H2>
        <p>Explore nosso portfólio e veja de perto como levamos cada negócio a um novo patamar no mundo digital! De sites únicos e funcionais a sistemas completos, cada projeto é pensado do zero, garantindo exclusividade e eficiência para os nossos clientes. Clique abaixo e inspire-se com os sites que já transformaram negócios como o seu!</p>

        <!---------------------------------------------------------->
        <ul id="slidePortifolio" class="slick-slider">
            <li>
                <picture>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl7d2Nq9QtgleCpdMQNaugI35Txxnk3moa5A&s" alt="">
                </picture>
            </li>
            <li>
                <picture>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl7d2Nq9QtgleCpdMQNaugI35Txxnk3moa5A&s" alt="">
                </picture>
            </li>
        </ul>
        <!---------------------------------------------------------->
        <img id="EsquerdaArrow" alt="seta Esquerda do slide" height="50" width="50" src="<?php echo tema ?>/partes/services/imagens/setaLeft.png">
        <img id="direitaArrow" alt="seta direita do slide" height="50" width="50" src="<?php echo tema ?>/partes/services/imagens/setaRight.png">


        <div id="botao">Ver Mais</div>
    </div>
    <!------------------------------------------------------------->



    <div id="blog">


        <section>
            <div id="bloco1">
                <h2>nosso blog</h2>
                <div class="slideFake">
                    <p id="primeiro">Conheça nosso blog, veja algum temas importantes ligados ao mundo da tecnologia, novidades ligadas a criação de sites profissionais, informações no mundo web, aplicativos e muitas notícias da área!</p>
                    <p id="segundo"></p>
                </div>
            </div>

            <?php
            $args = array(
                'posts_per_page' => 13, // Define o limite para os 30 posts mais recentes
                'orderby' => 'date',    // Ordena por data
                'order' => 'DESC'       // Do mais recente para o mais antigo
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :  $linha = 1;
                while ($query->have_posts()) :
                    $query->the_post();
                    $id = get_the_id();
                    $img = get_the_post_thumbnail_url($id);

                    /***********************************************/
                    $imagem_path = ImagemPath($id);/******esse id é o id do post******/
                    $tamanhos = [
                        ['largura' => 150, 'altura' => 150,   'qualidade' => 90],
                        ['largura' => 350, 'altura' => 125,   'qualidade' => 80],
                        ['largura' => 150, 'altura' => 300,   'qualidade' => 70],
                        ['largura' => 350, 'altura' => 350,   'qualidade' => 70],
                    ];
                    $imagens = reduzirImagem($imagem_path, $tamanhos);
                    /***********************************************/


            ?>
                    <?php if ($linha == 1): ?>
                            <div class="imagens" id="post<?php echo $linha; ?>" style="background-image: url('<?php echo $imagens['urls']['350x350']; ?>');">
                    <?php elseif ($linha==2): ?>
                            <div class="imagens" id="post<?php echo $linha; ?>" style="background-image: url('<?php echo $imagens['urls']['350x125']; ?>');">
                    <?php elseif ($linha==3): ?>
                            <div class="imagens" id="post<?php echo $linha; ?>" style="background-image: url('<?php echo $imagens['urls']['150x300']; ?>');">
                        <?php else: ?>
                            <div class="imagens" id="post<?php echo $linha; ?>" style="background-image: url('<?php echo $imagens['urls']['150x150']; ?>');">
                    <?php endif ?>


                            <span class="info">
                                <picture><img src="<?php echo $imagens['urls']['150x150']; ?>" alt='imagem' width="20" height="20"></picture>
                                <?php echo get_the_excerpt($id); ?>
                            </span>
                            </div>
                    <?php $linha++;
                endwhile;
            endif; ?>
        </section>


    </div>




</section>