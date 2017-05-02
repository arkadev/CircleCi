<!DOCTYPE HTML> 
<html lang="es">
    <head>
        <title>DevTorGame</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
        <link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">

        <link href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?= base_url() . 'assets/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url() . 'assets/css/agency.min.css' ?>" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <meta url="https://www.facebook.com/arkadev.sas.1?fref=ts">
        <meta url="https://twitter.com/ArkaDevGroup">
        <link rel="shortcut icon" href="<?= base_url() . 'favicon.ico'?>" />
    </head>
    <body>
        <div class="baner-init">
            <img src="<?= base_url() . 'assets/img/lol1.png' ?>" class="img-font">
            <div>
                <img src="<?= base_url() . 'assets/img/logoD.png' ?>" class="img-logo-init">
                <p class="font-text-logo">DevTorGame</p>
            </div>

            <div >
                <a href=""><img src="<?= base_url() . 'assets/img/menu.png' ?>" class="menu-mob"></a>
            </div>
            <nav class="menu">
                <ul class="ul-index active">
                    <li class="li-index current-item"><a href="#" class="a1">INICIO</a></li>
                    <li class="li-index current-item"><a href="#" class="a1">SERVICIOS</a></li>
                    <li class="li-index current-item"><a href="#" class="a1">CLIENTES</a></li>
                    <li class="li-index current-item"><a href="#" class="a1">CONTACTOS</a></li>
                    <li class="li-index current-item"><a href="#" class="a1">INICIAR SESIÓN</a></li>
                    <li class="li-index current-item"><a href="#" class="a1">REGISTRARSE</a></li>
                </ul>
            </nav>
            <div class="div-text-init">
                <p class="text-tournament">¡TORNEOS ONLINE!</p>
                <p class="text-sub-tournament">Crea y administra tus propios torneos.</p>
            </div>
            <div>
                <a href="<?= base_url() . 'manager' ?>">
                    <button class="btn-init" type="button">COMENZAR</button>
                </a>				
            </div>
        </div>
        <div class="baner-services baner-services-1">
            <img src="<?= base_url() . 'assets/img/campeon1.png' ?>" class="img-campeon">
            <div class="text-baner-1-title">
                <p class="text-baner-title ">SERVICIOS</p>
                <textarea cols="15" rows="20" class="textarea-init">¿Te gustan los videojuegos MOBA? O acaso ¿Eres fanático de League Of Legends?, pues te damos la bienvenida a esta, tu página web. Aquí encontrarás la posibilidad de crear y personalizar tus torneos de una forma sencilla. Te ofrecemos la oportunidad de almacenar de manera simultánea cada uno de los campeonatos que has personalizado. Quédate, explora y disfruta de este espacio dedicado para ti.</textarea>
            </div>
        </div>
        <div class="baner-services baner-services-2">
            <img src="<?= base_url() . 'assets/img/campeon2.png' ?>" class="img-campeon2">
            <div class="text-baner-2-title">
                <p class="text-baner-title">CLIENTES</p>
                <textarea cols="15" rows="20" class="textarea-init">Nuestros clientes son personas como tú, que dedican su tiempo y esfuerzo a la organización de torneos online de videojuegos, especialmente de League Of Legends, perteneciente a la compañia Riot Games. 
Si tu pasatiempo favorito es superar tu nivel de juego, también has llegado al lugar indicado, pues cada producto creado por nuestro equipo de trabajo, se enfoca en tus necesidades, gustos y destrezas.
                </textarea>
            </div>
        </div>
        <div class="baner-services baner-services-3">
            <img src="<?= base_url() . 'assets/img/campeon3.png' ?>" class="img-campeon">
            <div class="text-baner-1-title">
                <p class="text-baner-title">CONTACTOS</p>
                <textarea rows="5" class="textarea-init">Somos Arkadev, puedes contactarnos a través de las redes sociales en Facebook como @arkadev.sas.1 y en Twitter como @ArkaDevGroup.</textarea>
            </div>
        </div>
        <div class="baner-contact"></div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; arkadev.me 2017</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/ArkaDevGroup" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/arkadev.sas.1" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://github.com/arkadev/devtorgame" target="_blank"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://arkadev.wixsite.com/devtorgame" target="_blank"><i class="fa fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="http://arkadev.me/devtorgame">arkadev.me/devtorgame</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
