<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="svg/xml" />
	<title>Cacophony Project - Moore’s Law for NZ birds</title>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700' type='text/css'>	
	<link rel="stylesheet" href="/css/app.css" />
	<link rel="icon" type="image/png" href="favicon.png">
<meta name="keywords" content="Cacophony Project New Zealand Birds" />
<meta name="description" content="The Cacophony Project turns birdsong into data, so we can measure how to best protect New Zealand’s birds. Join the open source project." />
	<script type="text/javascript" src="bower_components/modernizr/modernizr.js"></script>
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>    
	<script type="text/javascript" src="js/d3.min.js"></script>	<!-- move to bower_components -->      
</head>
<body id="home">

<?php include('includes/nav.php'); ?>
	
	<!-- hero -->
<section class="hero">
	<div id="hero-text">
		<div class="row">
		<div class="small-12 columns">
				<h1>Moore’s Law for New Zealand’s birds</h1>
				</div>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 text-center columns">
			
			<div id="player">
				<h2>I Listen</h2>
				<audio controls>
				  <source src="/audio/Hauturu-Island.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
				</audio>
			</div>
		</div>
	</div>
</section>

<section id="the-cacophony-project">
	<div class="row">
		<div class="small-12 medium-6 columns">
			<img src="/img/james-cook.png">
		</div>
		<div class="small-12 medium-6 columns">
			<div id="opening-copy">
				<h2>Join the Cacophony Project</h2>
				<p>Moore’s Law tells us that it keeps getting cheaper and easier to crunch data. And every day, all around New Zealand, the dawn chorus tells us that our birdlife is one of our greatest treasures. But which way is the volume trending? And what can we pick out from the individual voices?</p>
				<p>
					The Cacophony Project will turn birdsong into data. By capturing the sound of our ecosystems, we’re going to build up a dataset that tracks exactly what the birds are telling us, over time and over the whole of New Zealand. 
				</p>	
				<p>
					The Cacophonometer is a simple piece of hardware that lives in the bush, listening out for birds and automatically sending what it hears to the cloud. Every recording is tagged by GPS location and by time.				
				</p>
				<p>
					Now we spread Cacophonometers far and wide. And we listen, learn, and improve the Cacophony Project as we go.				</p>
				<p>Long term, these devices could also be modified to use sound to lure pests, identify, and eradicate them in an intelligent targeted manner.</p>	
			</div>
		</div>
	</div>
</section>

<section id="first-project">
	<div class="row">
		<div class="small-12 columns">
			<h2>How you can help</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			<div id="opening-copy"><br>
				<p><strong>Release a Cacophonometer into the wild:</strong><br>
				 The more sound we save, the better. <a href="/cacophonometer.php">You can help us sprinkle Cacophonometers all over the country.</a></p>
				<p><strong>Tinker with the hardware or data:</strong><br>
				 Looking for a technical challenge? This is an open source project. We’re looking for ways to get Moore’s Law on our side - improving the Cacophonometer, getting the collection and storage of data right, and finding the best ways to analyse the sound and see what’s happening in the wilderness. <a href="/project-cacophony.php">Read more about Cacophony hardware, software, and data analysis</a>.
				</p>
			
			</div>
		</div>
		<div class="small-12 medium-6 columns">
			<img src="/img/mic.jpg">
		</div>
	</div>
</section>

<section id="listening-here">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#the-cacophony-project" class="smooth-scroll hero-jump button round"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-7 columns">
			<h2>The birds have always talked to us. This is a new way to listen</h2>
			<p>As soon as people arrived in New Zealand, they recognised the importance of our birds. Māori beliefs about birdsong were passed down for centuries. The placement of a kāreke cry foretold your future. Kōmiromiro brought good news; piopio bad. The song of the riroriro signalled when to plant crops, and the tōrea’s cry told you when to dig for shellfish. The matuku mourned the dead. </p>
			<p>When James Cook first sailed the Endeavour to New Zealand, his botanist, Joseph Banks, kept a journal. Anchored in Charlotte Sound:</p>
			<blockquote>"This morn I was awakd by the singing of the birds ashore... The numbers of them were certainly very great who seemd to strain their throats. Their voices were certainly the most melodious wild musick I have ever heard...the most tuneable silver sound imaginable."</blockquote>
			<p>But people don’t just listen to birds. We hunted them, and introduced pests like rats, stoats, possums and cats. The birds that we loved hearing made easy prey.</p>
			<p>In recent decades, conservation has made a huge difference. Trapping, poison, hunting, and fences have all been turned against the pests. Bird sanctuaries all over New Zealand are attempting to bring the music back. (The book ‘Paradise Saved’ tells this remarkable story.)</p>
			<p>We’re trying a lot of different thing to help our birds out. To restore the “wild musick” that once woke up Joseph Banks, we need to know which efforts work best. The Cacophony Project will let the birds tell us.</p>
		</div>
		<div class="small-12 medium-5 columns">
			<img src="/img/nzmap.png">
		</div>
	</div>
</section>

<!-- <section id="call-out">
	<div class="row">
		<div class="small-12 columns">
			<h2>There are a number of ways you can help. Find out more <a href="#">here</a></h2>
			<h4>If you think you can help then <a href="#">sing out</a></h4>
		</div>
	</div>
</section> -->

<?php include('includes/footer.php'); ?>

</body>
</html>
