<?php include('../includes/_config.php');
$meta_title="Allspark | SaaS Product | Omni-Channel Marketing | Consumer Insights | Data-Driven Decisions | Ambient Intelligence ";
$meta_desc="Allspark is a Mobile-first Audience Cloud that lets you visualize, engage and analyze audience data including their location, spend, behavior, demography and interest. Contact us at allspark@near.co to understand how Allspark, SaaS product by Near can help brands and enterprises to enhance consumer experiences through omni-channel marketing and analytics.";
$meta_keywords=" Allspark, SaaS product, Data Products, Audience Analytics, Consumer Insights, Consumer Research, Data Analytics, Data-Driven Marketing, Data-Driven Decisions, Omni-Channel Marketing, OOH Analytics, Cross-screen Marketing, Cross-screen Data, Location Data, CRM onboarding, Consumer Journeys, Consumer Dynamics, Offline Attribution, Attribution Analytics, ROI Measurement, Connected Data, Smart Environments, Real-World Behavior, Digital World, Location Analytics, Footfall Analytics, Media Planning, Actionable Insights, Marketing Strategy, Competitor Insights, Competitor Consumers, ROI Measurement, Attribution Lift Index, Consumer Walk-ins, OOH locations, Media Measurement";
$heading ="Allspark";
$content= "Omni-channel Consumer Experience";
$content1="Identify and reach your audience across channels";
$image=  "allspark/allspark-omni-channel.png";

?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">
</head>
<body>
<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
    <?php include('innerpage-banner.php'); ?>
	
<div class="container container--fixed top-spacer allspark-subpages" style="padding: 100px 0">
            <div class="row" style="margin: 0;">
                <div class="col col-md-3">

                    <!-- Side Menu -->
                    

 <?php include('allspark-sidebar.php'); ?>
</div>
                <div class="col col-md-9">
                <div class="col col-md-12 custom-banner row perspective" style="padding:0; margin: 0;">
                	<a href="#" onclick="SetPage('<?php echo SITE_URL; ?>allspark/pdf-form.php?link=<?php echo SITE_URL; ?>pdf/whitepaper/spacetime-marketing-whitepaper.pdf');" class="col-md-4 button" data-aos="3dflip" data-aos-delay="200">
                    <img src="<?php IMAGE('whitepaper/omni-channel-spacetime-marketing.png') ?>" alt="" class="sq-ratio">
                    <span class="tile__content">
                            <h4>Spacetime Marketing</h4>
                            <hr />
                            <p class="description">
                             Whitepaper
                            </p>
                        </span>
                            <span class="custom_btn">
                                <span class="btn__text">
                                    <span class="btn__text-inner">Download</span>
                                </span>            
                                <div class="icon">
                                    <svg class="" viewBox="0 0 18 7" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14,3.09H0" fill="#fff"></path>
                                        <polyline class="color_change" points="11.34 5.83 13.97 3.09 11.34 0.35" fill="#fff"></polyline>
                                    </svg>
                                </div>
                            </span>
                    
                	
                	</a>
                	
                </div>
                
                
                <div class="space"></div>
                <h1>Enterprises, Brands and Agencies</h1>
                <h2>can use Allspark for providing an omni-channel Consumer experience by:</h2>
                <div class="space"></div>
                <div class="row allspark-container" style="margin: 0; padding:0 ">
                
                
                <div class="col-md-6 row">
	                <div class="col-md-4">
	                	<img  src="<?php IMAGE('bb.png') ?>" style="background:url(<?php IMAGE('allspark/omni-channel-icons.png');?>); background-position: 0 100px; background-size: 100% auto; width: 103px; height: 103px;" alt  />
	                </div>
	                <div class="col-md-8 subcontent">
	                	<span class="blue">Measuring</span> which channels work best for their target audience, and optimising marketing spends.
	                </div>
                </div>
               <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img  src="<?php IMAGE('bb.png') ?>" style="background:url(<?php IMAGE('allspark/omni-channel-icons.png');?>); background-position: 0 210px; background-size: 100% auto; width: 103px; height: 103px;" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Reaching</span> their audience on the right channels, and continuing their brand story across media.
                    </div>
                </div>
                <div class="col-md-6 row" >
                    <div class="col-md-4">
                        <img src="<?php IMAGE('bb.png') ?>" style="background:url(<?php IMAGE('allspark/omni-channel-icons.png');?>); background-position: 0 305px; background-size: 100% auto; width: 103px; height: 103px;" alt  />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Mapping</span> consumer journeys in the digital and physical world, and getting insight into the right touchpoints for their target audience.
                    </div>
                </div>
                </div>
                <a href="<?php echo SITE_URL; ?>allspark/signup.php" class="button button--primary button--rounded">SETUP A DEMO</a>
               <div class="top space"></div>
                <hr />

                <?php include('inside-usecases.php'); ?>

        </div>
    </div>
</div>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
    <script>
     window.onload = function() {
  document.getElementById('occe').className = 'active';
document.getElementById('usecases').className = 'active';
};
   $(document).ready(function() {
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
        
        $('#box-one').css({
            'transform': 'translateY('+ (st/2) +'px)'
        });
    });
});
   function SetPage(url)
{document.getElementById("myframe").setAttribute("src", url);}
$('.button').click(function(){
      $('#modal').css('display','block');
      $('.modal-bg').fadeIn();
  });

    $('#close').click(function(){
        $('.modal-bg').fadeOut();   
        $('#modal').fadeOut();
      return false;
    });
    </script>
    
</body>
</html>


