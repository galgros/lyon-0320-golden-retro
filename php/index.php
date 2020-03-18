<!DOCTYPE html>
<html>
<head>
	<title>Retro Invader</title>
	<meta lang="en">
	<meta name="title" content="Retro Invaders">
	<meta charset="UTF-8">
	<meta name="description" content="Retro Invaders helps you to find your favorite retro games">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../css/index_style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Roboto:300,400,700,900&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
	<link rel='stylesheet' id='thb-self-hosted-1-css' href="../gilroy/gilroy.css">
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
		<section class="banner-homepage">

			<div class="homepage-banner-content-container">
				<h2>Play your favorite retro games</h2>
				<p>Retro Invader helps you to get your favorite retro games and to have all the informations about prices evolution.</p>
			</div>

		</section>

		<section class="pick-game-homepage">

			<div class="heading-with-background">
				<h2>Pick a game!</h2>
			</div>

			<section class="align-left super-mario-bg">
				<div class="game-content-container">
					<div class="game-name-picture super-mario-bros"></div>
					<div class="game-category">
						<span class="nintendo">NINTENDO</span>
						<span class="tiret">-</span>
						<span class="game-platform">NES</span>
						<span class="tiret">-</span>
						<span class="release-date">1993</span>
					</div>
					<p>Nintendo created platform games and got it at its best with Super Mario Bros. 2. Experience now one of the best platformers ever created!</p>
					<a href="games/super-mario-bros.html" class="button">MORE INFO</a>
				</div>
			</section>

			<section class="align-right street-fighter-bg">
				<div class="game-content-container">
					<div class="game-name-picture street-fighter"></div>
					<div class="game-category">
						<span class="game-platform">ARCADE</span>
						<span class="tiret">-</span>
						<span class="release-date">1992</span>
					</div>
					<p>Ryu, CHun-Li, M. Bison... choose your favorite street fighter and battleyour friend!</p>
					<a href="games/street-fighter-2.html" class="button">MORE INFO</a>
				</div>
			</section>

			<section class="align-left sonic-bg">
				<div class="game-content-container">
					<div class="game-name-picture sonic"></div>
					<div class="game-category">
						<span class="nintendo">SEGA</span>
						<span class="tiret">-</span>
						<span class="game-platform">MEGADRIVE</span>
						<span class="tiret">-</span>
						<span class="release-date">1992</span>
					</div>
					<p>With Sonic the Hedgehog, Sega became a real concurrent to Nintendo’s Mario.</p>
					<a href="games/sonic-the-hedgehog-2.html" class="button">MORE INFO</a>
				</div>
			</section>

		</section>

		<section class="platforms-homepage">

			<div class="heading-with-background">
				<h2 class="platforms-title">Select your platform</h2>
			</div>

			<div class="products-container-homepage">

				<a href="platforms/genesis.html">
					<div class="platform-container sega-megadrive">
						<span class="number-of-games">2 JEUX</span>
						<h3>Sega Genesis</h3>
					</div>
				</a>

				<a href="platforms/nes-classic.html">
					<div class="platform-container nes-classic">
						<span class="number-of-games">1 JEUX</span>
						<h3>NES Classic</h3>
					</div>
				</a>

				<a href="platforms/dreamcast.html">
					<div class="platform-container dreamcast">
						<span class="number-of-games">1 JEUX</span>
						<h3>Dreamcast</h3>
					</div>
				</a>

				<a href="platforms/nintendo-64.html">
					<div class="platform-container nintendo-64">
						<span class="number-of-games">3 JEUX</span>
						<h3>Nintendo 64</h3>
					</div>
				</a>

				<a href="platforms/arcade.html">
					<div class="platform-container arcade">
						<span class="number-of-games">2 JEUX</span>
						<h3>Arcade</h3>
					</div>
				</a>

				<a href="platforms/super-nintendo.html">
					<div class="platform-container super-nintendo">
						<span class="number-of-games">4 JEUX</span>
						<h3>Super Nintendo</h3>
					</div>
				</a>
			</div>

				<a href="plateformes.php" class="button">SEE ALL</a>

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

			<input class="first-form-element" type="text" placeholder="Name">
			<input type="text" placeholder="Email Address">
			<input type="dropdown" placeholder="How can we help?">
			<textarea placeholder="Anything else?"></textarea>

			<button type="submit">SUBMIT</button>

		</section>

        <?php include "_footer.php"; ?>

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