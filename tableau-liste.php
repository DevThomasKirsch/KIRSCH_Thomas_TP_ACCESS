<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Tennis World - Les tournois mondiaux</title>
        <?php require('header.php'); ?>
        <!-- Owl Carousel Assets -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">

    </head>

    <body>
        <?php 
        // Init variable tabindex
        $i = 0;
        ?>
        <header role="banner" aria-label="En tête du site">
            <div id="evitement">
                <button onclick="window.location.hash='#content'" tabindex="<?php echo $i += 1; ?>" accesskey="p">Aller au contenu</button>
                <button onclick="window.location.hash='#nav'" tabindex="<?php echo $i += 1; ?>" accesskey="m">Aller au menu</button>
                <button onclick="window.location.hash='#recherche'" tabindex="<?php echo $i += 1; ?>" accesskey="r">Aller à la recherche</button>
            </div>
            <?php require('nav.php'); ?>
        </header>

        <section role="main">
            <div class="col-group">
                <div class="col-12">
                    <div id="owl-demo" class="owl-carousel owl-theme" tabindex="<?php echo $i += 1; ?>">
                        <div class="item"><img src="img/tennis1.jpg" alt="Photo de slider Tennis 1"></div>
                        <div class="item"><img src="img/tennis2.jpg" alt="Photo de slider Tennis 2"></div>
                        <div class="item"><img src="img/tennis3.jpg" alt="Photo de slider Tennis 3"></div>
                    </div>
                </div>
            </div>
        </section>


        <article class="container" id="content">
            <h2>Les tournois mondiaux en 2016</h2>

            <div class="col-group">
                <div class="col-12">
                    <a id="prec" href="index.php?return=true#tournois" tabindex="<?php echo $i += 1; ?>" style="display:none;">Revenir sur la page précédente</a>
                    <p>Les tournois de tennis durant l'année 2016</p>
                    <ul>
                        <li>France
                            <ul>
                                <li>Marseille</li>
                                <li>Montpellier</li>
                                <li>Metz</li>
                            </ul>
                            <ul>
                                <li>ATP 250</li>
                                <li>ATP 250</li>
                                <li>ATP 250</li>
                            </ul>
                            <ul>
                                <li>532 103 €</li>
                                <li>532 103 €</li>
                                <li>532 103 €</li>                         
                            </ul>
                        </li>
                    </ul>
                    <a id="prec" href="index.php?return=true#tournois" tabindex="<?php echo $i += 1; ?>">Revenir sur la page précédente</a>
                </div>
            </div>
        </article>

        <article class="container">
            <h2>Les tournois de la semaine</h2>
            <div class="col-group">
                <div class="col-3">
                    <div class="tournoi">
                        <div class="tournoi-header">
                            <h5>Paris</h5>
                            <h5>FRANCE</h5>
                        </div>
                        <p>Le tournoi ATP de Paris se déroule du 21 octobre au 04 novembre 2016. 1000 points ATP World Tour sont à saisir pour le gagnant.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="tournoi">
                        <div class="tournoi-header">
                            <h5>Shanghai</h5>
                            <h5>CHINA</h5>
                        </div>
                        <p>Le tournoi ATP de Shanghai se déroule du 09 octobre au 16 octobre 2016. 1000 points ATP World Tour sont à saisir pour le gagnant.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="tournoi">
                        <div class="tournoi-header">
                            <h5>Tokyo</h5>
                            <h5>JAPAN</h5>
                        </div>
                        <p>Le tournoi WTA de Tokyo se déroule du 19 septembre au 26 septembre 2016. Un tournoi majeur du circuit international WTA.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="tournoi">
                        <div class="tournoi-header">
                            <h5>Beijing</h5>
                            <h5>CHINA</h5>
                        </div>
                        <p>Le tournoi de Pékin se déroule du 1er octobre au 09 octobre 2016. Le dernier tournoi de la saison pour les joueuses professionnelles.</p>
                    </div>
                </div>
            </div>
        </article>

        <footer>
            <?php require('footer.php'); ?>
        </footer>

        <!-- include jquery -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
                integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
                crossorigin="anonymous"></script>  
        <script src="js/owl.carousel.min.js"></script>


        <!-- include the jquery-accessibleMegaMenu plugin script -->
        <script src="js/jquery-accessibleMegaMenu.js"></script>

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
                $("#owl-demo").owlCarousel({

                    navigation : true, // Show next and prev buttons
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem:true

                    // "singleItem:true" is a shortcut for:
                    // items : 1, 
                    // itemsDesktop : false,
                    // itemsDesktopSmall : false,
                    // itemsTablet: false,
                    // itemsMobile : false

                });



            });

        </script>
        </div>
    </body>
</html>