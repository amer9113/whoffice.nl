<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="NL">

<head>

	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

	<title>whoffice</title>

</head>

<body>

	<div class="parallax imgbc w3-container background-color:lavenderblush w3-mobile">

        <div class="col-sm-1">

        </div>

        <div class="col-sm-10 w3-container w3-mobile" id="cnt" style="background:rgba(255, 240, 240, 0.85); padding: 0.1px;margin-top: 20%;">

            <div class="row">

                <!-- Content -->

                <div class="w3-container w3-mobile" id="Content">

                    <div class="col-sm-6 col-sm-offset-3 w3-center">

                        <form method="POST" action="<?= base_url().'student_login/validate_credential'; ?>">

                            <div class="container" style="width: 100%">

                            	<h1 class="w3-red">Studenten login</h1>

                            	<hr>

                                <label for="username"><b>Gebruikersnaam</b></label>

                                <input type="text" placeholder="Gebruikersnaam" name="username" required value="<?= isset($_POST['username']) ? $_POST['username'] : ''; ?>">



                                <label for="password"><b>Wachtwoord</b></label>

                                <input type="password" placeholder="Wachtwoord" name="password" required value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>">

                                <button class="green" type="submit">Inloggen</button>



                                <?php if (isset($message)): ?>

									<p class="error_msg"><b><?= $message; ?></b></p>

								<?php endif ?>

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