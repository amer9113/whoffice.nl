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
                    <div class="col-sm-6 col-sm-offset-3 w3-center">
                        <form method="POST" action="<?= base_url().'login/validate_credential'; ?>">
                            <div class="container" style="width: 100%">
                            	<h1>Sign In</h1>
                            	<hr>
                                <label for="username"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" required value="<?= isset($_POST['username']) ? $_POST['username'] : ''; ?>">

                                <label for="password"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" required value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>">
                                
                                <label for="password"><b>I'm</b></label><br>
                                <label>Student</label> <input type="radio" name="type" value="student" checked>
                                <label>Teacher</label> <input type="radio" name="type" value="teacher">

                                <button class="green" type="submit">Login</button>

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
<?php require('inc/scripts.php') ?>
</body>
</html>