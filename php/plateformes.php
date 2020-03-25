<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Retro Invader</title>
        <meta name="title" content="Retro Invaders">
        <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
        <link rel="stylesheet" type="text/css" href="/css/plateformes_style.css">
    </head>

    <?php include "_header.php"; ?>

        <main>
            <section class="banner-platforms">
                <h1>Pick a game</h1>
                <p>Select your favorite game and get ready to play!</p>
            </section>
            <section class="nav-and-bloc-container">
                <nav class="nav-platforms">
                    <h2>Select your platform</h2>
                    <?php include 'platforms/_platform-list-loop.php' ?>
                </nav>
                <section>
                    <div class="bloc-container">
                        <div class="bloc super-mario-bros-2-container"><span>NES</span><h3>Super Mario Bros</h3><a href="games/super-mario-bros.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc street-fighter-container"><span>Arcade</span><h3>Street Fighter</h3><a href="games/street-fighter-2.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc sonic-the-hedgehog-2-container"><span>Genesis</span><h3>Sonic The Hedgehog 2</h3><a href="games/sonic-the-hedgehog-2.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc tloz-alttp-container"><span>Super Nintendo</span><h3>TLoZ A Link To The Past</h3><a href="games/a-link-to-the-past.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc tloz-oot-container"><span>Nintendo 64</span><h3>TLoZ Ocarina of Time</h3><a href="games/ocarina-of-time.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc tloz-mm-container"><span>Nintendo 64</span><h3>TLoZ Majora's Mask</h3><a href="games/majora-mask.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc aladdin-container"><span>Super Nintendo</span><h3>Disney's Aladdin</h3><a href="games/aladdin.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc altered-beast-container"><span>Genesis</span><h3>Altered Beast</h3><a href="games/altered-beast.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc kirby-dreamland-container"><span>Super Nintendo</span><h3>Kirby's Dreamland</h3><a href="games/kirby-dreamland.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc lion-king-container"><span>Super Nintendo</span><h3>Disney's The Lion King</h3><a href="#" class="button button-on-hover">See More</a></div>
                        <div class="bloc metal-slug-container"><span>Arcade</span><h3>Metal Slug</h3><a href="games/metal-slug.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc super-mario-64-container"><span>Nintendo 64</span><h3>Super Mario 64</h3><a href="games/super-mario-64.html" class="button button-on-hover">See More</a></div>
                        <div class="bloc virtual-tennis-container"><span>Dreamcast</span><h3>Virtual Tennis</h3><a href="games/virtual-tennis.html" class="button button-on-hover">See More</a></div>
                    </div>
                </section>
            </section>
        </main>

        <?php include "_footer.php"; ?>
