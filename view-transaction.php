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
							<a href="view_accounts.php">VIEW ALL Account HOLDERS</a>
							<a href="view-transaction.php">ACCOUNT STATEMENT</a>
						</div>
						<h2>ACCOUNT STATEMENT</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Gallery Area =================-->
				<center><br /><br />
				<h2>Account Details</h2><br />
        			<form action="view-transaction.php" method="post">
						<input type="text" name="accName" placeholder="Enter Account Holder's Name" size=40/><br /><br />
						<input class="green_btn" type="submit" value="View Account Summary"/>
					</form>
        		</div>
        	</div>
			<br />
			<?php
				if(isset($_POST["accName"])){
					$Accname = $_POST["accName"];
					$conn = new mysqli('localhost', 'root', '', 'transaction');
					if($conn->connect_error)
						die('Connection Error' .$conn->connect_error);
					$sql = "SELECT * FROM transfers WHERE AccName="  ."'$Accname'";
					$result = $conn->query($sql) or die("Account Holder Doesn't Exists");
					
					if($result->num_rows > 0)
					{
						echo "<h2><b>Account Details For " .$Accname ."</b></h2>";
						print("<table width=600 rules='all' cellpadding=10px><tr>");
						print("<th>Transfered To/By</th>");
						print("<th>Statement</th>");
						print("<th>Amount</th>");
						print("</tr><tr>");
						while($row = $result->fetch_assoc())
						{
							echo "<td>".$row[RecName]."</div></a></td><td>".$row[Statement]."</td><td>".$row[Amount]."</td></tr>";
						}
						print("</table>");
					}
					else{
						echo "<h4 style ='color:red;'}>User Doesn't Exists</h4>";
					}
				}
				else
					echo " ";
				//$conn->close();
			?>
			</center>
			<br/><br/>
       
        <!--================End Home Gallery Area =================-->
        
        <!--================Text Members Area =================-->
        
    </body>
</html>