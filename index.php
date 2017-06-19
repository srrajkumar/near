<?php include('includes/_config.php');
$meta_title="Near – The Most Powerful Ambient Intelligence Platform";
$meta_desc="Near is an Ambient Intelligence Platform providing real-time information on places, people and products. The Near platform processes massive data from smart environments to understand consumer behaviour at a global scale. Contact us to know more.";
$meta_keywords="Ambient intelligence, Location intelligence, Data products, Data analytics, Consumer insights, Location-based targeting, Offline attribution, Attribution measurement, ROI measurement, Brands and Enterprise, SAAS product, Retail Analytics, Telco insights, Data convergence, Consumer dynamics, Data driven marketing, Cross-screen data, Spend data, CRM Onboarding, OOH Analytics, Omni-channel Marketing, Smart Environments";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('includes/_head.php'); ?>
  <style>
  #message{font-weight:400; margin-top:30px;}
  </style>
 </head>
<body>
<div class="main_container">
<div class="preloader">
  <?php include('includes/preloader.php'); ?>
</div>
	<?php include('includes/_navigation.php'); ?>
	<?php include('home.php'); ?>
	<?php include('includes/_footer.php'); ?>
  </div>
	<?php include('includes/_java_scripts.php'); ?>
	<script>
    function blink(){
        $('.map-dots').eq(Math.round(Math.random() * 100) + 1)
        .fadeOut(1000)
        .fadeIn(1000);
        setTimeout(blink,5);
    }
    function blink2(){
        $('.map-dots').eq(Math.round(Math.random() * 255) + 1)
        .fadeOut(500)
        .fadeIn(500);
        setTimeout(blink,7);
    }
    function blink3(){
        $('.map-dots').eq(Math.round(Math.random() * 200) + 1)
        .fadeOut(300)
        .fadeIn(300);
        setTimeout(blink,10);
    }
      blink();
      blink2();
      blink3();
      function validate()
    {
  var email = $('#state').val();

$.ajax({
url: "https://docs.google.com/a/near.co/forms/d/e/1FAIpQLScrZGEWyiWprePwNepN_l8_Xw-vTtD7oiYWYII3POJpX4S41g/formResponse",
data: { 
"entry_1045781291": email

  },
    type: "POST",
    dataType: "xml",
   statusCode: {
    
                        0: function() {
                           $('.news-form').hide();
                     $('#message').append('Thank you for subscribing to the Near newsletter.').show();
                    
                        },
                         200: function() {
                            //Success Message
                        }
    },
  timeout: 3000 
  });
}
     $(document).ready(function(){
                $('#form').submit(function() {
                    validate();
                    return false;
                });
            });
</script>

</body>

</html>