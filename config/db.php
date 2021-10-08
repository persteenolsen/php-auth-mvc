<?php
     // Enable us to use Headers
     ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
      session_start();
   }

    


   $hostname = "yourhostname";
   $dbname = "yourdatabasename";
   $username = "yourusername";
   $password = "yourpassword";

    
$connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.")

?>