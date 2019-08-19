
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
    <link rel="stylesheet" href="css/media.css">
    <title>ABC</title>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
<?php
if(isset($_POST['name'], $_POST['email'], $_POST['no_of_people'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
    $no_of_people = $conn -> real_escape_string($_POST['no_of_people']);
    //create an insert query
    $sql = "insert into booking (name, Email, no_of_people) 
   VALUES ('$name', '$email', '$no_of_people')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"container-fluid py-3\">";
        echo "<h3>Thank you very much.</h3>";
        echo "<h3>Your tickets have been booked.</h3>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>
<div class="container-fluid">
        <div class="row">
            <div id="col1" class="col-sm-8">
                <div class=" mt-3 px-2" >
                    <h1><b>Music and Events</b></h1>
                    <img src="images/music.jpg" alt="music" style="width: 80%">
                    
                    <br> </br>
                    <p>Whether you're into music, yoga, surfing, flowers, eating, movies or even pumpkin rolling, you'll find a concert, performance or festival in Queensland that celebrates it.</p>
                   <ul>
                    <li><b>Event Description</b></li>
                    <p  style="text-align: justify;">Whether you’re single and ready to mix &amp; mingle or the ultimate wing-woman / wingman, ‘Single &amp; Ready To Mingle’ Summer Crush Pool Party is the place to be this Valentine’s weekend, Saturday 16 February, at W Brisbane’s Level Four rooftop oasis, WET Deck.
                    <a id="expand-p-click" href="javascript:;" style="text-decoration: none;"
                           onClick="show_text('expand-p-click', 'expand-p', 'block')">Read more ...</a> </p>
                    
                    <div id="expand-p" style="display: none">
                    <li style="text-decoration: none; list-style: none" ><p style="text-align: justify;">Reveal in the fun poolside while you sip on curated Chandon S cocktails and groove along to beats by guest DJ Riki Lee and W Brisbane Music Curator Kane Dignum. Stay tuned for the headline DJ to be announced!
Strut your stuff and BYO swimwear to take the plunge with a refreshing dip in the pool and stay a little longer to enjoy Aussie BBQ fare. We have you covered with a supply of pool towels and shower facilities to freshen up as the music heats up WET Deck for the evening ahead.</p></li>
                    
                       </div>
                    <li style="text-decoration:none; list-style:none" ><b>Who knows, you may even meet your very own Summer Crush!</b></li>
                    <li style="text-decoration:none; list-style:none" ><b>Date:</b> Saturday 16 February, 2019</li>
                    <li style="text-decoration:none; list-style:none" ><b>Time:</b> from 3PM-Midnight</li>
                    <li style="text-decoration:none; list-style:none" ><b>Tickets:</b> $25+ Booking Fee/ $35 on door</li>
                    <li style="text-decoration:none; list-style:none" ><b>Includes:</b> Entry plus a Chandon S cocktail on arrival</li>                    
                </div>
            </div>

            <div class="col-sm-4 py-3 px-3 mt-3">
                <div class="mt-4"><br><br>
                    <p class="listing-hero-image--month"><h4>February, 16</h4></p>
                <div class="listing-hero-body">
                        <h1 class="listing-hero-title" data-automation="listing-title"><b>Single &amp; Ready to Mingle</b></h1><h3> A Summer Crush Pool Party</h3>
                        <meta content="Single &amp; Ready to Mingle - A Summer Crush Pool Party">
                            <div class="l-mar-top-3">
                            <div class="l-media clrfix listing-organizer-title">
        <div class="l-align-left"><br>by W, Brisbane
        </div>
</div><div class="js-display-price-container listing-hero-footer hide-small hide-medium" data-automation="micro-ticket-box-price">
                            <div class="js-display-price">
    $29.96
</div>      
                            </div>
                    </div>
                    <div class="py-3">
                    <button class="btn btn-dark" data-toggle="modal" data-target="#contactmodal1"><p>Tickets</p></button>
                </div>
            </div>
        </form>
    </div>
</div>
            </div>
</div>
    <div class="container-fluid">
        <div class="row">
            <div id="col3" class="col-sm-8">
                <div class=" mt-3 px-2" >
                    <h2><b>Zeal & Ardor - Stranger Fruit Tour 2019</b></h2>
                    <img src="images/zeal.jpg" alt="Holi" style="width: 80%">
                    
                    
                                       <ul>
                    <li class="py-2"><b>Event Description</b></li>
                    <p style="text-align: justify;">Zeal & Ardor is truly a musical force like no other. A one-time experiment of Swiss-American mastermind Manuel Gagneux, the avant-garde combination of negro spirituals and black metal embraced on his 2015 album Devil Is Fine quickly connected with several previously unstruck chords - as though American slaves had found Satanism rather than Christianity.
                    <a id="expand-l-click" href="javascript:;" style="text-decoration: none;"
                           onClick="show_text('expand-l-click', 'expand-l', 'block')">Read more ...</a> </p>
                    
                    <div id="expand-l" style="display: none">
                    <li style="text-decoration: none; list-style: none" ><p style="text-align: justify;"> After being invited to play the illustrious Roadburn Festival while still a bedroom concoction, a full lineup was soon established, and the global rollout begun. 2018’s follow-up Stranger Fruit took the now-complete band to new heights of powerful weirdness and sharp social commentary, and has already seen their name emblazoned on several high profile end of year lists - including those of the revered Decibel and Revolver magazines. This experiment is emboldened and only just beginning.

Making their debut Australian appearance alongside Deafheaven at the Perth Festival in February 2019,Zeal & Ardor will then perform a string of exclusive headline shows in Melbourne, Sydney, and Brisbane, as well as jumping across for an exclusive appearance in Wellington, New Zealand.</p></li>
                    
                       </div>
                    
                    <li style="text-decoration:none; list-style:none" ><b>Date:</b> Thursday, 28 February, 2019</li>
                    <li style="text-decoration:none; list-style:none" ><b>Time:</b> 8:00PM - 11:00PM AEST</li>
                    <li style="text-decoration:none; list-style:none" ><b>Tickets:</b> $45+ Booking Fee </li>
                    <li style="text-decoration:none; list-style:none" ><b>Location:</b> The Brightside Brisbane

27 Warner Street

Fortitude Valley

Brisbane, QLD 4006</li>                    
                    </ul>
                </div>
            </div>
            <div id="col4" class="col-sm-4">
                <div class="mt-3 px-2"><br><br>
                    <p class="listing-hero-image--month"><h3>February, 22</h3></p>
                    <div class="listing-hero-body ">
                        <h1 class="listing-hero-title" data-automation="listing-title"><b>Zeal & Ardor</b></h1><h3>Stranger Fruit Tour 2019</h3>
                        
                            <div class="l-mar-top-3">
                            <div class="l-media clrfix listing-organizer-title">
        <div class="l-align-left">
            
            <p> Carbon Sunset presents</p>                  </div>
</div><div class="js-display-price-container listing-hero-footer hide-small hide-medium" data-automation="micro-ticket-box-price">
                            <div class="js-display-price">
    $52.73
</div>      
                            </div>
                    </div>
                    <div class="py-3">
                    <button class="btn btn-dark" data-toggle="modal" data-target="#contactmodal1"><p>Tickets</p></button>
            </div>
        </form>
    </div>
</div>
            </div></div></div>
</div>
<script>
    // EB-31924 - With slow page loading, when the JavaScript has not yet fully loaded
    // nothing will happen when clicking the Call To Action button. If the button is
    // clicked before the page has loaded, we show a spinner.
    var ticketModalButtons = document.getElementsByClassName('js-ticket-modal-btn');
    if (ticketModalButtons && ticketModalButtons.length) {
        ticketModalButtons[0].addEventListener(
            'click',
            function(e) {
                e.preventDefault();
                e.target.classList.add('btn--large--loader');
                e.target.dataset.clicked = 'clicked';
                e.target.removeEventListener(e.type, arguments.callee);
            }
        );
    }
</script>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="contactmodal1" tabindex="-1" role="dialog" style="color: initial;">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body text-left">
          <h3 class="text-center"><i class="fa fa-envelope"></i> Book Now!</h3>
              <div id="contact1">
        <div class="alert alert-success" style="display:none"></div>
   


<form class="contactform" action="foodbooking_process.php" method="post">
      <div class="form-group">
        <label for="name" class="control-label">Your name :</label>
        <input type="text" id="name" name="name" class="form-control required" value=" " required>
      </div>
      <div class="form-group">
        <label for="name" class="control-label">Your email :</label>
        <input type="text" id="email" name="email" class="form-control required email" value="" required>
      </div>

            <div class="form-group">
        <label for="name" class="control-label">No of people</label>
        <textarea id="no_of_people" name="no_of_people" class="form-control required" style="min-height:1px"></textarea>
      </div>
      <button type="submit" id="submit" value="Submit" class="btn btn-primary btn-block btn-lg" ><i csendlass="fa fa-envelope"></i>send
      </button>
    </form>
  </div>
</div>
</div>
</div></div>

<?php include("include/footer.inc") ?>
</body>
</html>

