<!DOCTYPE HTML> 
<html lang="es">
    <head>
        <title>DevTorGame</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="<?= base_url() . 'assets/css/styles.css' ?>" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="<?= base_url() . 'favicon.ico'?>" />  
        <script src = "<?= base_url() . 'assets/js/tournaments.js' ?>"></script>
    </head>
    <body style="background-color: #2E393A">
	
	<div class="baner-login">
			<nav class="nav-menu">
				<ul>
					<img src="<?= base_url() . 'assets/img/logoD.png'?>" class="img-menu-nav">
					<p class="text-logo-menu">DevTorGame</p>
				</ul>
				<div class="div-user">
					<a href="" title="Usuario">
						<img src="<?= base_url() . 'assets/img/user.png'?>" class="user-icon">
						<p class="user-text">CamiloB</p>
					</a>
					<a href="" title="Cerrar sesion">
						<img src="<?= base_url() . 'assets/img/exit.png'?>" class="exit-menu">
					</a>
				</div>	
			</nav>
			<nav class="baner-menu-r">
				<ul>

				</ul>
			</nav>
			<div class="div-tournaments-create">
				<a href="">
					<div class="cart-create">
						<img src="<?= base_url() . 'assets/img/add.png'?>" class="img-cart">
						<p class="text-cart">Crear torneo</p>
					</div>
				</a>
			</div>
		</div>	
	
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Desplegar navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <img src="<?= base_url() . 'assets/img/Logo.png'?>" class="img-responsive img-menu">
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <p class="font-menu-text">DevTorGame</p>
                    </div>
                    <div class="col-xs-5 col-sm-4 col-md-4">
                        <p class="font-menu-sub-text">By ArkaDev</p>
                    </div>
                </div>
            </div>			
        </nav>		

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 margin-table">
                    <table class="table table-hover font-table-add">

                        <tbody>
                            <tr class="tab-center">
                                <th class="tab-center-header">#</th>
                                <th class="tab-center-header">EQUIPO</th>
                                <th class="tab-center-header"></th>
                                <th class="tab-center-header">Vs</th>
                                <th class="tab-center-header"></th>
                                <th class="tab-center-header">EQUIPO</th>
                                <th class="tab-center-header">#</th>
                            </tr>   
                            <?php
                            if (is_array($tourn) || is_object($tourn)) {
                                for ($i = 0; $i < count($tourn); $i++) {
                            ?>

                            <tr class="tab-center">
                                <td>
                                    <p class="tab-center-nameTeam"><?= $tourn[$i]->id_team; ?></p>
                                </td>
                                <td>
                                    <p class="tab-center-nameTeam"><?= $tourn[$i]->name; ?></p>
                                </td>
                                <td>   
                                    <?php if (($i+1)>= count($tourn)) { ?>
                                    <img src="<?= base_url() . 'assets/img/LikeGreen.png'?>" id="like<?= $i?>" onclick="cambiar(this.id)">
                                    <?php }else{ ?>  
                                    <img src="<?= base_url() . 'assets/img/Like.png'?>" id="like<?= $i?>" onclick="cambiar(this.id)">
                                    <?php } ?>   
                                </td>
                                <?php if (($i+1)< count($tourn)) { ?>
                                <td>
                                    <p class="tab-center-nameTeam">Vs</p>
                                </td>
                                <td>
                                    <img src="<?= base_url() . 'assets/img/Like.png'?>" id="like<?= $i+1?>" onclick="cambiar(this.id)"> 
                                </td>                                
                                <td>
                                    <p class="tab-center-nameTeam"><?= $tourn[$i + 1]->name; ?></p>
                                </td>
                                <td>
                                    <p class="tab-center-nameTeam"><?= $tourn[$i + 1]->id_team; ?></p>
                                </td>

                                <?php } ?>                            
                            </tr> 
                            <?php
            $i = $i + 1;
        }
    } else {
                            ?>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>                                
                            <?php } ?>   

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>	
        <script src="<?= base_url() . 'assets/js/bootstrap.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/tournaments.js' ?>"></script>
    </body>
</html>