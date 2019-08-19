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
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Digital Nomad - Home</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
	
   

<div class="carousel">
<img src="images/heroimage.jpg" alt="heroimage" class="img-fluid" style="width:100%">
<div class="carousel-caption">
          <h3>Searching for place to stay, backpackers?</h3>
          <p>One click. Accomodation done.</p>
        </div>
</div>


<div class="container-fluid bg-light">
<div class="row">
            <div class="col">
                <div class="text-center mt-4 py-3 mb-3">
                  <h3>About us</h3>
                  <p>Digital Nomad, in the very heart of Brisbane. Want to be close to all the action? Then City Backpackers HQ is the place for you! Only minutes from all the best shopping, bars, restaurants and nightlife, with options to suit all our travellers, those on a shoe string budget or those who want to splash the cash.</p>
                  <p>Take to the streets of all that Brisbane and South East Queensland have to offer, or kick back in “The Fatt Wombat”, our in-house bar, pool with spectacular river city views, movie lounge with a wide range of movies to choose from or stay connected with friends and family around the world with our free Wi-Fi.</p>
                  <br>
                   <div class="row">
                    <div class="col-sm-4">
                        <a href="citiestoexplore.php"><img src="images/b1.jpg" class="mx-auto d-block" style="max-width: 100%; height: auto; padding-top: 10px;"></a>
                        <div class="centered mt-3">
                          <a href="citiestoexplore.php"><button type="button" class="btn btn-dark">Cities to Explore</button><a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="gallery.php"><img src="images/b2.jpg" class="mx-auto d-block" style="max-width: 100%; height: auto; padding-top: 10px;"></a>
                        <div class="centered mt-3">
                            <a href="gallery.php"><button type="button" class="btn btn-dark">Gallery</button></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="booking.php"><img src="images/b3.jpg" class="mx-auto d-block" style="max-width: 100%; height: auto; padding-top: 10px;"></a>
                        <div class="centered mt-3">
                        <a href="booking.php"><button type="button" class="btn btn-dark">Bookings</button></a>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>
</div>

<div class="container-fluid text-center py-5">
  <h3>SERVICES</h3>
  <p>What we offer!</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <img class="img-responsive" src="images/accomodation.png" alt="accomodation" style="max-width: 25%;" title="Accomodation">
      <h4>Accomodation</h4>
      <p>Good rooms at cheaper prices.</p>
    </div>
    <div class="col-sm-4">
      <img class="img-responsive" src="images/wifi.png" alt="wifi" style="max-width: 25%;" title="Wifi">
      <h4>Wi-Fi</h4>
      <p>Ei-Fi enabled rooms.</p>
    </div>
    <div class="col-sm-4">
     <img class="img-responsive" src="images/car.png" alt="car" style="max-width: 25%;" title="Car Parking">
      <h4>Car Parking</h4>
      <p>24/7 car park facility available.</p>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <img class="img-responsive" src="images/food.png" alt="food" style="max-width: 25%;" title="food">
      <h4>Food</h4>
      <p>Breakfast and dinner provided.</p>
    </div>
    <div class="col-sm-4">
     <img class="img-responsive" src="images/maps.png" alt="maps" style="max-width: 25%;" title="Travel Guide">
      <h4>Travel Guide</h4>
      <p>Roam around the city, be your own guide</p>
    </div>
    <div class="col-sm-4">
      <img class="img-responsive" src="images/wheelchair.png" alt="wheelchair" style="max-width: 25%;" title="Fully Ambulant">
      <h4 style="color:#303030;">Fully Ambulant</h4>
      <p>Ambulant friendly and accesible.</p>
    </div>
  </div>
</div>


<div class="container-fluid"> 
<div class="mt-3 px-2"> 
<h3 class="text-center">GETTING OUT AND ABOUT</h3>
<p> <img src="images/b1.jpg" width="400" height="300" 
style="max-width: 40%; height: auto; float: right; padding: 16px;"> 
<p style="padding-top: 14px; text-align: justify;">Do you want to see all that South-East Queensland and Brisbane has to offer? Then Digital Nomad is your one stop shop. Situated 400m from the Roma Street bus and train station we’re centrally located to help you explore the city and more!</p>
                        <p>Having a close working relationship with Greyhound/ Wicked Travel, booking tours has never been easier. Feed the Dolphins on Moreton Island, encounter a whale, snorkelling or diving, <span style="display: none;" id="expand-text"> sandboarding, hiking through pristine rainforests or relaxing on white sandy beaches. Experience what the outdoors has to offer and more here in Southeast Queensland where our staff are here to help you make the most of your stay in this amazing part of the world! </span>
                            <a id="expand-click" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click', 'expand-text', 'inline')">Read more ...</a>
                        </p>

<p>Situated in the city centre with extensive views of the river and the city, City Backpackers HQ is the place to be! In walking distance from the best shops, bars and restaurants and new entertainment precincts; making it the perfect place to catch a movie, have a drink with friends or buy those much needed essentials.</p>
                        <p>Take a short stroll or ride along the river walking paths and bikeways. Not your thing? Then catch some rays at the famous South Bank beach and sample the delights of the many weekend markets Brisbane has to offer. <span style="display: none;" id="expand-text6"> After an adventurous day exploring the area, quench your thirst at your local “The Fatt Wombat” then head to Caxton Street, laid back West End or the clubbing scene of ‘The Valley’ for some of Brisbane’s best nightlife. </span>
                            <a id="expand-click6" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click6', 'expand-text6', 'inline')">Read more ...</a>
                        </p>
</div> 

</div>


<div class="container-fluid mt-5 bg-light">
  <h3 class="text-center py-3">FEEDBACK FORM</h3>
  <p class="text-center">We would love to hear!</p>
    <div class="col-sm-6 offset-sm-3">
    <form action="feedback_process.php" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group text-right">
          <button class="btn btn-dark" type="submit" value="Submit" id="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>



<?php include("include/footer.inc") ?>
</body>
</html>