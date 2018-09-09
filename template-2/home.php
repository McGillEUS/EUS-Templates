<!doctype html>
<html>
<head>
	<title>ECSESS Code.Jam() 2016</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="auther" content="Chianyu"/>
	<meta name="keywords" content="codejam, mcgill, ecsess, coding, competition"/>
	<meta name="description" content="">

	<link rel="icon" href = "codejam.ico"/>

	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,500|Arvo|Anonymous+Pro:400,700" rel="stylesheet" type="text/css">
	<link href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style-main.css"/>
	<link rel="stylesheet" href="style-popup.css"/>
	<link rel="stylesheet" href="style-livechat.css"/>
</head>	

<body>	
	<noscript style="text-align:center;">For full functionality of this page it is necessary to enable JavaScript.</noscript>
	<header>
		<div><img id="icon" src="img/header/jar.png"/></div>
		<div><img id="title" src="img/header/title.png"/ alt="Code.Jam()"></div>

		<nav id="menu">			
			<ul>
				<li>Menu</li>
				<li class="menu-link" id="show-news"><i class="fa fa-newspaper-o fa-lg fa-fw" aria-hidden="true"></i>News</li>
				<li class="menu-link pop" href="#Feedback"><i class="fa fa-commenting fa-lg fa-fw" aria-hidden="true"></i>Feedback</li>
				<li class="menu-link pop" href="#Team"><i class="fa fa-users fa-lg fa-fw" aria-hidden="true"></i>Our team</li>
				<li class="menu-link">DRAKE it up</li>
				<a  class="menu-link" href="http://ecsess.mcgilleus.ca">Visit ECSESS</a>
			</ul>
		</nav>

	</header>

	<section id="news-container">
		<div id="clear-news"><div class="table"><p>Clear All></p></div></div>
		<div id="news">	
			<?php $newsContent = array('Test News', 'Test News', 'Test News', 'Test News', 'Test News'); 
			foreach($newsContent as $index => $news): ?>
			<div class="news-item">
				<div class="news-header">
					<h2><i class="fa fa-bell-o" aria-hidden="true" style="margin:0 .5rem 0 0"></i>Test<?= '['.$index.']'; ?></h2>
					<button class="header-button dismiss-news">
						<i class="fa fa-trash" aria-hidden="true" style="color:#fff;"></i>
					</button>
				</div>			
				<div class="news-body">
					<p><?= $news; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		
		<div id="archive-link"><div class="table"><a href="#">News Archives ></a></p></div></div>
	</section>

	<section id="tile-container">		
		<div class="row">
			<div class="col50">
				<div href="#About" class="thumbnail wide pop">
					<img src="img/trottier.jpg" alt=""/>
					<div class="tile-title"><div class="table"><h1>About</h1></div></div>
				</div>
			</div>		
			<div class="col50">
				<div id="tile_date" class="thumbnail medium nopop">
					<img src="img/poster.jpg" alt=""/>
					<div class="tile-title"><div class="table"><h1>Date</h1></div></div>
				</div><!--
			 --><div href="#FAQs" class="thumbnail medium pop">
					<img src="img/presentation2.jpg" alt=""/>
					<div class="tile-title"><div class="table"><h1>FAQs</h1></div></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col50">
				<div href="#Event1" class="thumbnail medium pop">
					<img src="img/techtalk.jpg" alt="">
					<div class="tile-title"><div class="table"><h1>Tech Talk</h1></div></div>
				</div><!--
			 --><div href="#Event2" class="thumbnail medium pop">
					<img src="img/networking.jpg" alt="">
					<div class="tile-title"><div class="table"><h1>Tech Fair</h1></div></div>
				</div>
			</div>			
		    <div class="col50">
				<div class="thumbnail wide">
					<div class="tile-layer"></div>
					 <iframe id="googleMap" style="width:200px;height:100px;border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAYce0eMbAhNirOfmnTIFYk19clR4kd3nY&q=Trottier+Building,Montreal"></iframe>	
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col50">
				<div id="tile_schedule" class="thumbnail large">
					<img src="img/saki.jpg" alt="">
					<div class="tile-title"></div>
					<div class="schedule-detail-container">			
						<div id="schedule-fri" class="schedule-detail active-schedule">
							<p>12:00	Tech fair 1</p>
							<p>13:00	Tech fair 2</p>
							<p>14:30	Networking + sign-in</p>
							<p>18:00	Opening ceremony</p>
							<p>19:00	Dinner</p>
						</div>
						<div id="schedule-sat" class="schedule-detail">
							<p>09:00	Breakfast</p>
							<p>12:00	Lunch</p>
							<p>15:00	Snack</p>
							<p>18:00	Dinner</p>
							<p>23:59	Midnight yoga</p>
						</div>
						<div id="schedule-sun" class="schedule-detail">
							<p>09:00	Breakfast</p>
							<p>12:00	Lunch</p>
							<p>19:00	Submission deadline</p>
						</div>					
					</div>
					<div class="schedule-title-container">
						<div data-day="fri" class="schedule-title active-day">Friday</div>
						<div data-day="sat" class="schedule-title">Saturday</div>
						<div data-day="sun" class="schedule-title">Sunday</div>		
					</div>
				</div>
					</div><!--
			 --><div class="col50">
				<div href="#Form" class="thumbnail medium pop" data-rel="popup" >							
					<img src="img/wristband.jpg" alt="">
					<div class="tile-title"><div class="table"><h1>Join</h1></div></div>
				</div><!--
			 --><div href="#Pay" class="thumbnail medium pop">
					<img src="img/breakfast.jpg" alt="">
					<div class="tile-title"><div class="table"><h1>Pay</h1></div></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col25 social">					
				<div class="thumbnail medium" id="FB"><a target="_blank" href="https://www.facebook.com/mcgillcodejam2016/"><img alt=""/></a></div><!--
			 --><div class="thumbnail medium" id="TW"><a target="_blank" href="https://twitter.com/ecsess/"><img alt=""/></a></div><!--
			 --><div class="thumbnail medium" id="IN"><a target="_blank" href="https://www.instagram.com/mcgill_ecsess/"><img alt=""/></a></div><!--
			 --><div class="thumbnail medium" id="EM"><a target="_blank" href="mailto:ecsess.vpexternal@mcgilleus.ca"><img alt=""/></a></div>
			</div>				
			<div class="col25">
				<div href="#News" class="thumbnail large">
					<img src="img/ecsess_sqr.png" alt=""></a>
					<div class="tile-title"><div class="table"><h1>ECSESS</h1></div></div>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col100">
				<div class="thumbnail wide" id="gallery">
					<img src="img/poster.jpg" alt=""/>
					<div class="tile-title"><div class="table"><h1>Gallery</h1></div></div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="popup-container">
		<div id="popup-layer"></div>
		<div id="About" class="popup" tabindex="-1">
			<div class="popup-header">
				<h2>About</h2>
			</div>
			<div class="popup-body">
				<p>CodeJam is a 48-hour team-based programming competition fueled by great minds and energy drinks.</p>
				<p>McGill University's Electrical, Computer and Software Engineering Student Society (ECSESS) is collaborating with some of Montreal's biggest software companies to make a challenging, real-world application problem for you to solve. ECSESS's largest event is back for its sixth year and this time it's all about bioinformatics.</p>
			</div>
			<div class="popup-footer">
				<button class="footer-button exit">Close</button>
			</div>
		</div>

		<div id="FAQs" class="popup" tabindex="-1">
			<div class="popup-header">
				<h2>FAQs</h2>
			</div>
			<div class="popup-body">
				<h4>Question 1</h4><p>Answer 1</p>
				<h4>Question 2</h4><p>Answer 2</p>
				<h4>Question 3</h4><p>Answer 3</p>
				<h4>Question 4</h4><p>Answer 4</p>
				<h4>Question 5</h4><p>Answer 5</p>
				<h4>Question 6</h4><p>Answer 6</p>
			</div>
			<div class="popup-footer">
				<button class="footer-button exit">Close</button>				
			</div>
		</div>

		<div id="Event1" class="popup" tabindex="-1">
			<div class="popup-header">
				<h2>Tech Talks</h2>
			</div>
			<div class="popup-body">
				<h4>Company 1</h4><p>Event description 1</p>
				<h4>Company 2</h4><p>Event description 2</p>
				<h4>Company 3</h4><p>Event description 3</p>
			</div>
			<div class="popup-footer">
				<button class="footer-button exit">Close</button>
			</div>
		</div>

		<div id="Event2" class="popup" tabindex="-1">
			<div class="popup-header">
				<h2>Tech Fair</h2>
			</div>
			<div class="popup-body">		
				<h3>List of companies</h3>
				<ul>
					<li>Company 1</li>
					<li>Company 2</li>
					<li>Company 3</li>
				</ul>		
			</div>
			<div class="popup-footer">
				<button class="footer-button exit">Close</button>
			</div>
		</div>

		<div id="Form" class="popup" tabindex="-1">			
			<button class="header-button resizing" id="enlarge">
				<i class="fa fa-expand" aria-hidden="true" style="color:#fff;"></i>
			</button>
			<button class="header-button resizing" id="smaller">
				<i class="fa fa-compress" aria-hidden="true" style="color:#fff;"></i>
			</button>
			<button class="header-button exit">
				<i class="fa fa-times" aria-hidden="true" style="color:#fff;"></i>
			</button>
			
			<iframe src="https://docs.google.com/forms/d/1w7KlP-YzDP-fk4gv9b7gDIQS7fgLIvP9Jvt3PtUkl0I/viewform?embedded=true" width="100%" height="100%"></iframe>
			
		</div>

		<div id="Pay" class="popup" tabindex="-1">
			<div class="popup-header">
				<h2>Payment</h2>
			</div>
			<div class="popup-body">
				<p>You can pay for your ticket in cash at the ECSESS Lounge or you can pay online by <a href="https://www.tilt.com/tilts/ecsess-winter-banquet-2016"><img src="img/sponsors/logo_tilt.png" id="tilt_link"/></a></p>
				
			</div>
			<div class="popup-footer">
				<button class="footer-button exit">Close</button>
			</div>
		</div>

		<div id="Sponsors" class="popup enlarged" tabindex="-1">
			<div class="popup-header">
				<h2>Our Sponsors</h2>
			</div>
			<div class="popup-body">
				<h3>Gigabyte Sponsors</h3>
				<a class="sponsor giga" href="https://morganstanley.com/">
					<img src="img/sponsors/logo_morgan.png" alt="morgan">
				</a>
				<h3>Megabyte Sponsors</h3>
				<a class="sponsor mega" href="https://kronos.com/">
					<img src="img/sponsors/logo_kronos.png" alt="kronos">
				</a>
				<a class="sponsor mega" href="http://google.com/">
					<img src="img/sponsors/logo_google.png" alt="google">
				</a>
				<h3>Kilobyte Sponsors</h3>
				<a class="sponsor kilo" href="http://ormuco.com/">
					<img src="img/sponsors/logo_ormuco.png" alt="ormuco">
				</a>
				<a class="sponsor kilo" href="http://www.wolfram.com/">
					<img src="img/sponsors/logo_wolfram.png" alt="wolfram">
				</a>
				<a class="sponsor kilo" href="https://www.namecheap.com/">
					<img src="img/sponsors/logo_namecheap.png" alt="namecheap">
				</a>
			</div>
			<div class="popup-footer">
				<button class="footer-button exit">Close</button>
			</div>
		</div>

		<div id="Feedback" class="popup" tabindex="-1">			
			<div class="popup-header">
				<h2>Ask a Question</h2>
			</div>
			<form action="email.php" method="POST">
				<div class="popup-body">
					<p>If you have any questions not answered in the FAQ section, please ask us here. We will answer you as soon as possible!</p>							
					<p>Name: <input type="text" name="Feedback-name" id="Feedback-name"/></p>
					<p>Email: <input type="text" name="Feedback-email" id="Feedback-email"/></p>					
					<textarea type="text" name="Feedback-message" id="Feedback-message" placeholder="Your message..."/></textarea>					
				</div>
				<div class="popup-footer">
					<input class="footer-button submit" type="submit" value="Send">Send</input>
					<button class="footer-button exit">Close</button>				
				</div>
			</form>
		</div>

		<div id="Team" class="popup" tabindex="-1">
			<div class="popup-header">
				<h2>The CodeJam Committee</h2>
			</div>
			<div class="popup-body">			
				<div class="profile">
					<img class="profile-pic" src="img/profile/Alina.jpg"/>
					<h3><span style="font-weight:bold">Chair</span> Alina</h3>
					<p>Here are some placeholder description about Alina. Here are some more placeholder description about Alina. Here are some even more placeholder description about Alina.</p>
				</div>
				<div class="profile">
					<img class="profile-pic" src="codejam.ico"/>
					<h3><span style="font-weight:bold">President</span> Tony</h3>
					<p>Here are some placeholder description about Tony. Here are some more placeholder description about Tony. Here are some even more placeholder description about Tony.</p>
				</div>
				<div class="profile">
					<img class="profile-pic" src="img/profile/Drake.jpg"/>
					<h3><span style="font-weight:bold">Sponsorship</span> Drake</h3>
					<p>You used to call me on my cell phone, Late night when you need my love. Call me on my cell phone, Late night when you need my love. I know when that hotline bling, That can only mean one thing. I know when that hotline bling, That can only mean one thing.</p>
				</div>
				<div class="profile">
					<img class="profile-pic" src="img/profile/RiRi.jpg"/>
					<h3><span style="font-weight:bold">Logistics</span> RiRi</h3>
					<p>Work, work, work, work, work, work. He said me haffi, work, work, work, work, work, work. He see me do mi, dirt, dirt, dirt, dirt, dirt, dirt.So me put in work, work, work, work, work, work.When you ah guh learn, learn, learn, learn, learn.Meh nuh care if him hurt, hurt, hurt, hurt, hurting.</p>
				</div>
				<div class="profile">
					<img class="profile-pic" src="img/profile/Khaled.jpg"/>
					<h3><span style="font-weight:bold">Motivation</span> DJ Khaled</h3>
					<p>YOU SMART. YOU VERY SMART. YOU A GENIUS.</p>
					<p>I TOOK THE WHOLE DOOR OFF, AND THE HINGES, AND I PUT IT IN THE F–KBOY’S HANDS. YOU CAN PUT THE HINGES ON THE HANDS, TOO.</p>
					<p>WIN, WIN, WIN, NO MATTER WHAT</p>
					<p>AND ANOTHER ONE.</p>
				</div>
			</div>
			<div class="popup-footer">
				<button class="footer-button exit">Close</button>
			</div>
		</div>		
	</section>

	<section id="sponsorship-container">
		<h1>A Big Thank You to Our Generous Sponsors</h1>
		<div id="wheel">
			<div id="frame-collection" href="#Sponsors" class="pop">
				<div class="frame">
					<div class="sponsor giga"><img src="img/sponsors/logo_morgan.png" alt="morgan"></div>
				</div>
			 	<div class="frame">
					<div class="sponsor giga"><img src="img/sponsors/logo_vigilant.png" alt="vigilant"></div>
				</div>
				<div class="frame">
				 	<div class="sponsor mega"><img src="img/sponsors/logo_google.png" alt="google"></div>
				</div>
				<div class="frame">
				 	<div class="sponsor mega"><img src="img/sponsors/logo_kronos.png" alt="kronos"></div>
				</div>
				<div class="frame">
				 	<div class="sponsor mega"><img src="img/sponsors/logo_giro.png" alt="giro"></div>
				</div>
				<div class="frame">
				 	<div class="sponsor kilo"><img src="img/sponsors/logo_ormuco.png" alt="ormuco"></div>
				</div>
				<div class="frame">
				 	<div class="sponsor kilo"><img src="img/sponsors/logo_wolfram.png" alt="wolfram"></div>
				</div>
				<div class="frame">
				 	<div class="sponsor kilo"><img src="img/sponsors/logo_namecheap.png" alt="namecheap"></div>
				</div>
				<div class="frame">
				 	<div class="sponsor kilo"><img src="img/sponsors/logo_tilt.png" alt="tilt"></div>
				 </div>
			 </div>
		</div>
		<div id="blurb-container">
			<h2>Sponsor ECSESS Code.Jam()</h2>
			<p>We are a team of 100 students from a variety of disciplines. Mechanical engineering, electrical engineering, physics, and finance are but three of over 11 disciplines represented on our team. By supporting McGill Robotics, you are helping a team of enthusiastic students build, test, and compete internationally with our robots. In addition, you are aiding the training of future engineers, scientists, and businessmen via the opportunity to engage in hands on experience in their fields.</p>
			<p>If you are interested in sponsoring McGill Robotics, please have a look at our sponsorship package and be sure to email us at <a class="email" href="mailto:ecsess.vpexternal@mcgilleus.ca">ecsess.vpexternal@mcgilleus.ca</a>.</p>
			<a id="Package" href="sponsors/sponsorship_package.pdf" target="_blank"><img src="img/sponsors/sponsorship_package_icon.jpg" alt="CodeJam 2016 Sponsorship Package"/></a>
		</div>
	</section>
		
	<footer>
		<div id="footer">
			<p>Contact information: <a class="email" href="mailto:ecsess.vpexternal@mcgilleus.ca">ecsess.vpexternal@mcgilleus.ca</a></p>
			<p>Copyright Electrical, Computer and Software Engineering Student Society of McGill University (ECSESS)</p>
		</div>		  
	</footer> 
			
		
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>	
	<script src="script.js"></script>	
	
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="googleMap.js"></script>
	
	<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=12594078"></script>
	</body>
</html>	