<?php include("../includes/_config.php"); include("../includes/_lib.php"); 
$meta_title = "Near Engineering";
$meta_desc = "Welcome to the Tech blog at Near.co. With our ongoing mission of building out the world’s largest location intelligence platform";
$title = "Near Engineering";
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
	<link rel="stylesheet" href='<?php CSS('filter.css'); ?>' />
    <link rel="stylesheet" href='<?php CSS('social-buttons.css'); ?>'>	
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
						<p class="date">OCTOBER 14, 2015</p>
                    <h1 class="col-md-6" style="float:none; margin:0 auto"><?php echo $title; ?></h1>
						<!--<p class="title">Policy</p>-->
					</div>
				</div>
			</div>
			<div class="view" style=" background-color:#f2f2f2">
                <div class="container">
                    <ul class="col-md-10 breadcrumb" style="float:none; margin:10px auto;">
                        <li><a href="<?php echo SITE_URL; ?>engineering/">Engineering</a></li>
                        <li>Welcome to the Tech blog at Near.co</li>
                    </ul>
                </div>
            </div>
            
			<div class="view">
				<div class="content tech-page colors-e background-90-e" style="padding-top: 50px;">
					<div class="container">
									<div class="col-md-10" style="float:none; margin:0 auto;">
                                    	<div class="col-md-8">
                                        <div class="tech-author">
                                        <div style="float:right; margin-top:32px;">
                                        	<a href="" class="tech-nav-prev end"></a>
                                        	<a href="<?php echo SITE_URL; ?>engineering/fabric-just-the-tool-for-continuous-deployment.php" class="tech-nav-next" title="New"></a>
                                        </div>
									<img src="<?php IMAGE('bb.png'); ?>" alt style="width:100px; height:100px; background:url(<?php IMAGE('near-team.png'); ?>) 0 2344px/ 100% auto; border-radius:50%; float:left; margin-right: 10px;" />
									<h2 style="padding-top: 40px;"><span>by</span> Madhu Therani</h2>
                                    <p class="tech-designation">Chief Technology Officer</p>
                                    </div>
										<div class="post-body background-75-e">
                                        <p class="tech-note">Welcome to the Tech blog at Near.co. With our ongoing mission of building out the world’s largest location intelligence platform, the tech team at Near is working on a number of bleeding-edge technologies in distributed systems, large-scale data processing pipelines, data storage, and data sciences. The close-knit, world-class team works on a number of interesting areas building in-house tech and adapting open-source systems. Key areas and associated topics of interest for us include:</p>
											<h4>Distributed Systems </h4>
                                            <ul>
                                            <li>Maintaining and updating state across our sharded environment as we receive concurrent events at scale (Cloud infrastructures)</li>
                                            <li>Reacting to state changes and key events at different time scales</li>
                                            <li>Storing state, Restoring state, Replaying event histories at scale (MongoDB, Cassandra, Redis)</li>
                                            <li>Searching across our heterogeneous data repositories (ElasticSearch, Mongo)</li>
                                            <li>Integrations with other external systems in real-time, batch and micro-batch modes - capturing and filtering events of relevance</li>
                                            </ul>
                                            <h4>Data Engineering</h4>
                                            <ul>
                                            <li>Processing tera-scale events in our Hadoop, Storm and Apache Spark pipelines</li>
                                            <li>Managing both realtime event processing and batch-mode data in a unified framework as our data pipelines process different kinds of data - across verticals</li>
                                            <li>Distributed coordination across our compute and storage clusters via scalable messaging (Kafka, ZeroMQ)</li>
                                            <li>Real-time unstructured data pipelines - NLP, ML and Geo data processing</li>
                                            </ul>

                                            <h4>Data Sciences</h4>
                                            <ul>
                                            <li>Data integration across different formats, schemas, sources to support our platform APIs - places, people, products and other entities </li>
                                            <li>Analytics across our data infrastructure - (Hive, Pig, SparkSQL and more)</li>
                                            <li>Model development - inferring people attributes, place attributes and more</li>
                                            <li>Handling Geo-centric data in all its guises</li>
                                            </ul>
                                            
                                            
                                            <h4>Mobile Apps & Systems</h4>
                                            <ul>
                                            <li>Building Apps and SDKs that use “mobile devices” as sensors (Android, IOS)</li>
                                            <li>Integrating different wearables and other IOT components</li>
                                            </ul>
                                            
                                            
                                            <h4>Product Development & Deployment</h4>
                                            <p>The data harnessed by the Near platform is utilized in a variety of products and applications. Tasks in product development include:</p>
                                            <ul>
                                            <li>Analytics visualizations</li>
                                            <li>UI design and development</li>
                                            <li>Scaling devops across our platform and products </li>
                                            <li>Realworld product testing and management</li>
                                            </ul>
                                            
						<p class="italic-style">We are excited by the potential of our platform and the kinds of applications we can power in the future, especially as a techie. If you are interested  in working with us, please follow our tech blog and also look up our careers page or reach out to us at tech@near.co.</p>


                                            
                                            

			<div class="container col-lg-12">
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
		<script src="<?php JS('social-buttons.js'); ?>" type="text/javascript"></script>   
		<script src="https://use.typekit.net/vel7wke.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
  </body>
</html>