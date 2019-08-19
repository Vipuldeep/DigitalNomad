<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
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
    <title>Brisbane - Digital Nomad</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?> 
    <div class="carousel">
<img src="images/c1.jpg" alt="bne" class="img-fluid" style="width:100%">
<div class="carousel-caption">
          <h3>Brisbane</h3>
          <p>City of beautiful people.</p>
        </div>
</div>
     <div class="container-fluid">
    	<div class="row">
        	<div id="col1" class="col-sm-12">
            	<div class="mt-3 px-2">
            	<h1><b>Brisbane</b></h1>
            		<h2><b>South Bank Parklands</b></h2>
            			
            		<p>South Bank is Brisbane’s premier lifestyle and cultural destination. Located on the southern banks of the Brisbane River, its 17 hectares of lush parklands, world-class eateries, stunning river views and hundreds of delightful events all year round make it the perfect place to relax and unwind.</p>
            		
                  <p>The precinct plays host to Brisbane's thriving cultural heart, which now has a solid reputation for securing large-scale musicals and international art exhibitions. It includes Australia's largest Gallery of Modern Art, the Queensland Theatre Company, Queensland Museum, Queensland Performing Arts Centre and State Library of Queensland, an impressive combination that connects us to our history and culture.</p>
                   <ul>
                   	                   	
                   	<li style="text-decoration: none; list-style: none"><b>Wheel of Brisbane</b></li>
                   	<p>The Wheel of Brisbane is a Bussink R60 transportable Ferris wheel installation in Brisbane, Queensland, Australia. It is 60 metres (197 ft) tall.</p>
                   	<li style="text-decoration: none; list-style: none"><b>Natural Beach</b></li>
                   	<p>The Wheel of Brisbane is a Bussink R60 transportable Ferris wheel installation in Brisbane, Queensland, Australia. It is 60 metres (197 ft) tall.</p>
                   	</ul>
                <h2><b>Koala Lone Pine Sanctuary</b></h2>
                <p>World’s First and Largest Koala Sanctuary </p> 
                <p>Only 12km from Brisbane City, Lone Pine Koala Sanctuary is the world’s first and largest koala sanctuary with 130 koalas. Hold a koala, hand feed kangaroos and meet a large variety of Australian wildlife in beautiful, natural settings.</p>
  <div class="container">
    	<div class="row">
        	<div id="col" class="col-sm-12">
            	<div class="mt-3 px-2" >
            		<h1>Entry Costs</h1>
            		<table style="width:100%">
  <tr>
    <th>Entry</th>
    <th>Cost AUD</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Adult</td>
    <td>$45</td>
    <td></td>
  </tr>
  <tr>
    <td>Child</td>
    <td>$17</td>
    <td>Childrens age from 3-13 years, under three years are free of charge.</td>
  </tr>
  
  <tr>
    <td>Student/Pensioners</td>
    <td>$40</td>
    <td></td>
  </tr>
</table>
 </div>
            </div>
          </div>
        </div>
         <div class="container-fluid">
                 <h2><b>Australian Zoo</b></h2>
                <p>Located an hour north of Brisbane, on Queensland's Sunshine Coast, Australia Zoo is a team of passionate conservationists working around-the-clock to deliver an animal experience like no other.

				Steve and Terri Irwin's vision has always been to make Australia Zoo the biggest and best wildlife conservation facility in the entire world, and there is no other zoo like Australia Zoo!</p>
                  </div>
 <div class="container py-3 px-3">
      <div class="row">
          <div id="col" class="col-sm-12">
              <div class="mt-3 px-2" >
                <h1>Entry Costs</h1>
                <table style="width:100%">
  <tr>
    <th>Entry</th>
    <th>Cost AUD</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Adult</td>
    <td>$45</td>
    <td></td>
  </tr>
  <tr>
    <td>Child</td>
    <td>$17</td>
    <td>Childrens age from 3-13 years, under three years are free of charge.</td>
  </tr>
  
  <tr>
    <td>Student/Pensioners</td>
    <td>$40</td>
    <td></td>
  </tr>
</table></div></div></div>
          </div>
        </div></div></div></div></div>

<?php include("include/footer.inc") ?>
</body>
</html>