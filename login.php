<?php 
session_start();
include('php/config.php')?>

<html>
    <head>
        <title> Login - Food Order System</title>
        <link rel = 'stylesheet' href = 'assests/styles/login.css'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    </head>
    <body>
    <div class="wrapper">
        <section class="form login">
            <header> Realtime chat app </header>
    
            <form action="#">
                <div class="error-txt"></div>
                <div class="name-details">
                <?php
    if(isset($_SESSION['required'])){ # redirected message if user tries to comment without logging in
        echo $_SESSION['required'];
        unset($_SESSION['required']);
    }
    ?>
  
                    <div class="field input">
                        <lable>Email Address: </lable>
                        <input type="text" name= 'email' placeholder="Email Address">
                    </div> 
                    <div class="field input">
                        <lable>Password </lable>
                        <input type="password" name='password' placeholder="Enter your password ">
                        <i class="fas fa-eye"> </i>
                    </div> 
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                </div>
            </form> 
</body>
<script src="assests/scripts/login.js" async defer></script> <!-- this is sends it to the script to use xml to send data  -->
</html>

