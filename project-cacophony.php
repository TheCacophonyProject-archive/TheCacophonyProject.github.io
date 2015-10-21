<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="svg/xml" />
	<title>Join the Cacophony Project - open source data analysis</title>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700' type='text/css'>	
	<title>The Cacophony Project</title>
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
				<h2>Data collection hardware – Cacophonometer</h2>
				<p>The aim of this project is to have a cheap reliable way of collecting and uploading data to the cloud. Our initial assumption is that sound is a pretty good high level indicator of what is going on in local area.</p>

				<p>A cheap smart phone is the ideal first Cacophonometer and it has all the required electronics. We put the cacophonometer in a water proof container with a plug in microphone and solar charger. This give us an inexpensive way to capture the state of the environement in lots of places. …Detailed specification of initial data logger is here</p>
				<p>We are keen on any contributions that will help create a cheaper more reliable device. Buy one to play with here.</p>
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
				<p><a href="https://tree.taiga.io/project/the-cacophony-project/">See a detailed specification of the initial data logger</a></p>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			<h4>Now</h4>
			<p>You’ll be able to buy Cacophonometers soon. Leave us your email address and we’ll let you know when.</p>

				<ul>
					<li>Core processor – eg Arduino or cheap smart phone</li>
					<li>Data input devices – sound recorder, GPS, temp</li>
					<li>Data transfer devices (one of…wifi, cell data, Bluetooth, SD card)</li>
					<li>Power supply – solar collector</li>
				</ul>
		</div>
		<div class="small-12 medium-6 columns">
			<h4>Later</h4>
			<p><a href="/cacophonometer.php">Buy a Cacophonometer</a> and see what it can do - and what you can do for it!</p>
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
			<p>Keen to help? Find us on <a href="https://tree.taiga.io/project/the-cacophony-project/">Taiga</a> or <a href="https://github.com/TheCacophonyProject">Github</a>, or <a href="/contact.php">contact us</a>.</p>
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
			<p>Keen to help? Find us on <a href="https://tree.taiga.io/project/the-cacophony-project/">Taiga</a> or <a href="https://github.com/TheCacophonyProject">Github</a>, or <a href="/contact.php">contact us</a>.</p>

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
			<h2>Open Source - Participation and Reuse</h2>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			<p>Our main goals with this project are to:</p>
			<ol>
				<li>create a community of interested technologists, biologists, and other researchers around the hardware, software and scientific problems we need to address to make the project a success, and</li>
				<li>encourage commercial interests to provide services which dovetail with or benefit from the work we are doing.</li>
			</ol>
			<p>We are working to ensure that our licensing first and foremost protects the interests of our community and collaborators. Our next priority is to be an attractive partner to commercial interests.</p>
			<h3>License types</h3>
			<p>The software components of the Cacophony Project are made available as "Free Software", which is also open source, under <a href="http://www.gnu.org/copyleft/copyleft.en.html">copyleft</a> licenses like the <a href="http://www.gnu.org/licenses/gpl-3.0.en.html">GNU General Public License, v3 or later</a> (GPL) or the <a href="http://www.gnu.org/licenses/agpl-3.0.en.html">Affero General Public , v3 or later</a> (AGPL). We do this to protect the interests of both users and developers, who are often the very same people.</p>
			<p>To the extent to which we are able, we will entertain requests to make individual software components available to commercial partners under different licenses which allow commerical exploitation, however we will do this only if a sufficiently strong, mutually beneficial case for doing so can be made, as these sorts of arrangements can strain the relationships of open source communities.</p>

			<h3>Toolset</h3>
			<p>This project is built around a small set of open source collaboration tools: OnlineGroups.Net for email list communication, Git for source code control, and Taiga for Kanban-style project coordination. All of these tools are both open source and gratis (free of cost) to use.</p>
			<p>If you want to find out more about the project - regardless of whether you're a software developer, scientist, or just an interested member of the the public, we invite you to <a href="http://groups.nzoss.org.nz/groups/projectcacophony">join our OnlineGroups.Net mailing list</a> (provided by the <a href="https://nzoss.org.nz">NZ Open Source Society</a>) and get involved in the discussion, or just browse/search the past discussion in the archives! It's the easiest way to participate, and participation is what we're after!</p>
			<p>The main project, with its software sub-components is the <a href="https://github.com/TheCacophonyProject">Cacophony Project on GitHub</a>. You are welcome to peruse the existing code base, and we encourage you to test our code - feel free to fork away! We love pull requests.</p>
			<p>We manage the day to day work on the project via our <a href="https://tree.taiga.io/project/the-cacophony-project/">Cacophony Project</a> on <a href="http://taiga.io">Taiga.io</a> (Taiga is similar to Trello, but is free to use, and fully open source, i.e. you can create your own self-hosted instances of Taiga) - you currently need a <a href="https://tree.taiga.io/register">user account</a> (available at no cost) on Taiga to join the project.</p>

			<h3>Technology stack</h3>
			<p>We have selected technologies for a number of the planned components of the Cacophony Project, and number are still in the planning stages. Technology choices will be made based on what our committed contributors believe offers the best likelihood of success and future viability. We will, of course, only use free and open source technologies to ensure that all interested contributors are able to participate without any artificial barriers.</p>
			<p>For our Cacophonometers, we are using the following technology stack:</p>
			<ul>
				<li>Android (4.0 or better) OS</li>
				<li>Android SDK and developer tools</li>
				<li>Commodity hardware</li>
			</ul>
			<p>For server components, including our sound file aggregation and distribution service, we are planning to use (subject to compelling arguments for other technologies):</p>
			<ul>
				<li>Linux Server (virtual instances) - Ubuntu 14.04 LTS</li>
				<li>Node.JS (and various related javascript plugins for creating RESTful web services)</li>
				<li>PostgreSQL</li>
				<li>Amazon S3 for sound data storage</li>
			</ul>
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
