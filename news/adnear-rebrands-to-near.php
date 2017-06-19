<?php include('../includes/_config.php');
$meta_title = 'AdNear Rebrands to Near | Mobile Advertising News | Near';
$meta_desc = "Near is proud to present the news articles related to us or the mobile advertising industry. Here you will read about how AdNear has rebranded to Near.";
$title ='AdNear rebrands to Near';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

	<meta property="og:url" content="http://www.near.co/news/adnear-rebrands-to-near.php" />
	<meta property="og:image" content="http://www.near.co/images/news/AdNear-drops-the-ad.png" />
</head>
	<body>
	<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('news_banner.php'); ?>

            <!-- BEGIN: Page content -->
			<div class="view newsroom" style="margin-top: 100px;">
				<div class="content  colors-e background-90-e">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">03</div>
										<div class="post-month">Aug 2015</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; India</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('news/AdNear-drops-the-ad.png'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											 <p>AdNear, the Singapore-headquartered location intelligence platform, today announced that they are rebranding to ‘Near’. Dropping the word ‘Ad’ emphasizes the platform’s increased focus on using location data for much beyond targeted mobile advertising.</p>
                
                <p> Launched just over two years ago, the company initially started out offering brands the ability to tap into intelligent mobile advertising. However, they have outgrown their name to provide customers with the ability to create custom audiences, derive powerful real-time consumer insights and measure offline attribution – an empowering data solution that far exceeds pure advertising.</p>
				<p>
				“We are no longer a company just focusing on using location data for mobile advertising. Since launching in 2012, we been doing a lot more with our data” said Anil Mathews, Founder & CEO, Near. “This is a big step for us, but it is also a natural progression as things have changed tremendously over time. Location data has always been at the core of everything we do, our products and our brand identity. And now, our new name truly reflects that.”
				</p>
				<p>
				With the new name in place, Near aims to focus on helping marketers across industries take sharp decisions and provide them with innovative data solutions. The company recently launched in Europe with their UK office and announced leadership hires across geographies.</p>
				
				<h4>About Near</h4>

<p>	<a href="http://www.near.co" target="_blank">Near</a> is the largest location intelligence platform providing real-time information on places, people and products. The Near platform powers its flagship product to leverage historical location and context for data driven marketing. </p>

<p>Founded in 2012, Near is headquartered in Singapore with a presence across Australia, South East Asia, Japan, India and Europe. To date, the company has more than 700 million profiled audiences and have put it to work for  marquee brands such as P&G, Coca Cola, Ikea, Audi, McDonald’s, Toyota, Nike and Samsung. </p>
<p>Near is backed by investments from leading venture capitalists Sequoia Capital, JPM Private Equity Group, Telstra Ventures and Global Brain Japan.</p>

				<p> Also mentioned in <a href="https://www.techinasia.com/when-is-it-time-to-rename-your-startup/" target="_blank"> Tech in Asia </a>,<a href="http://www.bandt.com.au/marketing/adnear-rebrands-to-become-near-as-company-moves-beyond-just-mobile" target="_blank"> B&T </a>, <a href="http://www.adnews.com.au/news/news-bulletin-adnear-rebrands-and-axes-ad-strong-july-for-ooh" target="_blank"> AdNews </a></p>
               
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/campaignasia.php">Campaign Asia</a></li>
                                                    <li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/techinasia.php">Tech in Asia</a></li>
                                                    <li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/b&t.php">B&T </a></li>
                                                    <li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/adnews.php">AdNews</a></li>
												</ul>
											</div>
											
											<div class="container news">
             <div class="social-share">
           		  <div class="social-sharing is-clean" data-permalink="http://near.co/news/adnear-rebrands-to-near.html">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;via=Near&amp;text=<?php echo $title; ?>&amp;count=true" class="share-twitter"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
      <span class="share-count">0</span>
    </a>

</div>
            
            </div>
             
           
            </div>
										</div>
									</div>
								</div>
							</div>
							<?php include('../includes/_news-filter.php'); ?>
						</div>
					</div>
				</div>
			</div>
		<!-- END: Page content -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
		<?php include('../includes/_java_scripts.php'); ?>
  </body>
</html>
