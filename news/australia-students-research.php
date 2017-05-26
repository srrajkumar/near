<?php include("../includes/_config.php"); include("../includes/_lib.php"); 
$meta_title = 'Consumer Analytics | Location Insights | Australian Students | Near';
$meta_desc = "This latest research by Near help marketers understand the footfall trends and mobile behavior of Australian Students across universities. Click here for the Students Data!";
$title ='Younger students seen in universities across Melbourne & Sydney, compared to Adelaide, Perth & Brisbane';?>

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
    <meta property="og:image" content="http://www.near.co/images/news/australia-students-research.png" />
    <meta name="KEYWORDS" content="" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
    <?php include('../includes/_head.php'); ?>
	<link rel="stylesheet" href="<?php CSS('filter.css'); ?>" />
     <link rel="stylesheet" href="<?php  CSS('social-buttons.css'); ?>">
	</head>
	<body class="state1 background-100-e">
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
	
            
            <div class="view sub-banner">
        <div class="overlay-vdo2" ></div>
				<img alt class="bg" src="<?php  IMAGE('bg-news.png'); ?>" /><img alt class="bg" src="<?php IMAGE('bg-news.png'); ?>" />
				<div class="content one-third-size colors-e background-60" style="z-index:2">
					<div class="container">
						<h2><?php echo $title; ?></h2>
						<!--<p class="title">Policy</p>-->
					</div>
				</div>
			</div>
		<section>
			<div class="view">
				<div class="content  colors-e background-90-e">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">15</div>
										<div class="post-month">Oct 2015</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; Sydney</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
											<img class="fluid-width" src="<?php IMAGE('news/australia-students-research.png'); ?>" alt="Australia Students Research">
											</div>
											<h4 style="text-align:left;"><?php echo $title; ?></h4>
											
             							 <p>Location intelligence platform Near unveiled its research on students in Australia, analyzing footfall trends in selected universities across Sydney, Melbourne, Brisbane, Adelaide and Perth in Australia. </p>
											 

<p>Students in the 16-25 age group were found in majority in the universities of Melbourne, while the 26-35 age formed the majority in Adelaide. The study also revealed that the students aged 36 years and above were found in majority in Brisbane universities. The foot traffic peaked during late afternoon across universities.</p>

<p>Melbourne and Sydney were the preferred student destinations, followed by Brisbane, Adelaide and Perth. Brisbane saw a high skew towards males, while Sydney saw the highest females in universities, compared to other cities. The research also found that universities in Melbourne and Perth had number of international students compared to other cities. </p>

<p>Cameron Curtis, General Manager for Australia and New Zealand, Near said, “Our location intelligence platform enables marketers to glean insights on students’ behavior and trends seen in the universities at scale, enabling them to fine tune their marketing & business strategies”.</p>

<p>Adelaide had higher number of students visiting at least two universities compared to other cities. Most of the students across universities preferred gaming and music apps. Adelaide and Brisbane universities saw higher number of Android users while Melbourne, Perth and Sydney universities had higher iOS users.</p>

<p>The research analysed 77,000 unique users for the month of June covering universities such as University of Technology Sydney, University of Sydney, Western Sydney University, Curtin University, University of WA, Murdoch University, RMIT, The University of Melbourne, Monash University, QUT, Queensland University, Bond University, and University of Adelaide, University of SA, Flinders University in Adelaide across five major cities of Australia. </p>


 <p>The full report on the University Students can be found<a href="<?php PDF('consumer-intelligence/australia-students-research.pdf'); ?>" target="_blank"> here</a>. </p>
 
 <p>Near’s previous research on <a href="<?php PDF('consumer-intelligence/audience-breakup-across-events-in-australia.pdf'); ?>" target="_blank">Audience Preferences for events in Australia</a> analysed four major events – Australian Open, Cricket T20, F1 Grand Prix and Eminem Show was released earlier this year.</p>
 

											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/research.php">Research</a></li>
												
												</ul>
											</div>
											
											<div class="container news">
             <div class="social-share">
           		<div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;text=<?php echo $title; ?>&amp;via=Near&amp;count=true" class="share-twitter" > <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
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
  </body>
</html>
