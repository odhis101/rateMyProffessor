
<?php
session_start();
 include ('php/navbar.php');?>

   
            
<?php 

# this is the sql for getting the professors name and maybe his average rating 

 $id =$_GET['food_id'];
 $sql = "SELECT * FROM professors WHERE id = '$id'";
 

 $res = mysqli_query($conn,$sql);
 $sql3 = "SELECT AVG(rating) AS avg FROM ratings where proff_id =  $id ";
 $avg =  mysqli_query($conn, $sql3);
 $row3 = mysqli_fetch_assoc($avg);

if($res== true){
     $count = mysqli_num_rows($res);
    if($count==1){

        // get the details
        //echo 'Admin available';
        $rows = mysqli_fetch_assoc($res);
        
        $name=$rows['name'];
       
    }
}
else{
    echo 'fake news';
}

?>

 <div class="box_two">
        <div class="box-center">
            <div class="rating_two"> <?php echo $row3['avg']; ?>  ?></div> <!-- here we will just use math get the total and divide it by the number 
            something like sql select where proff_id = id then get the sum of the ratings and divide it by the number -->
        </div>
        <div class="proff_name">
            <p><?php echo $name ; ?></p>
            <div class="comments">
            <p> comments</p>
            </div>
<?php

# now here we try and get the data from the users comments 
# im thinkig we can display tbl ratings here 
$sql2 = "SELECT * FROM ratings  WHERE proff_id = '$id'"; // thats works barely we also need to insert this when the user is rating 
$res2 = mysqli_query($conn,$sql2);
$count2 =mysqli_num_rows($res2);

if($count2 > 0){
    // we have data
    while($rows= mysqli_fetch_assoc($res2))
    {
       
        $name2 = $rows ['username'];
        $ratings = $rows['rating'];
        $comments = $rows['comments'];
        
        
       
?>

<div class="row  d-flex justify-content-center">
                <div class="col-md-8">

                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                    </div>

                    <div class="card p-3 mt-2">

                        <div class="d-flex justify-content-between align-items-center">

                            <div class="user d-flex flex-row align-items-center">


                                <div class="rating"><?php echo $ratings?> </div> &nbsp;&nbsp;<span>  <small class="font-weight-bold text-primary"> <?php echo $name2 ?> </small> <small class="font-weight-bold"><?php echo $comments ?> </small>
                                </span>
                            </div>
                            <small>3 days ago</small> <!-- moment(yourdate).fromNow()  use this javascript function  we will need to get the date when the user comments --> 
                        </div>
                    </div>
                </div>
                <!-- here is where the card ends -->

           
        </div>
                <br>
               
                <?php
    }
}


else{
  echo 'there is no data available';
}
       ?>



      

    <!-- this details have to be the same as the one the user clicked-->


   

              
                <!-- here is where the card ends -->

           
                <!-- here is where the card ends -->
            
       <br>
                <p> Whant to make a comment <a class="addproff" href="user_rates.php?food_id=<?php echo $id ?>">feel free</a>
    <script src="assests/scripts/rating.js" async defer></script>
</body>

</html>