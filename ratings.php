<?php 

    include ('php/navbar.php');
    if (!isset($_SESSION['unique_id'])){ // if he doesn't have a unique id he is redirected
        echo 'we are here ';

    }
    else{
        echo 'this is';
    }

?>
<!-- now we have the details of the search -->
<section class="ratings">
   
 
      <?php
      
        $_SESSION['unique_id'];
        $search = $_SESSION["add"];
     
        $sql = "SELECT * FROM professors WHERE name LIKE'%$search%'";
        echo $sql;
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
      
      
        if($row >= 0){
            // we have data
            while($rows= mysqli_fetch_assoc($result))
            {
            
                 $id = $rows ['id'];
                 $name = $rows ['name'];  
                 $sql2 = "SELECT AVG(rating) AS avg FROM ratings where proff_id =  $id ";
                 $avg =  mysqli_query($conn, $sql2);
                 $row2 = mysqli_fetch_assoc($avg);

                
               ?>

            <div class="box">
                <div class="box-img">
                    <!-- solution the table proffesor will only have the average --> 
                    <div class="img-responsive img-curve rating"><?php echo $row2['avg']; ?></div> <!-- here we have to sum up all the ratings and find the average -->
                </div>
            <div class="desc">
                <a href='proff_details.php?food_id=<?php echo $id ?>'> <?php echo $name ?></a>
               <!-- <p class="price">KSh 150</p>-->

                <br>

            </div>
            </div>
          
<?php

            
            
            }   
         }
    



      ?>

</div>
        
        <div class="center">
        <p> Professor not availables <a class="addproff" href="">Add proff</a>
        </p>
    </div>
    </div>

    </section>
    <script src="assests/scripts/rating.js" async defer></script>
</body>