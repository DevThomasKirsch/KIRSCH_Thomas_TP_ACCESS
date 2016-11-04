<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Tennis World - Accessibilité</title>
        <?php require('header.php'); ?>
    </head>

    <body>
        <?php 
        // Init variable tabindex
        $i = 0;
        ?>
        <header role="banner">
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
                <a href="accessibilite.php" title="Charte d'accessibilité">Charte d'accessibilité</a>
            </div>
        </div>

        <article id="contenu" class="container" role="main">
            <h2>Charte d'accessibilité</h2>
            <div class="col-group">
                <div class="col-12">
                    <h3>Tennis World s'engage</h3>
                    <p>"Mettre le Web et ses services à la disposition de tous les individus, quel que soit leur matériel ou logiciel, leur infrastructure réseau, leur langue maternelle, leur culture, leur localisation géographique, ou leurs aptitudes physiques ou mentales". (Extrait de la définition de l’accessibilité adoptée par le World Wide Web Consortium)</p>
                    <p>Le site TennisWorld, s’inscrit dans l’accessibilité aux handicapés visant à optimiser l’accès à l’information et à améliorer la qualité des services existants et à venir.</p>
                    <p>Les principaux acteurs impliqués dans la mise en œuvre de l’accessibilité et contribué à l’élaboration d’un référentiel d’accessibilité publié par DGME, Direction Générale de la Modernisation de l’Etat, au sein du ministère de l’Economie, des Finances et de l’Industrie. TennisWorld a été développé pour répondre aux critères "Bronze" (niveau équivalent au niveau A de W3C/WAI ) du référentiel de la DGME.</p>
                </div>
                </article>


            <footer>
                <?php require('footer.php'); ?>
            </footer>

            <!-- include jquery -->
            <script src="js/jquery-1.10.1.min.js"></script>


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
            </script>
            </div>
    </body>
</html>