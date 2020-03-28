<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Retro Invader</title>
        <meta name="title" content="Retro Invaders">
        <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
        <link rel="stylesheet" type="text/css" href="/css/contact_style.css">
    </head>

    <?php include "_header.php"; ?>

        <main>
            <section class="banner-contact">
                <div class="contact-banner-content-container">
                    <h2>Thank you <?= ucfirst($_GET['user_name']); ?></h2>
                    <p>We get your message and will get back to you in a 24 hours delay.</p>
                    <div class="infoMessage">
                        <p>Important: you should have received email notification of your ticket on your mail : <?= $_GET['user_mail']; ?>. if you do not, you should check your spam folder.</p>
                    </div>
                </div>
            </section>
        </main>

    <?php include "_footer.php"; ?>
