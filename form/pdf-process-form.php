<?php include("../includes/_config.php"); ?>
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
	 h2.puz-success{font-size:22px !important; font-weight:400 !important;}
     body{background: #f5f5f6;}
   	 #register .custom_btn .btn__text{top:-1px !important;}
	 #register .custom_btn{width: 130px !important; height: 35px !important; left: 90px; bottom: -40px;}
	 #register .custom_btn .btn__text{width:130px !important; height: 35px !important; line-height: 35px !important;}
	 #register .btn__text{right: 0 !important;}
	 #register .color_change{fill: #ED1C24 !important;}
	 #register .custom_btn .icon svg {width: 35px !important; height: 35px !important;}
	 #register .btn__text-inner{margin-left:0px !important;}
	 #register .custom_btn{border:1px solid transparent !important;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

var name = '<?php echo $_POST['name']; ?>';
var email = '<?php echo $_POST['email']; ?>';
var phone = '<?php echo $_POST['phone']; ?>';
var country = '<?php echo $_POST['country']; ?>';
var file = '<?php echo $_POST['pdf']; ?>';
$.ajax({
url: "https://docs.google.com/a/near.co/forms/d/e/1FAIpQLSeYCdVterLBi6GMDRKst7b-yjrrRFi1EskuAsCV1dGRR3H8lQ/formResponse",
data: { 
"entry_2005620554": name,
"entry_1045781291": email,
"entry_1502641761": phone,
"entry_975827800": country,
"entry_1859266036": file
	},
		type: "POST",
		dataType: "xml",
	 statusCode: {

		},
	timeout: 3000 
	});

  

</script>
</head>

<?php

error_reporting(E_ALL);
require 'phpmailer/PHPMailerAutoload.php';
 $name = $_POST['name'];
 $email = $_POST['email'];
 $country = $_POST['country'];
 $phone = $_POST['phone'];
 $file  = $_POST['pdf'];
 $reason = $_POST['contact_reason'];
 $mydate=getdate(date('U'));
 $mon =  $mydate[month]; 
 $date = $mydate[mday];
 $year = $mydate[year];

 $mail = new PHPMailer;
	$mail->isSMTP();    
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';  
		$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
	$mail->Port = 25;   
	$mail->Username = "AKIAJEZG67GJOXXDJQ3Q";
	$mail->Password = "Ak6BnuLjQoheV3Iz1mIQeU5Ndfve7WoNLwjOLdfkMxmt";
	$mail->isHTML(true); 
	$mail->setFrom('contact@near.co');  
	$mail->addReplyTo($email,$name);  //Set an alternative reply-to address
	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addCC('smriti@near.co');
	$mail->addCC('inbound@near.co');
	//$mail->addCC('rajkumar@near.co');
	//$mail->addCC('insights@near.co');
	
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'You\'ve been contacted by ' . $name . '.';		 
					
		$mail->Body    = 
		
		"

		<table border='0' cellpadding='0' cellspacing='0'>	
		<tr>
			<td style='padding: 10px 0 30px 0;'>
				<table align='center' border='0' cellpadding='0' cellspacing='0' style='border: 1px solid rgba(190, 190, 190, 0.42); border-radius:3px;border-collapse: collapse;'>
					<tr>
						<td  bgcolor='#2a3239' style='padding: 0px;font-size: 22px; color:#fff; font-weight: bold; font-family: Arial, sans-serif;'>
							
							<table width='100%' border='0' cellpadding='0' cellspacing='0'>
							  <tbody>
							    <tr>
							      <td><img src='http://188.166.248.212/images/near-white.png' alt='Near' width='120' height='40'  style='display: block; float:left; padding: 5px 5px 5px 10px;' /></td>
							      <td> <p style='margin: 15px 15px 0px 0;'>Research Downloaded</p>
                            <p style='font-size:11px; padding: 0px 0px 10px 0px; color:rgba(255, 255, 255, 0.54); margin: 0px;'>$mon $date, $year</p></td>
						        </tr>
						      </tbody>
						  </table>
					  </td>
                        
					</tr>
					<tr>
						<td bgcolor='#ffffff' style='padding: 20px 36px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
								<tr>
									<td style='color: #153643; font-family: Arial, sans-serif; font-size: 13px; padding: 10px 10px 15px 0px;'>
										You have been contacted by <b style='text-transform:uppercase;'>$name</b> from <b style='text-transform:uppercase;'>$country</b>.
									</td>
								</tr>
								<tr>
								<td style='border-bottom: 1px solid rgba(0, 0, 0, 0.62);'></td>
								</tr>
								<tr><td style='padding-bottom: 10px;'></td></tr>
								<tr>
									<td>
										<table border='0' cellpadding='0' cellspacing='0' width='100%'>
											<tr>
												<td width='100%' valign='top'>
													<table border='0' cellpadding='0' cellspacing='0' width='100%'>
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.62);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Name : </b> $name
															</td>
                                                            
														</tr>
														<tr>
														<td height='41' style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Email : </b> $email
															</td>
                                                            
														</tr>
														<tr>
														<td height='41' style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Phone : </b> $phone
															</td>
                                                            
														</tr>
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Country : </b> $country
															</td>
                                                            
														</tr>
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>How did you find us : </b> $reason
															</td>
                                                            
														</tr>
														<tr>
															<td style='line-height: 40px;'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Downloaded Research : </b> $file
															</td>
                                                           
														</tr>
                                                         
													</table>
												</td>
												
											</tr>
                                          
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
		  </td>
		</tr>
	</table>"
		. PHP_EOL . PHP_EOL;
		

	if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
$main = " <div id='contact-wrapper' class='clearfix container'>
 <div class='form-wrapper clearfix container' style='text-align:center'>
	<section class='section parallax-layer hvh-100 p-top-120 p-bottom-60 tb-vcenter-wrapper'>
       <div class='vcenter'>
         <div class='container'>
           <div class='row'>
             <div class='col-md-6 col-md-offset-3 ofx-auto'>
                <div class='login-form ol-tab'>
                  <div id='register' class='tab-pane active'>
                    <h2 class='puz-success'>Message Sent</h2> <br/>
                    <p class='puz-success'>Thank you for your request, we shall keep you posted. </p>
                     <a href ='$file' class='custom_btn' download='research.pdf'>
                                <span class='btn__text'>
                                    <span class='btn__text-inner'>Download</span>
                                </span>            
                                <div class='icon'>
                                    <svg viewBox='0 0 18 7' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M14,3.09H0' fill='#fff'></path>
                                        <polyline class='color_change' points='11.34 5.83 13.97 3.09 11.34 0.35' fill='#fff'></polyline>
                                    </svg>
                                </div>
                            </a>
                  
                  </div>
				 
                </div>
             </div>
           </div>
          
         </div>
       </div>
    </section>
  </div>
  </div>";

echo $main;

?>