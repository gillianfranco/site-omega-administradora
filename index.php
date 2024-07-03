<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logomarcas-omega/logo108x135.png" type="image/x-icon">
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
            
        </section>
        <footer></footer>
    </main>
    
    <script>
        window.addEventListener('scroll', function() {
            let scrolled = window.pageYOffset;
            let parallax = document.querySelector('.containerImagem-above-the-fold');
            parallax.style.backgroundPositionY = -(scrolled * 0.6) + 'px';
        });
    </script>
    <script src="assets/js/script.js"></script>
</body>
</html>