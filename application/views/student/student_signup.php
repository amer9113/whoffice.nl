<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<div class="parallax w3-container background-color:lavenderblush w3-mobile">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-10 w3-container w3-mobile" id="cnt" style="background:rgba(102, 153, 153,0.2); padding: 0.1px;">
            <div class="row">
                <!-- Content -->
                <div class="w3-container w3-mobile" id="Content">
                    <div class="col-sm-6 col-sm-offset-3 w3-center w3-card-4">
                        <form method="POST" action="<?= base_url().'student_signup/signup'; ?>" style="border:1px solid #ccc">
                            <div class="container" style="width: 100%">
                                <h1>Inschrijven</h1>
                                <p>Vul dit formulier in om een account aan te maken.</p>
                                <hr>

                                <label for="username"><b>Gebruikersnaam</b></label>
                                <input type="text" placeholder="Gebruikersnaam" name="username" readonly>

                                <label ><b>Wachtwoord</b></label>
                                <label >Een wachtwoord is uw dubbele postcode Bijvoorbeeld 1234AZ1234AZ</label>
                               <hr>

                                <label for="firstname"><b>Voornaam</b></label>
                                <input type="text" placeholder="Voornaam" class="compose_username" name="firstname" maxlength="45" required value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>">

                                <label for="lastname"><b>Achternaam</b></label>
                                <input type="text" placeholder="Achternaam" class="compose_username" name="lastname" maxlength="45" required value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>">

                                <label for="postal_code"><b>Postcode</b></label>
                                <input type="text" placeholder="Postcode" name="postal_code" required minlength="4" value="<?= isset($_POST['postal_code']) ? $_POST['postal_code'] : ''; ?>">

                                <label for="email"><b>Email</b></label>
                                <input type="email" placeholder="Enter Email" name="email" required value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>">

                                <div class="clearfix" style="width: 100%">
                                    <button type="submit" class="signupbtn green" style="width: 100%;">Inschrijven</button>
                                    <?= validation_errors('<p class="error_msg">', '</p>'); ?>
									<?php if (isset($message)): ?>
										<p class="error_msg"><b><?= $message; ?></b></p>
									<?php endif ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>