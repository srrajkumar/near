<?php include("../includes/_config.php"); include("../includes/_lib.php"); ?>


<head>
 <link rel="stylesheet" href="<?php CSS('neue-font.css'); ?>" />
 <link rel="stylesheet" href="<?php CSS('fontawesome/css/font-awesome.min.css'); ?>" />
 <link rel="stylesheet" href="<?php CSS('animate.css/animate.min.css'); ?>" />
 <link rel="stylesheet" href="<?php CSS('animate.css/delay.css'); ?>" />
 <link rel="stylesheet" href="<?php CSS('dist/css/bootstrap-custom.min.css'); ?>" />
 <link rel="stylesheet" href="<?php CSS('linecons/style.css'); ?>" />
 <link rel="stylesheet" href="<?php CSS('theme-custom.css'); ?>" />
<link href="<?php CSS('form/career.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php CSS('research/styles.css'); ?>" media="screen" rel="stylesheet" type="text/css"/>
<style>
.tab-pane p.puz-success, { color:#ffffff !important; text-shadow: 0px 0px 0px #ffffff; text-align:center  !important; font-family: 'GothamRounded-Book', sans-serif  !important; font-size:14px !important;}
h2.puz-success{ color:#ffffff !important; text-shadow: 0px 0px 0px #ffffff; text-align:center  !important; font-family:'GothamRounded-Medium', sans-serif  !important; font-size:18px !important;}
.section {background-color: transparent !important;}
#register{ top:100px; padding: 0 15px;}
.login-form.ol-tab{ min-height:300px;}
.login-copyright{position: absolute; bottom: 20px; left: 15px; right: 15px; font-size:12px;}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
	var name = '<?php echo $_POST['name']; ?>';
	var email = '<?php echo $_POST['email']; ?>';
	var company = '<?php echo $_POST['company']; ?>';
	var reason = '<?php echo $_POST['contact_reason']; ?>';
	var location = '<?php echo $_POST['location']; ?>';
	var message = '<?php echo $_POST['message']; ?>';
	
</script>

</head>

<?php

error_reporting(E_ALL);
require 'phpmailer/PHPMailerAutoload.php';
 $name = $_POST['name'];
 $email = $_POST['email'];
 $company = $_POST['company'];
 $contact_reason  = $_POST['contact_reason'];
 $mydate=getdate(date('U'));
 $mon =  $mydate[month]; 
 $date = $mydate[mday];
 $year = $mydate[year];
$location = $_POST['location'];

$message = $_POST['message'];

 $mail = new PHPMailer;
	$mail->isSMTP();    
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';  
	$mail->Host = 'email-smtp.us-west-2.amazonaws.com';
	$mail->Port = 25;   
	$mail->Username = "AKIAJZDQV2VXA3I2EJOQ";
	$mail->Password = "Aj2jGfhdARQWVCtJ03Ku5IEL/ybFo/LVMZjFcMDJWKxS";
	$mail->isHTML(true); 
	$mail->setFrom('contact@adnear.net');     //Set who the message is to be sent from
	$mail->addReplyTo($email,$name);  //Set an alternative reply-to address
	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addCC('gokul@near.co');
$mail->addCC('rajkumar@near.co');
	//$mail->addCC('kiran@near.co');
	//$mail->addCC('sowmya@near.co');
	//$mail->addCC('info@near.co');
	
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Near Website contact | ' . $name . '.';		 
					
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
							      <td width='160'><img src='http://188.166.248.212/images/near-white.png' alt='Near' width='120' height='40'  style='display: block; float:left; padding: 5px 5px 5px 10px;' /></td>
							      <td> <p style='margin: 15px 15px 0px 0;'>Near Contact Form</p>
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
										You have been contacted by <b style='text-transform:uppercase;'>$name</b> from <b style='text-transform:uppercase;'>$company</b> sent a message via Near website.
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
																<b style='color:rgba(0, 0, 0, 0.64);'>Official Email : </b> $email
															</td>
                                                            
														</tr>
														
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Company : </b> $company
															</td>
                                                            
														</tr>
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Location : </b> $location
															</td>
                                                            
														</tr>
														<tr>
															<td style='line-height: 40px;'>
																<b style='color:rgba(0, 0, 0, 0.64); border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>Contact Reason : </b> $contact_reason
															</td>
                                                           
														</tr>
														<tr>
															<td style='line-height: 40px;'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Message : </b> $message
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
 
echo " <div id='Product' class='tab-pane in active'>
 <div class='form-wrapper clearfix container' style='text-align:center'>
	<section class='section parallax-layer hvh-100 p-top-120 p-bottom-60 tb-vcenter-wrapper'>
       <div class='vcenter'>
         <div class='container'>
           <div class='row'>
             <div class='col-md-6 col-md-offset-3 ofx-auto'>
                <div >
                  <div id='register' class='tab-pane active'>
                    <h2 class='puz-success'>Message Sent</h2> <br/>
                    <p class='puz-success' style='color:#ffffff'>Thank you $name,<br>  your message has been submitted and someone will contact you shortly. </p>
                  </div>
				  
                </div>
             </div>
           </div>
          
         </div>
       </div>
    </section>
  </div>
  </div>";


?>

