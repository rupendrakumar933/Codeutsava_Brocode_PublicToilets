<?php include 'header.php';

    include 'connection.php'; 


?>

          <link href="pagination/css/pagination.css" rel="stylesheet" type ="text/css">
          <link href="pagination/css/A_green.css" rel="stylesheet" type ="text/css">



<div class="container">

<h2>Swach Toilet Abhiyaan </h2>



<!-- form -->


<?php



                            include("pagination/function.php");

                            $page =(int) (!isset($_GET["page"])? 1:$_GET["page"]);
                            $limit = 1;
                            $startpoint = ($page * $limit)-$limit;

                            $statement= "about";
                            
                            $res =  mysqli_query($link ,"select * from {$statement} LIMIT {$startpoint} , {$limit}" );
                            
                            while($row = mysqli_fetch_array($res)) 
                            {
                                ?>

                            <center>
                            <div class="row">
                              <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="admin/<?php echo $row['image'] ;?>" class="img-responsive"><div class="info"><h3><?php echo $row["type"]  ; ?></h3><p> <?php echo $row["about"]   ;?></p><a href="toiletdetails.php?id=<?php echo $row['id'] ;?>" class="btn btn-default">Check Details</a></div></div></div>
                            </center>

                             
                            

                            </div>

                            <?php 

                          }

                             ?>
                     <div class="text-center">
                     <ul class="pagination">

                          <?php
                              
                                echo pagination($statement, $limit , $page);

                            ?>

                     </ul>
                     </div>


</div>
<?php include 'footer.php';?>