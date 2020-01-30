<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unlockathon</title>
    
	
	<!-- Favicon -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png"> -->
    <link rel="manifest" href="images/site.webmanifest">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/landingPageStyle.css">
	<link rel="icon" type="image/png" href="images/iste.png"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="index.php" class="site-logo">
			<h3 class="unlockLogoText"><span class="unlockLogo">ᑌᑎᒪOᑕKᗩTᕼOᑎ</span>  20</h3>
		</a>
		<ul class="main-menu">
			<li><a href="login.php">Login</a></li>
			<li><a href="register.php?err=0">Sign Up</a></li>
			<li><a href="#" data-toggle="modal" data-target="#Modalrules" onclick="typewriter()">Rules</a></li>
			<li><a href="#" data-toggle="modal" data-target="#Modalcontact">Contact</a></li>
		</ul>
	</header>
	<!-- Header section end -->

	<div id="Modalrules" class="modal fade" role="dialog" data-keyboard="false">
  						<div class="modal-dialog">
  							<div class="modal-content">
  								<div class="modal-header text-center">
  									<h3 class="modal-title ml-auto">RULES</h3>
  									<button type="button" class="close" data-dismiss="modal">&times;</button>
  									

  								</div>
  								<div class="modal-body">
  									<body>
									  <div id="typedtext" >
									  	
									  </div>
									  <script type="text/javascript">
									  		// set up text to print, each item in array is new line
											var aText = new Array(
											"<li>THE QUESTION DISPLAYED IS A CLUE TO A PLACE IN MANIPAL</li>", 
											"<li>YOUR ANSWER SHOULD BE THE NAME OF  PLACE IN MANIPAL</li>",
											"<li>THE FORMAT OF THE ANSWER IS EXACTLY THE SAME AS THE NAME ON GOOGLE</li>",
											"<li>YOU HAVE AN UNLIMTED NUMBER OF TRIES FOR EACH QUESTION</li>",
											"<li>YOU WILL BE PROVIDED WITH 3 SKIPS FOR 1st DAY IN CASE YOU GET STUCK ON SOME LEVEL WHICH WILL BE INCREASE EACH DAY BY 1.</li>",
											"<li>EVERYDAY NEW QUESTIONS WILL BE UPDATED SO KEEP CHECKING FOR NEW QUESTIONS</li>",
											"<li>THE ORDER OF QUESTIONS APPEARING FOR EACH PLAYER IS SAME</li>",
											"<li>THE EVENT WILL BE LIVE TILL SUNDAY 26th JAN NIGHT. WINNERS WILL BE CONTACTED ON THEIR CONTACT DETAILS PROVIDED.</li>"
											);
											var iSpeed = 15; // time delay of print out
											var iIndex = 0; // start printing array at this posision
											var iArrLength = aText[0].length; // the length of the text array
											var iScrollAt = 20; // start scrolling up at this many lines
											 
											var iTextPos = 0; // initialise text position
											var sContents = ''; // initialise contents variable
											var iRow; // initialise current row
											 
											function typewriter()
											{
											 sContents =  ' ';
											 iRow = Math.max(0, iIndex-iScrollAt);
											 var destination = document.getElementById("typedtext");
											 
											 while ( iRow < iIndex ) {
											  sContents += aText[iRow++] + '<br />';
											 }
											 destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
											 if ( iTextPos++ == iArrLength ) {
											  iTextPos = 0;
											  iIndex++;
											  if ( iIndex != aText.length ) {
											   iArrLength = aText[iIndex].length;
											   setTimeout("typewriter()", 500);
											  }
											 } else {
											  setTimeout("typewriter()", iSpeed);
											 }
											}
									  	</script>
									</body>
  								</div>
  							</div>
  						</div>
  		</div>

  		<div id="Modalcontact" class="modal fade" role="dialog"  data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h3 class="modal-title ml-auto">Contact</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <br>
          </div>
          <div class="modal-body">
            <center>
                    <br />
                    <br />
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed">
                        <thead>
                          <tr>
                            <td>NAME</td>
                            <td>CONTACT NUMBER</td>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>NARAYAN HARI </td>
                            <td>+918384845571</td>
                            </tr>
                            <tr>
                            <td>MUSKAN DUSEJA</td>
                            <td>+918707471726</td>
                            </tr>
                            <tr>
                            <td>RAJEEV VEERARAGHAVAN</td>
                            <td>+919741310903</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>  
                  </center>

          </div>
        </div>
      </div>
</div>    


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2><span>Unlockathon</span> Solve the mystery</h2>    
								<p>Time to put your sherlock skills to work. Solve the mystery of missing person using the art of deduction. </p>
								<a href="register.php?err=0" class="site-btn">Sign Up Now</a>
								<a href="login.php" class="site-btn sb-c2">Log in</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hr-img">
								<img style="border-radius:100%;" src="Images/missing-person.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2><span>Unlockathon </span> Mental Health Awareness</h2>
								<p>Learn the importance of mental health and overcome the stigma by solving the mystery of missing person.</p>
								<a href="register.php?err=0" class="site-btn">Sign Up Now</a>
								<a href="login.php" class="site-btn sb-c2">Log in</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hr-img">
								<img style="border-radius:100%;" src="Images/mental-health.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>The Mystery of missing girl.</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<p style="text-align: justify;">
						In a world where being caring is considered a weakness, mental health is considered a stigma. 
						She’s had enough of this world filled with lies , people full of callousness and the disappointment that follows. Can you save her?</p>
					<p style="text-align: justify;font-weight: bold;">Presenting You Unlockathon : Crucible </p>  
					<p style="text-align: justify;">#MakeMentalHealthAPriority</p>
					<a href="register.php?err=0" class="site-btn">Solve Now</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->

	
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/main1.js"></script>

	</body>
</html>
