<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Retro Invader</title>
        <meta name="title" content="Retro Invaders">
        <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
        <link rel="stylesheet" type="text/css" href="/css/plateformes_style.css">
    </head>

    <?php include "../php/_header.php"; ?>

        <main>
            <section class="banner-platforms">
                <h1>Pick a game</h1>
                <p>Select your favorite game and get ready to play!</p>
            </section>
            <section class="nav-and-bloc-container">
                <nav class="nav-platforms">
                    <h2>Select your platform</h2>
                    <?php include '../php/platforms/_platform-list-loop.php' ?>
                </nav>
                <section>
                    <div class="bloc-container">
                        <div class="bloc super-mario-bros-2-container">
                            <a href="/php/platforms/nes-classic.php"><span>NES</span></a>
                            <a href="games/super-mario-bros.php"><h3>Super Mario Bros</h3></a>
                            <a href="games/super-mario-bros.php" class="button button-on-hover">See More</a>
                        </div>
                        <div class="bloc street-fighter-container">
                            <a href="/php/platforms/arcade.php"><span>Arcade</span></a>
                            <a href="games/street-fighter-2.php"><h3>Street Fighter</h3></a>
                            <a href="games/street-fighter-2.php" class="button button-on-hover">See More</a>
                        </div>
                        <div class="bloc sonic-the-hedgehog-2-container">
                            <a href="/php/platforms/genesis.php"><span>Genesis</span></a>
                            <a href="games/sonic-the-hedgehog-2.php"><h3>Sonic The Hedgehog 2</h3></a>
                            <a href="games/sonic-the-hedgehog-2.php" class="button button-on-hover">See More</a>
                        </div>
                        <div class="bloc tloz-alttp-container">
                            <a href="/php/platforms/super-nintendo.php"><span>Super Nintendo</span></a>
                            <a href="games/a-link-to-the-past.php"><h3>TLoZ A Link To The Past</h3></a>
                            <a href="games/a-link-to-the-past.php" class="button button-on-hover">See More</a>
                        </div>
                        <div class="bloc tloz-oot-container">
                            <a href="/php/platforms/nintendo-64.php"><span>Nintendo 64</span></a>
                            <a href="games/ocarina-of-time.php"><h3>TLoZ Ocarina of Time</h3></a>
                            <a href="games/ocarina-of-time.php" class="button button-on-hover">See More</a>
                        </div>
                        <div class="bloc tloz-mm-container">
                            <a href="/php/platforms/nintendo-64.php"><span>Nintendo 64</span></a>
                            <a href="games/majora-mask.php"><h3>TLoZ Majora's Mask</h3></a>
                            <a href="games/majora-mask.php" class="button button-on-hover">See More</a>
                        </div>
                        <div class="bloc aladdin-container">
                            <a href="/php/platforms/super-nintendo.php"><span>Super Nintendo</span></a>
                            <a href="games/aladdin.php"><h3>Disney's Aladdin</h3></a>
                            <a href="games/aladdin.php" class="button button-on-hover">See More</a>
                        </div>
                        <div class="bloc altered-beast-container">
                            <a href="/php/platforms/genesis.php"><span>Genesis</span></a>
                            <a href="games/altered-beast.php"><h3>Altered Beast</h3></a>
                            <a href="games/altered-beast.php" class="button button-on-hover">See More</a>
                        </div>
                    </div>
                </section>
            </section>
        </main>

        <?php include "../php/_footer.php"; ?>
