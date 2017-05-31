
<?php include("../includes/_config.php"); ?>
<?php $b = $_GET['link'];  ?>
<!DOCTYPE html>

<html lang="en"><head>
    <title>Near Contact Form</title>
	<meta name="viewport" content="width=device-width, initial-scale="1"">    
    <link href="<?php CSS_PATH('form/style.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>
    <?php include('../includes/_head.php'); ?>
 
    <link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">
    <link rel="stylesheet" href="<?php CSS_PATH('linecons/style.css'); ?>" />


    <link href="<?php CSS_PATH('research/styles.css'); ?>" rel="stylesheet" type="text/css">
    <style>
	.section {background-color: Transparent;}
	
	</style>
    <?php include('../includes/_javascripts.php'); ?>
    <script type="text/javascript" src="<?php CSS_PATH('form/main.js'); ?>"></script>
   
   
    <script>
	function validate()
		{
		 var error="";
		var name = document.getElementById( "name" );
		 if(name.value == "" )
		 {
		  error = "Please enter your name";
		  document.getElementById( "error_name" ).innerHTML = error;
		  return false;

		 }
		 var email = document.getElementById( "email" );
		 if( email.value == "" || email.value.indexOf( "@" ) == -1 )
		 {
		  error = "Please enter a valid Email address ";
		  document.getElementById( "error_email" ).innerHTML = error;
		  return false;
		 }
		var company = document.getElementById( "company" );
		 if( company.value == "" )
		 {
		  error = "Please enter your company name ";
		  document.getElementById( "error_company" ).innerHTML = error;

		  return false;
		 }


		 else
		 {
			document.getElementById('form-submit-loader').style.display='inline'; 
		  
		 }
		}
	</script>
    <!--[if lt IE 9]>
    <link href="<?php CSS('form/ie.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <style>
	#error_email, #error_name, #error_company{font-size:11px; color:#ec222b; text-align:left; margin-bottom:0px !important;  line-height:10px;  position: relative;  bottom: 7px; }
		.login-form{min-height: 320px;}.tab-pane form{background:transparent;}
		.login-form .tab-pane input{padding:0px 5px;}
	</style>
</head>
<body style="background-color:transparent; color:#FFFFFF">




  <div id="contact-wrapper" class="clearfix container">

    <div class="form-wrapper clearfix container" style="text-align:center">

           

             <section class="section parallax-layer hvh-100 p-top-120 p-bottom-60 tb-vcenter-wrapper">
                     <div class="vcenter">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6 col-md-offset-3 ofx-auto">
                                 <div class="login-form ol-tab">
                                    
                                        <div id="register" class="tab-pane active">
                                             
                                             <form action="<?php echo SITE_URL; ?>form/events-process-form.php" method="post" enctype="multipart/form-data" onSubmit="return validate();" role="form" id="research-form" name="research-form">
                                   
                                                <div class="form-group">
                                                <input type="text" id="name" name="name" placeholder="Name*"  >
                                                 <p id="error_name" ></p>
                                                 <input type="email" id="email" name="email" placeholder="Email*" >
                                                 <p id="error_email" ></p>
                                                <input type="text" id="company" name="company" placeholder="Company*" >
                                                <p id="error_company" ></p> 
                                                <input type="hidden" name="pdf" value="<?php echo $b;  ?>"/>
                                             	
                                                <input type="submit" value="Submit" class="btn btn-small btn-block">
                                                <img alt="" id="form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
                                                
                                                </div>
                                             </form>
                                          </div>
                                           <div class="login-copyright">Copyrights &copy; All rights reserved by near.co</div>
                                       </div>
                                    </div>
                                 </div>
                                
                              </div>
                           </div>
                
                  </section>
      </div>
    </div>


</body>
</html>