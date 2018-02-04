<?php include 'header.php';
include 'connection.php';
?>

<div class="container">

<h1 class="title">Write us</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">

       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" name="form1" method="post">
			<div class="form-group">	
			<input type="text" class="form-control" placeholder="Name" name ="name">
			</div>
			<div class="form-group">
			<input type="email" class="form-control"  placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control"  placeholder="Phone" name="phone">
			</div>
			<div class="form-group">
			<textarea type="email" class="form-control"  placeholder="Message" rows="4" name="message"></textarea>
			</div>
					
			<input type="submit" name ="submit1" class="btn btn-default"> </button>
			</form>
			</div>



       	</div>



       </div>
</div>
</div>
<!-- form -->



              <?php

                     if(isset($_POST['submit1']))
                     {

                            mysqli_query($link , "insert into messages values('', '$_POST[name]' , '$_POST[email]', '$_POST[phone]' , '$_POST[message]' , 'n')");

                            ?>

                            <script type="text/javascript">

                                   alert('message sent successfully');

                            </script>

                            <?php

                     }

              ?>

</div>
<?php include 'footer.php';?>