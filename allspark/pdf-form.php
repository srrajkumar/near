<?php include("../includes/_config.php"); ?>
<?php $b = $_GET['link'];  ?>
<!DOCTYPE html>

<html lang="en"><head>
    <title>Near Contact Form</title>
    <?php include('../includes/_head.php'); ?>
 
    <link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">

    <style>
    .section {background-color: Transparent;}
     #error_email, #error_name,#error_phone, #error_country{font-size:11px; color:#ec222b; text-align:left;   line-height:10px;  position: relative;bottom: -5px;
    left: 5px; }
    .custom-form input, .bfh-selectbox .bfh-selectbox-toggle{margin-right:0px;    width: 100%;}
     .custom-form .btn{color:#fff;}
     .puz-success{font-size:22px; font-weight:400;}
     body{background: #f5f5f6;}

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
			var phone = document.getElementById( "phone" );
			
		 if( phone.value == "" )
		 {
		  error = "Please enter a valid phone number";
		  document.getElementById( "error_phone" ).innerHTML = error;

		  return false;
		 }
        
		var country = document.getElementById( "country" );
			
		 if( country.value == "" )
		 {
		  error = "Please enter your Location ";
		  document.getElementById( "error_country" ).innerHTML = error;

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
<body style="background-color: #f5f5f6; color:#FFFFFF">




  <div id="contact-wrapper" class="clearfix container">

    <div class="form-wrapper clearfix container" style="text-align:center">

           

             <section class="section parallax-layer hvh-100 p-top-120 p-bottom-60 tb-vcenter-wrapper">
                     <div class="vcenter">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-6 col-md-offset-3 ofx-auto">
                                 <div class="login-form ol-tab">
                                    
                                        <div id="register" class="tab-pane active">
                                             
                                             <form action="<?php echo SITE_URL; ?>form/pdf-process-form.php" method="post" enctype="multipart/form-data" onSubmit="return validate();" role="form" id="research-form" name="research-form">
                                      
                                                <div class="form-group">
                                                <input id="name" type="text" name="name" placeholder="Name"  class="form-control"> 
                                                 <p id="error_name" ></p>
                                                <input id="email" type="email" name="email" placeholder="Company Email"  class="form-control"> 
                                                 <p id="error_email" ></p>
                                                <input id="phone" type="text" name="phone" placeholder="Phone Number"  class="form-control"> 
                                                 <p id="error_phone" ></p>
                                                  <input id="contact_reason" type="text" name="contact_reason" required style="margin-bottom: 15px;" placeholder="How did you find us"  class="form-control"> 
                                            
                                                <input id="country" type="text" name="country" placeholder="Country" class="form-control"> 
                                                 <p id="error_country" ></p>
                                                 
                                                <input type="hidden" name="pdf" value="<?php echo $b;  ?>"/>
                                             	
                                                <input type="submit" value="Submit" class="btn btn-small btn-block">
                                                <img alt="" id="form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
                                             
                                                </div>
                                             </form>
                                           
                                          </div>
                                          
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