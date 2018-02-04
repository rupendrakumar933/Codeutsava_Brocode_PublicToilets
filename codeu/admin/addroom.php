<?php


    include 'header.php';

    if(!isset($_SESSION["admin"]))
    {
        ?>
        <script type="text/javascript">
            window.location="login.php";
        </script>
        <?php
    }



?>






  <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Add Toilet Details</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Toilet Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                 <form name="form1" action="" method="post" class="col-lg-6"  enctype="multipart/form-data">
                                    <table class="table table-bordered">
                                        <tr>

                                            <td> 
                                                <select class="form-control select-picker" name="type">

                                                        <option value="">-- Select Type -- </option>
                                                        <option value="vaccum type">Vaccum Type</option>
                                                        <option value="bio type">Bio Types</option>
                                                        <option value="chemical type">Chemical toilets</option>
                                                    

                                                </select>
                                            </td>
                                        </tr>


                                         <tr>

                                            <td> 
                                                <textarea cols ="50" rows="5" name="about" placeholder="About"></textarea>
                                            </td>
                                        </tr>

                                         <tr>

                                            <td> <textarea cols ="50" rows="5" name="details" placeholder="Details"></textarea>
                                            </td>
                                        </tr>

                                         <tr>

                                            <td> <input type="text" class="form-control" placeholder="Ammenities" 
                                                name="ammenities" required="">
                                            </td>
                                        </tr>

                                         <tr>

                                            <td> <input type="text" class="form-control" placeholder=" Quantity" 
                                                name="quantity" required="">
                                            </td>
                                        </tr>

                                             <tr>

                                            <td> <input type="text" class="form-control" placeholder="price " 
                                                name="price" required="">
                                            </td>
                                        </tr>

                                         <tr>

                                            <td> <input type="file" class="form-control" name="pimage" required="">
                                            </td>
                                        </tr>

                                         <tr>

                                            <td> <input type="submit" class="btn btn-default submit" name= "submit1" value="Insert Toilet details">
                                            </td>
                                        </tr>




                                    </table>
                                </form>

                                <?php

                                    if(isset($_POST["submit1"]))
                                    {
                                        $v1=rand(1111,9999);
                                        $v2=rand(1111,9999);

                                        $v3 = $v1.$v2;

                                        $v3 = md5($v3);

                                        $fnm = $_FILES["pimage"]["name"];
                                        
                                        $dst="./product_image2/".$v3.$fnm;
                                        $dst1="/product_image2/".$v3.$fnm;

                                        move_uploaded_file($_FILES["pimage"]["tmp_name"] , $dst);
                                                                      

                                        mysqli_query($link , "insert into about values('', '$dst1' , '$_POST[type]' , '$_POST[about]' ,  '$_POST[ammenities]' , '$_POST[quantity]' , '$_POST[price]',  '$_POST[details]' )");

                                } 

                                 ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->



        <?php 
            include 'footer.php';
        ?>