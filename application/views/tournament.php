<!DOCTYPE HTML> 
<html>
    <head>
        <title>Torneos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="<?= base_url() . 'js/jquery.min.js'?>"></script>
        <script src="<?= base_url() . 'js/jquery.bpopup.min.js'?>"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    </head>
    <body>
        <div class="baner-login">
            <div class="baner-menu-create">
                <div class="relative-p">
                    <img src="<?= base_url() . 'assets/img/lol11.jpg'?>" class="img-responsive margin-icon">
                </div>
                <div class="relative-p">
                    <p class="text-menu-team"><?= $tourn[$i]->name; ?></p>
                </div>
                <div class="relative-p">
                    <p class="text-menu-team-d"><?= $tourn[$i]->description; ?></p>
                </div>
                <div class="div-menu-team">
                    <button class="btn-menu-team">
                        <img src="<?= base_url() . 'assets/img/tour.png'?>" class="img-btn-menu">
                        <p class="text-btn-menu-team">Crear Torneo</p>
                    </button>
                </div>
            </div>
            <div class="div-tournamet-table">
                <div class="div-t-t">
                    <table class="table table-hover">
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
    </body>
</html>