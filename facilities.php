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
    <title>Digital Nomad - Facilities</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>

<div class="container-fluid">
<div class="row">
            <div class="col">
                <div class="bg-light mt-3" style="border-radius: 5px;">
                <h1 class="ml-2">Facilities</h1>
                <hr class="line">
                <div class="row">
                <div class="col-sm-6">
                    <img src="images/Facilities.jpg" class="img-fluid mx-auto d-block mb-3" style="max-width: 100%; height: auto; padding-top: 10px;">
                </div>
            <div class="col-sm-6 mb-3 mt-4">
            <h2>Free</h2>
                <div class="col-sm-12 mb-3 mt-2">
                <div class="row">
                <p>Free City Maps, Free Breakfast, <span style="display: none;" id="expand-text">
                            Free Parking and Free WiFi.</span>
                            <a id="expand-click" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click', 'expand-text', 'inline')">Read more ...</a>
                </p>
            </div></div>
            <h2>General</h2>
                <div class="col-sm-12 mb-3 mt-2">
                <div class="row">
                    <p>Air-Con, Common Room, Jobs Board, Key Card Access, <span style="display: none;" id="expand-text1">
                           Security Lockers, Washing Machine, Bicycle Parking and Self-Catering Facilities.</span>
                            <a id="expand-click1" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click1', 'expand-text1', 'inline')">Read more ...</a>
                    </p>
            </div></div>
            <h2>Services</h2>
                <div class="col-sm-12 mb-3 mt-2">
                <div class="row">
                    <p>24-Hour Reception,Internet Access, <span style="display: none;" id="expand-text2">
                           Laundry Facilities and Bicycle Hire.</span>
                            <a id="expand-click2" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click2', 'expand-text2', 'inline')">Read more ...</a>
                    </p>
            </div></div>
            <h2>Food & Drink</h2>
                <div class="col-sm-12 mb-3 mt-2">
                <div class="row">
                    <p>Meals Available, Restaurant, <span style="display: none;" id="expand-text3">
                           Tea & Coffee Making Facilities and Bar.</span>
                            <a id="expand-click3" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click3', 'expand-text3', 'inline')">Read more ...</a>
                    </p>
            </div></div>
            <h2>Entertainment</h2>
                <div class="col-sm-12 mb-3 mt-2">
                <div class="row">
                    <p>Foosball, Wi-Fi, <span style="display: none;" id="expand-text4">
                           Pool Table and Board Games.</span>
                            <a id="expand-click4" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click4', 'expand-text4', 'inline')">Read more ...</a>
                    </p>
            </div></div>
            </div>
                </div>
                </div>
            </div>
</div>
</div>


<div class="container embed-responsive embed-responsive-16by9 my-3">
    <!-- 21 is to 9-->
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-kDdWORl9D4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<?php include("include/footer.inc") ?>
</body>
</html>