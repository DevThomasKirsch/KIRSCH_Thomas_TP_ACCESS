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
            <h2>Prenez contact avec notre assistance</h2>
            <div class="col-group">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.1933132837444!2d7.784269115496489!3d48.816372911618615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796ead79d037723%3A0xb460401cd043be5f!2sIUT+de+Haguenau!5e0!3m2!1sfr!2sfr!4v1474880024058" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-12">
                    <div id="form-div">
                        <form class="form" id="form1">
                            <label for="name" class="name">&nbsp;</label>
                            <input name="name" type="text" id="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" title="Tapez votre nom ici" />

                            <label for="email" class="email">&nbsp;</label>
                            <input name="email" type="text" id="email" class="validate[required,custom[email]] feedback-input" placeholder="Email" title="Tapez votre adresse mail ici" />

                            <label for="comment" class="text">&nbsp;</label>
                            <textarea name="text" id="comment" class="validate[required,length[6,300]] feedback-input" placeholder="Comment" title="Ecrivez votre message ici"></textarea>


                            <div class="submit">
                                <input type="submit" value="Envoyer le message" id="button-blue"/>
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