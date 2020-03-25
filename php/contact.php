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
                        <i class="fa fa-envelope" aria-hidden="true">Contact@retro-golden.fr</i>
                    </div>
                </div>
                <div class="call-us">
                    <h5>Call Us</h5>
                    <div>
                        <i class="fa fa-phone" aria-hidden="true">0800 00 00 00</i>
                    </div>
                </div>
                <div class="location">
                    <h5>Location</h5>
                    <div>
                        <i class="fa fa-map" aria-hidden="true">Bowser Castle <i class="fa fa-heart" aria-hidden="true"></i></i>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "_footer.php"; ?>
