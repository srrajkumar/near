
<?php include("../includes/_config.php"); ?>
<?php $b = $_GET['link'];  ?>
<!DOCTYPE html>

<html lang="en"><head>
    <title>Near Contact Form</title>
	<meta name="viewport" content="width=device-width, initial-scale="1"">    
 
    <?php include('../includes/_head.php'); ?>
 
    <link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">

    <style>
	.section {background-color: Transparent;}
	 #error_email, #error_name,#error_phone, #error_country{font-size:11px; color:#ec222b; text-align:left;   line-height:10px;  position: relative;bottom: -5px; left: 5px; }
     .custom-form input, .bfh-selectbox .bfh-selectbox-toggle{margin-right:0px;    width: 100%;}
     .custom-form .btn{color:#fff;}
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
    
</head>
<body style="background-color:transparent; color:#FFFFFF">




  <div id="contact-wrapper" class="clearfix container">

    <div class="form-wrapper clearfix container" style="text-align:center">

           

             <section class="section parallax-layer hvh-100 p-top-120 p-bottom-60 tb-vcenter-wrapper">
                     <div class="vcenter">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6 col-md-offset-3 ofx-auto">
                             
                                             <form action="<?php echo SITE_URL; ?>form/events-process-form.php" method="post" enctype="multipart/form-data" onSubmit="return validate();" role="form" id="research-form" class="custom-form" name="research-form">
                                   
                                                <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name*"  >
                                                 <p id="error_name" ></p>
                                                 <input type="email"  class="form-control" id="email" name="email" placeholder="Email*" >
                                                 <p id="error_email" ></p>
                                                <input type="text" class="form-control"  id="company" name="company" placeholder="Company*" >
                                                <p id="error_company" ></p> 
                                                <input type="hidden" name="pdf" value="<?php echo $b;  ?>"/>
                                             	
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                                <img alt="" id="form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
                                                
                                                </div>
                                             </form>
                                              <div class="login-copyright" style="color:#000">Copyrights &copy; All rights reserved by near.co</div>
                                        
                                    </div>
                                 </div>
                                
                              </div>
                           </div>
                
                  </section>
      </div>
    </div>


</body>
</html>