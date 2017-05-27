<?php include("../includes/_config.php"); include("../includes/_lib.php"); 
$meta_title = "Location Intelligence | Mobile Data | Location Data Sources | Near Tech Blog";
$meta_desc = "This blog post by Near brings to light on the evolution of location-centric data platforms, about location intelligence, the challenges faced and much more. If you are interested in joining hands to help us build, reach us at careers@near.co.";
$title = "Location Intelligence: The Next Frontier";
?>
<!DOCTYPE html>
<html class="background-100-e">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $meta_title; ?></title>
    <meta name="title" content="<?php echo $meta_title; ?>" />
    <meta name="description" content="<?php echo $meta_desc; ?>" /> 
	<meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
    <meta name="KEYWORDS" content="Data analytics, Data analysis tools, Business analysis techniques, Marketing data, Mobile advertising platforms" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
    <meta property="og:image" content="" />
	<?php include('../includes/_head.php'); ?>
   <link rel="stylesheet" href="<?php CSS('filter.css'); ?>" />
    <link rel="stylesheet" href="<?php CSS('social-buttons.css'); ?>">	
   	<link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/a611d488-9568-4032-baf2-d8b5d04fab15.css"/>
    <style>
	#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#fff;}
	.state2 #top-nav li, .state2 #top-nav li > a, .state2 #top-nav .navbar-brand, .state2 #top-nav .navbar-header, .state2 #top-nav .dropdown-menu > li > a{color:#000;}
	.near-logo{fill:#fff !important;}
	.state2 .near-logo{fill:#5C5C5C !important;}
	.full-size{padding-bottom:0px !important;}
	.view > .content { padding-top: 150px; padding-bottom: 60px; }
	.view{top: -48px; margin-bottom:0;}
	@media (min-width:320px) and (max-width:767px){#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#000 !important;} .full-size{padding-top:60px !important;} img.bann{width:100%;}}
	@media (min-width:320px) and (max-width:991px){#menu li a, .state1 #top-nav li, .state1 #top-nav li > a, .state1 #top-nav .navbar-brand, .state1 #top-nav .navbar-header, .state1 #top-nav .dropdown-menu > li > a {color:#fff;}}
</style>
	
	</head>
	<body class="state1 background-100-e">
		
		<!--div class="page-border bottom colors-e background-solid"><a href="#top" class=" one-third-size">To <span class="highlight">Top</span></a></div-->
		<!-- BEGIN: Top menu -->
		<?php include('../includes/_header.php'); ?>
		<!-- END: Top menu -->
        <div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
			<div class="overlay-control background-85-d">
				<a class="previos" href="#"></a>
				<a class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view"></div>
			<ul class="loader">
				<!--li class="background-100-d"></li>
				<li class="background-100-d"></li>
				<li class="background-100-d"></li-->
			</ul>
		</div>
		<div class="overlay-window map-overlay colors-f background-95-f">
			<div class="overlay-control background-90-f">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				<div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
					<div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
					<div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
				</div>
			</div>
		</div>
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-highlight-e"></div>
			<ul class="loader">
				<!--li class="background-100-g"></li>
				<li class="background-90-c"></li>
				<li class="background-100-f"></li-->
			</ul>
		</div>
		<!-- BEGIN: Page content -->
		<!--<div class="youtube-bg" data-video="2zLQI4Dfi_w" data-mute="yes" data-volume="50" data-alternative="images/placeholders/1920x1200-0.jpg"></div>-->
	
			<div class="view sub-banner">
				<img alt class="bg" src="<?php IMAGE('tech-blog.png'); ?>" /><img alt class="bg" src="<?php IMAGE('tech-blog.png'); ?>" />

				<div class="content background-60" style="z-index:2">
					<div class="container tech-blog-content">
						<p class="date">May 02, 2016</p>
                    <h1 class="col-md-7" style="float:none; margin:0 auto">Location Intelligence: <br>The Next Frontier</h1>
						<!--<p class="title">Policy</p>-->
					</div>
				</div>
			</div>
			 <div class="view" style=" background-color:#f2f2f2">
                <div class="container">
                    <ul class="col-md-10 breadcrumb" style="float:none; margin:10px auto;">
                        <li><a href="<?php echo SITE_URL;?>engineering/">Engineering</a></li>
                        <li><?php echo $title; ?></li>
                    </ul>
                </div>
            </div>
			<div class="view">
				<div class="content tech-page colors-e background-90-e" style="padding-top: 50px;">
					<div class="container">
									
									<div class="col-md-10" style="float:none; margin:0 auto;">
                                    	<div class="col-md-8">

                                    <div class="tech-author">
                                    <div style="float:right; margin-top:-4px;">
                                                <a href="<?php echo SITE_URL;?>engineering/apple-blocking-ads-what-does-it-mean-for-advertisers.php" class="tech-nav-prev" title="Old"></a>
                                                <a href="" class="tech-nav-next end"></a>
                                              
                                           </div>
									<img src="<?php IMAGE('bb.png'); ?>" alt style="width:100px; height:100px; background:url(<?php IMAGE('near-team.png'); ?>) 0 2344px/ 100% auto; border-radius:50%; float:left; margin-right: 10px;" />
									<h2 style="padding-top: 40px;"><span>by</span> Madhu Therani</h2>
                                    <p class="tech-designation">Chief Technology Officer</p>
                                    </div>
										<div class="post-body background-75-e">
                                        <p class="tech-note">Location Intelligence Platforms are the next tech frontier (on the same scale as search or e-
commerce) as mobile, wearable and Internet-of-things (IOT) technology have been prototyped, experimented with and deployed in real-world scenarios. These platforms will help to answer the following - What? When? Where? Who? - with respect to events in the real world.</p>
										<p>As a first step, it is important to understand the evolution of these location-centric data platforms. The earliest location intelligence platform - is/was - a “map”, an atlas which over the past two decades has evolved into digital maps for navigation - in custom hand-held devices and now, mobile apps along with the wide-spread adoption of GPS in mobile handhelds. The other major location intelligence data source is/was - satellite data - mainly used for remote sensing, land use analysis and mapping weather on a global scale. Maps provided a static view of the physical world at different levels of resolution, whereas satellites provided a slowly changing view of the world at a large scale - changes in weather, vegetation, topography etc. However, the whole field has had a new impetus with the availability and usage of GPS embedded mobile devices - in phones (used by people) and on transportation systems (auto systems, trucks, planes, ships etc) at a global scale.</p>
                                        <p>Given these individual real-time sources of location data, and possibly additional information available at a location via static sensors (even marine buoys stream weather information!), it is possible to monitor and track what is happening, what has happened and possibly predict what may happen at every location globally, along all dimensions - latitude, longitude and altitude/depth (both above/below ground). If it is possible to harness these disparate information sources, one can envision that it is possible to know - what a single individual or groups of individuals do on a regular basis in a city versus a village, what happens at Times Square in New York or Piccadilly Circus in London every hour of every day or what is bought on Bond Street versus your local market.  </p>
                                        <p>Location Intelligence is the gamut of models, algorithms, techniques and tools that assimilates all the relevant data sources, processes the data and provides requisite answers to such aforementioned questions. Location Intelligence Platforms abstract the above technologies and provide it as data-as-a-service.</p>
                                        <p>A Location Intelligence Platform is powered by both static and dynamic sources of data. Static sources are primarily digital map databases - cartographic, topographic and satellite data.  Additional static sources such as real estate databases and public land use databases are also coming online. Dynamic sources include IOT data feeds, social data feeds, mobile app data feeds and telco data feeds amongst others. Both types of sources include data in structured and unstructured data formats - images, videos and text. However, core technological issues may include:</p>
                                        
                                        <ul>
                                            <li>Harnessing the aforementioned sources and de-noise them to improve the base data quality</li>
                                            <li>Linking them to spatial and temporal reference frames at different levels of resolution</li>
                                            <li>Adding context to the raw data from different entities - people, vehicles, products, weather, pollution etc - and enable semantic reasoning at higher levels of abstraction</li>
                                            <li>Build “models” to reason with both high-level and low-level data - infer phenomena such as modes of transport or folks visiting a particular retail location only on weekends</li>
                                            <li>Store and persist this data to make it amenable for querying about the past, the now and possibly the future to infer micro, macro, individual and group trends, and </li>
                                            <li>Finally, handle the scale of the incoming data in a reasonable, cost-effective manner </li>
                                        </ul>
                                        <p>Each of these technological needs is pushing the technology envelope in different areas: </p>
                                 

										<ul>
                                        	<li>Spatio-temporal modeling, databases and warehouses</li>
                                            <li>Handling raw data and processing these event streams at scale</li>
                                            <li>Monitoring and detecting trends - pushing the frontiers of statistical modeling, artificial intelligence and machine learning</li>
                                            <li>Algorithms to process streaming data to characterize the underlying phenomena</li>
                                            <li>Mobility modeling of entities and other locational phenomena.</li>
                                        
                                        </ul>

										<p>Building a useful location intelligence platform requires a highly inter-disciplinary approach and there are any number of interesting problems to work on - both from a systems and modeling perspective. Though there are a number of academic research efforts, the explosion of commercial applications based on location has suddenly made this area a mainstream activity.</p>
                                        <p>Many recent technological  innovations could benefit from the next generation of Location Intelligence Platforms including applications such as - Uber-like resource utilization systems for transportation, logistics and other services, large-scale crowd-sourcing for traffic and event management, news gathering, urban planning, drone-based applications, automated delivery systems,  supply chain management, consumer applications for services and goods - including travel, hyper-local services, advertising and many other applications yet-to-be envisioned.</p>
                                       <p>At Near, we are deeply invested in building out this vision. With our roots in the evolution of location data space, we understand the complexities and hurdles in realizing this vision. However, from a tech perspective, the field is rich with numerous problems to solve and make an impact. We are pursuing advanced research and development efforts in many of the above-mentioned topics.</p>
                                       <p>Considering that our lives are played out and embedded in the physical world, the development of the next generation of Location Intelligence Platforms to understand the same is a worthwhile technological endeavour. Revisit this blog often as we keep you posted on our progress and if you are interested in joining hands in this effort, reach out to us.</p>
<p>Also published in <a href="https://www.iabaustralia.com.au/big-tent-blog/entry/location-intelligence-the-next-frontier" target="_blank">IAB Australia.</a></p>

			<div class="container col-lg-12"  style="padding:0;">
             <div class="social-share" style="padding-bottom:14px;">
           		 <div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;text=<?php echo $title; ?>&amp;via=Near&amp;count=true" class="share-twitter" data-dnt="true" data-counturl="<?php my_url(); ?>"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
      <span class="share-count">0</span>
    </a>

</div>
            
            </div>
             <div class="fb-comments" data-href="<?php my_url(); ?>" data-width="100%" data-numposts="5"></div>
           
            </div>
										</div>
										</div>
                                        <?php include('../includes/_tech-filter.php'); ?>
									</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: Page content -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
	<?php include('../includes/_java_scripts.php'); ?>
	
		<script src="<?php JS('social-buttons.js'); ?>" type="text/javascript"></script>   
      	<script src="<?php JS('script-bundle.js'); ?>"></script>  
		<script src="https://use.typekit.net/vel7wke.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
        	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1409295566038536";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		(function() {
			var pre = document.getElementsByTagName('pre'),
				pl = pre.length;
			for (var i = 0; i < pl; i++) {
				pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML + '<span class="cl"></span>';
				var num = pre[i].innerHTML.split(/\n/).length;
				for (var j = 0; j < num; j++) {
					var line_num = pre[i].getElementsByTagName('span')[0];
					line_num.innerHTML += '<span>' + (j + 1) + '</span>';
				}
			}
		})();
		</script>
  </body>
</html>