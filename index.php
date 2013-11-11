<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Contact Jennifer</title>
	<meta name="description" content="Jennifer Beatty is an independent UX designer and web developer. Jen specializes in HTML5, CSS3, Wordpress and User Experience Design.">
	<meta name="author" content="Jennifer Beatty">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link href='http://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->
	<div class="sixteen columns top">
		
	</div>

	<div class="container page">
	
		<div class="sixteen columns">
			<div class="two columns">
				<a href="index.html" title="Portfolio Site of Jennifer Beatty"><img src="images/logo.png" alt="Jennifer Beatty" id="logo" /></a>
			</div>
			
			<div class="twelve columns nav-secondary" id="nav">
				<nav>
					<ul>
				
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="portfolio.html" class="category">Portfolio</a></li>
						<li><a href="contact.html" class="current">Contact</a></li>
					</ul>
				</nav>
			</div><!--end nav-->
			
		</div><!--end header wrap-->
		
		<div class="sixteen columns space">
			<div class="six columns contact-title-left">
				<h1 class="page-title">Contact</h1>
			</div><!--close about title-->
		</div>
		
		<div class="eight columns contact-left" id="contact-main">
		
		    <form method="post" action="index.php">
		
			<fieldset class="fieldset_style"><!--contact-info-->
				<div>
					<label>
						<input id="given-name" type="text" autofocus="" required="" placeholder="First Name" name="given-name" />
					</label>
				</div>
				
				<div>	
					<label>
						<input id="last-name" type="text" autofocus="" required="" placeholder="Last Name" name="last-name" />
					</label>
				</div>
				
				<div>
					<label>
						<input id="email-address" type="email" autofocus="" required="" placeholder="Email Address" name="email-address" />
					</label>
				</div>
				
			</fieldset>
			
			<fieldset class="fieldset_style">
				<legend><strong>Message:</strong></legend>		
					<div>
						<textarea name="message" cols="60" rows="20" placeholder="Type your message to me here!"></textarea>
					</div>
			</fieldset>
		
			<fieldset class="fieldset_style"><!--contact-submit-->
				<div>
					<button name="submit" type="submit" value="send message" id="contact_submit">Send Message</button>
				</div>
			</fieldset><!--contact-submit-->
		
			<!--<p id="clear_all_fields"> or, <input type="reset" value="clear all fields" /></p>-->
				
			</form><!--contact-info-->
			
			<?php
    		$firstname = $_POST['given-name'];
    		$lastname = $_POST['last-name'];
    		$email = $_POST['email-address'];
    		$message = $_POST['message'];
    		$from = 'From: Jennifer'; 
    		$to = 'puredesignsjlb@gmail.com'; 
    		$subject = 'Hello';
    		
    		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
			?>
			
    		<?php
			if ($_POST['submit']) {
    			if (mail ($to, $subject, $body, $from)) { 
        		echo '<p>*Thank you for contacting me, your message has been sent!</p>';
    			} else { 
        		echo '<p>Uh-Oh...Something went wrong, go back and try again!</p>'; 
    		}
	}
?>
			
		</div><!--close form-->
		
		
		<div class="seven columns">
			<div id="social">
			<a href="https://twitter.com/JenPureDesigns" title="Find Jen on Twitter"><img src="images/twitter.png" alt="Find Jen on Twitter" /></a>
			<a href="http://www.linkedin.com/profile/view?id=90300186&trk=hb_tab_pro_top" title="Find Jen on LinkedIn"><img src="images/linkedin.png" alt="Find Jen on LinkedIn" /></a>
			<a href="https://plus.google.com/u/0/110909608299893672844/posts" title="Find Jen on Google"><img src="images/google.png" alt="Find Jen on Google+" /></a>
			<a href="mailto:puredesignsjlb@gmail.com" title="Email Jen"><img src="images/mail.png" alt="Email Jen" /></a>
			</div>
			
			<blockquote class="space">
				<p>“Great designer and delivers on time! A contractor worth using!! Everytime!”</p>
				<cite>Ike Newari, Keadworks</cite>
			</blockquote>
			
			<blockquote>
				<p>“I love Jennifer’s work. She knows her stuff and made sure that I knew everything I needed to manage my website.”</p>
				<cite>Megan Hallifax, Chalumi Therapies</cite>
			</blockquote>
			
			<blockquote>
				<p>“The baby shower invites Jen made for me turned out just as I pictured them in my head! She was so easy to work with! I’ll definitely be using her for her techniques again!”</p>
				<cite>Nina Wills, Independent Consultant</cite>
			</blockquote>
		
		</div><!--close testimonials-->		


		<div class="sixteen columns space" id="footer">
			<div class="nine columns space" id="footer-left">
				<p>© copyright 2013 | Jennifer Beatty</p>
			</div><!--close copyright-->
			
			<div class="six columns space" id="footer-nav">
				<p><a href="index.html" title="home" class="contact-links">home</a> | <a href="about.html" title="about" class="contact-links">about</a> | <a href="demo.html" title="demo" class="contact-links">demo</a> | <a href="index.php" title="contact" class="contact-links">contact</a></p>
			</div><!--close bottom nav-->
		</div><!--close footer div-->

		
	</div><!-- container -->
	</body>
	</html>