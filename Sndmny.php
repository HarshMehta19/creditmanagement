<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Account System</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a href="index.html"><b><h3><tt>Account System</tt></h3></b></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="view_accounts.php">CHECK ALL ACCOUNTS</a></li> 
								<!--<li class="nav-item active"><a class="nav-link" href="Sndmny.php">SEND MONEY</a>-->
								
							</ul>
							
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="view_accounts.php">View Accound Holders</a>
							<a href="Sndmny.php">Transfer Money</a>
						</div>
						<h2>Transfer Money</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->       
        <section ><!--class="feature_area ">  	-->
			<br /><br />
			
				<form action="Sndmny.php" method="post">
					<center>
							<h2>Send Money</h2>
        					<input type="text" placeholder="Enter Sender's Name" name="accname" size="50"><br /><br />
							<input type="text" placeholder="Enter Recipent Name" name="recname" size="50"><br /><br />
							<input type="text" placeholder="Enter Amount" name="amount" size="50"><br /><br />
							<input class="org_btn" type="submit" value="Send Money"><br /><br />
							<?php
								if(isset($_POST["amount"]) && isset($_POST["accname"]) && isset($_POST["recname"])){
									$Amount = (Double) $_POST["amount"];
									$Accname = $_POST["accname"];
									$Recname = $_POST["recname"];
									if(empty($Amount) || empty($Accname) || empty($Recname)){
										echo "Please Check the fields";
									}
									else if($Amount<=0)
										echo "<h4 style ='color:red;'}>Enter Correct Amount</h4>";
									else if($Accname == $Recname)
										echo "Can not Transfer to same account";
									else{
										$conn = new mysqli('localhost', 'root', '', 'transaction');
										if($conn->connect_error)
											die('Connection Error' .$conn->connect_error);
										$sql = "SELECT Amount FROM accounts WHERE AccName=" ."'$Accname'";
										$result = $conn->query($sql) or die("User doesn't exist");
										
											//	print("<table width=600 rules='all' cellpadding=10px><tr>");
										if($result->num_rows > 0){
													
											while($row = $result->fetch_assoc()){
												//		echo "<td><a href='Data.php' name='Harsh' value=$row[AccName]><div>".$row[AccName]."</div></a></td><td>".$row[Amount]."</td></tr>";
												if($row[Amount]<$Amount){
													print("<h4 style ='color:red;'}>Insufficient Balance</h4>");
												}
												else{
													$Credit=$row[Amount];
													$Credit-=$Amount;
													$sql = "update accounts set Amount=$Credit WHERE AccName=" ."'$Accname'";
													if(mysqli_query($conn, $sql)){
														$sql = "select Amount FROM accounts WHERE AccName=" ."'$Recname'";
														
														$incr = $conn->query($sql) or die("User doesn Exist") ;
														if($incr->num_rows> 0 ){
															while($amut = $incr->fetch_assoc()){
																$Credit=$amut[Amount];
																$Credit+=$Amount;
																echo "Transaction Sunccessfull";
															}
															$sql = "update accounts set Amount=$Credit WHERE AccName=" ."'$Recname'";
															mysqli_query($conn, $sql);
															$sql = "INSERT INTO transfers (AccName, Recname, Statement, Amount) VALUES ('$Accname', '$Recname', 'Debit', $Amount)";
															mysqli_query($conn, $sql);
															$sql = "INSERT INTO transfers (AccName, Recname, Statement, Amount) VALUES ('$Recname', '$Accname', 'Credit', $Amount)";
															mysqli_query($conn, $sql);
														}
														else{
															print("<h4 style ='color:red;'}>User doesn't exist</h4>");
															$sql = "SELECT Amount FROM accounts WHERE AccName=" ."'$Accname'";
															$revers = $conn->query($sql) or die("User doesn't exist");
															if($revers->num_rows > 0){
																while($row = $revers->fetch_assoc()){
																	$amunt=$row[Amount];
																	$amunt+=$Amount;
																}
																$sql = "update accounts set Amount=$amunt WHERE AccName=" ."'$Accname'";
																mysqli_query($conn, $sql);
																
															}
														}																	
													}
													else{
														echo "<h4 style ='color:red;'}>Transaction failed, Please Retry again</h4>";
													}
												}
														
											}
										}
										else
												echo "<h4 style ='color:red;'}>Payment Failed or Check Details</h4>";
									}
											
								}
								else{
									echo " ";
								}
								//$conn->close();
							?>
					</center>
        		</form>
        	</div>
			
        </section>
      
        
        
        
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>-->
    </body>
</html>