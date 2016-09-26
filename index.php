<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thomas KIRSCH - TP Access Web</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fluidable.css">
        <link rel="stylesheet" href="css/normalise.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/slippry.css">
        <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>    
    </head>

    <body>
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
                            <li class="nav-item"><a href="#">Contact</a></li>
                            <li class="nav-item nav-right">
                                <input type="text" placeholder="Rechercher...">
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <section>
            <div class="col-group">
                <div class="col-12">
                    <ul id="out-of-the-box-demo">
                        <li>
                            <a href="#slide1">
                                <img src="img/tennis3.jpg" height="450" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#slide2">
                                <img src="img/tennis2.jpg" height="450"  alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#slide3">
                                <img src="img/tennis1.jpg" height="450" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#slide4">
                                <img src="img/tennis4.jpg" height="450" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <article class="container">
            <h2>Les classements ATP et WTA</h2>

            <div class="col-group">
                <div class="col-6">
                    <table summary="Ce tableau représente les classements hommes des joueurs professionnels de tennis sur le circuit mondial.">
                        <tr>
                            <th>Numéro : </th>
                            <th>Prénom / Nom :</th>
                            <th>Pays :</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Novak Djokovic</td>
                            <td>Serbie</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Module 4</td>
                            <td>Module 3</td>
                        </tr>
                    </table>
                </div>
                <div class="col-6">
                    <table summary="Ce tableau représente les classements hommes des joueurs professionnels de tennis sur le circuit mondial.">
                        <tr>
                            <th>Numéro : </th>
                            <th>Prénom / Nom :</th>
                            <th>Pays :</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Novak Djokovic</td>
                            <td>Serbie</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Module 4</td>
                            <td>Module 3</td>
                        </tr>
                    </table>
                </div>
                <div class="col-6 suiteclassement">
                    <a href="#" title="Voir le classement ATP">voir la suite du classement ATP</a>
                </div>
                <div class="col-6 suiteclassement">
                    <a href="#" title="Voir le classement WTA">voir la suite du classement WTA</a>
                </div>
            </div>
        </article>

        <footer>
            <div class="container">
                <div class="col-group">
                    <div class="col-4">
                        <h4>Le plan du site</h4>
                        <ul>
                            <li>Accueil</li>
                            <li>Login</li>
                            <li>Créer votre compte</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h4>Les autres sites du tennis</h4>
                        <ul>
                            <li>FFT</li>
                            <li>ATP World Tour</li>
                            <li>WTA World Tour</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h4>Les réseaux sociaux pour suivre le tennis</h4>
                        <ul>
                            <li>Facebook FFT</li>
                            <li>Facebook WeAreTennis</li>
                            <li>Twitter FFT</li>
                            <li>Twitter WeAreTennis</li>
                            <li>Twitter ATP World Tour</li>
                            <li>Youtube ATP World Tour</li>
                        </ul>
                    </div>
                </div>
            </div>
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