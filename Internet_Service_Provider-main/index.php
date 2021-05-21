<?php
require('header.php');
?>

		<!-- Banner -->
			<section id="banner">
				<h2>Hi. This is FIEK-Net.</h2>
				<p>The internet with the best speed and stability in the country!</p>
				<!-- <ul class="actions">
					<li>
						<a href="#" class="button big">Lorem ipsum dolor</a>
					</li>
				</ul> -->
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Our offers</h2>
						<p>Choose the package that suits your communication needs in the most stable network 
						in Kosovo! If you prefer double speed and the same price, we recommend the 2+ package.</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color1 fa-cloud"></i>
								<h3>Package 1</h3>
								<p>Up to 20 Mbps<br />40 GB Transfer<br /><b>10$ / month</b></p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>Package 2</h3>
								<p>Up to 40 Mbps<br />80 GB Transfer<br /><b>15$ / month</b></p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3>Package 3</h3>
								<p>Up to 100 Mbps<br />Unlimited Transfer<br /><b>25$ / month</b></p>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Contact Us</h2>
						<p>Contact us through this form.</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email" required>
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Send Message" name="submit" class="special big" type="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

<?php

    if(isset($_POST['submit'])){
      $emri = $_POST['name'];
      $komenti = $_POST['message'];
	  $email = $_POST['email'];
	  $regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+.[a-zA-Z]{2,3})$/';
		if(preg_match($regex,$email))
		{
			$kritika = $emri." ".$email." : ".$komenti. "\r\n" ;
			$file = "kritikat.txt";
			file_put_contents($file, $kritika, FILE_APPEND);
		}     
    }
    ?>
<?php
require('footer.php');
?>