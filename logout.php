<?php     
    session_start();
    session_destroy();
      
    header("Location: https://phpauth.persteenolsen.dk/index.php")
;?>