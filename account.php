<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Tennis World - Créer votre compte</title>
        <?php require('header.php'); ?>
    </head>

    <body>
       <?php 
        // Init variable tabindex
        $i = 0;
        ?>
        <header role="banner" aria-label="En tête du site">
           <div id="evitement">
                <button onclick="window.location.hash='#contenu'" tabindex="<?php echo $i += 1; ?>" accesskey="p">Aller au contenu</button>
                <button onclick="window.location.hash='#nav'" tabindex="<?php echo $i += 1; ?>" accesskey="m">Aller au menu</button>
                <button onclick="window.location.hash='#recherche'" tabindex="<?php echo $i += 1; ?>" accesskey="r">Aller à la recherche</button>
            </div>
            <?php require('nav.php'); ?>
        </header>
        
        <div class="container">
           <div class="bread col-lg-12">
                <a href="index.php" title="Accueil du site">Accueil ></a>
                <a href="account.php" title="Création de compte">Compte</a>
            </div>
        </div>

        <article id="contenu" class="container" role="main">
            <h2>Créer un compte dès maintenant !</h2>
            <div class="col-group">
                <div class="col-12">
                    <div id="form-div">
                        <form class="form" id="form1">
                            <label for="name" class="name">Votre pseudo</label>
                            <input name="name" type="text" id="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Votre nom d'utilisateur" title="Tapez votre nom utilisateur ici" required="required" aria-invalid="true" />

                            <label for="email" class="email">Votre adresse mail</label>
                            <input name="email" type="text" id="email" class="validate[required,custom[email]] feedback-input" placeholder="Email" title="Tapez votre adresse mail ici" required="required" aria-invalid="true" />

                            <label for="comment" class="email">Votre mot de passe</label>
                            <input name="email" type="password" id="comment" class="validate[required,custom[email]] feedback-input" placeholder="Votre mot de passe" title="Tapez votre adresse mail ici" required="required" aria-invalid="true"/>

                            <div class="submit">
                                <input type="submit" value="Créez votre compte" id="button-blue"/>
                                <div class="ease"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>


        <footer>
            <?php require('footer.php'); ?>
        </footer>

        <!-- include jquery -->
        <script src="js/jquery-1.10.1.min.js"></script>


        <!-- include the jquery-accessibleMegaMenu plugin script -->
        <script src="js/jquery-accessibleMegaMenu.js"></script>
        <script src="js/slippry.min.js"></script>

        <!-- initialize a selector as an accessibleMegaMenu -->
        <script>
            
            // Div evitement
            $("#evitement button:first-child").click(function(){
                $("#contenu").focus();
            });
            $("#evitement button:nth-child(2)").click(function(){
                $("#nav li:first-child a").focus();
            });
            $("#evitement button:nth-child(3)").click(function(){
                $("#recherche input:first-child").focus();
            });
            
            $("nav:first").accessibleMegaMenu({
                /* prefix for generated unique id attributes, which are required 
               to indicate aria-owns, aria-controls and aria-labelledby */
                uuidPrefix: "accessible-megamenu",

                /* css class used to define the megamenu styling */
                menuClass: "nav-menu",

                /* css class for a top-level navigation item in the megamenu */
                topNavItemClass: "nav-item",

                /* css class for a megamenu panel */
                panelClass: "sub-nav",

                /* css class for a group of items within a megamenu panel */
                panelGroupClass: "sub-nav-group",

                /* css class for the hover state */
                hoverClass: "hover",

                /* css class for the focus state */
                focusClass: "focus",

                /* css class for the open state */
                openClass: "open"
            });


            $(function() {
                var slider = $("#out-of-the-box-demo").slippry({
                    transition: 'fade',
                    // useCSS: true,
                    // speed: 1000,
                    // pause: 3000,
                    auto: true,
                    pager: false
                    // autoHover: false
                });

                $('.stop').click(function () {
                    slider.stopAuto();
                });

                $('.start').click(function () {
                    slider.startAuto();
                });



            });

        </script>
        </div>
    </body>
</html>