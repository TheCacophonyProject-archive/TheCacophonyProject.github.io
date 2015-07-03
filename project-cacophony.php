<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="svg/xml" />
	<title>The Cacophony Project</title>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700' type='text/css'>	
	<link rel="stylesheet" href="/css/app.css" />
	<link rel="icon" type="image/png" href="favicon.png">
<meta name="keywords" content="The Cacophony Project" />
<meta name="description" content="The Cacophony Project" />
	<script type="text/javascript" src="bower_components/modernizr/modernizr.js"></script>
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>    
	<script type="text/javascript" src="js/d3.min.js"></script>	<!-- move to bower_components -->      
</head>
<body id="project-cacophony">

<?php include('includes/nav.php'); ?>
	
	<!-- hero -->
<section id="hero">
	<div class="row">
		<div class="small-12 medium-6 columns">
			<h1>Project Cacophony</h1>
		</div>
	</div>
</section>

<section id="cacophonometer">
	<div class="row">
		<div class="small-12 columns">
				<h2>Cacophonometer</h2>
				<h3>Data collection hardware – Cacophonometer</h3>
				<p>The aim of this project is to have a cheap reliable way of collecting and uploading data to the cloud. Our initial assumption is that sound is a pretty good high level indicator of what is going on in local area.</p>
				<p>Projects main components are:</p>
				<ul>
					<li>Core processor – eg Arduino or cheap smart phone</li>
					<li>Data input devices – sound recorder, GPS, temp</li>
					<li>Data transfer devices (one of…wifi, cell data, Bluetooth, SD card)</li>
					<li>Power supply – solar collector</li>
					<li>Photo/video capability</li>
					<li>Battery</li>
					<li>Water proof enclosure – attachment method</li>
				</ul>
				<p>A cheap smart phone is the ideal first Cacophonometer and it has all the required electronics. We put the cacophonometer in a water proof container with a plug in microphone and solar charger. This give us an inexpensive way to capture the state of the environement in lots of places. …Detailed specification of initial data logger is here</p>
				<p>We are keen on any contributions that will help create a cheaper more reliable device. Buy one to play with here.</p>
		</div>
	</div>
</section>

<section id="data-upload">
	<div class="row">
		<div class="small-12 columns">
				<h2>Data upload</h2>
				<h3>Data collection, upload and storage software</h3>
				<p>The software on the devices is designed to be upgradable so that the sampling, processing and uploading algorithms can be upgraded as it is learned the best way to collect and analyse data. This will also be configurable for different environments and objectives.</p>
				<ul>
					<li>Data sampling method – how often and of what quality it the data collected</li>
					<li>Data processing – how is it processed in hardware before uploading – eg turned into MP3 format to reduce data size</li>
					<li>Data uploading method – wifi, cell data, Bluetooth walk/flyby, SD card</li>
					<li>Data cleaning – removing any voices before going into the database so there are no possible privacy issues</li>
					<li>Storage structure – pretty simple, recording, time, GPS, other in intervals of 1 minute?</li>
				</ul>
				<p>The first cacophonometer is an android phone that records and automatically uploads the data to the cloud from WiFi or cell data. One of the projects on the wish list is to use the open source mesh network software available on Android phones to allow data collection where there is no cell phone reception.</p>
		</div>
	</div>
</section>

<section id="analysis">
	<div class="row">
		<div class="small-12 columns">
				<h2>Analysis</h2>
				<h3>Ways the data can be analysed</h3>
				<p>Our assumption here is that the way we can analysis this now is only a fraction of what may be possible in the future so we want to make it as easy as possible to store in a way that gives flexibility for future analysis. There are an infinite number of ways this could possibly be analysed Some suggested types of analysis possible</p>
				<ul>
					<li>Cacophony index - The first objective is to have a simple index of the health of the ecosystem based on sound analysis. While this will never be perfect it is at least objective and can be retrospectively analysed as techniques improve. Eg every 5 second interval tested for if there is a bird noise or not – then gives score from 0-100 on quantity of bird noise in any given period.</li>
					<li>Graph to show the trend in cacophony index at each data collection point</li>
					<li>Analysis of pest noises – can you detect possums or rats based on sound?</li>
					<li>Analysis of control methods – can you detect a trap going off?</li>
					<li>Analysis of types of birds – can you identify types of birds?</li>
					<li>Maps – so anyone can see visually where the high cacophony and dead zones are</li>
					<li>Experiment design – can we suggest best ways to design experiments for pest eradication/control. Eg monitors in place for 1 month before traps set and two areas the same one with and one without trapping to compare….</li>
					<li>Data collection analysis – from all of the above can you estimate optimal spacing and data collection methods…</li>
				</ul>	
		</div>
	</div>
</section>

<section id="applications">
	<div class="row">
		<div class="small-12 columns">
			<h2>Applications</h2>
			<h3>Aps for community engagement</h3>
			<p>
				This can include any form of interaction with general public or people engaged in conservation. A list of ideal project would be
			</p>
			<ul>
  				<li>Ap that allowed anyone to hold phone up, press record for set time (eg 1-5 minutes), enter email and then get sent a cacophony measurement for their area</li>
				<li>Assess other data in your area to see how well you are doing</li>
				<li>Enter simple trap update data – GPS, time and state of trap – reset, maintained, re-baited etc</li>
				<li>Ap in walking mode to collect data while on a tramp – uploaded when return. Most people have a powerful  mobile computer so we should use to help the birds</li>
				<li>Have a map of traps in your area that need working on in your region</li>
				<li>Suggested things you can do to improve the cacophony in your area</li>
				<li>Have graph to show trends in cacophony in area and who has contributed to it – eg john smith – easy link to update to Facebook etc</li>  
			</ul>
		</div>
	</div>
</section>

<section id="first-product">
	<div class="row">
		<div class="small-12 columns">
			<h2>First product</h2>
		</div>
	</div>
</section>

<section id="open-source">
	<div class="row">
		<div class="small-12 columns">
			<h2>Open source details</h2>
			<h3>License types</h3>
			<p>License type - ? MIT BSD3? - We have chosen the open source licence…….as we are very happy for commercial companies to use what is created here to help accelerate the process of achieving cacophony…. Main thing we want is that all the data collected contributes to open source data base that anyone can analyse and use….			</p>
			<h3>Open source tools</h3>
			<p>Source code control hosting , version control, discussion and web – GitHub</p>
			<h3>Technology stack</h3>
			<p>
				List of technologies....	
			</p>
			<h3>Links to project </h3>
			<p>
				List of links to varous parts of project...
			</p>
		</div>
	</div>
</section>





<section id="call-out">
	<div class="row">
		<div class="small-12 columns">
			<h2>There are a number of ways you can help. Find out more <a href="#">here</a></h2>
			<h4>If you think you can help then <a href="#">sing out</a></h4>
		</div>
	</div>
</section>


<script>
$('#the-project-link').css("font-weight","bold");
</script>
<?php include('includes/footer.php'); ?>

</body>
</html>