<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="svg/xml" />
	<title>Join the Cacophony Project - open source data analysis</title>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700' type='text/css'>	
	<link rel="stylesheet" href="/css/app.css" />
	<link rel="icon" type="image/png" href="/favicon.png">
<meta name="keywords" content="Cacophony Project New Zealand Birds" />
<meta name="description" content="The open source Cacophony Project captures, stores and analyses data from New Zealand birds. Hardware, software, apps, big data: Join and help." />
	<script type="text/javascript" src="bower_components/modernizr/modernizr.js"></script>
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>    
	<script type="text/javascript" src="js/d3.min.js"></script>	<!-- move to bower_components -->      
</head>
<body id="project-cacophony">

<?php include('includes/nav.php'); ?>
	
	<!-- hero -->
<section class="project-header hero" id="subpage-hero">
	<div id="hero-text">
		<div class="row">
			<div class="small-12 columns">
				<h1>Join the open source project</h1>
			</div>
		</div>
	</div>
</section>
<section class="hide-for-small" id="project-nav">
	<div class="row">
		<div class="small-3 text-center columns">
			<p><a href="#sound-recording" class="smooth-scroll">Sound recording hardware</a></p>
		</div>
		<div class="small-3 text-center columns">
			<p><a href="#storing-data" class="smooth-scroll">Uploading and storing data</a></p>
		</div>
		<div class="small-3 text-center columns">
			<p><a href="#data-analysis" class="smooth-scroll">Data analysis</a></p>
		</div>
		<div class="small-3 text-center columns">
			<p><a href="#applications" class="smooth-scroll">Apps and software</a></p>
		</div>
	</div>
</section>

<section id="about-project">
	<div class="row">
		<div class="small-12 medium-6 columns">
			<img src="/img/cacophonometer-icon.png">
		</div>
		<div class="small-12 medium-6 columns">
				<p>The Cacophony Project is a mix of technical innovation and conservation. We’re designing our own hardware, collecting a huge amount of data, looking for new ways to analyse sound, and building apps and software to show the world what we discover. If we get it right, we’ll discover the best ways to protect New Zealand birds.</p>
				<p>We’re testing the assumption that sound can be a pretty good, high-level indicator of what is going on in an area of bush. At its most basic: Better conservation = more birds = more sound.</p>
				<p>The steps are to record sound in the wild, combine it with other data (e.g. GPS coordinates and time), upload it to the cloud (we’re already using Amazon Web Services), process and analyse everything, and produce useful insight into the health of our native bush over time.</p>
				<p>Every step comes with questions that you can help answer.</p>
		</div>
	</div>
</section>

<section id="sound-recording" class="gray">
	<div class="row">
		<div class="small-12 columns">
			<h2>Recording sound in the wild - the Cacophonometer</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
				<p>Put simply, the Cacophonometer is a cheap sound recorder that can survive outdoors, living off solar power and uploading data to the cloud. It’s based on an Android smartphone, sealed in a waterproof container with a plug-in microphone and solar charger. It’s relatively inexpensive and has let us start capturing data in a few different places.</p>
				<p>We’ve already built the first version, and now we’re looking for ways to make it cheaper and more reliable.</p>
				<p>The smartphone base gives us some obviously useful components - like a core processor, microphone and GPS inputs, and wifi/cell/Bluetooth connectivity. But there are questions we haven’t answered yet. What could we do with the camera, or other sensors?</p>
				<p>We picture thousands of Cacophonometers listening to the bush all over New Zealand in the future. Could you help create a cheaper, more reliable device?</p>
				<p><a href="#">See a detailed specification of the initial data logger</a></p>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			<h4>Now</h4>
			<p>You’ll be able to buy Cacophonometers soon. Leave us your email address and we’ll let you know when.</p>
		</div>
		<div class="small-12 medium-6 columns">
			<h4>Later</h4>
			<p><a href="#">Buy a Cacophonometer</a> and see what it can do - and what you can do for it!</p>
		</div>
	</div>
</section>

<section id="storing-data" class="green">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#project-nav" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<h2>Uploading and storing data</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			<p>Cacophonometer software is upgradable, so as we learn we can improve the way we sample, process, and upload data. We might even find that different configurations suit different locations or objectives. We’re looking for data-heads to help us work out:</p>
			<ul>
				<li><strong>Data sampling</strong> - How often should Cacophonometers record sound samples? At what quality?</li>
				<li><strong>Data processing</strong> - What processing is best before we upload? Should we compress to MP3 to reduce data size?</li>
				<li><strong>Upload methods</strong> - We’re using wifi or cell data for now, but we want to look into Android’s open source mesh network software, especially where there’s no phone reception (i.e. most of the back country).</li>
				<li><strong>Data cleaning</strong> - What do we need to remove from our recordings? How can we detect and clear things like voices, which we want to exclude for privacy reasons?</li>
				<li><strong>Storage structure</strong> - We’re storing this data for everyone, and want it to be useful for decades to come. Will a simple structure be best? Sound recording, timestamp, GPS coordinates - is that all we need?</li>
			</ul>
			<p>Keen to help? Find us on <a href="https://tree.taiga.io/project/the-cacophony-project/">Taiga</a> or <a href="https://github.com/TheCacophonyProject">Github</a>, or <a href="#">email us</a>.</p>
		</div>
		<div class="small-12 medium-6 columns">
			<img src="/img/pukeko-icon.jpg">
		</div>
	</div>
</section>

<section id="data-analysis" class="gray">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#project-nav" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-5 columns">
				<img src="/img/analysis.png">
		</div>
		<div class="small-12 medium-7 columns">
				<h2>Data analysis</h2>
				<p>Our biggest goal is for this data to be available for analysis for as long as possible. Moore’s Law tells us that amazing things will be possible in the future, and if we’re flexible enough now, today’s data can fuel tomorrow’s discoveries. The biggest ‘unknown’ is what will be possible, or how it will happen.</p>
				<p>Some analysis we’d suggest for starters:</p>
				<ul>
					<li><strong>‘Cacophony index’</strong> - The first goal is a simple health index for ecosystems, based on sound analysis. This will never be perfect, but it could be an objective measure that can be retrospectively analysed as techniques improve. It might be that we listen every 5 seconds for bird noise, and assign a score (from 0-100) on the quantity of bird noise in any given period.</li>
					<li><strong>Trends at each location</strong> - Measuring changes in the Cacophony index over time at each data collection point.</li>
					<li><strong>Analysis of pest noises</strong> - Can you detect pests like possums or rats based on sound?</li>
					<li><strong>Analysis of control methods</strong> - Can you detect a trap going off?</li>
					<li><strong>Analysis of bird species</strong> - How accurately can you identify species by analysing recorded bird calls?</li>
					<li><strong>Maps</strong> - Layering the Cacophony index, or other trends and data, over a map to visually identify areas of high cacophony, and dead zones.</li>
					<li><strong>Experiment design</strong> - Can our data and insight help design better experiments for pest eradication? We could, for example, monitor areas before and after trapping or poisoning, and also collect ‘control’ data from a similar area without traps or bait.</li>
					<li><strong>Optimising data collection</strong> - From all of the above, and perhaps other analysis, can you estimate the optimal spacing and spread of Cacophonometers? Can you help optimise other data collection methods?</li>
				</ul>
			<p>Keen to help? Find us on <a href="https://tree.taiga.io/project/the-cacophony-project/">Taiga</a> or <a href="https://github.com/TheCacophonyProject">Github</a>, or <a href="#">email us</a>.</p>

		</div>
	</div>
</section>

<section id="applications">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#project-nav" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-7 columns">
			<h2>Apps and software</h2>
			<p>
				We want the New Zealand public to play a massive role in the Cacophony Project (and in conservation in general). So let’s engage them through those phones and computers that everyone spends too long looking at. Some people will buy and monitor their own Cacophonometers, while others will want to see and understand the data.		
			</p>
			<p>
				Imagine apps that people could use to:
			</p>
			<ul class="hide-for-medium-up">
  				<li>Make recordings and submit them to the Cacophony Project’s data store - whether for a minute or two, or during an entire weekend tramp.</li>
				<li>See the Cacophony index, or other success measures, in their neck of the woods.</li>
				<li>Record trapping data (like GPS location, time and state of trap – reset, maintained, re-baited etc.) and see the changes they’re contributing to.</li>
				<li>Suggest ways to help in the area - like mapping traps to monitor, for example.</li>
				<li>Connect people who are working to improve the cacophony, by showing who is helping in a given area, with social media or other contact details.</li>
			</ul>
		</div>
	</div>
	<div class="row hide-for-small">
		<div class="small-12 columns">
				<img src="/img/community.png">
		</div>
	</div>
</section>

<section id="open-source" class="gray">
	<div class="row up-button">
		<div class="small-12 columns">
			<a href="#project-nav" class="smooth-scroll hero-jump button round black"></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<h2>Open source details</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			
			<h4>License types</h4>
			<p>License type - ? MIT BSD3? - We have chosen the open source licence…….as we are very happy for commercial companies to use what is created here to help accelerate the process of achieving cacophony…. Main thing we want is that all the data collected contributes to open source data base that anyone can analyse and use….			</p>
			<h4>Open source tools</h4>
			<p>Source code control hosting , version control, discussion and web – GitHub</p>
			<h4>Technology stack</h4>
			<p>
				List of technologies....	
			</p>
			<h4>Links to project </h4>
			<p>
				List of links to varous parts of project...
			</p>
		</div>
		<div class="small-12 medium-6 columns">
			<img src="/img/open-source-icon-2.png">
		</div>

	</div>
</section>

<script>
$('#the-project-link').css("font-weight","bold");
</script>
<?php include('includes/footer.php'); ?>

</body>
</html>