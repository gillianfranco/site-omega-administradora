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
                height: 450px;
                background-image: url(assets/images/imagens-above-the-fold/imagem-above-the-fold1896x656.jpg);
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
                height: 90px;
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
            .section-1 div{
                width: 50%;
                padding: 0em 1em;
            }
            .section-1 div:nth-child(2){
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .section-1 div h2{
                text-align: center;
            }
            .section-1 div p{
                text-align: justify;
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

        /* Sessão 6 */
        

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
                <div>
                    <h1 class="montserrat-bold">Ômega Administradora e Consultoria</h1>
                    <p>excelência em gestão, convivência de qualidade</p>
                </div>
            </div>
            <div id="containerBotaoAreaDoCondomino">
                <a href="" class="poppins-bold">CLIQUE AQUI PARA ACESSAR A ÁREA DO CONDÔMINO</a>
            </div>
        </header>
        <section>
            <div class="section-1">
                <div>  
                    <h2><span style="color: white; background-color: var(--dourado); padding: 0.1em;">QUEM É A</span><br>Ômega Administradora?</h2>
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
    </script>
</body>
</html>