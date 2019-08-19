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
    <script src="js/member.js"></script>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Digital Nomad - payement</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <hr class="my-5">
	<div class="container register-form">
           <div class="register-form py-5">
            <form action="payement_process.php" method="post">
                <div class="form-content">
                <h1 class="py-5">Booking form</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Full name" required />
                            </div>
                            <div class="form-group">
                                <input type="text" id="cardnum" name="cardnum" class="form-control" placeholder="cardnum" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="cvc" name="cvc" class="form-control" placeholder="cvc" pattern="\d{3}" required />
                            </div>
                            <div class="form-group">
                                <input type="text" id="rooms" name="rooms" class="form-control" placeholder="number of rooms" required />
                            </div>
                            </div>
                    </div>
                    <button type="submit" value="Submit" class="btnSubmit" onClick="return validateInfo(document)">Submit</button>
                </div>
            </div>
        </div>
        </form>
        </div>
    <hr class="my-5">

	<?php include("include/footer.inc") ?>
</body>
</html>


