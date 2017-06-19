<?php include('../includes/_config.php');
$meta_title = "Near Engineering";
$meta_desc = "Welcome to the Tech blog at Near.co. With our ongoing mission of building out the world’s largest location intelligence platform";
$title = "Near Engineering";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
	<meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
    <meta name="KEYWORDS" content="Data analytics, Data analysis tools, Business analysis techniques, Marketing data, Mobile advertising platforms" />
</head>
	<body>
		<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('_banner.php'); ?>
		
<div class="view" style=" background-color:#eceeef">
                <div class="container">
                    <ul class="col-md-12 breadcrumb" style="float:none; margin:0px auto;">
                        <li><a href="<?php echo SITE_URL; ?>engineering/">Engineering</a></li>
                        <li>Welcome to the Tech blog at Near.co</li>
                    </ul>
                </div>
            </div>
            
<div class="view newsroom" style="margin-top:0px;">

				<div class="content tech-page colors-e background-90-e" style="padding-top: 50px;">
					<div class="container">
									<div class="col-md-12 row" style="float:none; margin:0 auto;">
									<div class="col-md-9 row">
                                			<div style="margin-right: 50px">

<div class="tech-author"> <div style="float:right; margin-top:-4px;">
            <a href="<?php echo SITE_URL; ?>engineering/fabric-just-the-tool-for-continuous-deployment.php" class="tech-nav-prev" title="Old"></a>
            <a href="<?php echo SITE_URL; ?>engineering/location-intelligence-the-next-frontier.php" class="tech-nav-next" title="New"></a>
        </div>
        <div class="line-break-bottom"><img src="<?php IMAGE('bb.png'); ?>" alt style="width:100px; height:100px; background:url(<?php IMAGE('near-team.png'); ?>) 0 2344px/ 100% auto; border-radius:50%; float:left; margin-right: 30px;" />
									<h2 style="padding-top: 12px;"><span>by</span> Madhu Therani</h2>
                                    <p class="tech-designation">Chief Technology Officer</p></div>
<p class="date">OCTOBER 14, 2015</p>
                    <h2 style="margin-top: 0;"><?php echo $title; ?></h2>
<!--p class="tech-designation">Technical Architect</p-->

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