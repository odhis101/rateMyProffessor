<?php include ('php/navbar.php');?>
<!-- now we have the details of the search -->
<section class="ratings">
      
      <?php
         $search = $_SESSION["add"];
     
        $sql = "SELECT * FROM professors WHERE name LIKE'%{$search}'";
   
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
      
        if($row >= 0){
            // we have data
            while($rows= mysqli_fetch_assoc($result))
            {
            
                 $id = $rows ['id'];
                 $name = $rows ['name'];
               
               ?>

            <div class="box">
                <div class="box-img">
                    <!-- solution the table proffesor will only have the average --> 
                    <div class="img-responsive img-curve rating"> 40</div> <!-- here we have to sum up all the ratings and find the average -->
                </div>
            <div class="desc">
                <a href='proff_details.php?food_id=<?php echo $id ?>'> <?php echo $name ?></a>
                <p class="price">KSh 150</p>

                <br>

            </div>
            </div>
<?php

            
            
            }   
         }
    



      ?>

  
        
        <div class="center">
        <p> Professor not availables <a class="addproff" href="">Add proff</a>
        </p>
    </div>
    </div>

    </section>
    <script src="assests/rating.js" async defer></script>
</body>