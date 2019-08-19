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
    <title>Digital Nomad</title>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
<?php
if(isset($_POST['name'], $_POST['cardnum'], $_POST['rooms'], $_POST['cvc'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $cardnum = $conn -> real_escape_string($_POST['cardnum']);
    $rooms = $conn -> real_escape_string($_POST['rooms']);
    $cvc = $conn -> real_escape_string($_POST['cvc']);
    //create an insert query
    $sql = "insert into payement (name, cardnum, rooms, cvc) 
			VALUES ('$name', '$cardnum', '$rooms', '$cvc')";
    //execute the query
    if($conn -> query($sql))
    {
       echo "<div class=\"container-fluid py-3\">";
        echo "<h3>Your booking has been confirmed <b>$name</b></h3>";
        echo "<h4>your payement details </h4>";
        echo "<h4>Card Number: <b>$cardnum</b></h4>";
        echo "<h4>CVC: <b>$cvc</b></h4>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>
<div class="container-fluid bg-light">
<div class="row">
            <div class="col">
                <div class="text-center mt-4 py-3 mb-3">
                  <h3>Continue Exploring</h3>
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
                        <a href="bookingaftersignup.php"><img src="images/b3.jpg" class="mx-auto d-block" style="max-width: 100%; height: auto; padding-top: 10px;"></a>
                        <div class="centered mt-3">
                        <a href="bookingaftersignup.php"><button type="button" class="btn btn-dark">Bookings</button></a>
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
<?php include("include/footer.inc") ?>
</body>
</html>




