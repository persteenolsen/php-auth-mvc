<?php include('./controllers/user_activation.php'); ?>

<!doctype html>
<html lang="en">


<!-- Header and body-tag -->
<?php include('../phpauth/header.php'); ?>

<!-- Navigation menu -->
<?php include('../phpauth/navigation.php'); ?>
   
   
<div class="App">
   <div class="container">
        <div class="jumbotron text-center">
            <h3 class="display-4">User Email Verification</h3>
            <div class="col-12 mb-5 text-center">
                <?php echo $email_already_verified; ?>
                <?php echo $email_verified; ?>
                <?php echo $activation_error; ?>
            </div>
            <p class="lead">If user account is verified then click on the following button to login.</p>
            <a class="btn btn-lg btn-success" href="https://phpauth.persteenolsen.dk/index.php"
               >Click to Login
            </a>
        </div>
    </div>
    </div>

</body>

</html>