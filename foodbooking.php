
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
    <link rel="stylesheet" href="css/member.css">
    <title>ABC</title>
</head>
<body onLoad="run_first()">
 <?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="container">
     <form action="feedback_process.php" method="post">
        <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: #0000ff solid thick">
         <h1>Booking Tickets</h1>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
            <div class="row">
             <div class="col">
                 <label for="name">Name:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" />
                </div>
            </div>
            <div class="row">
             <div class="col">
                 <label for="email">Email:</label>
                 <input type="email" id="email" name="email" size="30" maxlength="50" />
                </div>
            </div>
            <div class="row">
             <div class="col">
                 <label for="No_of_people">* No_of_people</label>
                    <textarea id="no_of_people" name="no_of_people" rows="4" cols="30" required></textarea>
                </div>
            </div>
            <div class="row">
             <div class="col">
                 <label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" />
                    <input type="reset" id="reset" value="Clear Form" />
                </div>
            </div>
        </div>
        </form>
    </div>
 <?php include("include/footer.inc") ?>
</body>
</html>
