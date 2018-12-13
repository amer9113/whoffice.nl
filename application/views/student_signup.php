<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
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
                        <form method="POST" action="<?= base_url().'studentSignup/signup'; ?>" enctype="multipart/form-data" style="border:1px solid #ccc">
                            <div class="container" style="width: 100%">
                                <h1>Sign Up</h1>
                                <p>Please fill in this form to create an account.</p>
                                <hr>

                                <label for="username"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" minlength="4" maxlength="75" required value="<?= isset($_POST['username']) ? $_POST['username'] : ''; ?>">

                                <label for="password"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" minlength="6" required value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>">

                                <label for="firstname"><b>Firstname</b></label>
                                <input type="text" placeholder="Enter Firstname" name="firstname" minlength="4" maxlength="75" required value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>">

                                <label for="lastname"><b>Lastname</b></label>
                                <input type="text" placeholder="Enter Lastname" name="lastname" minlength="4" maxlength="75" required value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>">

                                <label for="postal_code"><b>Postal code</b></label>
                                <input type="text" placeholder="Enter Postal code" name="postal_code" required value="<?= isset($_POST['postal_code']) ? $_POST['postal_code'] : ''; ?>">

                                <label for="email"><b>Email</b></label>
                                <input type="email" placeholder="Enter Email" name="email" required value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>">

                                <label for="website"><b>Website</b></label>
                                <input type="url" placeholder="Enter Website" name="website" value="<?= isset($_POST['website']) ? $_POST['website'] : ''; ?>">

                                <label for="bio"><b>About you</b></label>
                                <textarea placeholder="About you" name="bio"></textarea>

                                <label for="profile_image"><b>Profile Image</b></label>
                                <input type="file" name="profile_image" accept="image/*">

                                <div class="clearfix" style="width: 100%">
                                    <button type="submit" class="signupbtn green" style="width: 100%;">Sign Up</button>
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
<?php require('inc/scripts.php') ?>
</body>
</html>