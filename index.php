<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php ob_start();
    define("tema", get_theme_file_uri());  ?>
    <link rel='stylesheet' id='thickbox-css' href='<?php echo tema ?>/css/scss/reset/reset.css' media='all' />
    <link rel='stylesheet' id='thickbox-css' href='<?php echo tema ?>/css/scss/grid/main.css' media='all' />
    <title>Document</title>
</head>
<!--------------------Header-------------------->

<body class="max" id="wrapper">
    <!----------------------------------------------------------------->
    <header id="header">
        <section id="apreesentacao">
            <h1>Criação de sites</h1>
            <p>Bem-vindo à Planet1, onde a excelência digital ganha vida. Especialistas em Santos e hospedagem confiável. Junte-se à nossa jornada!</p>
        </section>
    </header>
    <!----------------------------------------------------------------->
    <section id="textoApresentacao">


        <!----->
        <object>
            <svg class="logotipoB" width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 80V160H25.1429H50.2857V116.364V72.7273H62.8571H75.4286V36.3636V0H37.7143H0V80ZM84.5714 36.3636V72.7273H97.1429H109.714V116.364V160H134.857H160V80V0H122.286H84.5714V36.3636ZM54.8571 120V160H80H105.143V120V80H80H54.8571V120Z" fill="#FFF068" />
            </svg>
        </object>
        <!----->








        <p>
            Na Planet1, unimos inovação e expertise para criar sites excepcionais em Santos. Oferecemos também serviços de hospedagem confiável para que você possa se concentrar em seu negócio. Junte-se a nós para uma jornada digital de sucesso.
        </p>
    </section>
    <!----------------------------------------------------------------->
    <nav class="padding">
        <?php get_template_part('partes/menu'); ?>
    </nav>
    <!----------------------------------------------------------------->
   
   
    <main>
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <section id="criacaoDeSite">
            <h2>Criação de sites</h2>
            <p id="textoinicial" class="padding">
                A criação de sites é a arte de cativar online. Nossa equipe combina criatividade e expertise para transformar ideias em sucesso digital. Junte-se a nós e destaque-se na web!
            </p>
        </section>
        <!----------->
        <section id="foto1">
            <picture>
                <img src="<?php echo tema; ?>/imagens/criacao_de_sites_thumb.jpg">
            </picture>
        </section>
        <!----------------------------------------------------------------->
        <section id="lojasVirtuais">
            <h2>Lojas Virtuais</h2>
            <p id="textoinicial" class="padding">
                A criação de sites é a arte de cativar online. Nossa equipe combina criatividade e expertise para transformar ideias em sucesso digital. Junte-se a nós e destaque-se na web!
            </p>
        </section>
        <!------------>
        <section id="foto2">
            <picture>
                <img src="<?php echo tema; ?>/imagens/lojas_virtuais_thumb.jpg">
            </picture>
        </section>
        <!----------------------------------------------------------------->
        <section id="sistemas">
            <h2>Sistemas Personalizados</h2>
            <p id="textoinicial" class="padding">
                A criação de sistemas automatiza tarefas, organiza dados e impulsiona a produtividade, sendo essencial para a eficácia operacional em várias indústrias.
            </p>
        </section>
        <!----------------------------------------------------------------->
        <section id="foto3">
            <picture>
                <img src="<?php echo tema; ?>/imagens/lojas_virtuais_thumb.jpg">
            </picture>
        </section>

    </main>
    <!----------------------------------------------------------------->
    <section id="RedesSociais">



        <a href="https://api.whatsapp.com/send?phone=5513991159522" target="alt">
            <!--<picture><img src="<?php echo tema ?>/imagens/icones/svg/whatsapp-contato.svg" alt=""></picture>-->
            <object>
                <svg class="menuIcon" width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5 4.49609C7.9502 4.49609 5.06445 7.38184 5.05957 10.9316C5.05957 12.1475 5.40137 13.334 6.0459 14.3545L6.19727 14.5986L5.54785 16.9717L7.98438 16.332L8.21875 16.4736C9.20508 17.0596 10.3379 17.3721 11.4951 17.3721H11.5C15.0449 17.3721 18.0088 14.4863 18.0088 10.9365C18.0088 9.21777 17.2666 7.60156 16.0508 6.38574C14.8301 5.16504 13.2188 4.49609 11.5 4.49609ZM15.2842 13.6953C15.123 14.1494 14.3516 14.5596 13.9805 14.6133C13.3652 14.7061 12.8867 14.6572 11.6611 14.1299C9.72266 13.29 8.45313 11.3369 8.35547 11.21C8.25781 11.083 7.56445 10.1602 7.56445 9.20801C7.56445 8.25586 8.0625 7.78711 8.24316 7.5918C8.41895 7.39648 8.62891 7.34766 8.76074 7.34766C8.8877 7.34766 9.01953 7.34766 9.13184 7.35254C9.24902 7.35742 9.41016 7.30859 9.56641 7.68457C9.72754 8.07031 10.1133 9.02246 10.1621 9.12012C10.2109 9.21777 10.2451 9.33008 10.1768 9.45703C9.80566 10.1992 9.41016 10.1699 9.61035 10.5117C10.3574 11.7959 11.1045 12.2402 12.2422 12.8115C12.4375 12.9092 12.5498 12.8945 12.6621 12.7627C12.7744 12.6357 13.1455 12.1963 13.2725 12.0059C13.3994 11.8105 13.5313 11.8447 13.707 11.9082C13.8828 11.9717 14.835 12.4404 15.0303 12.5381C15.2256 12.6357 15.3525 12.6846 15.4014 12.7627C15.4453 12.8555 15.4453 13.2461 15.2842 13.6953ZM20.0938 0.0625H2.90625C1.6123 0.0625 0.5625 1.1123 0.5625 2.40625V19.5938C0.5625 20.8877 1.6123 21.9375 2.90625 21.9375H20.0938C21.3877 21.9375 22.4375 20.8877 22.4375 19.5938V2.40625C22.4375 1.1123 21.3877 0.0625 20.0938 0.0625ZM11.4951 18.6758C10.1963 18.6758 8.92188 18.3486 7.79395 17.7334L3.6875 18.8125L4.78613 14.7988C4.10742 13.627 3.75098 12.2939 3.75098 10.9268C3.75586 6.65918 7.22754 3.1875 11.4951 3.1875C13.5654 3.1875 15.5088 3.99316 16.9736 5.45801C18.4336 6.92285 19.3125 8.86621 19.3125 10.9365C19.3125 15.2041 15.7627 18.6758 11.4951 18.6758Z" fill="white" />
                </svg>
            </object>
        </a>




        <a href="https://www.linkedin.com/in/hor%C3%A1cio-neto-89659a124/" target="alt">
            <!--picture><img src="<?php echo tema ?>/imagens/icones/svg/linkedin-contato.svg" alt="">-->
            <object>
                <svg class="menuIcon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.875 2.5H3.12012C2.26074 2.5 1.5625 3.20801 1.5625 4.07715V22.7979C1.5625 23.667 2.26074 24.375 3.12012 24.375H21.875C22.7344 24.375 23.4375 23.667 23.4375 22.7979V4.07715C23.4375 3.20801 22.7344 2.5 21.875 2.5ZM8.17383 21.25H4.93164V10.8105H8.17871V21.25H8.17383ZM6.55273 9.38477C5.5127 9.38477 4.67285 8.54004 4.67285 7.50488C4.67285 6.46973 5.5127 5.625 6.55273 5.625C7.58789 5.625 8.43262 6.46973 8.43262 7.50488C8.43262 8.54492 7.59277 9.38477 6.55273 9.38477ZM20.3271 21.25H17.085V16.1719C17.085 14.9609 17.0605 13.4033 15.4004 13.4033C13.7109 13.4033 13.4521 14.7217 13.4521 16.084V21.25H10.21V10.8105H13.3203V12.2363H13.3643C13.7988 11.416 14.8584 10.5518 16.4355 10.5518C19.7168 10.5518 20.3271 12.7148 20.3271 15.5273V21.25Z" fill="white" />
                </svg>
            </object>
        </a>



        <a href="https://www.instagram.com/horaciojordan/" target="alt">
            <!--<picture><img src="<?php echo tema ?>/imagens/icones/svg/instagram-contato.svg" alt="">-->
            <object>
                <svg class="menuIcon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5049 7.82227C9.39941 7.82227 6.89453 10.3271 6.89453 13.4326C6.89453 16.5381 9.39941 19.043 12.5049 19.043C15.6104 19.043 18.1152 16.5381 18.1152 13.4326C18.1152 10.3271 15.6104 7.82227 12.5049 7.82227ZM12.5049 17.0801C10.498 17.0801 8.85742 15.4443 8.85742 13.4326C8.85742 11.4209 10.4932 9.78516 12.5049 9.78516C14.5166 9.78516 16.1523 11.4209 16.1523 13.4326C16.1523 15.4443 14.5117 17.0801 12.5049 17.0801ZM19.6533 7.59277C19.6533 8.32031 19.0674 8.90137 18.3447 8.90137C17.6172 8.90137 17.0361 8.31543 17.0361 7.59277C17.0361 6.87012 17.6221 6.28418 18.3447 6.28418C19.0674 6.28418 19.6533 6.87012 19.6533 7.59277ZM23.3691 8.9209C23.2861 7.16797 22.8857 5.61523 21.6016 4.33594C20.3223 3.05664 18.7695 2.65625 17.0166 2.56836C15.21 2.46582 9.79492 2.46582 7.98828 2.56836C6.24023 2.65137 4.6875 3.05176 3.40332 4.33105C2.11914 5.61035 1.72363 7.16309 1.63574 8.91602C1.5332 10.7227 1.5332 16.1377 1.63574 17.9443C1.71875 19.6973 2.11914 21.25 3.40332 22.5293C4.6875 23.8086 6.23535 24.209 7.98828 24.2969C9.79492 24.3994 15.21 24.3994 17.0166 24.2969C18.7695 24.2139 20.3223 23.8135 21.6016 22.5293C22.8809 21.25 23.2812 19.6973 23.3691 17.9443C23.4717 16.1377 23.4717 10.7275 23.3691 8.9209ZM21.0352 19.8828C20.6543 20.8398 19.917 21.5771 18.9551 21.9629C17.5146 22.5342 14.0967 22.4023 12.5049 22.4023C10.9131 22.4023 7.49023 22.5293 6.05469 21.9629C5.09766 21.582 4.36035 20.8447 3.97461 19.8828C3.40332 18.4424 3.53516 15.0244 3.53516 13.4326C3.53516 11.8408 3.4082 8.41797 3.97461 6.98242C4.35547 6.02539 5.09277 5.28809 6.05469 4.90234C7.49512 4.33105 10.9131 4.46289 12.5049 4.46289C14.0967 4.46289 17.5195 4.33594 18.9551 4.90234C19.9121 5.2832 20.6494 6.02051 21.0352 6.98242C21.6064 8.42285 21.4746 11.8408 21.4746 13.4326C21.4746 15.0244 21.6064 18.4473 21.0352 19.8828Z" fill="white" />
                </svg>
            </object>
        </a>



        <a href="https://t.me/Horacio1976" target="alt">
            <!--<picture><img src="<?php echo tema ?>/imagens/icones/svg/telegram-contato.svg" alt="">-->
            <object>
                <svg class="menuIcon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_66_356)">
                        <path d="M12.5 1.32812C5.81055 1.32812 0.390625 6.74805 0.390625 13.4375C0.390625 20.127 5.81055 25.5469 12.5 25.5469C19.1895 25.5469 24.6094 20.127 24.6094 13.4375C24.6094 6.74805 19.1895 1.32812 12.5 1.32812ZM18.4473 9.62402L16.46 18.9893C16.3135 19.6533 15.918 19.8145 15.3662 19.502L12.3389 17.2705L10.8789 18.6768C10.7178 18.8379 10.5811 18.9746 10.2686 18.9746L10.4834 15.8936L16.0938 10.8252C16.3379 10.6104 16.04 10.4883 15.7178 10.7031L8.78418 15.0684L5.7959 14.1357C5.14648 13.9307 5.13184 13.4863 5.93262 13.1738L17.6074 8.67187C18.1494 8.47656 18.623 8.80371 18.4473 9.62402Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_66_356">
                            <rect width="25" height="25" fill="white" transform="translate(0 0.9375)" />
                        </clipPath>
                    </defs>
                </svg>

            </object>
        </a>



        <a href="tel:+5513991159522" target="alt">
            <!---<picture><img src="<?php echo tema ?>/imagens/icones/svg/telefone-contato.svg" alt="">-->
            <object>
                <svg class="menuIcon" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_66_358)">
                        <path d="M24.2866 18.6035L18.8179 16.2598C18.5843 16.1602 18.3246 16.1392 18.078 16.2C17.8315 16.2607 17.6113 16.4 17.4507 16.5967L15.0288 19.5557C11.2279 17.7636 8.16904 14.7047 6.37695 10.9038L9.33594 8.48193C9.53305 8.32162 9.67256 8.10145 9.73335 7.85476C9.79414 7.60807 9.7729 7.34829 9.67285 7.11475L7.3291 1.646C7.21929 1.39424 7.02508 1.18869 6.77996 1.06479C6.53483 0.940894 6.25416 0.906409 5.98633 0.967285L0.908203 2.13916C0.649985 2.19879 0.419602 2.34418 0.254656 2.5516C0.0897096 2.75903 -5.94829e-05 3.01624 2.95713e-08 3.28125C2.95713e-08 15.8057 10.1514 25.9375 22.6562 25.9375C22.9213 25.9377 23.1787 25.8479 23.3862 25.683C23.5937 25.518 23.7392 25.2876 23.7988 25.0293L24.9707 19.9512C25.0312 19.682 24.996 19.4002 24.8711 19.1543C24.7463 18.9083 24.5396 18.7135 24.2866 18.6035Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_66_358">
                            <rect width="25" height="25" fill="white" transform="translate(0 0.9375)" />
                        </clipPath>
                    </defs>
                </svg>

            </object>
        </a>
        
    </section>
    <!----------------------------------------------------------------->
    <!--<section class="padding" id="blog">blog</section>-->
    <!----------------------------------------------------------------->
    <section class="padding" id="orcamento">
        <b>Outros Serviços</b>
    </section>
    <!----------------------------------------------------------------->
    <section id="outrosProdutos">
















        <div>
            <h2>Otimização de sites</h2>
            <!--<img src="<?php echo tema; ?>/imagens/icones/svg/otimizacao.svg">-->
            <object>
                <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_66_467)">
                        <path d="M12.9 40.7999H3.6C1.88822 40.7999 0.5 42.1882 0.5 43.8999V53.2C0.5 54.9117 1.88822 56.2999 3.6 56.2999H12.9C14.6118 56.2999 16 54.9117 16 53.2V43.8999C16 42.1882 14.6118 40.7999 12.9 40.7999ZM10.575 33.0499H29.175V37.7H33.825V33.0499H52.425V37.7H57.075V32.1209C57.075 30.0701 55.4058 28.4 53.354 28.4H33.825V22.2H37.7C39.4118 22.2 40.8 20.8117 40.8 19.1V9.79995C40.8 8.08817 39.4118 6.69995 37.7 6.69995H25.3C23.5882 6.69995 22.2 8.08817 22.2 9.79995V19.1C22.2 20.8117 23.5882 22.2 25.3 22.2H29.175V28.4H9.64597C7.59416 28.4 5.925 30.0691 5.925 32.1209V37.7H10.575V33.0499ZM36.15 40.7999H26.85C25.1382 40.7999 23.75 42.1882 23.75 43.8999V53.2C23.75 54.9117 25.1382 56.2999 26.85 56.2999H36.15C37.8618 56.2999 39.25 54.9117 39.25 53.2V43.8999C39.25 42.1882 37.8618 40.7999 36.15 40.7999ZM59.4 40.7999H50.1C48.3882 40.7999 47 42.1882 47 43.8999V53.2C47 54.9117 48.3882 56.2999 50.1 56.2999H59.4C61.1118 56.2999 62.5 54.9117 62.5 53.2V43.8999C62.5 42.1882 61.1118 40.7999 59.4 40.7999Z" fill="#FFF068" />
                    </g>
                    <defs>
                        <clipPath id="clip0_66_467">
                            <rect width="62" height="62" fill="white" transform="translate(0.5 0.5)" />
                        </clipPath>
                    </defs>
                </svg>
            </object>
            <article>
                A otimização de sites visa melhorar a visibilidade online, utilizando técnicas como palavras-chave, conteúdo e velocidade para aumentar o tráfego e o sucesso na web.
            </article>
        </div>













        <div>
            <h2>Hospedagem de Sites</h2>
            <!--<img src="<?php echo tema; ?>/imagens/icones/svg/hospedagem.svg">-->
            <object>
                <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_66_472)">
                        <path d="M58.625 19.875H4.375C2.23491 19.875 0.5 18.1401 0.5 16V8.25C0.5 6.10991 2.23491 4.375 4.375 4.375H58.625C60.7651 4.375 62.5 6.10991 62.5 8.25V16C62.5 18.1401 60.7651 19.875 58.625 19.875ZM52.8125 9.21875C51.2074 9.21875 49.9062 10.5199 49.9062 12.125C49.9062 13.7301 51.2074 15.0312 52.8125 15.0312C54.4176 15.0312 55.7188 13.7301 55.7188 12.125C55.7188 10.5199 54.4176 9.21875 52.8125 9.21875ZM45.0625 9.21875C43.4574 9.21875 42.1562 10.5199 42.1562 12.125C42.1562 13.7301 43.4574 15.0312 45.0625 15.0312C46.6676 15.0312 47.9688 13.7301 47.9688 12.125C47.9688 10.5199 46.6676 9.21875 45.0625 9.21875ZM58.625 39.25H4.375C2.23491 39.25 0.5 37.5151 0.5 35.375V27.625C0.5 25.4849 2.23491 23.75 4.375 23.75H58.625C60.7651 23.75 62.5 25.4849 62.5 27.625V35.375C62.5 37.5151 60.7651 39.25 58.625 39.25ZM52.8125 28.5938C51.2074 28.5938 49.9062 29.8949 49.9062 31.5C49.9062 33.1051 51.2074 34.4062 52.8125 34.4062C54.4176 34.4062 55.7188 33.1051 55.7188 31.5C55.7188 29.8949 54.4176 28.5938 52.8125 28.5938ZM45.0625 28.5938C43.4574 28.5938 42.1562 29.8949 42.1562 31.5C42.1562 33.1051 43.4574 34.4062 45.0625 34.4062C46.6676 34.4062 47.9688 33.1051 47.9688 31.5C47.9688 29.8949 46.6676 28.5938 45.0625 28.5938ZM58.625 58.625H4.375C2.23491 58.625 0.5 56.8901 0.5 54.75V47C0.5 44.8599 2.23491 43.125 4.375 43.125H58.625C60.7651 43.125 62.5 44.8599 62.5 47V54.75C62.5 56.8901 60.7651 58.625 58.625 58.625ZM52.8125 47.9688C51.2074 47.9688 49.9062 49.2699 49.9062 50.875C49.9062 52.4801 51.2074 53.7812 52.8125 53.7812C54.4176 53.7812 55.7188 52.4801 55.7188 50.875C55.7188 49.2699 54.4176 47.9688 52.8125 47.9688ZM45.0625 47.9688C43.4574 47.9688 42.1562 49.2699 42.1562 50.875C42.1562 52.4801 43.4574 53.7812 45.0625 53.7812C46.6676 53.7812 47.9688 52.4801 47.9688 50.875C47.9688 49.2699 46.6676 47.9688 45.0625 47.9688Z" fill="#FFF068" />
                    </g>
                    <defs>
                        <clipPath id="clip0_66_472">
                            <rect width="62" height="62" fill="white" transform="translate(0.5 0.5)" />
                        </clipPath>
                    </defs>
                </svg>

            </object>

            <article>
                Hospedagem de sites é o serviço que torna seu site acessível online. Escolher um provedor confiável é essencial para um site rápido e sempre disponível.
            </article>
        </div>


        <div>
            <h2>Reestruturação</h2>
            <!---<img src="<?php echo tema; ?>/imagens/icones/svg/reestruturacao.svg">-->
            <object>
                <svg width="62" height="63" viewBox="0 0 62 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_66_477)">
                        <path d="M27.0184 56.2516L21.109 54.5369C20.489 54.3625 20.1403 53.7134 20.3147 53.0934L33.5381 7.54282C33.7125 6.92282 34.3615 6.57407 34.9815 6.74845L40.8909 8.46314C41.5109 8.63751 41.8597 9.28657 41.6853 9.90657L28.4619 55.4572C28.2778 56.0772 27.6384 56.4356 27.0184 56.2516ZM15.9747 45.3822L20.1887 40.8872C20.6344 40.4125 20.6053 39.6569 20.1112 39.221L11.3344 31.5L20.1112 23.7791C20.6053 23.3431 20.644 22.5875 20.1887 22.1128L15.9747 17.6178C15.5387 17.1528 14.8025 17.1238 14.3278 17.5694L0.368105 30.6475C-0.125957 31.1028 -0.125957 31.8875 0.368105 32.3428L14.3278 45.4306C14.8025 45.8763 15.5387 45.8569 15.9747 45.3822ZM47.6722 45.4403L61.6319 32.3525C62.1259 31.8972 62.1259 31.1125 61.6319 30.6572L47.6722 17.5597C47.2072 17.1238 46.4709 17.1431 46.0253 17.6081L41.8112 22.1031C41.3656 22.5778 41.3947 23.3334 41.8887 23.7694L50.6656 31.5L41.8887 39.221C41.3947 39.6569 41.3559 40.4125 41.8112 40.8872L46.0253 45.3822C46.4612 45.8569 47.1975 45.8763 47.6722 45.4403Z" fill="#FFF068" />
                    </g>
                    <defs>
                        <clipPath id="clip0_66_477">
                            <rect width="62" height="62" fill="white" transform="translate(0 0.5)" />
                        </clipPath>
                    </defs>
                </svg>

            </object>
            <article>
                A otimização de sites visa melhorar a visibilidade online, utilizando técnicas como palavras-chave, conteúdo e velocidade para aumentar o tráfego e o sucesso na web.
            </article>
        </div>


    </section>
    <!----------------------------------------------------------------->
    <section id="Contato">


        <div id="movimentoBG">
            <div class="bg1"></div>
            <div class="bg2"></div>
            <div class="bg3"></div>
            <div class="bg4"></div>
            <div class="bg5"></div>
        </div>


        <picture class="posicao">
            <img src="<?php echo tema; ?>/imagens/mocaATendimento.png">
        </picture>


        <p class='texto' class="posicao">
        Pronto para dar o próximo passo na criação de sites incríveis? Preencha o formulário abaixo, e vamos começar a transformar suas ideias em realidade. Na vanguarda da criação de sites, estamos ansiosos para colaborar com você e criar uma presença online impactante juntos! Deixe-nos ajudá-lo a alcançar seus objetivos digitais.
        </p>


       <!------------Formulários--------> 
       <?php echo do_shortcode( '[contact-form-7 id="3c19852" title="Formulário de contato 1"]' );?>
       <!-----------formulário----------------->
    </section>
    <!----------------------------------------------------------------->
    <!----------------------------------------------------------------->
    <!----------------------------------------------------------------->
    <!----------------------------------------------------------------->
    <!----------------------------------------------------------------->

    <section id="blogTitulo">
        <h2>Blog</h2>
        <p>
            Conheça nosso blog, veja algum temas importantes ligados ao mundo da tecnologia, novidades ligadas a criação de sites profissionais, informações no mundo web, aplicativos e muitas notícias da área!
        </p>
    </section>
    
    
    
    
    <!-----------blog------------------------------------------------------------->
    <section id="blogContent">
        <?php
        $args = array(
            'posts_per_page' => 15,
            'post_type'      => 'post',
            'post_date'      => "asc"
        );
        $myposts = get_posts($args);
        $int = count($myposts);
        $cont = 0;
        $limite = 3;
        $contador = 0;
        ?>
        <section id="gridNoticias">
            <?php foreach ($myposts as $post) : setup_postdata($post);
                $cont++;
                $contador++;
                $post_id = get_the_ID();
            ?>

                <article id="blog<?php echo $contador; ?>">
                    <picture>
                        <?php
                        $thumb = "";
                        if ($contador == 1)       {  $thumb = get_the_post_thumbnail_url($post_id, "img1"); } 
                        elseif ($contador == 2)   {  $thumb = get_the_post_thumbnail_url($post_id, "img2"); } 
                        elseif ($contador == 3)   {  $thumb = get_the_post_thumbnail_url($post_id, "img3"); } 
                        else                      {  $thumb = get_the_post_thumbnail_url($post_id, "img4"); }
                        ?>
                        <!------------------------------------------------------->
                        <source media="(min-width:768px) and (max-width:9000px)" srcset="<?php echo $thumb ?>">
                        <source media="(min-width:0px) and (max-width:767px)"    srcset="<?php echo get_the_post_thumbnail_url($post_id, "img4");  ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($post_id, "img4"); ?>">
                        <!------------------------------------------------------->
                    </picture>
                    <small><?php $resumo = get_the_excerpt(); echo $resumo; ?></small>
                </article>

            <?php endforeach; ?>
        </section>
    </section>
   <!-----------blog------------------------------------------------------------->










   <?php get_template_part('partes/footer'); ?>



</body>



<script src='<?php echo tema;?>/js/jquery.js'></script>
<script src='<?php echo tema;?>/js/menu.js'></script>
<script src="<?php echo tema?>/js/motorBase.js"> </script>




</html>