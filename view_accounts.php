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
								<li class="nav-item active"><a class="nav-link" href="view_accounts.php">CHECK ALL ACCOUNTS</a></li> 
								
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
							<a href="view_accounts.php">View All Account Holders</a>
						</div>
						<h2>Account Holders</h2>
					</div>
				</div>
            </div>
			
        </section>
		     <section class="feature_area p_120">
			 <center>
				<h2>All Accounts</h2><br /><br />
        	
		<?php
			$conn = new mysqli('localhost', 'root', '', 'transaction');
			if($conn->connect_error)
			die('Connection Error' .$conn->connect_error);
			$sql = "SELECT * FROM accounts";
			$result = $conn->query($sql);
			
			print("<table width=600 rules='all' cellpadding=10px><tr>");
			if($result->num_rows > 0)
			{
				print("<th>Account Holder's Name</th>");
				print("<th>Email</th>");
				print("<th>Amount</th>");
				print("</tr><tr>");
				while($row = $result->fetch_assoc())
				{
					echo "<td>".$row[AccName]."</div></a></td><td width='50%'>".$row[Email]."</td><td>".$row[Amount]."</td></button></a></tr>";
				}
				print("</table>");
			}
			else
			echo "0 Results!";
			$conn->close();
		?>
			<br /><br />
			<a class="org_btn" href="Sndmny.php">Send Money</a>
			<a class="green_btn" href="view-transaction.php">View Transaction</a>
				</center>
        			
        		</div>
        	</div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================About Area =================-->
       <!-- <section class="about_area p_120">
        	<div class="container">
        		<div class="row about_inner">
        			<div class="col-lg-6">
        				<div class="about_img">
        					<img class="img-fluid" src="img/about-img.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="about_right_text">
        					<h4>Who we are <br />to Serve the nation</h4>
        					<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.</p>
        					<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End About Area =================-->
        
        <!--================Feature Area =================-->
        <!--<section class="feature_area p_120">
        	<div class="container">	
        		<div class="main_title">
        			<h2>Our Top Rated Features</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        		</div>
        		<div class="row feature_inner">
        			<div class="col-lg-3 col-sm-6">
        				<div class="feature_item">
        					<h4>Unique Design</h4>
        					<p>Most people who work in an office environment, buy computer products, or have a computer at </p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="feature_item">
        					<h4>Appropriate UX</h4>
        					<p>Most people who work in an office environment, buy computer products, or have a computer at </p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="feature_item">
        					<h4>Perfect Visual</h4>
        					<p>Most people who work in an office environment, buy computer products, or have a computer at </p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="feature_item">
        					<h4>Different Layout</h4>
        					<p>Most people who work in an office environment, buy computer products, or have a computer at </p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Team Area =================-->
        <!--<section class="team_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Energetic Team Members</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        		</div>
        		<div class="row team_inner">
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="img-fluid" src="img/team/team-1.jpg" alt="">
        						<div class="hover">
        							<p>This article is floated online with an aim to help you find the best dvd printing solution. Dvd printing is an</p>
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Ethel Davis</h4>
        						<p>Managing Director (Sales)</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="img-fluid" src="img/team/team-2.jpg" alt="">
        						<div class="hover">
        							<p>This article is floated online with an aim to help you find the best dvd printing solution. Dvd printing is an</p>
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Rodney Cooper</h4>
        						<p>Creative Art Director (Project)</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="img-fluid" src="img/team/team-3.jpg" alt="">
        						<div class="hover">
        							<p>This article is floated online with an aim to help you find the best dvd printing solution. Dvd printing is an</p>
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Dora Walker</h4>
        						<p>Senior Core Developer</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="img-fluid" src="img/team/team-4.jpg" alt="">
        						<div class="hover">
        							<p>This article is floated online with an aim to help you find the best dvd printing solution. Dvd printing is an</p>
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Lena Keller</h4>
        						<p>Creative Content Developer</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Team Area =================-->
        
        <!--================Text Members Area =================-->
        <!--<section class="text_members_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Testimonials</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        		</div>
        		<div class="member_slider owl-carousel">
        			<div class="item">
        				<div class="member_item">
        					<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory compaq laptop battery compaq</p>
        					<h4>Mark Alviro Wiens</h4>
        					<h5>CEO at Google</h5>
        				</div>
        			</div>
        			<div class="item">
        				<div class="member_item">
        					<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory compaq laptop battery compaq</p>
        					<h4>Mark Alviro Wiens</h4>
        					<h5>CEO at Google</h5>
        				</div>
        			</div>
        			<div class="item">
        				<div class="member_item">
        					<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory compaq laptop battery compaq</p>
        					<h4>Mark Alviro Wiens</h4>
        					<h5>CEO at Google</h5>
        				</div>
        			</div>
        			<div class="item">
        				<div class="member_item">
        					<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory compaq laptop battery compaq</p>
        					<h4>Mark Alviro Wiens</h4>
        					<h5>CEO at Google</h5>
        				</div>
        			</div>
        			<div class="item">
        				<div class="member_item">
        					<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory compaq laptop battery compaq</p>
        					<h4>Mark Alviro Wiens</h4>
        					<h5>CEO at Google</h5>
        				</div>
        			</div>
        			<div class="item">
        				<div class="member_item">
        					<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory compaq laptop battery compaq</p>
        					<h4>Mark Alviro Wiens</h4>
        					<h5>CEO at Google</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Text Members Area =================-->
        
        <!--================ start footer Area  =================-->	
        <!--<footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Biznance</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point where images and videos are</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                   <!-- <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
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