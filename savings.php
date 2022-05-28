
<!-- this is for loging in -->
<?php
// check wether the submit button is clicked or not 

if(isset($_POST['submit'])){
    echo 'hello world';
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