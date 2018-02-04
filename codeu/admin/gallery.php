<?php

    include 'connection.php';
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
                        <h3>Add Gallery Pics </h3>
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
                                <h2>Gallery</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <form class="submit" method="post" name="form1" enctype="multipart/form-data">

                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <input type="file" class ="form-control" name="file1">         
                                            </td>
                                        </tr> 

                                        <tr>
                                            <td>
                                                <input type="submit" name="submit1" class="btn btn-default" value="insert" style="margin-left: 20px;">

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

                                        $fnm = $_FILES["file1"]["name"];
                                        
                                        $dst="./product_image3/".$v3.$fnm;
                                        $dst1="/product_image3/".$v3.$fnm;

                                        move_uploaded_file($_FILES["file1"]["tmp_name"] , $dst);
                                                                      
                                        mysqli_query($link , "insert into gallery values('', '$dst')");
                                       
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