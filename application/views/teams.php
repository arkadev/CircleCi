<!DOCTYPE HTML> 
<html lang="es">
    <head>
        <title>DevTorGame</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="<?= base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="<?= base_url() . 'favicon.ico' ?>">
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/bootstrap.js' ?>"></script>
        <script src = "<?= base_url() . 'assets/js/team.js' ?>"></script>
        <script>validateName();disabledInitTourn();keyEnterInsertTeam();</script>		
    </head>
    <body style="background-color: #2E393A" >	
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
                        <img src="<?= base_url() . 'assets/img/Logo.png' ?>" class="img-responsive img-menu">
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <p class="font-menu-text">DevTorGame</p>
                    </div>
                    <div class="col-xs-5 col-sm-4 col-md-4">
                        <p class="font-menu-sub-text">By ArkaDev</p>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= base_url() . 'index.php' ?>">Inicio</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div id="name_tournament">
                <p style="color:#FF0000";><?php $name_tournament = ($_GET['name_tournament']);
echo "$name_tournament";
?></p>
            </div>		
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-3">
                    <input type="text" id="name" class="form-control" placeholder="Nombre de equipo" >
                </div>
                <div class="col-xs-4 col-sm-4 col-md-3 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 btn-add-margin">
                    <button id="insertTeam" type="buttonAdd" value="sent" disabled="true" onclick="insertTeam('<?php $name_tournament = ($_GET['name_tournament']);
                    echo "$name_tournament";
?>')" class="btn btn-success btn-circle btn-lg ">
                        <span class="glyphicon glyphicon-check"></span>
                    </button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 btn-run">				
                    <button type="buttonAdd" id="initTourn" disabled="true" onclick="isImpar()"  class="btn btn-primary btn-run btn-lg">Iniciar Torneo</button>				
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 margin-table">
                    <table id="tableTeams" class="table table-hover font-table-add">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Nombre de equipo</th> 
                            </tr>
                            <?php
                            if (is_array($teams) || is_object($teams))
                            {
                                foreach ($teams as $t)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $t->id_team; ?></td>
                                        <td><?= $t->name; ?></td>
                                    </tr>
                                    <?php
                                }
                            } else
                            {
                                ?>
                                <tr><td></td><td></td></tr>                                                                              
<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Mensaje de Confirmación</h4>
                    </div>
                    <div class="modal-body">
                        La cantidad de equipos es impar, esto significa que uno de los equipos va a quedar sin contrincante<br><br>
                        ¿Esta seguro que desea continuar?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <a href="<?= base_url() . 'index.php/tournament' ?>?name_tournament=<?php $name_tournament = ($_GET['name_tournament']);
echo "$name_tournament";
?>">						
                            <button type="buttonAdd" class="btn btn-primary">Continuar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>