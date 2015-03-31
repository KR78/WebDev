<?php 
if (isset($_GET['choice'])) { // IF THE CHOICE VARIABLE IS SET IN THE URL (IF THEY CHOOSE A STYLE)...
  $choice = $_GET['choice']; // GET THE URL VALUE AND STORE IT IN LOCAL VARIALBE $choice...
  
  if ($choice == "slate" || $choice == "cosmo" || $choice == "cyborg" || $choice == "readable" || $choice == "simplex" || $choice == "cerulean" || 
  $choice == "united" || $choice == "superhero" || $choice == "slate" || $choice == "yeti" || $choice == "flatly" || $choice == "darkly"
  || $choice == "default" || $choice == "lumen" || $choice == "paper" || $choice == "sandstone" || $choice == "journal" || $choice == "spacelab") { 
  // MAKE SURE THE THEME EXISTS OTHERWISE IT WONT WORK DUDE
      setcookie("sitestyle", $choice, time()+60*60*24*100, "/"); // COOKIE SET FOR 30 DAYS
      header("location: index.php"); // SEND THE USER HERE AFTER THEME IS CHOSEN
      exit(); // END THIS SCRIPT
  }
  else{
     $choice = "cyborg";
  }
}
?>
<?php 
include 'style/style.php'; // CHECK IF THE USER HAS A STYLE COOKIE SET AND ACCESS ITS VALUE 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Batik's Home Page</title>
<link href="bootswatch/<?php echo $Style;?>/bootstrap.min.css" rel="stylesheet">
</head>

<?php include 'includes/header.php';?>
<body>

                             <div class="jumbotron" style="padding-top:0px;">
                               <div class="container">
                              <h1 class="classname">BATIK'S COMPANY &trade; </h1> <!-- &#0153; -->
                              <p>Dedicated to be the ultimate force of the industry</p>
                               <ul class="pager pull-right">
                                <a href="#"><li><img src="icons/Facebook.png"></li></a>
                                <a href="#"><li><img src="icons/Twitter.png"></li></a>
                                <a href="#"><li><img src="icons/Linkedin.png"></li></a>
                                <a href="#"><li><img src="icons/Google-plus.png"></li></a>
                               </ul>
                              <p><a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more</a></p>
                            </div> 
                            </div>                                      
                             <!--end of jumbotron-->

                             <!-- Carousel
    ================================================== -->
    <div class="container">
   
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="image/image2/gtr2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:white;">The Nissan Godzilla</h1>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/image2/cls63.jpg"  alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:black;">The All New CLS63</h1>
          
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/image2/porsche.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:white;">One More Reason For Need For Speed</h1>
              
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   
  
    <!-- /.carousel -->
<br>
<br>
<br>



                         <!--content-->

               <div class="container">

<div class="row featurette">
        <div class="col-md-7">
          <h2> The AUDI A3 </h2>
          <p>
          	Driver and front passenger advanced airbag supplemental restraint system, knee airbags, seat-mounted thorax side airbags and Sideguard® inflatable curtain airbags 1
            Front passenger occupant detection for airbags 1
            Power central locking system with safety unlock feature if airbags deploy
            Anti-lock Brake System (ABS) with Electronic Brake-pressure Distribution (EBD) and brake assist
            Electronic Stability Control (ESC) with secondary collision brake assist and traction control (ASR)
            Anti-theft alarm system with immobilizer
            Tire-pressure monitoring system
            Safety belt reminder for driver and front passenger
            Lower Anchors and Tethers for CHildren (LATCH) in rear seats
            Electromechanical parking brake
          </p>
         <p><a class="btn btn-default" href="#contact" role="button">View details &raquo;</a></p>

        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive " src="image/a3.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive " src="image/porsche.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2>The ALl New Porsche 911 Carrera</h2>
          <p >The engines, as you would expect, are characterised by six horizontally opposed cylinders. The 3.4-litre engine in the 911 Carrera models produces 257 kW (350 hp); in the 911 Carrera S models, the 3
          In the 21st century, we find ourselves caught between all kinds of opposites on a daily basis: between the demands of our work life and our private life, between the real world and virtual reality</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>


        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette margin_bottom">
        <div class="col-md-7">
          <h2>Old is Gold So Does Our Collection Of Vintage Cars</h2>
          <p >
          	 A Roadster is a perfect example of what a true American classic should look like. This Roadster  which has been treated to a complete frame off restoration, is powered by an original numbers matching L head style 200ci 4 Cylinder Engine (which produces 40 Horsepower) and a 3 speed manual transmission. The Model A was the first Ford to be factory equipped with a 6 volt starting system, 4 wheel mechanical brakes, and a windshield wiper, which is included in this classic. This straight exterior of this classic Ford is finished in a beautiful Raven Black paint job and has a very clean black convertible soft top. The black painted grill includes the original Boyce Motometer temperature hood ornament and a spare tire mounted on the drive side. The interior has a Brown vinyl bench seat, added turn signals and a functional (Ahooga) horn. This 1929 pickup sits on 21 inch Insa tires which wrap around classic Ford style steel wheels. This truck is ready to jump in and drive in your next parade, or your next local car show!
          </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>

        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="image/bentley_old.jpg" alt="Generic placeholder image">
        </div>
      </div>

       <div>

      <hr class="featurette-divider">
       <hr class="featurette-divider">
         <hr class="featurette-divider">

</body>
<!-- The Foots-->
<?php include('includes/footer.php');?>
<!-- End Of The Foots -->
</html>
