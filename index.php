<?php include('./controllers/login.php'); ?>
<!-- NOTE: The Login code must be here at the top to use redirect by Header Location at Login-->

<!doctype html>
<html lang="en">

<!-- Header and body-tag -->
 <?php include('../phpauth/header.php'); ?>

 <!-- Navigation menu -->
 <?php include('../phpauth/navigation.php'); ?>
     
    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">

                <form action="" method="post">
                   
                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email_signin" id="email_signin" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password_signin"
                            id="password_signin" />
                    </div>

                    <button type="submit" name="login" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>