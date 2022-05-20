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
        <link rel="stylesheet" href="assests/styles.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      

    </head>

    <body>
        <?php include_once("php/config.php"); ?>
        <section class="home_page">

        
        <div class = wrapper>
      
            <div class="home_nav">
                <a href ='#'> Sign up</a>
                 <a href ='#'> login</a>
            </div>
            <div class="girl">
                <img src="assests/img/girl2.png" alt ='joshua its not working ' class="girl_image">
               
            </div>

            <div class="containers">
                <div class="row min-vh-100 align-items-center">
                    <div class=" text-center text-md-center">
                      <h3>Rate Your Proff</h3>
                      <p>Save yourself the risk of a  red flag</p>   
                      <form action="#"method ='POST'>
                      <div class="searchBar_home">
                        <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder=" Enter Lecs Name"  />
                        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                          <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                          </svg>
                        </button>
                    </form>
                      </div>
                   <?php 
                  echo  $sql = "SELECT * FROM professors ";
                   if(isset($_POST['searchQuerySubmit'])){
                        $search = $_POST['searchQueryInput'];
                   
                       
                        
                        $_SESSION['add']= $search;
                        header('location:ratings.php');
                    /*
                        if($row >= 0){
                            // we have data
                            while($rows= mysqli_fetch_assoc($result))
                            {
                            
                                echo $id = $rows ['id'];
                            
                            
                        }
                        */
                    }
                
                   ?>
                </div>
            
            </div>
  
        <script src="" async defer></script>
    </body>
</html>