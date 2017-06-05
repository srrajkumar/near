<?php include('../includes/_config.php');
$meta_title = 'Location Data Accuracy | Data Sources | Location Intelligence | Attribution  ';
$meta_desc = " In 2016, understanding the implications of location data quality and the associated location intelligence is necessary for brands to make right business decisions. This blog post highlights how Near addresses the location data inaccuracy issue by also providing some tips for brands to follow.  ";
$title ='Understanding the 3 Location Data conundrums';
$meta_keywords="Mobile Marketing Blog ,potential technology, Location Data, Consumer Insights, Data Driven Targeting, Attribution Measurement, Global brands, OOH Analytics, Cross channel analytics  ";
$meta_image="blog/understanding-the-three-location-data-conundrums.jpg";
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
	<div class="preloader"></div>
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
										<div class="post-day">21</div>
										<div class="post-month">Apr 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -245px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp; <b>By Madhusudan Therani</b></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('blog/understanding-the-three-location-data-conundrums.jpg'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											<p>With the increasing adoption of mobile by most brands, utilising location data to understand and reach consumers better is essential in 2016. However, understanding the implications of location data quality and the associated location intelligence is necessary for correct business decisions.</p>

<p>First, brands must ask themselves how location signals about a consumer journey can play a role in their business strategies. Availability of location signals can guide audience building, audience behavior monitoring, provide insights about consumer activity in the physical world, and track, measure post-campaign activity in the physical world to name a few key use-cases. Furthermore, combining location signals with other data sources can guide broader business decisions.</p>


<p>However, location data players need to solve three conundrums before brands can use their data for the aforementioned use cases.:</p>
<ul class="listing">
<li>User matching</li>
<li>Location data accuracy</li>
<li>Differential level of accuracy for different brand objectives</li>
</ul>

<h2 style="text-align:left; font-size:18px;">Identifying the same user across multiple location data sources</h2>

<p>With the exponential growth in use of mobile and wearable technology and the supporting infrastructure, location data about consumers may be gathered via apps on their devices (apps get their data via GPS sensors on the device), browser streams (with geolocation resolved via IP addresses), static sensors at fixed physical locations (such as cell towers, hotspots, beacons), point-of-sale systems and data from telcos. However, synthesising a holistic, accurate and reliable profile of a consumer from all these sources of data is a complex problem for every location data player. </p>


<p>Location data players have data that is fragmented by source which cannot be linked to each other. This could be because:</p>
<ul class="listing">
    <li>Data is anonymised or obfuscated</li>
    <li>Different sources use different identifiers</li>
    <li>Data is partitioned in space and time</li>
    <li>Data from a single consumer is highly sparse, based on their activity</li>
    <li>Data is noisy: truncation errors, recording errors or missing data attributes</li>
    <li>Furthermore, the available data may be static or real-time for different sources</li>
</ul>

<p>Location data players need to have technology that resolves many of these errors and also need to guide the brands on the kind of location data relevant for their objective.</p>

<h2 style="text-align:left; font-size:18px;">Solving for Location data accuracy </h2>

<p>If a brand is focussed on understanding & reaching the relevant audience, building the right audience is important, and hence, location accuracy is very important. Different data sources offer different levels of accuracy, and usually we see an inverse relation between accuracy and reach across data sources. At Near, we have studied the trade-offs between reach and accuracy and variations by source. Summarizing the same, in our platform, we see only 15% of the incoming raw data as accurate. The remaining data needs to be refined via a variety of techniques - using cartographic data, triangulation, multiple source linkages, etc. We use the above, as well as our proprietary data collected over 6 years to improve the utility of the incoming location data by 4 times.  </p>


<p>Our team and technology monitors the location data from sources through different stages of the pipeline to detect variations and continually correct them. We believe, other location data players also have their own approaches - based on data sources, data partners and also the use-cases they focus on. </p>

<p>At Near, our technology efforts  focus on addressing accuracy and scale of location data across different source types in real-time with different types of noise reduction. Considering the number of data source providers and the continuous evolution in this space, much remains to be done to standardise the location data accuracy issue at an industry level.</p>

<h2 style="text-align:left; font-size:18px;">Differential level of location accuracy for different objectives</h2>

<p>It is important to note that each of the aforementioned use-cases can be effective at different levels of location data accuracy. Furthermore, location data accuracy requirements and effectiveness vary for use-cases based on whether the data usage is relevant at an individual level or at a segment/cohort level. </p>

<p>For example, for targeting consumers near a store in real-time, location accuracy requirements can vary depending on the store’s location and the reach requirements. Consider a store in a shopping mall, it may be better to target visitors to the mall overall (a larger  area with more relaxed accuracy requirement), rather than folks close to the store. Furthermore, with this criteria, one can enhance the reach with appropriate look alikes. </p>

<p>In contrast, for measuring attribution to the same store , we need to gather foot traffic analysis for a longer duration with a much tighter geographical area and increased accuracy requirements. For a store in an open mall area such as car dealership, the attribution accuracy requirements may be more relaxed. </p>
<h2 style="text-align:left; font-size:18px;">The bottom line:</h2>
<p>Industry consortium efforts vary by markets and use-cases. The primary focus is usually on ensuring that raw data is accurate to the best level possible and accounts for errors and context. Though well-intended, it is difficult to enforce across publishers. For other sources such as telcos and direct partnerships - no well established standards or metrics exist. At Near, we focus on assessing the quality of incoming data and ensuring that appropriate data when multiple sources are mixed is used for the applicable use cases.</p>

<p>Given this, what does it mean for a brand to find the right location partner.  This means sourcing a player who understands the data from cradle to grave and also can educate you on the appropriate quality of data to fulfil your use case.  A partner who understands the technology and also knows how to put the data to use - knows the pitfalls and variations in use-cases - is essential. In our experience, very few location data players understand the technology aspects and also have worked with the gamut of use-cases possible and understand effectiveness of location data in the real world.</p>


<p>Brands that utilise location data, need to ask the right questions with the right partners. It is imperative brands understand how to accurately use location intelligence to make effective business decisions.</p>



<p>Also published in  <a href="https://www.exchangewire.com/blog/2016/04/21/plugging-location-data-gaps-in-apac/" target="_blank">ExchangeWire</a>.</p>

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

var stickySidebar = $('.sticky');

if (stickySidebar.length > 0) { 
  var stickyHeight = stickySidebar.height(),
      sidebarTop = stickySidebar.offset().top;
}

// on scroll move the sidebar
$(window).scroll(function () {
  if (stickySidebar.length > 0) { 
    var scrollTop = $(window).scrollTop();
            
    if (sidebarTop < scrollTop) {
      stickySidebar.css('top', scrollTop - sidebarTop);

      // stop the sticky sidebar at the footer to avoid overlapping
      var sidebarBottom = stickySidebar.offset().top + stickyHeight,
          stickyStop = $('.blog').offset().top + $('.blog').height();
      if (stickyStop < sidebarBottom) {
        var stopPosition = $('.blog').height() - stickyHeight;
        stickySidebar.css('top', stopPosition);
      }
    }
    else {
      stickySidebar.css('top', '0');
    } 
  }
});

$(window).resize(function () {
  if (stickySidebar.length > 0) { 
    stickyHeight = stickySidebar.height();
  }
});



</script>
<script>
var stickySidebar1 = $('.sticky1');

if (stickySidebar1.length > 0) { 
  var stickyHeight1 = stickySidebar1.height(),
      sidebarTop1 = stickySidebar1.offset().top;
}

// on scroll move the sidebar
$(window).scroll(function () {
  if (stickySidebar1.length > 0) { 
    var scrollTop1 = $(window).scrollTop();
            
    if (sidebarTop1 < scrollTop1) {
      stickySidebar1.css('top', scrollTop1 - sidebarTop1);

      // stop the sticky sidebar at the footer to avoid overlapping
      var sidebarBottom1 = stickySidebar1.offset().top + stickyHeight1,
          stickyStop1 = $('.post').offset().top + $('.post').height();
      if (stickyStop1 < sidebarBottom1) {
        var stopPosition1 = $('.post').height() - stickyHeight1;
        stickySidebar1.css('top', stopPosition1);
      }
    }
    else {
      stickySidebar1.css('top', '0');
    } 
  }
});

$(window).resize(function () {
  if (stickySidebar1.length > 0) { 
    stickyHeight1 = stickySidebar1.height();
  }
});
</script>
     </body>
</html>