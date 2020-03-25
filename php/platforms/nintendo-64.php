<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Retro Invader</title>
        <meta name="title" content="Retro Invaders">
        <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
        <link rel="stylesheet" type="text/css" href="/css/plateformes_style.css">
    </head>

    <?php include "../_header.php"; ?>

        <main>
            <section class="banner-platforms">
                <h1>Pick a game</h1>
                <p>Select your favorite game and get ready to play!</p>
            </section>
            <section class="nav-and-bloc-container">
                <nav class="nav-platforms">
                    <h2>Select your platform</h2>
                    <div class="nav-platforms-links-container">
                        <h2><a href="genesis.php">Genesis</a></h2>
                        <h2><a href="nes-classic.php">NES Classic</a></h2>
                        <h2><a href="dreamcast.php">Dreamcast</a></h2>
                        <h2><a href="nintendo-64.php">Nintendo 64</a></h2>
                        <h2><a href="arcade.php">Arcade</a></h2>
                        <h2><a href="super-nintendo.php">Super Nintendo</a></h2>
                    </div>
                </nav>
                <section>
                    <div class="bloc-container">
                        <div class="bloc tloz-oot-container"><span>Nintendo 64</span><h3>TLoZ Ocarina of Time</h3><a href="../games/ocarina-of-time.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc tloz-mm-container"><span>Nintendo 64</span><h3>TLoZ Majora's Mask</h3><a href="../games/majora-mask.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc super-mario-64-container"><span>Nintendo 64</span><h3>Super Mario 64</h3><a href="../games/super-mario-64.html" class="button button-on-hover">See More</a></div>
                    </div>
                </section>
            </section>
        </main>

        <?php include "../_footer.php"; ?>