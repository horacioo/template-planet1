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


                    <div class="imagens item grid-item" id="post<?php echo $linha; ?>" style="">
                        <!------------------------------------------->
                        <div class="card">

                            <picture><img src="<?php echo $imagens['urls']['350x350']; ?>'"></picture>

                            <h2 class="titulo">
                                <?php echo get_the_title($id); ?>
                            </h2>

                            <div class="excerpt">
                                <?php echo $linha; ?>
                                <?php echo substr(get_the_excerpt($id), 0, 120); ?>
                            </div>

                            <div class="date">
                                <?php echo get_the_date("d/M"); ?>
                            </div>
                        </div>
                        <!------------------------------------------->

                    </div>


            <?php $linha++;
                endwhile;
            endif; ?>
        </section>
    </div>
















    <div id="Contato">
        <picture>
            <img src="<?php echo tema; ?>/partes/services/imagens/robo.png">
        </picture>
        <span id="texto">
            <h2>Contato</h2>
            <p>E aí, gostou do nosso site? Você precisa de criação de sites profissionais para o seu empreendimento? Não perca seu tempo, acesse o formulário ao lado, preencha agora mesmo, e vamos entrar em contato com a proposta ideal para você!</p>
            <p>Não deixe seu negócio off-line, faça como as grandes empresas que se destacaram no ramo e apareça para o mundo digital! criação de sites profissionais é com a Planet1</p>
        </span>


        <img id="form1" src="<?php echo tema; ?>/partes/services/imagens/form1.svg">
        <img id="form2" src="<?php echo tema; ?>/partes/services/imagens/phone1.svg">
        <img id="form3" src="<?php echo tema; ?>/partes/services/imagens/telegran.svg">


    </div>





</section>