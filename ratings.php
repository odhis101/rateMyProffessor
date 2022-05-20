<?php include ('php/navbar.php');?>
<!-- now we have the details of the search -->
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
               
               

            
            
            }   
         }
    



      ?>

    <section class="ratings">
        <div class="box">
            <div class="box-img">
                <div class="img-responsive img-curve rating"> 40</div>
            </div>
            <div class="desc">
                <a href='/proff_details.html'> Proffesors name</a>
                <p class="price">KSh 150</p>

                <br>

            </div>
        </div>
        <div class="box">
            <div class="box-img">
                <div class="img-responsive img-curve rating"> 70</div>
            </div>
            <div class="desc">
                <a href='#'> Proffesors name</a>
                <p class="price">KSh 150</p>

                <br>

            </div>
        </div>
        <div class="box">
            <div class="box-img">
                <div class="img-responsive img-curve rating"> 30</div>
            </div>
            <div class="desc">
                <a href='#'> Proffesors name</a>
                <p class="price">KSh 10</p>
                <br>
            </div>
            
        </div>
        <div class="center">
        <p> Professor not availables <a class="addproff" href="">Add proff</a>
        </p>
    </div>
    </div>

    </section>
    <script src="assests/rating.js" async defer></script>
</body>