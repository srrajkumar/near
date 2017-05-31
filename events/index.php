<?php include('../includes/_config.php');
$meta_title="Events | Near |  Ambient Intelligence Platform";
$meta_desc="Here is the list of global events that Near Team would be present at! Meet us to know how our SaaS audience product, Allspark work for your strategy.";
$meta_keywords="Near Events, Connected Data, Connected Environments, SaaS products, Near Leadership, Data products, DaaS API, Allspark, Carbon, Data Partnerships, Data-driven decisions, Omni-channel Marketing, Cross-device Data, Cross-screen Marketing";
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
<style>
  body{ padding-top: 40px;}
 .scroll-in-animation{opacity:1 !important;}
  @media (min-width:320px) and (max-width:767px){ .full-size{padding-top:60px !important;} img.bann{width:100%;}}
  @media screen and (max-width: 991px){a.navbar-brand {padding-left: 15px !important;}}
  .mix {display: none;}
.custom-image-bg span {color: #000; font-size:16px; margin-bottom: 0px; background:transparent; border:none; cursor:pointer; line-height: 22px;}
.custom-image-bg span:focus{outline:none;}
.filter-button{font-size:16px;  text-align:center; position:relative; bottom:48px;}
.line-bottom{ border-bottom:1px solid rgba(0,0,0,0.1); border-top: none !important;}
#header{background:transparent !important; box-shadow:none !important; border-bottom:none !important;}
.overlay-window.map-overlay.colors-f.background-95-f.show{background-color: rgba(247, 247, 247, 0.8) !important;}
.overlay-control.background-90-f { background-color:transparent !important;}
.colors-f .cross:after, .colors-f .cross:before {background-color: #0c0c0c;}
#filter-menu li { display: inline-block; padding:5px; }
#magic-line { position: absolute; bottom: 6px; left: 0; width: 100px; height: 2px; background: #000; padding:0px !important; -webkit-transition: all 0.3s ease-out; -moz-transition: all 0.3s ease-out; transition: all 0.3s ease-out; }
.custom-title{    line-height: 120px;}



</style>
<style  type="text/css">
  .overlay { background:#000; opacity:0.8; filter:alpha(opacity=80); position:fixed; top:0px; bottom:0px; left:0px; right:0px; z-index:100; }
  .contentWrap { position:fixed; top:50px; color:#7F7F7F; z-index:101; width:100%; margin:0 auto }
  .content { background:none repeat scroll 0 0 #FFF; height:100%; overflow:hidden; width:98%; padding:10px; margin-top: 122px;text-align: center;align:justify }
  .login-box { width:100%; float:left }
  </style>
  <script type="text/javascript">
  function loginForm(){
    document.getElementById("contentWrap").style.display="block";
    document.getElementById("overlay").style.display="block";
  }
  function loginFormClose(){
    document.getElementById("contentWrap").style.display="none";
    document.getElementById("overlay").style.display="none";
  }
  </script>
</head>
<body  class="the-data">
<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
	<?php include('container.php'); ?>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
   <script src="<?php JS ('research-js/vendors/vendors.js'); ?>"></script>
   <script src="<?php JS ('research-js/custom.js'); ?>"></script>
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
</body>
</html>


