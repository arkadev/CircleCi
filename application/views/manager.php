<!DOCTYPE HTML> 
<html>
    <head>
        <title>Torneos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">
        <script src="<?= base_url() . 'assets/js/jquery.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/jquery.bpopup.min.js' ?>"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
        <script src="<?= base_url() . 'assets/js/tournaments.js' ?>"></script>
        <script>
            ;
            (function ($) {
                $(function () {
                    $('#show-popup').bind('click', function (e) {
                        e.preventDefault();
                        $('#popup').bPopup({
                            easing: 'easeOutBack',
                            speed: 450,
                            transition: 'slideDown'
                        });

                    });
                });
            })(jQuery);
        </script>
    </head>
    <body>
        <div class="baner-login">
            <div class="baner-menu-create">
                <div class="div-menu-logo">
                    <img src="<?= base_url() . 'assets/img/logoD.png' ?>" class="logo-menu-create">
                </div>
                <div class="div-menu-logo">
                    <p class="text-logo-menu-create">DevTorGame</p>
                </div>
            </div>	
            <div class="baner-create">
                <button id="show-popup" class="cart-crete">
                    <div class="margin-icon">
                        <img src="<?= base_url() . 'assets/img/add.png' ?>" class="icon-add-tournament">
                    </div>
                    <div class="margin-icon">
                        <p class="text-cart-create">Crear un torneo</p>
                    </div>
                </button>
                <?php
                if (is_array($tournaments) || is_object($tournaments))
                {
                    foreach ($tournaments as $t)
                    {
                        if(strcasecmp($t->name, $t->name) !== 0){
                        ?>
                        <div id="nnnnn<?= $t->name; ?>">
                            <a href="<?= base_url() . 'index.php/team' ?>?name_tournament=<?php echo $t->name ?>">
                                <div class="cart-crete" style="left:40%;background-color:<?= $t->color; ?>"> 
                                    <div>
                                        <img src="<?= base_url() . 'assets/img/lol11.jpg' ?>" class="img-responsive margin-icon" >
                                    </div>
                                    <div class="tournamet-crete">
                                        <h3 class="color-text-tournament" style="color:white;margin-left:10px;"><?= $t->name; ?></h3>
                                        <h5 class="color-text-tournament" style="color:white;margin-left:10px;"><?= $t->description; ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    }
                } else
                {
                    ?>
                    <tr><td></td><td></td></tr>                                                                              
<?php } ?>
            </div>
            <div id="popup">
                <div class="popup-contenedor">
                    <div>
                        <img id="image-baner" src="<?= base_url() . 'assets/img/lol11.jpg' ?>" class="img-create">
                    </div>
                    <form>
                        <div  id="baner-color" class="div-modal-name" style="background-color:#029AE4">
                            <input id="name" class="iput-texrt-modal-name" placeholder="Nombre de torneo"  maxlength="25" /required>
                            <input id="description" class="iput-texrt-modal-name" style="top:55%;" placeholder="Descripción" maxlength="45" /required>
                        </div>
                        <div class="div-btn-colors">
                            <button class="btn-color" style="background-color:#E53935;" id="color-btn-1" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#029AE4;" id="color-btn-2" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#00887A;" id="color-btn-3" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#A900FF;" id="color-btn-4" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#414141;" id="color-btn-5" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#378D3B;" id="color-btn-6" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#679E37;" id="color-btn-7" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#F8A724;" id="color-btn-8" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#FF6F42;" id="color-btn-9" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#778F9B;" id="color-btn-10" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#8C6D62;" id="color-btn-11" onclick="coloBtn(this.id)"></button>
                            <button class="btn-color" style="background-color:#7D56C1;" id="color-btn-12" onclick="coloBtn(this.id)"></button>
                        </div>
                        <div>                            
                            <button type="button" class="btn-add-tournamet-validate" style="left:55%;" data-dismiss="modal">CANCELAR</button>                            
                            <button id="insertTournament" type="buttonAdd" value="sent" class="btn-add-tournamet-validate" onclick="getValues();">CREAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>	
</body>
</html>