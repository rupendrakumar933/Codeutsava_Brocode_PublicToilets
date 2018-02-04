



<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Toilet Locater</h4>
                    <p>A public toilet is a room or small building with one or more toilets (or urinals) available for use by the general public, or by customers or employees of a business. Public toilets are commonly separated into male and female facilities, although some are unisex, especially for small or single-occupancy public toilets. Increasingly, public toilets are accessible to people with disabilities. Public toilets are known by many other names depending on the country. Examples are: "restroom," "washroom," "bathroom," "water closet" (W.C), "comfort room," and "ladies'/women's room" and "gents'/men's room.</p>
                </div>              
                 
                 <div class="col-sm-3">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="rooms-tariff.php">Contact</a></li>        
                        <li><a href="introduction.php">Review</a></li>
                        <li><a href="gallery.php">Our Plans</a></li>
                        <li><a href="tour.php">About us</a></li>
                        <li><a href="contact.php">Gallery</a></li>
                    </ul>
                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Helping For Good Cause</h4>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter email id here">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button" name ="submit3">Get Notify</button>
                    </span>
                    </div>

                    <?php
                     if(isset($_POST["submit3"]))
                     {

                       mysqli_query($link , "insert into about values('' , '$_POST[email]' )");          


                    ?>

                    <script type="text/javascript">
                                            
                          alert("books issued succesfully");
                          window.location.href=window.location.href;

                   </script>

                    <?php

                    }

                    ?>



                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>

<div class="text-center copyright">Powered by <a href="http://thebootstrapthemes.com">thebootstrapthemes.com</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>





<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>










</body>
</html>





