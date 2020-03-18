<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Retro Invader</title>
        <meta lang="en">
        <meta name="title" content="Retro Invaders">
        <meta charset="UTF-8">
        <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="contact_style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Roboto:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="header_style.css" />
        <link rel="stylesheet" type="text/css" href="footer_style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
        <link rel='stylesheet' id='thb-self-hosted-1-css' href="gilroy/gilroy.css">
    </head>

    <body>

        <div id="nav-mobile-container" class="nav-mobile-full no-content">
            <div class="close-menu-mobile no-content">
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <nav class="mobile-nav">
                <ul>
                    <a href="plateformes.php"><li>Platforms</li></a>
                    <a href="about_us.php"><li>About Us</li></a>
                    <a href="contact.php"><li>Contact</li></a>
                </ul>
            </nav>

        </div>

            <?php include "_header.php"; ?>

        <main>
            <section class="banner-contact">
                <div class="contact-banner-content-container">
                    <h2>Feel free to contact us</h2>
                    <p>You have any questions about our website, our games cotation or want to submit a game? Please feel free to send us a message, we'll do our best to answer your question as quick as possible.</p>
                </div>
            </section>
        <div class="middle">
            <div class="form">
                <h2>Get in Touch !</h2>
                <form action="#" method="post">
                    <label for="name"></label>
                    <input type="text" id="name" name="user_name" placeholder="Name">
                    <label for="mail"></label>
                    <input type="email" id="mail" name="user_mail" placeholder="Mail">
                    <label for="msg"></label>
                    <textarea id="msg" name="user_message" placeholder="Message"></textarea>
                </form>
                <button type="submit" class="button">Send</button>
            </div>

            <div class="contact">
                <div class="mail">
                    <h5>Mail</h5>
                    <div>
                        <i class="fa fa-envelope" aria-hidden="true">
                            Contact@retro-golden.fr
                        </i>
                    </div>
                </div>
                <div class="call-us">
                    <h5>Call Us</h5>
                    <div>
                        <i class="fa fa-phone" aria-hidden="true">
                            0800 00 00 00
                        </i>
                    </div>
                </div>
                <div class="location">
                    <h5>Location</h5>
                    <div>
                        <i class="fa fa-map" aria-hidden="true">
                            Bowser Castle <i class="fa fa-heart" aria-hidden="true"></i>
                        </i>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
        <footer>
            <section class="items">
                <article class="hidden">
                    <a href="plateformes.php">
                        <div>Platforms</div>
                    </a>
                </article>
                <article class="hidden">
                    <a href="produits.html">
                        <div>Products</div>
                    </a>
                </article>
                <article class="hidden">
                    <a href="about_us.php">
                        <div>About Us</div>
                    </a>
                </article>
                <article class="hidden">
                    <a href="index.php">
                        <div class="logo_retro_invaders">
                            <img class="logo_desktop" alt="logo_retro_invaders_desktop" src="Images/Autres/blog-loco-green.png" height="150" width="auto">
                        </div>
                    </a>
                </article>
                <article class="hidden">
                    <a href="contact.php">
                        <div>Contact</div>
                    </a>
                </article>
                <article>
                    <div>FAQ</div>
                </article>

                <article>
                    <div>Legal Mentions</div>
                </article>
            </section>

            <section class="logo-rs-footer-container">
                <article>
                    <a href="https://www.instagram.com/?hl=fr">
                       <img class="logo_instagram" alt="logo_instagram" src="Images/Autres/instagram-green.png" height="40" width="auto">
                    </a>
                </article>

                <article>
                    <a href="https://twitter.com/?lang=fr">
                        <img alt="logo_twitter" src="Images/Autres/twitter-green.png" height="40" width="auto">
                    </a>
                </article>

                <article>
                    <a href="https://fr-fr.facebook.com/">
                        <img alt="logo_facebook" src="Images/Autres/facebook-green.png" height="40" width="auto">
                    </a>
                </article>

                <article>
                    <a href="https://www.pinterest.fr/">
                        <img alt="logo_pinterest" src="Images/Autres/pinterest-green.png" height="40" width="auto">
                    </a>
                </article>

            </section>
        </footer>
    </main>

            <script type="text/javascript">
            jQuery(function(){
                var div = jQuery("#burger-menu-click"), div = jQuery("#nav-mobile-container"), div = jQuery(".close-menu-mobile");
                jQuery("#burger-menu-click").click(function(){
                    jQuery("#burger-menu-click").toggleClass ("no-content");
                    jQuery("#nav-mobile-container").toggleClass ("no-content");
                    jQuery(".close-menu-mobile").toggleClass ("no-content");
                });
                jQuery(".close-menu-mobile").click(function(){
                    jQuery("#burger-menu-click").toggleClass ("no-content");
                    jQuery("#nav-mobile-container").toggleClass ("no-content");
                    jQuery(".close-menu-mobile").toggleClass ("no-content");
                });
            });
            </script>


    </body>

</html>