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
    <title>Gold Coast - Digital Nomad</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?> 
     <div class="carousel">
<img src="images/c2.jpg" alt="gldcst" class="img-fluid" style="width:100%">
<div class="carousel-caption">
          <h3>Gold Coast</h3>
          <p>Drinks. Parties. Beaches.</p>
        </div>
</div>
     
 <div class="container-fluid">
    	<div class="row">
        	<div id="col1" class="col-sm-12">
            	<div class="mt-3">
            		<h2><b>WildLife Experiences</b></h2>
           		    <h3><b>Snorkel with Turtles at Cook Island</b></h3>
           		    
           		                  <p><img src="images/snorkel.jpg" alt="snorkel" width="300px" style="float: left; padding: 10px;">If swimming alongside sea turtles is high on your bucket list, then a trip to Cook Island with Watersports Guru is for you. Just a short boat trip off the southern Gold Coast, Cook Island is perfect for divers and snorkelers of all experience levels. What’s more, it is the one place in Australia where you are guaranteed to see a range of species of turtles. If you’re lucky, you might even encounter dolphins or whales too.

Explore colourful hard and soft corals and see tropical fish, stingrays, wobbegongs and maybe even befriend a reef shark. Watersports Guru are a team of ocean adventurers passionate about marine conservation and education. From August – October, you’ll be able to Join skipper Chris and Marine biologist Crisitiana on an amazing up close and educational experience with whales, dolphins and turtles. Don’t miss the boat. This intimate tour is limited to only 9 people at a time, so pre-book online.</p>
           		                  <h3><b>Bird Watch</b></h3>
           		                  <p><img src="images/bw.jpg" alt="whal" width="300px" style="float: right; padding: 10px;">Forget Pokemon Go, bird watching (or ‘birding’) has been rebranded, becoming the latest trend to hit Londoners. Fortunately for the Gold Coast, the nearby World Heritage-listed Lamington National Park is home to Australia’s largest collection of sub-tropical birds, making it a birder’s dream. A visit to Lamington by eagle-eyed naturalists could result in a sighting of the rare Alberts Bowerbird which is not found anywhere else on earth, the Paradise Rifle, Rufous Scrubbird or even the Regent Bowerbird.

Taking birding to the next level, enthusiasts and high profile guests flock to O’Reilly’s Rainforest Retreat each year for Australia’s biggest and longest running birding event. Celebrating its 40th Anniversary, Birdweek 2018 will not disappoint. From 11-17 November, birdies will be treated to a week of birding tours, more than 100 hours of informative sessions and more than 100km of bush walking through the Lamington National Park. Throughout the year, O’Reilly’s run Birds of Prey shows, featuring among other birds, Australia’s largest bird of prey, the wedge-tailed eagle.</p>
            		                  
                     
            	</div>
            </div>
            <div id="col2" class="col-sm-12">
            	<div class="mt-3 px-2" >
            		<h1><b>Local Guides</b></h1>
            		<p>From endless racks of lust-worthy linens, to live acoustic gigs and gourmet food trucks that serve up finger-lickin’ street eats, our market scene has really upped its ante. With only so many Sundays in a year, it’s becoming more and more difficult for us to choose which to peruse. With that in mind, we sat down with local designer and dedicated #ShopSmall supporter, Annette Daley to talk top market spots here on the Gold Coast.</p>
            		<h3><b>Village Markets</b></h3>
            		<p><img src="images/vm.jpg" alt="whal" width="300px" style="float: right; padding: 10px;">A melting pot of boutique fashion, vintage racks, and beautiful local handicrafts, The Village Markets (TVM) is the quintessential marketplace for those looking to add some coastal vibes to their wardrobe. It’s not all about the apparel though, TVM also has an ace line-up of stalls offering up-cycled crafts, retro furniture and unique arts and homewares. Plus, TVM is all about celebrating the local artists, foodies and musicians, so you can expect there’ll be epic street eats and live tunes pumping when they roll into town. Annette suggests packing a picnic rug to stretch out in the sunshine and really make a day of it.</p>
<p>TVM trades on the first and third Sunday of each month, at the Burleigh Heads State School, 8:30am – 1pm.</p>
           		
            		<h3><b>Hide & Seek Children's Market</b></h3>
            		<p><img src="images/hc.jpg" alt="whal" width="300px" style="float: left; padding: 10px;">HIDE & SEEK CHILDREN’S MARKET
Thinking of updating the little one’s wardrobe to achieve that #cutenessoverload? According to Annette, Hide & Seek Children’s Market is where you need to be. With over 50 designers displaying beautifully crafted kidswear and accessories, Hide & Seek provides those serious “aww!” feels, and we guarantee you won’t be able to resist picking up an adorable piece (or two) for your little ones. To top it off, there’s live music, tasty local food trucks and all-day activities running for the kiddies. This isn’t just a market, it’s a family fun day out in the sun.</p>
<p>Hide & Seek is at the Miami State High School from 9am – 1pm on the fourth Saturday of every month.</p>
            		
            	</div>
            </div>

            	
            	</div></div>
            	
<?php include("include/footer.inc") ?>
</body>
</html>