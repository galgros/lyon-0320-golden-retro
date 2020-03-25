<!DOCTYPE html>
<html lang="en">
<head>
    <title>Retro Invader</title>
    <meta lang="en">
    <meta name="title" content="Retro Invaders">
    <meta charset="UTF-8">
    <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../css/plateformes_style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/header_style.css" />
    <link rel="stylesheet" type="text/css" href="../../css/footer_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
    <link rel='stylesheet' id='thb-self-hosted-1-css' href="../../gilroy/gilroy.css">
</head>
<body>
        <div id="nav-mobile-container" class="nav-mobile-full no-content">
                <div class="close-menu-mobile no-content">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <nav class="mobile-nav">
                        <ul>
                            <a href="../plateformes.php"><li>Platforms</li></a>
                            <a href="../about_us.php"><li>About Us</li></a>
                            <a href="../contact.php"><li>Contact</li></a>
                        </ul>
                </nav>

            </div>

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

            </div>
    </main>

        <?php include "../_footer.php"; ?>

        <?php include "../_burger-script.php"; ?>
    
</body>
</html>