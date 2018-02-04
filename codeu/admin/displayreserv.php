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
                        <h3>Display Review</h3>
                    </div>


                   

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                            <div class="input-group">
                             <form name ="form1" method="post">   
                                    <select class="form-control select-picker" name="type1">

                                                        <option value="">-- Select  -- </option>

                                                        <?php

                                                            $res3 = mysqli_query($link , "select * from locations ");

                                                                while($row3 = mysqli_fetch_array($res3)){

                                                        ?>



                                                        <option value="">                  
                                                            <?php echo $row3["name"];

                                                            }

                                                            ?>                                        
                                                      </option>






                            </select>                          
                                <span class="input-group-btn">
                                     <input type="submit" class="btn btn-default submit"  name= "submit2" value="Go!">
                                </span>
                             </form>   
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Room Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                             
                                 <?php
                                if(isset($_POST["submit2"]))
                                {

                                    $res2 = mysqli_query($link , "select * from reviewrep where toilet like('$_POST[type1]')");

                                    echo "<table class= 'table table-bordered'>";
                                        echo "<tr>";
                                        echo "<th>"; echo "Name" ; echo "</th>";
                                        echo "<th>"; echo "Phone" ;echo "</th>";
                                        echo "<th>"; echo "Toilet" ;echo "</th>";
                                        echo "<th>"; echo "Over Rating" ;echo "</th>";
                                        echo "<th>"; echo "Clean Rating" ;echo "</th>";
                                        echo "<th>"; echo "Date" ;echo "</th>";
                                        echo "<th>"; echo "Month" ; echo "</th>";
                                        echo "<th>"; echo "Year" ; echo "</th>";
                                        echo "<th>"; echo "Message" ; echo "</th>";

                                        echo "</tr>";

                                        while($row2 = mysqli_fetch_array($res2)){
                                        echo "<tr>";
                                        echo "<td>"; echo $row2["name"] ;echo "</td>";
                                        echo "<td>"; echo $row2["phone"] ;echo "</td>";
                                        echo "<td>"; echo $row2["toilet"] ;echo "</td>";
                                        echo "<td>"; echo $row2["overall"] ;echo "</td>";
                                        echo "<td>"; echo $row2["clean"] ;echo "</td>";
                                        echo "<td>"; echo $row2["date"] ;echo "</td>";
                                        echo "<td>"; echo $row2["month"] ;echo "</td>";
                                        echo "<td>"; echo $row2["year"] ;echo "</td>";
                                        echo "<td>"; echo $row2["message"] ;echo "</td>";
                                     
                                        echo "</tr>";
                                    }

                                    echo "</table>";


                    
                                }   

                                else

                                  {  
                            
                

                                        $res = mysqli_query($link , "select * from reviewrep");

                                        echo "<table class= 'table table-bordered'>";
                                         echo "<tr>";
                                            echo "<th>"; echo "Name" ; echo "</th>";
                                            echo "<th>"; echo "Phone" ;echo "</th>";
                                            echo "<th>"; echo "Toilet" ;echo "</th>";
                                            echo "<th>"; echo "Over Rating" ;echo "</th>";
                                            echo "<th>"; echo "Clean Rating" ;echo "</th>";
                                            echo "<th>"; echo "Date" ;echo "</th>";
                                            echo "<th>"; echo "Month" ; echo "</th>";
                                            echo "<th>"; echo "Year" ; echo "</th>";
                                            echo "<th>"; echo "Message" ; echo "</th>";

                                        echo "</tr>";

                                            

                                            while($row2 = mysqli_fetch_array($res)){
                                            echo "<tr>";
                                                echo "<td>"; echo $row2["name"] ;echo "</td>";
                                                echo "<td>"; echo $row2["phone"] ;echo "</td>";
                                                echo "<td>"; echo $row2["toilet"] ;echo "</td>";
                                                echo "<td>"; echo $row2["overall"] ;echo "</td>";
                                                echo "<td>"; echo $row2["clean"] ;echo "</td>";
                                                echo "<td>"; echo $row2["date"] ;echo "</td>";
                                                echo "<td>"; echo $row2["month"] ;echo "</td>";
                                                echo "<td>"; echo $row2["year"] ;echo "</td>";
                                                echo "<td>"; echo $row2["message"] ;echo "</td>";
                                         
                                            echo "</tr>";
                                            }

                                            echo "</table>";
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