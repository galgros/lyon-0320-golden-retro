<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Retro Invader</title>
        <meta name="title" content="Retro Invaders">
        <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
        <link rel="stylesheet" type="text/css" href="/css/index_style.css">
        <link rel="stylesheet" type="text/css" href="/css/contact_style.css">
    </head>

    <?php require "_header.php"; ?>

        <main>
            <section class="banner-homepage">
                <div class="homepage-banner-content-container">
                    <h2>Play your favorite retro games</h2>
                    <p>Retro Invader helps you to get your favorite retro games and to have all the informations about prices evolution.</p>
                </div>
            </section>
            <section class="pick-game-homepage">
                <div class="pick-game-main">
                    <div class="heading-with-background">
                        <h2 class="highlight-title">Pick a game!</h2>
                    </div>
                </div>
                <div class="platforms-and-highlights">
                    <section class="platforms-homepage">
                        <div class="heading-with-background">
                            <h2 class="platforms-title">Select your platform</h2>
                        </div>
                        <div class="products-container-homepage">
                            <a href="platforms/genesis.php">
                                <div class="platform-container sega-megadrive">
                                    <span class="number-of-games">2 JEUX</span>
                                    <h3>Sega Genesis</h3>
                                </div>
                            </a>
                            <a href="platforms/nes-classic.php">
                                <div class="platform-container nes-classic">
                                    <span class="number-of-games">1 JEUX</span>
                                    <h3>NES Classic</h3>
                                </div>
                            </a>
                            <a href="platforms/dreamcast.php">
                                <div class="platform-container dreamcast">
                                    <span class="number-of-games">1 JEUX</span>
                                    <h3>Dreamcast</h3>
                                </div>
                            </a>
                            <a href="platforms/nintendo-64.php">
                                <div class="platform-container nintendo-64">
                                    <span class="number-of-games">3 JEUX</span>
                                    <h3>Nintendo 64</h3>
                                </div>
                            </a>
                            <a href="platforms/arcade.php">
                                <div class="platform-container arcade">
                                    <span class="number-of-games">2 JEUX</span>
                                    <h3>Arcade</h3>
                                </div>
                            </a>
                            <a href="platforms/super-nintendo.php">
                                <div class="platform-container super-nintendo">
                                    <span class="number-of-games">4 JEUX</span>
                                    <h3>Super Nintendo</h3>
                                </div>
                            </a>
                            <a href="plateformes.php" class="button">SEE ALL</a>
                        </div>
                    </section>
                </div>
            </section>
            <section class="about-us-homepage">
                <div class="about-us-homepage-content-container">
                    <h2>Let's meet</h2>
                    <p>Video game is our passion since we were kids and we love to share it.</p>
                    <a href="about_us.php" class="button pink-button">KNOW MORE</a>
                </div>
            </section>
            <section class="contact-homepage">
                <div class="heading-with-background">
                    <h2>Any questions?</h2>
                </div>

                <?php include "_contactForm.php"; ?>

            </section>
        </main>

    <?php require "_footer.php"; ?>
