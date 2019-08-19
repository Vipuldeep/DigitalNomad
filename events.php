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
    <title>Events - Digital Nomad</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?> 
   
 <div class="container-fluid">
    	<div class="row">
        	<div id="col1" class="col-sm-4">
            	<div class="mt-3 mb-3 px-3 py-3">
            	  <h1 class="text-center"><b>Music &amp; Events</b></h1>
                 <div class="text-center"><a href="musicevents.php"><img src="images/e3.jpg" class="mx-auto d-block" title="Click here!" style="max-width: 100%; height: auto; padding-top: 10px;"></a></div>
            		<p>Whether you're into music, yoga, surfing, flowers, eating, movies or even pumpkin rolling, you'll find a concert, performance or festival in Queensland that celebrates it.</p>
                   <ul>
                   	<li><b>Music Festivals</b></li>
                   	<p  >With international musicians and artists frequently touring Queensland, you'll be able to see one of your favourites at a music festival, and in Queensland we do music festivals a little differently 
                   	<a id="expand-p-click" href="javascript:;" style="text-decoration: none;"
                           onClick="show_text('expand-p-click', 'expand-p', 'block')">  Read more ...</a> </p>
                   	
                   	<div id="expand-p" style="display: none">
                   	<li style="text-decoration: none; list-style: none" ><p>CMC Rocks QLD; the home of country music in Ipswich.</p></li>
                  	<li style="text-decoration: none; list-style: none" ><p>BIGSOUND, where you can discover the next Australian music superstar in Brisbane.</p></li>
                  	<li style="text-decoration: none; list-style: none" ><p>Caloundra Music Festival, hosted on the Sunshine Coast.</p></li>
					   </div>
                	<li><b>Lifestyle Festivals</b></li>
                   	<p  >Our lifestyle festivals range from family-friendly events to retreat-like festivals to treat your soul
                   	<a id="expand-i-click" href="javascript:;" style="text-decoration: none;"
                           onClick="show_text('expand-i-click', 'expand-i', 'block')"> Read more ...</a> </p>
                   	
                   	<div id="expand-i" style="display: none">
                   	<li style="text-decoration: none; list-style: none" ><p>Toowoomba Carnival of Flowers, where they celebrate Spring in true Queensland fashion.</p></li>
                  	<li style="text-decoration: none; list-style: none" ><p>Wanderlust; an opportunity to cultivate your best self and revive your mind, health and spirit.</p></li>
                  	<li style="text-decoration: none; list-style: none" ><p>Woodford Folk Festival; see in the New Year with a huge bon fire, arts, crafts and music.</p></li>
					   </div>
                   	<li><b>Outback Festivals</b></li>
                   	<p>Head to Outback Queensland for quirky events that celebrate the beauty of the region, the people, lifestyle and classic outback hospitality
                             
                        </p></p>
                   </ul>
                    
                     
            	</div>
            </div>
            <div id="col2" class="col-sm-4">
            	<div class=" mt-3 px-3 py-3 mb-3 bg-light">
            		<h1 class="text-center"><b>Food and Wine</b></h1>
                <div class="text-center"><a href="foodandwine.php"><img src="images/e1.jpg" title="Click here!" class="mx-auto d-block" style="max-width: 100%; height: auto; padding-top: 10px;"></a></div>
            		<p>Fresh produce is grown, caught, baked, served and celebrated throughout Queensland. From lush hinterland farmlands to coastal waters teaming with fresh seafood, Queensland has a lot on offer when it comes to food.</p>
            		<p><b>Hervey Bay Seafood Festival</b></p>
					<p>If you have a hankering for fresh local seafood, head to the Hervey Bay Seafood Festival where you'll indulge in wild-caught seafood from around the Fraser Coast.</p>
           			<p><b>Food Experiences</b></p>
					<p>Don't limit your food celebrations to just events because you can have incredible food experiences every day of the year. From weekend and nightly food markets and stalls to restaurants, cafes, breweries and vineyards, go on a food and wine tasting journey through Queensland.</p>
            	</div>
            </div>
<div id="col3" class="col-sm-4">
            	<div class="mt-3 px-3 py-3 mb-3">
            	<h1 class="text-center"><b>Arts & Culture</b></h1>
              <div class="text-center"><img src="images/e2.jpg" class="mx-auto d-block" style="max-width: 100%; height: auto; padding-top: 10px;"></div>
            	<p>In Queensland we celebrate all art forms, from theatrical to sculptural and fashion. We also see world-class touring exhibitions and shows at our museums, performing arts centres, local theatres and other venues. Check out the following events for your arts and culture fix.</p>
				<p><b>Cultural heart of Brisbane</b></p>
           		<p>South Bank in Brisbane has grown into the cultural heart of Queensland with the Gallery of Modern Art, Queensland Art Gallery,Queensland Museum and Queensland Performing Arts Centre all within metres of each other. The precinct also includes the renowned Streets Beach, cafes, restaurants and weekend markets.
	<p><b>Queensland Art Galleries and Museums</b></p> 
             <p>From fashion exhibitions to interactive displays and historical artefacts, you’ll find art, history and culture in galleries and museums across the state <a id="expand-s-click" href="javascript:;" style="text-decoration: none;"
                           onClick="show_text('expand-s-click', 'expand-s', 'block')">  Read more ...</a> 
                   	
                   	<div id="expand-s" style="display: none"> <p>Be sure to visit these places for upcoming exhibitions and shows</p>
             </div></div>
            	
	</div>
</div>
</div>

<?php include("include/footer.inc") ?>
</body>
</html>