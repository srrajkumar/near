<?php include("../includes/_config.php");  
$meta_title = 'Mobile Data | Audience Profiling | Ambient Intelligence Platform | Location Intelligence | 1 Billion+ Devices | Anil Mathews | Near';
$meta_desc = "In this latest blog, Anil Mathews, Founder and CEO talks about the Near platform, location data accuracy, audience profiling, scale at Near engineering and much more.";
$title ='Over 1 billion devices, and counting';
$meta_keywords="Data platform, SAAS data products, smart data, audience profiling, audience insights, location accuracy, wearables data, IoT data, location analytics, Consumer footprints, attribution analytics, ROI measurement, Engineering";
$meta_image="blog/over-1-billion-devices-and-counting.png";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
	<link rel="stylesheet" href="<?php CSS_path('page/jquery.snippet.min.css'); ?>" >
</head>

   <body>
	<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('blog-banner.php'); ?>
		<!-- BEGIN: Page content -->
		<div class="view newsroom" style="margin-top: 100px;">
				<div class="content  colors-e background-90-e blog" id="main-content">
					<div class="container">
						<div class="row"><?php include('../includes/_blog-filter.php'); ?>
							<div class="col-md-9 col-md-pull-9">
								<div class="row post">
									<div class="col-md-3 post-meta sticky1">
									<div class="post-date">
										<div class="post-day">26</div>
										<div class="post-month">Oct 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 0px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Anil Mathews</b></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('blog/over-1-billion-devices-and-counting.png'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											<p>It gives me immense pleasure to announce that we are profiling over a billion devices globally at Near today. It has been a milestone we always wanted to achieve, and this comes at a juncture when our platform has become truly global.
</p>

<p>When we launched the platform in 2012, we started with Singapore to expand our footprint. Today, we have our product footprint in over 30 countries. Despite our rapid expansion, data accuracy has been a very serious affair at Near, and we have always kept an eye on the quality of data ingested into the platform.

</p>


<p>The Near platform fuses multiple data streams such as mobile data stream, GSM data, and Wi-Fi data streams with third-party data to power our Places, People, and Product APIs. We have partnered with the best in the industry to build depth in our offering, and crossing the 1 billion device mark is a major landmark. </p>


<p>Maintaining an active profile base of a billion devices requires a stable infrastructure and systems that process both streaming and batch data in a reliable manner. We have invested in systems to cleanse, deduplicate, aggregate and refine the incoming data to maintain freshness and relevance of profiles. Furthermore, our systems have had to cope with the ongoing evolution of different players in the eco-system - including  data formats, device makers, operating systems, data providers, exchanges and more.</p>
<p>As we continue to grow, we plan to invest further in utilizing the profile repository to enhance our understanding of consumer dynamics by partnering with data providers who provide unique views of our data, and support emerging use-cases in a privacy compliant manner.  Advanced data science models will add more capabilities to our Places, People and Product APIs.</p>



<p>Managing this growing device base effectively speaks of the outstanding engineering talent we have at Near, and we are very excited about some of the features the Near platform shall be able to offer in the next couple of weeks.</p>




<div class="container news">
             <div class="social-share">
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
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1409295566038536";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
             <script>
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});


</script>
     </body>
</html>