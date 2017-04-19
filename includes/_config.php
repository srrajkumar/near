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
define('CSS', $mainurl .'assets/css/minified.css.php');
define('JS', $mainurl .'assets/js/');
define('IMAGE', $mainurl .'assets/images/');
//define('VDO_ASSETS_URL', 'https://d2828ihewbtgvd.cloudfront.net/lib/vdo/');
//define('IMAGES_ASSETS_URL', 'https://d2828ihewbtgvd.cloudfront.net/images/');
#define('PDF_ASSETS_URL', $cdnurl .'pdf/');
//define('PDF_ASSETS_URL', 'http://d2828ihewbtgvd.cloudfront.net/pdf/');
define('TWITTER_ACCOUNT_URL', 'http://twitter.com/Near');
define('FACEBOOK_ACCOUNT_URL', 'http://facebook.com/NearPlatform');
define('LINKEDIN_ACCOUNT_URL', 'https://www.linkedin.com/company/2811352?trk=prof-0-ovw-curr_pos');
define('DEFAULT_COUNTRY_OPTION', 'INDIA');

header("Access-Control-Allow-Origin: *");	

?>

