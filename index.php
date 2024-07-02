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
        }
        #navBar{
            width: 100%;
            position: absolute;
            top: 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            background-color: var(--azulCinzaEscuro);
            padding: .5em;
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
            transition: 0.2s;
        }
        #navBar div a img{
            transition: .2s;
        }
        #navBar div a img:hover{
            scale: 102%;
        }


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
        </header>
        <section>

        </section>
        <footer></footer>
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>