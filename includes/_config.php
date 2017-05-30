<?php
ini_set("display_errors", 0);
define('SITE_NAME', 'Near');
$mainurl = 'http://localhost/near_v3/';
//$mainurl = 'https://near.co/'; 
//$cdnurl = 'https://druq9h2796z7c.cloudfront.net/';
#$cdnurl = 'https://d2828ihewbtgvd.cloudfront.net/';
//$cdnurl = 'https://near.co/';
define('SITE_URL', $mainurl );
define(ROOT_PATH, dirname(__FILE__) );
define('CSS_ASSETS_URL', $mainurl .'assets/css/minified.css.php');
define('CSS_ASSETS_URL_PATH', $mainurl .'assets/css/');
define('JS_ASSETS_URL', $mainurl .'assets/js/');
define('IMAGE_ASSETS_URL', $mainurl .'assets/images/');
define('VIDEO_ASSETS_URL', $mainurl .'assets/videos/');
define('VDO_ASSETS_URL',  $mainurl .'assets/vdo/');
//define('IMAGES_ASSETS_URL', 'https://d2828ihewbtgvd.cloudfront.net/images/');
//define('PDF_ASSETS_URL', $cdnurl .'pdf/');
define('PDF_ASSETS_URL', 'http://d2828ihewbtgvd.cloudfront.net/pdf/');
define('TWITTER_ACCOUNT_URL', 'http://twitter.com/Near');
define('FACEBOOK_ACCOUNT_URL', 'http://facebook.com/NearPlatform');
define('LINKEDIN_ACCOUNT_URL', 'https://www.linkedin.com/company-beta/2811352/');
define('DEFAULT_COUNTRY_OPTION', 'INDIA');

header("Access-Control-Allow-Origin: *");	

function CSS($urlparam){
  echo CSS_ASSETS_URL. $urlparam;
}
function CSS_PATH($urlparam){
  echo CSS_ASSETS_URL_PATH. $urlparam;
}
function JS($urlparam){
  echo JS_ASSETS_URL. $urlparam;
}
function IMAGE($urlparam){
  echo IMAGE_ASSETS_URL. $urlparam;
}
function VIDEO($urlparam){
  echo VIDEO_ASSETS_URL. $urlparam;
}
function PDF($urlparam){
  echo PDF_ASSETS_URL. $urlparam;
}
function my_url(){
    $url = "https://near.co".$_SERVER['REQUEST_URI'];
    echo $url;
}



set_referer_url();

//sets referer url 
function set_referer_url() 
{ 
 if(isset($_SERVER["HTTP_REFERER"])) {
  if(stripos($_SERVER["HTTP_REFERER"], "//near.co") === false && stripos($_SERVER["HTTP_REFERER"], "//www.near.co") === false) { 
   setcookie("RefererURL", $_SERVER["HTTP_REFERER"], time()+3600);  
  }
 }   
}



?>

