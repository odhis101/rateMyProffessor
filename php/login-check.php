<?php 
    //authorization -access control
    // check wether the user is logged in or not
    if (!isset($_SESSION['unique_id'])){ // if he doesn't have a unique id he is redirected
        header('location: login.php');
    }

?>