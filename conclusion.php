<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Tennis World - Conclusion</title>
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
                <a href="conclusion.php" title="Page de conclusion">Conclusion</a>
            </div>
        </div>
        
        <article id="contenu" class="container" role="main">
            <h2>Conclusion du module</h2>
            <div class="col-group">
                <div class="col-12">
                    <p>Le module d'accessibilité web a été une bonne manière de prendre conscience des techniques et des règles d'accessibilités afin de rendre un site web, quel qu'il soit, accessible à tous.</p>
                    <p>Certaines règles HTML5 que je connaissais seulement de nom sans trop savoir à quoi elles servaient (rôle, aria-label...) sont devenus évidentes durant le cours d'accessibilité web.</p>
                    <p>Mon avis tout de même, et que l'accessibilité pose problème la plupart du temps au niveau du design du site ainsi qu'à l'expérience utilisateur. Penser à tout le monde fait souvent qu'on en fait de "trop" sur le site et le site devient moins ergonomique.</p>
                    <p>Je pense que tout les sites d'institutions ou de gouvernements doivent être accessible mais certains sites vitrines pour des petites / moyennes entreprises ne nécessitent pas de rendre accessible le site à 100%.</p>
                    <p>J'ai augmenté mes connaissances web en accessibilité web et ce que je cherchais à assimiler durant ce cours. </p>
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