<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thomas KIRSCH - TP Access Web</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fluidable-min.css">
        <link rel="stylesheet" href="css/normalise.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>    
    </head>

    <body>
        <div class="container">
            <header>
                <div class="col-group">
                    <div class="col-12">
                        <div class="banner">
                        </div>
                        <nav>
                            <ul class="nav-menu">
                                <li class="nav-item">
                                    <a href="#">Accueil</a>
                                    <div class="sub-nav">
                                        <ul class="sub-nav-group">
                                            <li><a href="#">Sous menu 1</a></li>
                                            <li><a href="#">Sous menu 2</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Login</a>
                                    <div class="sub-nav">
                                        <ul class="sub-nav-group">
                                            <li><a href="#">Sous menu 1</a></li>
                                            <li><a href="#">Sous menu 2</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item nav-right">
                                    <input type="search" placeholder="Rechercher...">
                                </li>
                            </ul>
                        </nav>
                        </nav>
                </div>
                </div>
            </header>

        <section>
            <div id="owl" class="owl-carousel">
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                ...
            </div>

        </section>

        <footer>

        </footer>

        <!-- include jquery -->
        <script src="js/jquery-1.10.1.min.js"></script>

        <script src="js/owl.carousel.min.js"></script>

        <!-- include the jquery-accessibleMegaMenu plugin script -->
        <script src="js/jquery-accessibleMegaMenu.js"></script>

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

            $(document).ready(function() {

                $("#owl").owlCarousel({
                    items : 1,
                });

            });
        </script>
        </div>
    </body>
</html>