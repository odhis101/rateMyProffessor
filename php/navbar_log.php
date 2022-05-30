<?php


include ('config.php');
include('login-check.php'); 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/styles/styles.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
        <form action="#"method ='POST'> <!-- this is meant to go above searchbar class but its bringing errors -->
        <div class="navbar">
            <div class="logo">
             <a href="index.php"> <img src="assests/img/logo.jpg" alt="#" class="logo"></a>
            </div> 
           
             <div class="searchBar">
             
                  <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder=" Enter Lecs Name" />
                  <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit"><svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                  </svg>
                  </button>
              </form>
                              <?php
                             
                         
                  if(isset($_POST['searchQuerySubmit'])){
                        $search = $_POST['searchQueryInput'];
                   
                       
                        
                        $_SESSION['add']= $search;
                        header('location:ratings.php');
                    }
                    else{
                      
                    }
                  
                   ?>
                     
                  
              </div>
              <div class="nav">
              <a href='php/logout.php'> Logout</a>
              </div>
              <div class="dropdown">
              <button onclick="myFunction()"  class="dropbtn" ><i class='far fa-user-circle' style='font-size:36px'></i></button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="#home">Home</a>
                  <a href="#about">About</a>
                  <a href="#contact">Contact</a>
                </div>
              </div>
          </div>
          <script src="../assests/scripts/user.js" async defer></script>
          