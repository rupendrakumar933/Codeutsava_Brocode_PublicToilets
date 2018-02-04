
<?php
 $link = mysqli_connect("localhost" , "root" ,"yashikakhurana" );
                    mysqli_select_db($link ,"review");
 ?>                   


<?php include 'header.php';


?>




<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner3.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Review Toilets in Raipur</h1>
                <p class="animated fadeInUp"></p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    
</div>
<div class="col-sm-5 col-md-4" style="margin-left: 400px;">
<center>   
<h3> Review </h3>
    <form role="form" name="form1" method="post" class="wowload fadeInRight">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name" name="name">
        </div>
       
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phone">
        </div>  

        <div class="form-group">
            <div class="col-xs-`12">
            <select class="form-control" name="toi">
              <option>Select Toilet to review</option>

                  <?php

                            $res= mysqli_query($link , "select * from locations" );

                            while($row=(mysqli_fetch_array($res)))
                            {

                                ?>

                             <option>

                                <?php

                                echo $row['name'];

                                ?>

                             </option>   

                                <?php
                            }





                  ?>

              </option>
              
            </select>
            </div>                </div>  


        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="rooms">
              <option>Overall Ratings</option>

              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="clean">
              <option>Cleanliness Rating</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="date" id="expiry-month">
                <option>Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>




          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4" name="message"></textarea>
        </div>
        <button class="btn btn-default" name="submit1">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->
</center>

<?php

    if(isset($_POST["submit1"]))
    {

        mysqli_query($link , "insert into reviewrep values('','$_POST[name]','$_POST[phone]','$_POST[toi]','$_POST[rooms]','$_POST[clean]','$_POST[date]','$_POST[month]','$_POST[year]','$_POST[message]')" );

        ?>

        <script type="text/javascript">
            alert("Review Succesful");
        </script>

        <?php


    }

?>



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>