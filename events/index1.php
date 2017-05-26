<?php include("../includes/_config.php"); include("../includes/_lib.php"); ?>

<!DOCTYPE html>
<html lang="en" class="background-100-e">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Events - Near Website</title>
<!--META TAG-->
<meta name="title" content="Events - Near Website" />
    <meta name="description" content="Here is the list of global events that Near Team would be present at! Meet us to know how location data work for your brand." />
    <meta name="KEYWORDS" content="" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
	<?php include('../includes/_head.php'); ?>
    <link href="<?php CSS ('css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php CSS ('research/styles.css'); ?>" rel="stylesheet" type="text/css">
<style>
	body{ padding-top: 40px;}
 .scroll-in-animation{opacity:1 !important;}
	@media (min-width:320px) and (max-width:767px){ .full-size{padding-top:60px !important;} img.bann{width:100%;}}
	@media screen and (max-width: 991px){a.navbar-brand {padding-left: 15px !important;}}
	.mix {display: none;}
.custom-image-bg span {color: #000; font-size:16px; font-family:'GothamRounded-Book', sans-serif; margin-bottom: 0px; background:transparent; border:none; cursor:pointer; line-height: 22px;}
.custom-image-bg span:focus{outline:none;}
.filter-button{font-size:16px;  text-align:center; position:relative; bottom:48px;}
.custom-image-bg span.active{ font-family: 'GothamRounded-Bold', sans-serif;}
.line-bottom{ border-bottom:1px solid rgba(0,0,0,0.1); border-top: none !important;}
#header{background:transparent !important; box-shadow:none !important; border-bottom:none !important;}
.overlay-window.map-overlay.colors-f.background-95-f.show{background-color: rgba(247, 247, 247, 0.8) !important;}
.overlay-control.background-90-f { background-color:transparent !important;}
.colors-f .cross:after, .colors-f .cross:before {background-color: #0c0c0c;}
#filter-menu li { display: inline-block; padding:5px; }
#magic-line { position: absolute; bottom: 6px; left: 0; width: 100px; height: 2px; background: #000; padding:0px !important; -webkit-transition: all 0.3s ease-out; -moz-transition: all 0.3s ease-out; transition: all 0.3s ease-out; }
.custom-title{    line-height: 120px;}
</style>

</head>    

<body class="state1 background-100-e">
    <div id="wrapper" class="regular-layout">
        <?php include('../includes/_header.php'); ?>
        <div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
			<div class="overlay-control background-85-d">
				<a class="previos" href="#"></a>
				<a class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view"></div>
			<ul class="loader">
				
			</ul>
		</div>
		<div class="overlay-window map-overlay colors-f background-95-f">
			<div class="overlay-control background-90-f">
				<a class="cross" href="#"></a>
			</div>
				<iframe src="#" id="myframe" scrolling="no" style="overflow:hidden;" height="100%" width="100%"></iframe>
		</div>
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-highlight-e"></div>
			<ul class="loader">
				
			</ul>
		</div>
        <section id="contents" class="custom-image-bg" style="background-image:url(<?php IMAGE('events/events-banner.png'); ?>)">
        	<h1 class="title custom-title scroll-in-animation fadeIn animated css-animation-show">Upcoming Events</h1>
            <hr class="line-bottom">
            <div class="container">
            <div id="filter-menu" class="filter-button">
            <ul style="list-style:none; cursor:pointer; padding-left:0px;">
               <li class="current"> <span class="filter" data-filter="all">All</span></li>&nbsp;.&nbsp;
              <li><span class="filter" data-filter=".apac"> APAC</span></li>&nbsp;.&nbsp;
                <li><span class="filter" data-filter=".europe"> Europe</span></li>&nbsp;.&nbsp;
                <li><span class="filter" data-filter=".japan"> Japan</span></li>
             </ul>   
    		</div>
    
            	<div  class="event-wrapper" style="overflow:hidden;">

                 
                    
                      
                    
						                                 
             <div class="mix apac europe japan event-month-set ">June</div>
                     
                      <div class="mix japan event-container map-open" data-map-overlay=".map-overlay" onclick="SetPage('<?php echo SITE_URL; ?>events/form.php?link=CMO Summit')">
                    <div class="image-box"><a class="link-event" href="http://www.cmojapansummit.com/" target="_blank"><p><img src="<?php IMAGE('events/cmo-japan.png'); ?>" width="80" height="80" alt=""/></p></a></div>
                        <div class="event-holder">
                            <span class="event-date">14 JUN - 15 JUN 2017 • Tokyo </span>
                            <span class="event-name">CMO Summit </span>
                            <a class="event-link" href="#">Meet us here</a>
                        </div>
                    </div>  
                       
                	<div class="mix europe event-container map-open" data-map-overlay=".map-overlay" onclick="SetPage('<?php echo SITE_URL; ?>events/form.php?link=Cannes Lions')">
                    <div class="image-box"><a class="link-event" href="https://www.canneslions.com/" target="_blank"><p><img src="<?php IMAGE('events/cannes-lions.png'); ?>" width="80" height="80" alt=""/></p></a></div>
                        <div class="event-holder">
                            <span class="event-date">17 JUN - 24 JUN 2017 • Cannes, France </span>
                            <span class="event-name">Cannes Lions</span>
                            <a class="event-link" href="#">Meet us here</a>
                        </div>
                    </div>  
                      
                	<div class="mix apac event-container map-open" data-map-overlay=".map-overlay" onclick="SetPage('<?php echo SITE_URL; ?>events/form.php?link=MRMW Asia-Pacific 2017')">
                    <div class="image-box"><a class="link-event" href="http://apac.mrmw.net/" target="_blank"><p><img src="<?php IMAGE('events/mrmw-apac.png'); ?>" width="80" height="80" alt=""/></p></a></div>
                        <div class="event-holder">
                            <span class="event-date">28 JUN - 29 JUN 2017 • Singapore </span>
                            <span class="event-name">MRMW Asia-Pacific 2017</span>
                            <a class="event-link" href="#">Meet us here</a>
                        </div>
                    </div>  
                      <div class="mix apac  event-month-set ">August</div>
                     
                      <div class="mix apac event-container map-open" data-map-overlay=".map-overlay" onclick="SetPage('<?php echo SITE_URL; ?>events/form.php?link=CMO Summit')">
                    <div class="image-box"><a class="link-event" href="http://www.cmoanzsummit.com/" target="_blank"><p><img src="<?php IMAGE('events/cmo-summit.png'); ?>" width="80" height="80" alt=""/></p></a></div>
                        <div class="event-holder">
                            <span class="event-date">14 AUG - 16 AUG 2017 • Royal Pines Resort, Australia </span>
                            <span class="event-name">CMO Summit </span>
                            <a class="event-link" href="#">Meet us here</a>
                        </div>
                    </div>  
                           
                                         
            </div>
            </div>
        </section>
        
        
    </div>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   	 <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		
      
      <!-- END: Footer -->
       </body>
		<?php include('../includes/_java_scripts.php'); ?>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <script src="<?php JS ('research-js/vendors/vendors.js'); ?>"></script><script src="<?php JS ('research-js/custom.js'); ?>"></script>
       <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

      <script type="text/javascript">
	$(function() {

  $(".container").mixItUp();

  var inputText;
  var $matching = $();

  // Delay function
  var delay = (function(){
    var timer = 0;
    return function(callback, ms){
      clearTimeout (timer);
      timer = setTimeout(callback, ms);
    };
  })();

  $("#input").keyup(function(){
    // Delay function invoked to make sure user stopped typing
    delay(function(){
      inputText = $("#input").val().toLowerCase();
      
      // Check to see if input field is empty
      if ((inputText.length) > 0) {            
        $( '.mix').each(function() {
          $this = $("this");
          
           // add item to be filtered out if input text matches items inside the title   
           if($(this).children('.title').text().toLowerCase().match(inputText)) {
            $matching = $matching.add(this);
          }
          else {
            // removes any previously matched item
            $matching = $matching.not(this);
          }
        });
        $(".container").mixItUp('filter', $matching);
      }

      else {
        // resets the filter to show all item if input is empty
        $(".container").mixItUp('filter', 'all');
      }
    }, 200 );
  });
})
function SetPage(url)
{document.getElementById("myframe").setAttribute("src", url);}

$(function() {

    var $el, leftPos, newWidth,
        $mainNav = $("#filter-menu");
    
    $mainNav.append("<li id='magic-line'></li>");
    var $magicLine = $("#magic-line");
    
    $magicLine
        .width($(".current").width())
        .css("left", $(".current span").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
        
    $("#filter-menu li span").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    }, function() {
        $magicLine.stop().animate({
            left:  $magicLine.css("left", $(".current span").position().left),
            width: $magicLine .width($(".current").width())
        });    
    });
});
window.addEventListener("orientationchange", function() {
	var $magicLine = $("#magic-line");
    $magicLine
        .width($(".current").width())
        .css("left", $(".current span").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
});


$(document).ready(function () {
    $('#filter-menu li span').click(function(e) {

        $('#filter-menu li').removeClass('current');

        var $parent = $(this).parent();
        if (!$parent.hasClass('current')) {
            $parent.addClass('current');
        }
        e.preventDefault();
    });
});

$(".map-open a.link-event").click(function(e) {
   //do something
   e.stopPropagation();
})

	</script>
  
</html>