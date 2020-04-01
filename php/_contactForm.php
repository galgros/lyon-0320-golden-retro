<?php

require_once '../connec.php';
$pdo = new PDO(DNS, USER, PASS);


    if($_POST) {

        $name = trim($_POST['user_name']);
        $mail = trim($_POST['user_mail']);
        $message = trim($_POST['user_message']);

        $errorsArray = array();

        if(empty($name))
            $errorsArray['user_name1'] = "Name cannot be empty";
        if (empty($mail))
            $errorsArray['user_mail1'] = "Email cannot be empty";
        if (!empty($mail) && !filter_var($mail, FILTER_VALIDATE_EMAIL))
            $errorsArray['user_mail1'] = "Email is not valid";
        if (empty($message))
            $errorsArray['user_message1'] = "Message cannot be empty";

        if (empty($errorsArray)) {
            $urlMail = urlencode($mail);

            $query = 'INSERT INTO contact (user_name, mail, message) VALUES (:user_name, :mail, :message)';
            $statement = $pdo->prepare($query);
            $statement->bindValue(':user_name', $name, \PDO::PARAM_STR);
            $statement->bindValue(':mail', $mail, \PDO::PARAM_STR);
            $statement->bindValue(':message', $message, \PDO::PARAM_STR);
            $statement->execute();

            header("Location: /php/thanks.php?user_name=$name&user_mail=$urlMail");
            exit();
        }
    }
?>

<div class="middle">
    <div class="form">
        <h2>Get in Touch !</h2>
        <form action="contact.php" method="post">
            <label for="name"></label>
            <input type="text" id="name" name="user_name" placeholder="Name" value="<?php if(!empty($_POST)) echo $name; ?>">
            <div class="errorMessages">
                <?php if (isset($errorsArray['user_name1'])) echo $errorsArray['user_name1']; ?>
            </div>
            <label for="mail"></label>
            <input type="email" id="mail" name="user_mail" placeholder="Mail" value="<?php if(!empty($_POST)) echo $mail; ?>">
            <div class="errorMessages">
                <?php if (isset($errorsArray['user_mail1'])) echo $errorsArray['user_mail1']; ?>
            </div>
            <label for="msg"></label>
            <textarea id="msg" name="user_message" placeholder="Message"><?php if(!empty($_POST)) echo $message; ?></textarea>
            <div class="errorMessages">
                <?php if (isset($errorsArray['user_message1'])) echo $errorsArray['user_message1']; ?>
            </div>
            <button type="submit" class="button">Send</button>
        </form>

    </div>
    <div class="contact">
        <div class="mail">
            <h5>Mail</h5>
            <div>
                <i class="fa fa-envelope" aria-hidden="true"> Contact@retro-golden.fr</i>
            </div>
        </div>
        <div class="call-us">
            <h5>Call Us</h5>
            <div>
                <i class="fa fa-phone" aria-hidden="true"> 0800 00 00 00</i>
            </div>
        </div>
        <div class="location">
            <h5>Location</h5>
            <div>
                <i class="fa fa-map" aria-hidden="true"> Bowser Castle</i>
            </div>
        </div>
    </div>
</div>
