<?php include 'header.php';
include 'connection.php';
$id= $_GET["id"];

?>


          <?php   

            $res = mysqli_query($link , "select * from about where id =  $id");

            while($row = mysqli_fetch_array($res))
            {
              $img = $row['image'];
              $type =$row['type'];
              $details = $row['details'];
              $no = $row['no'];
              $price = $row['price'];


            }


            ?>


<div class="container">

<h1 class="title"><?php echo $type ;?></h1>






 <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="admin/<?php echo   $img ;?>" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="admin/<?php  echo  $img  ?>"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="admin/<?php  echo $img ?>"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
  <!-- RoomCarousel-->

<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p>

      <?php 

        echo $details;

      ?>  

     </p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Amenitites</h3>    
    <ul>
      <li>One of the greatest barriers to making the sale is your prospect.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Unlucky people. Don't stubbornly.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Space in your house How to sell faster than your neighbors</li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Quantity<span> <?php echo $no ;?> </span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span>INR <?php echo $price ;?></span></div>
    </div>
  </div>
</div>
                     


</div>
<?php include 'footer.php';?>