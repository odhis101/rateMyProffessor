<?php 
// getting the data from db 

  session_start();
    include_once 'config.php';
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($email) && !empty($password)){
        // checking users email and pass and the db 
        $sql ="SELECT * FROM users WHERE name = '$email' AND  password = '$password'";
                            

        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) > 0){// users credentials matched 
            $row =mysqli_fetch_assoc($res);
            $status = "Active";
            $_SESSION['unique_id'] = $row['id'];
            echo 1;
          
        }
        else{
            echo 'Email or Password is incorrect';
        }
    }
    else{
        echo 'All feilds required';
    }
?>