<!DOCTYPE html>
<html lang="fr">
    <head>

        <?php require('header.php'); ?>

    </head>

    <body>
        <header>
            <?php require('nav.php'); ?>
        </header>


        <article class="container">
            <h2>Créer un compte dès maintenant !</h2>
            <div class="col-group">
                <div class="col-12">
                    <div id="form-div">
                        <form class="form" id="form1">
                            <label for="name" class="name">&nbsp;</label>
                            <input name="name" type="text" id="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Votre nom d'utilisateur" title="Tapez votre nom utilisateur ici" />
                            
                            <label for="email" class="email">&nbsp;</label>
                            <input name="email" type="text" id="email" class="validate[required,custom[email]] feedback-input" placeholder="Email" title="Tapez votre adresse mail ici" />

                            <label for="comment" class="email">&nbsp;</label>
                            <input name="email" type="password" id="comment" class="validate[required,custom[email]] feedback-input" placeholder="Votre mot de passe" title="Tapez votre adresse mail ici" />

                            <div class="submit">
                                <label for="button-blue">&nbsp;</label>
                                <input type="submit" value="Créer votre compte" id="button-blue"/>
                                <div class="ease"></div>
                            </div>
                        </form>
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