<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logomarcas-omega/logo108x135.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        :root{
            --azulEscuro1: #010c2a;
            --dourado: #edad00;
            --azulEscuro2: #171f2a;
            --azulCinzaEscuro: #353e4c;
            --azulCinzaClaro: #475262;
            --verde: #238636;
            --verdeClaro: #2CA142;
            --verdeWhatsApp: #40c351;
        }
        .poppins-regular{
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        .poppins-bold{
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        .montserrat-regular{
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-style: normal;
        }
        .montserrat-bold{
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        *{
            box-sizing: border-box;
        }
        body{
            font-size: 20px;
            margin: 0;
        }
        main{
            width: 100%;
        }
        a{
            text-decoration: none;
        }
        h1{
            font-size: 1.8em;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        h2{
            font-size: 1.5em;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        h3{
            font-size: 1.2em;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        p{
            font-size: 1em;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        /* Barra de Navegação */
            header{
                width: 100%;
                display: flex;
                flex-direction: column;
            }
            #navBar{
                width: 100%;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                background-color: var(--azulCinzaEscuro);
                padding: .5em;
                z-index: 1;
            }
            #navBar ul{
                display: flex;
                flex-direction: row;
                align-items: center;
            }
            #navBar ul li{
                margin-right: 2vw;
                list-style: none;
                transition: 0.2s;
            }
            #navBar ul li a{
                color: white;
            }
            #navBar ul li a#areaDoCondomino{
                background-color: var(--dourado);
                padding: .5em;
            }
            #navBar ul li:hover{
                scale: 102%;
                transition: 0.5s;
            }
            #navBar div a img{
                transition: .5s;
            }
            #navBar div a img:hover{
                scale: 102%;
            }
        /* Above the fold */
            .containerImagem-above-the-fold{
                height: 420px;
                background-image: url(assets/images/imagens-above-the-fold/imagem-above-the-fold1896x656.png);
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                color: white;
            }
            .containerImagem-above-the-fold div{
                text-align: center;
            }
            .containerImagem-above-the-fold div h1{
                font-size: 3em;
                text-shadow: 1px 1px 2px black;
                margin-bottom: 0;
            }
            .containerImagem-above-the-fold div p{
                font-size: 1.5em;
                margin-top: .5em;
                text-shadow: 1px 1px 2px black;
            }
            #containerBotaoAreaDoCondomino{
                background: linear-gradient(180deg, var(--azulCinzaClaro) 0%, var(--azulCinzaEscuro) 50%, var(--azulEscuro2) 100%);
                width: 100%;
                height: 120px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #containerBotaoAreaDoCondomino a{
                background-color: var(--dourado);
                padding: .6em;
                color: white;
                border-radius: .2em;
                transition: .5s;
            }
            #containerBotaoAreaDoCondomino a:hover{
                scale: 102%;
            }

        /* Sessão 1 */
            .section-1{
                width: 100%;
                padding: 2em 3em;
                display: flex;
                flex-direction: row;
            }
            .section-1 > div{
                width: 50%;
                padding: 0em 1em;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .section-1 div:nth-child(2){
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .section-1 div h2{
                text-align: center;
                margin-top: 0em;
                margin-bottom: 0em;
            }
            .section-1 div p:nth-child(1){
                background-color: var(--dourado);
                margin-bottom: 0;
                padding: .2em;
            }
            .section-1 div img{
                width: 75%;
            }
        
        /* Sessão 2 */
            .section-2{
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 4em 6em;
                background-color: var(--azulEscuro2);
                color: white;
                background-image: url(assets/images/imagens-de-fundo/imagem-de-fundo1920x1080.png);
                background-size: cover;
                background-position: center;
            }
            .section-2 p{
                text-align: center;
            }

        /* Sessão 3 */
            .section-3{
                width: 100%;
                padding: 2em 5em;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .section-3 > p{
                background-color: var(--dourado);
                margin-bottom: 0;
                padding: .2em;
            }
            .section-3 h1{
                margin-top: 0;
                margin-bottom: .4em;
                font-size: 3.5em;
            }
            .section-3 > div{
                display: flex;
                flex-direction: row;
                width: 100%;
                justify-content: space-around;
            }
            div.servico{
                width: 275px;
                height: 345px;
                background-color: var(--azulEscuro1);
                color: var(--dourado);
                border-radius: 60px 0px 60px 0px;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                padding: .5em;
                margin-bottom: 1em;
                transition: .5s;
            }
            div.servico:hover{
                scale: 101%;
                box-shadow: 2px 4px 12px 5px rgba(0, 0, 0, 0.2);
            }
            div.servico div p{
                margin-bottom: .4em;
                margin-top: .5em;
            }
            div.servico div a{
                color: white;
                text-decoration: underline;
            }
            div.servico div img{
                height: 100%;
            }
            div.servico div:nth-child(1){
                height: 70%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            div.servico div:nth-child(2){
                height: 30%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

        /* Sessão 4 */
            .section-4{
                padding: 2em 7em;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .section-4 p:nth-child(1){
                background-color: var(--dourado);
                margin-bottom: 0;
                padding: .2em;
            }
            .section-4 h1{
                margin-top: 0;
                margin-bottom: .4em;
                font-size: 2em;
            }
            .section-4 p{
                text-align: justify;
            }

        /* Sessão 5 */
            .section-5{
                padding-bottom: 1em;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .section-5 > p{
                text-align: center;
                font-size: 1.5em;
                margin-top: 0;
            }
            .swiper-container{
                width: 100%;
                padding: 1em;
                overflow-x: hidden;
                margin-bottom: 1em;
            }
            .swiper-wrapper{
                width: 50%;
            }
            .swiper-slide {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 1em;
                font-size: 18px;
                color: #fff;
                background: linear-gradient(180deg, var(--azulCinzaClaro) 0%, var(--azulCinzaEscuro) 50%, var(--azulEscuro2) 100%);
                height: 300px; /* Ajuste a altura do slide */
                transition: transform 0.5s;
            }
            .swiper-slide-active {
                transform: scale(1.2);
                background: linear-gradient(180deg, var(--azulCinzaClaro) 0%, var(--azulCinzaEscuro) 50%, var(--azulEscuro2) 100%);
            }
            .nome{
                font-size: 1.5em;
                margin-bottom: .5em;
            }
            .avaliacao{
                text-align: center;
                margin-top: 0em;
                margin-bottom: 0em;
            }
            .estrelas{
                font-size: 2em;
                color: #ffbe0b;
                margin-top: 0em;
                margin-bottom: 0em;
            }
            .swiper-button-next, .swiper-button-prev{
                color: var(--dourado);
            }
            #searchBar{
                width: 1000px;
                background-color: white;
                border-radius: 50px;
                box-shadow: 0px 0px 60px 6px rgba(0, 0, 0, 0.2);
                display: flex;
                flex-direction: row;
                align-items: center;
                padding: .2em 1em;
            }
            .typewriter{
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
                font-size: 1.5em;
                font-family: "Poppins", sans-serif;
                font-weight: 400;
                font-style: normal;
                padding-left: 1em;
            }
            .cursor {
                width: 1px;
                height: 25px;
                background-color: black;
                margin-left: 2px;
                animation: blink 0.7s infinite;
            }
            @keyframes blink {
                0%, 50% {
                    opacity: 1;
                }
                50%, 100% {
                    opacity: 0;
                }
            }

        /* Sessão 6 */
            .section-6{
                padding: 1em 4em;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .section-6 p{
                text-align: center;
                font-size: 1.5em;
                margin-top: 0;
            }
            #container__videosYoutube{
                display: flex;
                flex-direction: row;
                justify-content: center;
            }
            #container__videosYoutube iframe{
                width: 560px;
                height: 315px;
                border-radius: .4em;
                margin: .5em;
            }
            .section-6 nav{
                padding: .2em .2em;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                background-color: var(--azulEscuro2);
                border-radius: 8px;
                margin-top: 1em;
            }
            .section-6 nav a{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .section-6 nav a img{
                margin-left: .5em;
                transition: .5s;
            }
            .section-6 nav a:hover img{
                scale: 110%;
            }

        /* Sessão 7 */


    </style>
    <title>Ômega Administradora e Consultoria</title>
</head>
<body>
    <main>
        <header>
            <nav id="navBar">
                <div>
                    <a href="/index.php">
                        <img src="assets/images/logomarcas-omega/logo90x112.png" alt="Logomarca - Ômega">
                    </a>
                </div>
                <ul class="poppins-bold">
                    <li><a href="">Início</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                    <li><a href="" id="areaDoCondomino">Área do Condômino</a></li>
                </ul>
                <!-- <div id="toggle-btn">
                    <p class="color-vermelho">&#9776;</p>
                </div> -->
            </nav>
            <div class="containerImagem-above-the-fold">
                <!-- <div>
                    <h1 class="montserrat-bold">Ômega Administradora e Consultoria</h1>
                    <p>excelência em gestão, convivência de qualidade</p>
                </div> -->
            </div>
            <div id="containerBotaoAreaDoCondomino">
                <a href="" class="poppins-bold">CLIQUE AQUI PARA ACESSAR A ÁREA DO CONDÔMINO</a>
            </div>
        </header>
        <section>
            <div class="section-1">
                <div> 
                    <p class="poppins-bold">QUEM É A</p>
                    <h2>Ômega Administradora?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fugit vitae, quaerat quibusdam distinctio laudantium rem. Error, harum blanditiis consequuntur accusantium alias et dicta voluptatum placeat possimus, quaerat dolores id? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quae, aperiam ratione nesciunt corporis sunt libero enim dolorum accusamus velit odio necessitatibus architecto dolorem suscipit illo rerum vel, iste dolor?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti hic mollitia aut illo earum quas aliquid quisquam deserunt eveniet atque exercitationem placeat perferendis consequuntur itaque, cumque facilis maxime soluta assumenda.</p>
                </div>
                <div>
                    <img src="assets/images/representacoes-valores/valores.png" alt="Valores da Ômega Administradora">
                </div>
            </div>
            <div class="section-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem atque eligendi unde excepturi ea enim et, sit itaque nam maiores ab! Natus, odit itaque minima ipsum deleniti perferendis temporibus consequatur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime voluptatem incidunt magnam porro numquam praesentium repellat unde veritatis modi! Commodi quia corporis provident iste, porro voluptate? Dolorem eaque dolore fugiat?</p>
            </div>
            <div class="section-3">
                <p class="poppins-bold">CONHEÇA NOSSOS</p>
                <h1>Serviços</h1>
                <div>
                    <div class="servico">
                        <div>
                            <img src="assets/images/servicos/administracao-de-condominios.png" alt="Imagem representativa para o serviço de administração de condomínios">
                        </div>
                        <div>
                            <p class="montserrat-regular">Administração de Condomínios</p>
                            <a href="" class="montserrat-regular">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="servico">
                        <div>
                            <img src="assets/images/servicos/assessoria-contabil.png" alt="Imagem representativa para o serviço de assessoria contábil">
                        </div>
                        <div>
                            <p class="montserrat-regular">Assessoria Contábil</p>
                            <a href="" class="montserrat-regular">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="servico">
                        <div>
                            <img src="assets/images/servicos/assessoria-juridica.png" alt="Imagem representativa para o serviço de assessoria jurídica">
                        </div>
                        <div>
                            <p class="montserrat-regular">Assessoria Jurídica</p>
                            <a href="" class="montserrat-regular">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="servico">
                        <div>
                            <img src="assets/images/servicos/sindico-profissional.png" alt="Imagem representativa para o serviço de sindico profissional">
                        </div>
                        <div>
                            <p class="montserrat-regular">Síndico Profissional</p>
                            <a href="" class="montserrat-regular">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="servico">
                        <div>
                            <img src="assets/images/servicos/recursos-humanos.png" alt="Imagem representativa para o serviço de recursos humanos">
                        </div>
                        <div>
                            <p class="montserrat-regular">Recursos Humanos</p>
                            <a href="" class="montserrat-regular">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="servico">
                        <div>
                            <img src="assets/images/servicos/cobranca.png" alt="Imagem representativa para o serviço de cobrança">
                        </div>
                        <div>
                            <p class="montserrat-regular">Cobrança</p>
                            <a href="" class="montserrat-regular">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-4">
                <p class="poppins-bold">POR QUE ESCOLHER A</p>
                <h1>Ômega Administradora?</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem iusto perspiciatis ab sit illum quaerat adipisci nisi vel, eaque voluptate assumenda deserunt quidem molestias, recusandae, excepturi inventore suscipit maiores atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit delectus tempore dolorem nemo reiciendis. Ex pariatur dicta possimus, id magnam dignissimos, animi velit accusantium atque recusandae quam molestias sunt hic?</p>
            </div>
            <div class="section-5">
                <p class="montserrat-bold">Somos a administradora de condomínios<br>mais bem avaliada no Google em Uberlândia</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p class="nome">Silvia Mara</p>
                            <p class="avaliacao">"Atendimento perfeito e humanizado. Superou minhas expectativas. Tive meu problema resolvido com muita simpatia, profissionalismo e cordialidade."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Eliezer Andrade</p>
                            <p class="avaliacao">"Tive uma excelente experiência com a Ômega Administradora de Condomínios. Consegui resolver de modo rápido uma questão do meu apartamento. Show de bola!"</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Rafhael Barbosa</p>
                            <p class="avaliacao">"Obrigado Ômega por tudo que fizeram e ainda vão fazer pelo nosso condômino Lótus, vocês são surpreendentes!"</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Palumino Carnes</p>
                            <p class="avaliacao">"Estou extremamente satisfeito com os serviços de contabilidade da Ômega. Desde o início, eles foram proativos e me ajudaram bastante. A clareza nas explicações sobre questões fiscais e financeiras foi impressionante. Além disso, sempre que ligo ou mando mensagem me respondem na hora. Recomendo fortemente os serviços da Ômega a qualquer pessoa que procure uma contabilidade confiável e profissional."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Érika Ferreira</p>
                            <p class="avaliacao">"Equipe muito educada e prestativa, só tenho elogios desde que começaram a me atender."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Maria Alves</p>
                            <p class="avaliacao">"Confiança, respeito, responsabilidade e domínio na área administrativa e jurídica são requisitos que definem bem essa empresa. Tive a oportunidade de conhecer a empresa e então tenho total credibilidade no seu trabalho. Como são honestos e comprometidos com o que fazem... Parabéns pelo trabalho!!!!"</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Nayane Santos</p>
                            <p class="avaliacao">"Excelente atendimento!! Me atendeu com bastante atenção, e me trouxe resultado esperado."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Roberto Júnior</p>
                            <p class="avaliacao">"Atendimento profissional em todos os aspectos. Análises e condições personalizadas. Melhor administradora do mercado."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Cintia Florentino</p>
                            <p class="avaliacao">"Empresa e equipe responsável e ética!!!! Profissionais competentes e dedicados na busca por serviços de excelência e eficácia aos prazos. Cuidado com os moradores e agilidade para resolver os problemas."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Igor Oliveira Soares</p>
                            <p class="avaliacao">"Nossa, muito bom. O atendimento que recebi foi de excelência e suma importância para resolver meu problema."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Pollyanna Oliveira Rodrigues</p>
                            <p class="avaliacao">"Empresa e equipe que tem um atendimento humanizado. Na maioria das vezes as pessoas procuram a empresa pra solucionar algum problema ou questão que esteja enfrentando. E o cuidado que a equipe conduz a situação se colocando no lugar da pessoa, é muito importante e esse é um diferencial da Ômega. Parabéns pela eficiência, competência, profissionalismo e dedicação na entrega dos serviços aos clientes."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Nelson José de Souza Souza</p>
                            <p class="avaliacao">"Uma ótima administradora de condomínios, agradeço por está cuidando tão bem de nosso condomínio."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Antônio Júnior</p>
                            <p class="avaliacao">"Meu condomínio já teve outras administradoras, mas a Ômega está surpreendendo com o cuidado e atenção aos moradores. Sempre que preciso de auxilio, sou atendido rapidamente e o problema ou solicitação é resolvida. Não ficam enrolando te jogando pra setores que ninguém resolve. Indico a empresa pois estou gostando muito do serviço."</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <div class="swiper-slide">
                            <p class="nome">Karla Alves</p>
                            <p class="avaliacao">"Confiei no trabalho da Ômega e eles me mostraram o quanto são capazes. São profissionais que trabalham com muita responsabilidade e compromisso com a administração do meu condomínio, sempre pontuando o que se pode melhorar e o que já está adequado. Obrigada por fazerem parte do nosso time!!!"</p>
                            <p class="estrelas">★★★★★</p>
                        </div>
                        <!-- 15 -->
                    </div>
                    <!-- Adicione botões de navegação, se desejar -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- Adicione paginação, se desejar -->
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
                <p class="montserrat-bold">Procure a nossa empresa no Google e confira você mesmo</p>
                <div id="searchBar">
                    <img src="assets/images/icones/colourful-google-logo-on-white-background64x64_10353285.png" alt="Logomarca do Google" id="logomarca-Google">
                    <div class="typewriter">
                        <div id="text"></div>
                        <div class="cursor"></div>
                    </div>
                    <img src="assets/images/icones/magnifying-glass-or-search-icon-flat-vector-graphic64x64-on_4897827.png" alt="Lupa" id="lupa">
                </div>
            </div>
            <div class="section-6">
                <p class="montserrat-bold">Visite nossas redes sociais!</p>
                <div id="container__videosYoutube">
                    <iframe src="https://www.youtube.com/embed/4aX_zMV6IhI?si=aD7k52JJfuqKx1Dq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/9AIQkdITAbg?si=GXasJXjW0qQOEDqp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div id="container__videosYoutube">
                    <iframe src="https://www.youtube.com/embed/KB8zrvR-RUc?si=V5SK5H8gwf5DACV3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/7wtoMNR0OsQ?si=AjFa0oYWzu5C7HkO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <nav>
                    <a href=""><img src="assets/images/icones/icons8-instagram-48.png" alt="Link do perfil da Ômega Administradora no Instagram" style="width: 38px;"></a>
                    <a href=""><img src="assets/images/icones/icons8-youtube-48.png" alt="Link do canal da Ômega Administradora no Youtube"></a>
                    <a href=""><img src="assets/images/icones/icons8-spotify-48.png" alt="Link do perfil da Ômega Administradora no Spotify"></a>
                    <a href=""><img src="assets/images/icones/icons8-facebook-48.png" alt="Link da página da Ômega Administradora no Facebook"></a>
                </nav>
            </div>
            <div class="section-7">
                
            </div>
        </section>
        <footer></footer>
    </main>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        // Animação Imagem do Above The Fold
        window.addEventListener('scroll', function() {
            let scrolled = window.pageYOffset;
            let parallax = document.querySelector('.containerImagem-above-the-fold');
            parallax.style.backgroundPositionY = -(scrolled * 0.6) + 'px';
        });

        // Inicialização do Swiper com o efeito de coverflow
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
            delay: 10000,
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            },
            effect: 'coverflow',
            coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
            },
            slidesPerView: 'auto',
            centeredSlides: true,
        });

        // Função para pausar o autoplay
        function pauseAutoplay() {
            swiper.autoplay.stop();
        }

        // Função para retomar o autoplay
        function resumeAutoplay() {
            swiper.autoplay.start();
        }

        // Adicionar eventos de mouse e toque aos slides
        var slides = document.querySelectorAll('.swiper-slide');
        slides.forEach(function(slide) {
            slide.addEventListener('mousedown', pauseAutoplay);
            slide.addEventListener('mouseup', resumeAutoplay);
            slide.addEventListener('touchstart', pauseAutoplay);
            slide.addEventListener('touchend', resumeAutoplay);
        });


        
        // Animação de pesquisa no google

        const textElement = document.getElementById('text');
        const textArray = ['Ômega Administradora Uberlândia'];
        const typingSpeed = 150;
        const erasingSpeed = 100;
        const newTextDelay = 2000; // Delay between current and next text

        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            textElement.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingSpeed);
        } else {
            setTimeout(erase, newTextDelay);
        }
        }

        function erase() {
        if (charIndex > 0) {
            textElement.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, erasingSpeed);
        } else {
            textArrayIndex++;
            if (textArrayIndex >= textArray.length) {
            textArrayIndex = 0;
            }
            setTimeout(type, typingSpeed + 500);
        }
        }

        document.addEventListener('DOMContentLoaded', function() {
        setTimeout(type, newTextDelay + 250);
        });
    </script>
</body>
</html>