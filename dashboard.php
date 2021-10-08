<?php include('config/db.php'); ?>
<!--  Database connection and session start-->

<!doctype html>
<html lang="en">


<!-- Header and body-tag -->
<?php include('../phpauth/header.php'); ?>

<!-- Navigation menu -->
<?php include('../phpauth/navigation_loggedin.php'); ?>


<div class="App">
  <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 25rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">User Profile</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['firstname']; ?>
                        <?php echo $_SESSION['lastname']; ?></h6>
                    <p class="card-text">Email address: <?php echo $_SESSION['email']; ?></p>
                    <p class="card-text">Mobile number: <?php echo $_SESSION['mobilenumber']; ?></p>
                    
                    <a class="btn btn-danger btn-block" href="logout.php">Log out</a>
                </div>
            </div>
        </div>
    </div>
   </div>

</body>

</html>