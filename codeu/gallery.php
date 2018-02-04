<?php include 'header.php';
include 'connection.php';
?>
<div class="container">

       <h1 class="title">Gallery</h1>
       <div class="row gallery">
<?php
        $res= mysqli_query($link , "select * from gallery" );

        while($row=mysqli_fetch_array($res))
        {        

?>
              <div class="col-sm-4 wowload fadeInUp">
                     <a href="images/photos/1.jpg" title="Foods" class="gallery-image" data-gallery><img src="admin/<?php echo $row["images"]; ?>" class="img-responsive"  width="100" height="100"></a>

                     
              </div>

             


<?php

}

?>

       </div>
</div>
<?php include 'footer.php';?>