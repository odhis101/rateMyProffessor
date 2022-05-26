<?php include('php/config.php')?>

<html>
    <head>
        <title> Login - Food Order System</title>
        <link rel = 'stylesheet' href = 'assests/login.css'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    </head>
    <body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <form action="" method ="POST">
        <h3> Admin Login Here</h3>
        <?php 
   
         if(isset($_SESSION['no-login-message'])){
            echo $_SESSION['no-login-message'];//'no-login-message'ing session message
            unset($_SESSION['no-login-message']);//removing session message
        }
        ?>
     
        <label for="username">Username</label>
        <input type="text" name = username placeholder="Guest" id="username">

        <label for="password">Password</label>
        <input type="password" name = password placeholder="1234" id="password">
        <!--<label for =account > account </label> -->
<!--
        <tr>
                <td>Are you an Admin: </td> 
                <td>  
                    <input type = radio name= admin value = yes >yes    
                    <input type = radio name= admin value =no > no
                </td>
    --> 
                <!-- active starts here-->   
            </tr> 
        <input type =submit name =submit value=login class=button> 

    </form>
</body>

</html>
<?php
// check wether the submit button is clicked or not 

if(isset($_POST['submit'])){
    
    // process login 
      $name=$_POST['username'];
      $password=$_POST['password'];
   
     $sql ="SELECT * FROM users WHERE name ='$name' AND password = '$password'";
     // execute the query
     $res =mysqli_query($conn,$sql);
     // count rows to check if the usr exists 
    $count=mysqli_num_rows($res);

    
    if($count==1){
        // at least one user
        echo 'success';
        $_SESSION['login']='<div class = "success">login succesfull </div>';
        $_SESSION['user']=$name; // to check whether the user is logged in or not and log out will unset it   
        while($rows= mysqli_fetch_assoc($res))
        {
           
            $user_id = $rows ['id'];
           
        }
        $_SESSION['user_id']=$user_id;
        header("Location:index.php");
   
    } 
    else{
        echo 'sike';
        //user not available 
        $_SESSION['login']='<div class = "error">username and password did not match </div>';
       // header("Location:".HOMEURL."admin/login.php");

    }
    
    }
   


?>
