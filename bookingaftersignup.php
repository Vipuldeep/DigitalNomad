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
     <link rel="stylesheet" href="css/booking.css">
    <title>Digital Nomad - Bookings</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>

<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
    
<div class="container-fluid">
<div class="row">
            <div class="col-sm-12">
                <div class="bg-light mt-3 px-2">
                        <h1>Bookings</h1>
<div class="row">
<div class="col-md-4">
    <figure class="card card-product">
        <img src="images/g1.jpg" alt="images" style="width:100%" title="Bowenhills">
        <figcaption class="info-wrap">
                <h4 class="title">Bowen Hills</h4>
                <p class="desc">One Bedroom and attached bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                </div>
        </figcaption>
        <div class="bottom-wrap">
            <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
            <div class="price-wrap h5">
                <span class="price-new">$60</span> <del class="price-old">$100</del>
            </div> 
        </div> 
    </figure>
</div> 
<div class="col-md-4">
    <figure class="card card-product">
        <img src="images/g2.jpg" alt="images" style="width:100%" title="Queenstreet">
        <figcaption class="info-wrap">
                <h4 class="title">Queen Street</h4>
                <p class="desc">Two Bedroom and attached bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">100 reviews</div>
                </div> 
        </figcaption>
        <div class="bottom-wrap">
                <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
                <div class="price-wrap h5">
                    <span class="price-new">$100</span> <del class="price-old">$150</del>
                </div>
        </div> 
    </figure>
</div>
<div class="col-md-4">
    <figure class="card card-product">
        <img src="images/g3.jpg" alt="images" style="width:100%" title="Annerley">
        <figcaption class="info-wrap">
                <h4 class="title">Annerly</h4>
                <p class="desc">Two Bedroom and attached bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                </div>
        </figcaption>
        <div class="bottom-wrap">
                <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
                <div class="price-wrap h5">
                    <span class="price-new">$50</span> <del class="price-old">$100</del>
                </div>
        </div> 
    </figure>
</div> 
</div> 
</div>
</div>
</div>
<div class="bg-light px-2">
<div class="row">
<div class="col-md-4">
    <figure class="card card-product">
        <img src="images/g4.jpg" alt="images" style="width:100%" title="South Bank">
        <figcaption class="info-wrap">
                <h4 class="title">South Bank</h4>
                <p class="desc">One Bedroom with Attached Bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                </div>
        </figcaption>
        <div class="bottom-wrap">
            <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
            <div class="price-wrap h5">
                <span class="price-new">$110</span> <del class="price-old">$150</del>
            </div> 
        </div> 
    </figure>
</div> 
<div class="col-md-4">
    <figure class="card card-product">
        <img src="images/image1.jpg" alt="images" style="width:100%" title="Chermside">
        <figcaption class="info-wrap">
                <h4 class="title">Chermside</h4>
                <p class="desc">Two Bedroom with two attached Bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                </div> 
        </figcaption>
        <div class="bottom-wrap">
                <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
                <div class="price-wrap h5">
                    <span class="price-new">$90</span> <del class="price-old">$150</del>
                </div>
        </div> 
    </figure>
</div>
<div class="col-md-4">
    <figure class="card card-product">
        <img src="images/g5.jpg" alt="images" style="width:100%" title="Windsor">
        <figcaption class="info-wrap">
                <h4 class="title">Cooper Plains</h4>
                <p class="desc">Two Bedroom with one attached Bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                </div>
        </figcaption>
        <div class="bottom-wrap">
                <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
                <div class="price-wrap h5">
                    <span class="price-new">$75</span> <del class="price-old">$100</del>
                </div>
        </div> 
    </figure>
</div> 
</div> 
</div>
</div>
</div>
<div class="bg-light px-2">
<div class="row">
<div class="col-md-4">
    <figure class="card card-product">
       <img src="images/g6.jpg" alt="images" style="width:100%" title="Coopers Plain">
        <figcaption class="info-wrap">
                <h4 class="title">Albion</h4>
                <p class="desc">wo Bedroom with one attached Bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                </div>
        </figcaption>
        <div class="bottom-wrap">
            <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
            <div class="price-wrap h5">
                <span class="price-new">$110</span> <del class="price-old">$150</del>
            </div> 
        </div> 
    </figure>
</div> 
<div class="col-md-4">
    <figure class="card card-product">
        <img src="images/g7.jpg" alt="images" style="width:100%" title="Albion">
        <figcaption class="info-wrap">
                <h4 class="title">Kedron</h4>
                <p class="desc">One Bedroom and attached bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                </div>
        </figcaption>
        <div class="bottom-wrap">
            <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
            <div class="price-wrap h5">
                <span class="price-new">$60</span> <del class="price-old">$100</del>
                </div>
        </div> 
    </figure>
</div>
<div class="col-md-4">
    <figure class="card card-product">
        <img src="images/g8.jpg" alt="images" style="width:100%" title="Kedron">
        <figcaption class="info-wrap">
                <h4 class="title">Arana Hills</h4>
                <p class="desc">One Bedroom and attached bathroom</p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                </div>
        </figcaption>
        <div class="bottom-wrap">
            <a href="payement.php" class="btn btn-sm btn-dark float-right">Book now!</a> 
            <div class="price-wrap h5">
                <span class="price-new">$90</span> <del class="price-old">$100</del>
                </div>
        </div> 
    </figure>
</div> 
</div> 
</div>
</div>
</div>
</div>


<div class="container-fluid mt-5 bg-light">
  <h3 class="text-center py-3">Newsletter</h3>
  <p class="text-center">Subscribe with us!</p>
    <div class="col-sm-6 offset-sm-3">
        <!-- make a process of newsletter-->
    <form action="newsletter_process.php" method="post">
      <div class="row">
         <div class="col-sm-11 form-group">
             <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-1 form-group">
          <button class="btn btn-dark" type="submit">Send!</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</form>

<?php include("include/footer.inc") ?>
</body>
</html>