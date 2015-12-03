<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="svg/xml" />
	<title>Contact the Cacophony Project Team</title>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700' type='text/css'>	
	<link rel="stylesheet" href="/css/app.css" />
	<link rel="icon" type="image/png" href="favicon.png">
	<meta name="keywords" content="Cacophony Project New Zealand Birds" />
	<meta name="description" content="Cacophonometers record NZ birds in the wild. Order yours to help the Cacophony Project hear and measure the health of our native bush." />
	<script type="text/javascript" src="bower_components/modernizr/modernizr.js"></script>
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>    
	<script type="text/javascript" src="js/d3.min.js"></script>	<!-- move to bower_components -->      
</head>
<body id="how-to-help">

<?php include('includes/nav.php'); ?>
	
	<!-- hero -->
<section class="help-header hero" id="subpage-hero">
	<div id="hero-text">
		<div class="row">
			<div class="small-12 columns">
				<h1>Contact the Cacophony Project Team</h1>
			</div>
		</div>
	</div>
</section>

<section id="contribute">
	<div class="row">
		<div class="small-12 columns">
			<h4>Get in touch with us if you have questions or suggestions!</h4>

			<div id="contact-form">
				<div class="row">
					<div class="small-12 medium-6 columns">
						<form id="contact" action="/php/contact-form.php" method="post" data-abide="ajax">
							<input type="hidden" name="email">
							<div class="row">
								<div class="small-12 columns">
									<div class="first-name-field">
										<label>Name
											<input type="text" name="inputName" required>
										</label>
										<small class="error">Please enter your first name</small>
									</div>
								</div>
							</div>
							<div class="email-field">
								<label>Email address
									<input type="text" name="inputEmail" pattern="email" required>
								</label>
								<small class="error">Please enter a valid email address</small>
							</div>
							<div class="message-field">
								<label>Let us know what you're thinking or wondering!
									<textarea rows="4" name="inputMessage"></textarea>
								</label>
								<small class="error">Please enter a message</small>
							</div>
							<button id="button-submit" type="submit" class="radius right">Submit</button>
						</form>
						<div id="success">
							<h3>Thanks for getting in touch!</h3>
							<p>We'll get back to you as soon as possible - in the meantime, tell your friends about the project!</p>
						</div>
						<div id="failure">
							<h2>Something went wrong</h2>
							<p>Something unexpected occurred with sending your message.</p>
							<p>Please refresh your browser and try again.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>




<script>
$('#contact-link').css("font-weight","bold");
</script>
<script type="text/javascript" src="/js/forms.js"></script>
<?php include('includes/footer.php'); ?>

</body>
</html>
