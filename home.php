<?php
include("session.php");
if(!isset($_GET['ans'])) {
  header("Location: logout.php");
}
?>
<?php 
	$uid=$_SESSION["userid"];
	$status_query="SELECT status FROM login WHERE UID=$uid";
	$status_result=mysqli_query($connection,$status_query);
	$status_row=mysqli_fetch_assoc($status_result);
	$that_query="SELECT UID,name, score FROM login WHERE UID=$uid";
	$that_result=mysqli_query($connection,$that_query);
	$that_row=mysqli_fetch_assoc($that_result);
  $my_score=$that_row['score'];
	 if($status_row['status']>56)
	 	header("Location: congonew.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Unlockathon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/home.css">


  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css">
  <link rel="icon" type="image/png" href="images/iste.png"/>
  
  <style type="text/css">
    .table2{
    border-radius: 20px 20px;
    padding-bottom: 5%;
    background: linear-gradient(to bottom right, #dedce8, #f9f9f9,#1111);
    opacity: 0.8;
    width: 100%;
}
.button {
      background-color: black;
      border:3px solid white;
      border-radius:  2px;
      color: white;
      padding: 10px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }
    .button:active{
  background-color: white; 
}
  .blink{
  animation: blinker 1s linear infinite;
  background-color: #343a40;
}
a.nav-link{
  font-size: 20px;
  background-color: #343a40;
}
@keyframes blinker{

  50%{
    opacity: .3;
  }
}
  </style>

</head>
<body id="bg_body">
      



<div class="nav navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">ᑌᑎᒪOᑕKᗩTᕼOᑎ</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
<div class="collapse navbar-collapse" id="collapsibleNavbar" style="float:right;">
      <ul class="nav navbar-nav ml-auto navbar-left">
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#Modalrules" onclick="typewriter()" >RULES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#Modalleaderboard" >LEADERBOARD</a>
      </li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-toggle="modal" data-target="#Modallogout" >LOGOUT</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto navbar-right">
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-toggle="Modal" data-target="" >Your Score <?php echo "$my_score" ?></a>
      </li>
      <a class="nav-link blink" data-toggle="modal" data-toggle="modal" data-target="#Modalevent" >OTHER EVENTS</a>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-toggle="Modalcontact" data-target="#Modalcontact" >CONTACT US</a>
      </li>
    </ul>
</div>
</div>

<div style="background-color: #26292b; opacity: 1;">
<div class="demo-1">
<marquee behavour="scroll" direction="left"><h3>Celebrating <span style="color: #f4cf5d;">#10YearsofISTE</span>, Manipal's Largest Multi-domain Club. ISTE and IE-E&C Collab present Crucible'20</h3></marquee>
</div>
</div>
	  	<div id="Modalrules" class="modal fade" role="dialog" data-keyboard="false">
  						<div class="modal-dialog">
  							<div class="modal-content">
  								<div class="modal-header text-center">
  									<h3 class="modal-title ml-auto">RULES</h3>
  									<button type="button" class="close" data-dismiss="modal">&times;</button>
  									

  								</div>
  								<div class="modal-body">
  									<body>
									  <div id="typedtext">
									  	
									  </div>
									  <script type="text/javascript">
									  		// set up text to print, each item in array is new line
											var aText = new Array(
											"<ul><li>THE QUESTION DISPLAYED IS A CLUE TO A PLACE IN MANIPAL</li>", 
											"<li>YOUR ANSWER SHOULD BE THE NAME OF  PLACE IN MANIPAL</li>",
											"<li>THE FORMAT OF THE ANSWER IS EXACTLY THE SAME AS THE NAME ON GOOGLE</li>",
											"<li>YOU HAVE AN UNLIMTED NUMBER OF TRIES FOR EACH QUESTION</li>",
											"<li>YOU WILL BE PROVIDED WITH 3 SKIPS FOR 1st DAY IN CASE YOU GET STUCK ON SOME LEVEL WHICH WILL BE INCREASE EACH DAY BY 1.</li>",
											"<li>EVERYDAY NEW QUESTIONS WILL BE UPDATED SO KEEP CHECKING FOR NEW QUESTIONS</li>",
											"<li>THE ORDER OF QUESTIONS APPEARING FOR EACH PLAYER IS SAME</li>",
											"<li>THE EVENT WILL BE LIVE TILL SUNDAY  26TH JAN NIGHT. WINNERS WILL BE CONTACTED ON THEIR CONTACT DETAILS PROVIDED.</li></ul>"
											);
											var iSpeed = 5; // time delay of print out
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
	  	<div id="Modallogout" class="modal fade" role="dialog" data-keyboard="false">
  						<div class="modal-dialog">
  							<div class="modal-content">
  								<div class="modal-header text-center">
  									<h3 class="modal-title ml-auto">ATTENTION</h3>

  									<button type="button" class="close" data-dismiss="modal">&times;</button>
  									<br />
  								</div>
  								<div class="modal-body" >
  									<br />
  									<h4>Are you sure you want to Logout?</h4>
  									<br />
  									<br />
  									<p>Your progress will be saved</p>
  									<br />
  									<center>
  									<a href="logout.php"><button type="button" class="btn btn-danger">YES</button></a>  
  									<button type="button" class="btn btn-primary" data-dismiss="modal">Keep Playing</button>
  									</center>
  								</div>
  							</div>
  						</div>
  		</div>
  		<div id="Modalleaderboard" class="modal fade" role="dialog"	 data-keyboard="false">
  						<div class="modal-dialog">
  							<div class="modal-content">
  								<div class="modal-header text-center">
  									<h3 class="modal-title ml-auto">Leaderboard</h3>
  									<button type="button" class="close" data-dismiss="modal">&times;</button>
  									
  									<br />
  								</div>
  								<div class="modal-body">
  									<center>
										<br />
										<br />
										<div class="table-responsive">
											<table class="table table-striped table-bordered table-condensed">
												<thead>
													<tr>
														<td>RANK</td>
														<td>USER ID</td>
														<td>SCORE</td>
													</tr>
												</thead>
												<tbody>
													<?php
														$rank=1;
														$leader_query="SELECT name,UID,score FROM login ORDER BY SCORE DESC,timelast ASC";
														$leader_result=mysqli_query($connection,$leader_query);
														$leader_count=mysqli_num_rows($leader_result);
														while($leader_count>0)
														{
															$leader_row=mysqli_fetch_assoc($leader_result);
															echo "<tr>";
															echo "<td>{$rank}</td>";
															echo "<td>{$leader_row['UID']}</td>";
															echo "<td>{$leader_row['score']}</td>";
															// if($leader_row['status']==27)
															// 	echo "<td>COMPLETED</td>";
															// else
																// echo "<td>{$leader_row['status']}</td>";
															echo "</tr>";
															$rank++;
															if($rank==6)
																break;
															$leader_count-=1;
														}
														
													?>
												</tbody>
											</table>
										</div>	
									</center>

  								</div>
  							</div>
  						</div>
  		</div>
      <div id="Modalevent" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-center">

              <h3 class="modal-title ml-auto">Other Events</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <div class="modal-body">
            <ul>
            <li data-toggle="collapse" data-target="#day1"><u>Day 1(22nd January)</u></li><br>
            <center id="day1" class="collapse">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed">
                        <thead>
                          <tr>
                            <td>EVENT NAME</td>
                            <td>ROUND/TIMING</td>
                            <td>LOCATION</td>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>EXQUIZZITE</td>
                            <td>ROUND1/5:45pm</td>
                            <td>AB5 406</td>
                            </tr>
                            <tr>
                            <td>LAZERTRON</td>
                            <td>5:45pm</td>
                            <td>AB5 403</td>
                            </tr>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </center>
            <li data-toggle="collapse" data-target="#day2"><u>Day 2(23rd January)</u></li><br>
            <center id="day2" class="collapse">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed">
                        <thead>
                          <tr>
                            <td>EVENT NAME</td>
                            <td>ROUND/TIMING</td>
                            <td>LOCATION</td>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>GAMING</td>
                            <td>Round 1/5:45pm</td>
                            <td>AB5 407</td>
                            </tr>
                            <tr>
                            <td>EXQUIZZITE</td>
                            <td>Round 2/ 5:45pm </td>
                            <td>AB5 406</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </center>
            <li data-toggle="collapse" data-target="#day3"><u>Day 3(24th January)</u></li><br>
            <center id="day3" class="collapse">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed">
                        <thead>
                          <tr>
                            <td>EVENT NAME</td>
                            <td>ROUND/TIMING</td>
                            <td>LOCATION</td>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>CODEBURST</td>
                            <td>5:45pm</td>
                            <td>AB5 403</td>
                            </tr>
                            <tr>
                            <td>TREASURE TROVE</td>
                            <td>Round 1/ 5:45pm</td>
                            <td>AB5 406</td>
                            </tr>
                            <tr>
                            <td>GAMING</td>
                            <td>Round 1/ 5:45pm</td>
                            <td>AB5 407</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </center>
            <li data-toggle="collapse" data-target="#day4"><u>Day 4(25th January)</u></li><br>
            <center id="day4" class="collapse">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed">
                        <thead>
                          <tr>
                            <td>EVENT NAME</td>
                            <td>ROUND/TIMING</td>
                            <td>LOCATION</td>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>GAMING</td>
                            <td>FINAL ROUND/ 5:45pm</td>
                            <td>AB5 407</td>
                            </tr>
                            <tr>
                            <td>RIG-IT-UP</td>
                            <td>5:45pm</td>
                            <td>AB5 403</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </center>


            <li data-toggle="collapse" data-target="#day5"><u>Day 5(26th January)</u></li><br>
            <center id="day5" class="collapse">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-condensed">
                        <thead>
                          <tr>
                            <td>EVENT NAME</td>
                            <td>ROUND/TIMING</td>
                            <td>LOCATION</td>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>TREASURE TROVE</td>
                            <td>FINAL ROUND/ TBA</td>
                            <td>AB5 406</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </center>
            </ul>
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

 


    <div id="main">
        <div class="container">
            <div class="row row1">
            	<!-- <div class="col-lg-2 col-md-2"></div> -->
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="question-back" style="opacity: 0.7;">
                        <div class="question">
                        <?php
                        	$state=$status_row["status"];
                        	// if($state>25){
                        	// 	echo "<h2> Congratulations on reaching so far! </h2>";
                        	// 	echo "<h2> New questions Will be updated Shortly. </h2>";
                        	// } else {
							$question_query="SELECT question,UID,hint,qid from questions,login WHERE qid='$state' AND UID='$uid'";
							$question_result=mysqli_query($connection,$question_query);
							$question_row=mysqli_fetch_assoc($question_result);
							if($_GET['ans']==2)
							{
								echo "<div class=\"alert alert-success alert1\">
								  <strong>Success!</strong> You have advanced one level
								</div>";
							}
							if($_GET['ans']==0)
							{
								echo "<div class=\"alert alert-danger alert1\"
									<strong>Your answer is incorrect. Try Again</strong>
									</div>";
							}
                        ?>
                        <h2>Level <?php echo $question_row['qid']; ?></h2>
						<h4 style="font-size: 22px; text-align: center;"><?php echo $question_row['question']; ?></h3>
						<br>
						<?php
							$img_query = "SELECT img1 FROM questions where qid = '$state'";
							$img_result = mysqli_query($connection, $img_query);
							$img_row = mysqli_fetch_assoc($img_result);
							if($img_row['img1'] != NULL) {
						?>
						<img src="<?php echo $img_row['img1']; ?>" height = 200 width = 200 >		
						<?php
							}
						?>
           										  
                        </div>
						<center>
										
						  <button class="button <?php if($question_row['hint']=="") echo "hidden"; ?> mt-2" data-toggle="collapse" data-target="#hint">HINT</button>
				          <div id="hint" class="collapse">
				            <h4 style="color: black"><?php echo ucfirst($question_row['hint']);  ?></h4>
				            <br />  
				          </div>
						</center>
                        <div class="answer">
                                <div class="ans">
									<h2>Answer</h2>
                                </div>
                                    <form action="processing.php" method="POST">
                                    	<div class="form-group field col-lg-12">
                                        <input type="text" class="form-control" id="answer" placeholder="Enter Answer" name="ans">
                                    </div>
									<button class="btn btn-info" type="submit" name="submit" value="SUBMIT">SUBMIT</button>
								</form>
			                                    
                                        <!-- <button type="submit" class="btn btn-default" ><b>Submit</b></button> -->
                        </div>
                        <?php
                        	$skip_query = "SELECT skips from login where UID = $uid";
                        	$skip_result = mysqli_query($connection, $skip_query);
                        	$skip_row = mysqli_fetch_assoc($skip_result);
                        	$skips = $skip_row["skips"];
                        ?>
                        <center>
                        	<p class="<?php if($skips==0) echo "hidden"; ?> btn btn-primary mt-2" data-toggle="collapse" data-target="#skip_question" >Stuck?</p>
                        	<form action="skip_process.php" id="skip_question" class="collapse">
                        			<button class="btn btn-danger <?php if($skips==0) echo "hidden"; ?>" type="submit" value="SKIP"><?php echo $skips; ?> Skip<?php if ($skips>1)
                        				 echo "s";
                        			 ?> remaining</button>
                        	</form>
                        </center>
                    </div>
                </div>
            <div class="col-lg-1 col-md-1"></div> 
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-lg-12 col-xs-12 table1" style="opacity: 0.7;">
                    	<h3 class="text-center">Other Events</h3>
                    	
							<table class="table">
								<thead class="thead-dark">
    								<tr>
      									<th scope="col">Event</th>
      									<th scope="col">Classroom and Days</th>
    								</tr>
  								</thead>

  								<tbody>
  									<tr>
  										<td>Codeburst</td>
  										<td>AB5 403 24th January</td>
  									</tr>
  									<tr class="pure-table-odd">
  										<td>Rig-It-Up</td>
  										<td>AB5 403 25th January</td>
  									</tr>
  									<tr>
  										<td>Exquizite</td>
  										<td>AB5 406 22nd January & 23rd January</td>
  									</tr>
  									<tr class="pure-table-odd">
  										<td>Lazertron</td>
  										<td>AB5 403 22nd January</td>
  									</tr>

                      <tr>
                      <td>Treasure Trove</td>
                      <td>AB5 406 24th January & 26th January</td>
                    </tr>

                      <tr class="pure-table-odd">
                      <td>Gaming</td>
                      <td>AB5 407 23rd January to 25th January</td>
                    </tr>
  								</tbody>

							</table>
						
                    </div>
                   </div>
                </div>
                    
            </div>
        </div>    
    </div>
      


<div id="new" class="fixed-bottom">Developed By ISTE WebDev TEAM</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script src="js/three.r92.min.js"></script>
<script src="js/vanta.dots.min.js"></script>
<script>
VANTA.DOTS({
  el: "#bg_body",
  color: 0x2d20ff,
  color2: 0x5420ff,
  size: 6.30,
  spacing: 42.00
})
</script>

<style type="text/css">
  #new{
  background-color:#373737;
  color:white;
  text-align: center;
  margin-bottom: 0px;
  font-family: 'montserrat';
}


.demo-1 {
  color: #f6f5f1;
 height: 40px;  
 overflow: hidden;
 position: relative;
}



</style>

</body>
</html>