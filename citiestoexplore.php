<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!doctype html>
<html>
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
    <title>Cities to explore - Digital Nomad</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>

<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?> 
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
		
</style>
	<div class="carousel">
<img src="images/unsplash.jpg" alt="maps" class="img-fluid" style="width:100%">
<div class="carousel-caption">
          <h3>Cities to explore</h3>
        </div>
</div>


<div class="container-fluid"> 
<div class="mt-3 px-2"> 
<h1 class="text-center"><b>Queensland</b></h1>
<p> <img src="images/b1.jpg" width="400" height="300" 
style="max-width: 40%; height: auto; float: right; padding: 16px;"> </p>
<p style="padding-top: 14px; text-align: justify;">Queensland, Made up of 14 unique and captivating destinations for you to explore, Queensland truly is like no other place on earth.</p>
  <p>From our seemingly endless coastlines to the great expanses of the outback, the world famous Great Barrier Reef and our array of luscious rainforests, our home state is a giant living and breathing postcard, waiting to be explored! </p>
                        <p>Discover a place where the locals want to share their secrets, where the wildlife pose for your photos and you can dine like a star one night and recover in a tiny coastal town the next morning.</p>
                        <p>Prepare to be wowed. Prepare for the time of your life. There’s a reason they say that Queensland is just the place and we can’t wait to share it with you!</p>
</div> 
</div>
</div>
</div>


<div class="container-fluid">
<div class="row">
                <div class="col-sm-6">
                    <img src="images/Queensland.jpg" class="img-fluid mx-auto d-block mb-3" style="max-width: 100%; height: auto; padding-top: 10px;">
                </div>
            <div class="col-sm-6 mb-3 mt-4">
            <h2><a href="brisbane.php" target="_self">Brisbane</a></h2>
                <div class="col-sm-12 mb-3 mt-2">
                <div class="row">
            </div></div>
            <h2><a href="goldcoast.php" target="_self">Goldcoast</a></h2>
                <div class="col-sm-12 mb-3 mt-2">
                <div class="row">
            </div></div>
            <h2><a href="byronbay.php" target="_self">ByronBay</a></h2>
            <p class="py-3">Queensland, Made up of 14 unique and captivating destinations for you to explore, Queensland truly is like no other place on earth.</p>
            <p>From our seemingly endless coastlines to the great expanses of the outback, the world famous Great Barrier Reef and our array of luscious rainforests, our home state is a giant living and breathing postcard, waiting to be explored! </p>
                        <p>Discover a place where the locals want to share their secrets, where the wildlife pose for your photos and you can dine like a star one night and recover in a tiny coastal town the next morning.</p>
                        <p>Prepare to be wowed. Prepare for the time of your life. There’s a reason they say that Queensland is just the place and we can’t wait to share it with you!</p>
            </div>
                </div>
</div>
            
<?php include("include/footer.inc") ?>
</body>
</html>
