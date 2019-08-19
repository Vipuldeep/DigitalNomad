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
    <title>Apply for Jobs</title>
    <link rel="shortcut icon" href="icon.ico" />
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>

	
	
	<?php
		//make the database connection
		$jid = $_POST["jid"];
		$conn  = db_connect();
		//create and execute a query
		$sql = "SELECT * FROM jobs where jid=$jid;";
		$result = $conn -> query($sql);
		
		
		
		?>

		<h1 style='margin-left:10px'> Thank you, you have successfully applied for: </h1>
		<?php
		while ($row = $result -> fetch_assoc())
					{
		?>
	
	
   <div class="container" style="border-radius: 5px; border: #0000ff solid thick; margin-top:10px">
   <div style="margin: 20px;">
   <div class="row">
   <h2><?php echo $row["jname"]; ?></h2>
   </div>
   <div class="row">
   Pay Rate: $<?php echo $row["payrate"] ?>
   </div>
   <div class = "row">
   Start Date: <?php echo $row["startdate"] ?>
   </div>
   <div class = "row">
   End Date: <?php echo $row["enddate"] ?>
   </div>
   <div class = "row">
   Address Date: <?php echo $row["address"] ?>
   </div>
   <div class = "row">
   Post Code: <?php echo $row["postcode"] ?>
   </div>
    <div class="row" style="margin-top: 10px;">
	<div class = "col-3">
   <Button onclick="location.href='index.php'" type="Done" class="btn btn-secondary" data-toggle="collapse" >Done</Button>
</div>
</div>
</div></div>

					<?php } ?>


   
<?php include("include/footer.inc") ?>
	</body>
	</html>