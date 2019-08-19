<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Food n dine - Digital Nomad</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>

<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
  
  <div class="carousel">
<img src="images/main.jpg" alt="wine and dinee" class="img-fluid" style="width:100%">
<div class="carousel-caption">
          <h3>Enjoy with your loved ones.</h3>
        </div>
</div>
  
	     
 <div class="container-fluid">
    	<div class="row">
        	<div id="col1" class="col-sm-4">
            	<div class=" mt-3 px-2" >
            	  <h1><b>Food Events</b></h1>
            	  <h3><b>Valentine's Day Dinner</b></h3>
                    <p  >Hola amigos, Valentine's Day is just around the corner, which means it's time to start thinking about how to show that special someone in your life just how much you care.
            	</div>
            </div>
            <div id="col2" class="col-sm-4">
            	<div class="mt-3">
            	<div class="container embed-responsive embed-responsive-16by9">
            		<iframe width="300px" height="200px" src="https://www.youtube.com/embed/ICP_ahXMM2s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            		
            	</div></div>
            </div>
<div id="col3" class="col-sm-4">
            	<div class=" mt-3 px-3 py-3" ><br>
            	<h3><b>Location</b></h3>
            	<address>
 by <a href="mailto:webmaster@example.com"></a><br> 
Pepe's Mexican Restaurant & Tequila,<br> 184 Enoggera Rd, Newmarket<br>
Queensland, Australia
</address>
           	
            	
            	</div></div>
            	<div class="container-fluid text-center py-3">
             <button class="btn btn-dark" data-toggle="modal" data-target="#contactmodal1"><p>Tickets</p></button>
</div>



<div class="modal fade " id="contactmodal1" tabindex="-1" role="dialog" style="color: initial;">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body text-left">
          <h3 class="text-center"><i class="fa fa-envelope"></i> Book Now!</h3>
              <div id="contact1">
        <div class="alert alert-success" style="display:none"></div>
   


<form class="contactform" action="foodbooking_process.php" method="post">
      <div class="form-group">
        <label for="name" class="control-label">Your name :</label>
        <input type="text" id="name" name="name" class="form-control required" value=" " required>
      </div>
      <div class="form-group">
        <label for="name" class="control-label">Your email :</label>
        <input type="text" id="email" name="email" class="form-control required email" value="" required>
      </div>

            <div class="form-group">
        <label for="name" class="control-label">No of people</label>
        <textarea id="no_of_people" name="no_of_people" class="form-control required" style="min-height:1px"></textarea>
      </div>
      <button type="submit" id="submit" value="Submit" class="btn btn-primary btn-block btn-lg" ><i csendlass="fa fa-envelope"></i>send
      </button>
    </form>
  </div>
</div>
</div>
</div></div>
</div></div>
            	
<?php include("include/footer.inc") ?>
</body>
</html>