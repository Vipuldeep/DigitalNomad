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
    <title>Digital Nomad</title>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
<?php
if(isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['zip'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);
    $postcode = $conn -> real_escape_string($_POST['zip']);
    //create an insert query
    $sql = "insert into users (name, email, password, postcode) 
			VALUES ('$name', '$email', '$password', '$postcode')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"container-fluid py-3\">";
        echo "<h1>Hi <b>$name</b></h1>";
        echo "<h2><a href=\"login.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">You can login now</a></h2>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>


<div class="col-sm-12">
    <div class="mt-3 px-2 py-3 text-center">
          <img class="img-responsive" src="images/accomodation.png" alt="accomodation" style="max-width: 6%;" title="Accomodation">
          <img class="img-responsive" src="images/wifi.png" alt="wifi" style="max-width: 6%;" title="WiFi">
          <img class="img-responsive" src="images/car.png" alt="car" style="max-width: 6%;" title="car">
          <img class="img-responsive" src="images/food.png" alt="food" style="max-width: 6%;" title="food">
          <img class="img-responsive" src="images/maps.png" alt="maps" style="max-width: 6%;" title="Maps">
          <img class="img-responsive" src="images/wheelchair.png" alt="Anbulant" style="max-width: 6%;" title="Fully Ambulant">
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

<?php include("include/footer.inc") ?>
</body>
</html>




