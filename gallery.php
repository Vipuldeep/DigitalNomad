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
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Digital Nomad - Gallery</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>

<div class="container-fluid">
<div class="row">
    <div class="col">
        <div class="bg-light mt-3 px-2">
            <h1 class="mt-1">Gallery</h1>
            <p>Look at some of our amazing experiences and room</p>
            <hr class="line">
                <div class="row">
                <div class="col-sm-3">
                    <img src="images/g1.jpg" alt="images" style="width:100%" title="Bowenhills">
                </div>
                <div class="col-sm-3">
                    <img src="images/g2.jpg" alt="images" style="width:100%" title="Queenstreet">
                </div>
                <div class="col-sm-3">
                    <img src="images/g3.jpg" alt="images" style="width:100%" title="Annerley">
                </div>
                <div class="col-sm-3">
                    <img src="images/g4.jpg" alt="images" style="width:100%" title="South Bank">
                </div>
                </div>
                <div class="row mt-3 mb-3">
                <div class="col-sm-3">
                    <img src="images/image1.jpg" alt="images" style="width:100%" title="Chermside">
                </div>
                <div class="col-sm-3">
                    <img src="images/g5.jpg" alt="images" style="width:100%" title="Windsor">
                </div>
                <div class="col-sm-3">
                    <img src="images/g6.jpg" alt="images" style="width:100%" title="Coopers Plain">
                </div>
                <div class="col-sm-3">
                    <img src="images/g7.jpg" alt="images" style="width:100%" title="Albion">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col">
        <div class="bg-light mt-3 px-2">
            <h1 class="mt-1">Our Backpackers</h1>
            <hr class="line">
                <div class="row">
                <div class="col-sm-3">
                    <img src="images/p1.jpg" alt="images" style="width:100%" title="Josh, Mike and Randy">
                </div>
                <div class="col-sm-3">
                    <img src="images/p2.jpg" alt="images" style="width:100%" title="Joesph, Nick and Sharon">
                </div>
                <div class="col-sm-3">
                    <img src="images/p3.jpg" alt="images" style="width:100%" title="Ashley">
                </div>
                <div class="col-sm-3">
                    <img src="images/p4.jpg" alt="images" style="width:100%" title="Tina">
                </div>
                </div>
                <div class="row mt-3 mb-3">
                <div class="col-sm-3">
                    <img src="images/p5.jpg" alt="images" style="width:100%" title="Kiara">
                </div>
                <div class="col-sm-3">
                    <img src="images/p6.jpg" alt="images" style="width:100%" title="Stan">
                </div>
                <div class="col-sm-3">
                    <img src="images/p7.jpg" alt="images" style="width:100%" title="Stella">
                </div>
                <div class="col-sm-3">
                    <img src="images/p8.jpg" alt="images" style="width:100%" title="Dikota">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<?php include("include/footer.inc") ?>
</body>
</html>