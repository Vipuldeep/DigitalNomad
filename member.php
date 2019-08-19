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
    <title>Digital Nomad - sign up</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
	<div class="container register-form">
           <div class="register-form py-5">
			<form action="member_process.php" method="post">
                <div class="form-content">
				<h1>Register Form</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name*" required />
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email*" required />
                            </div>
                        </div>
                        <div class="col-md-6">
						 <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password*" required />
								 <span id="pwd_msg" class="error_msg"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" id="rePassword" class="form-control" placeholder="re-enter Your Password *"
								onChange="checkRePassword(document)" />
                            </div>
							</div>
						<div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="zip" name="zip" class="form-control" placeholder="Zipcode*"  onChange="checkZIPCode(document)" required />
								<span class="error_msg" id="zip_msg"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" value="Submit" class="btnSubmit" onClick="return validateInfo(document)">Submit</button>
                </div>
            </div>
        </div>
        </form>
		</div>

	<?php include("include/footer.inc") ?>
</body>
</html>


