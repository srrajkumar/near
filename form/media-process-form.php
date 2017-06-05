<?php include("../includes/_config.php");  ?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
<?php include('../includes/_head.php'); ?>
 
<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script>
	var name = '<?php echo $_POST['name']; ?>';
	var email = '<?php echo $_POST['email']; ?>';
	var company = '<?php echo $_POST['phone']; ?>';
	var reason = '<?php echo $_POST['contact_reason']; ?>';
	var country = '<?php echo $_POST['location']; ?>';
	var message = '<?php echo $_POST['message']; ?>';
	$.ajax({
	url: "https://docs.google.com/a/near.co/forms/d/e/1FAIpQLSfyhE84ZzbXbM4iN2WJE87Y0rRjBBeoXOciBsazVSZTx8h8cg/formResponse",
	data: { 
		"entry_710770568": name,
		"entry_863893022": email,
		"entry_257454762": phone,
		"entry_1157887187": country,
		"entry_3153749": reason,
		"entry_1168262239": message
	},
	type: "POST",
	dataType: "xml",
 statusCode: {

	}
	});
</script>

</head>

<?php

error_reporting(E_ALL);
require 'phpmailer/PHPMailerAutoload.php';
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
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
	$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
	$mail->Port = 25;   
	$mail->Username = "AKIAJEZG67GJOXXDJQ3Q";
	$mail->Password = "Ak6BnuLjQoheV3Iz1mIQeU5Ndfve7WoNLwjOLdfkMxmt";
	$mail->isHTML(true); 
	$mail->setFrom('contact@near.co');     //Set who the message is to be sent from
	$mail->addReplyTo($email,$name);  //Set an alternative reply-to address
	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addCC('gokul@near.co');
$mail->addCC('inbound@near.co');
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
										You have been contacted by <b style='text-transform:uppercase;'>$name</b> from <b style='text-transform:uppercase;'>$location</b> sent a message via Near website.
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
																<b style='color:rgba(0, 0, 0, 0.64);'>Business Email : </b> $email
															</td>
                                                            
														</tr>
														
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Phone : </b> $phone
															</td>
                                                            
														</tr>
														<tr>
															<td style='line-height: 40px; border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>
																<b style='color:rgba(0, 0, 0, 0.64);'>Location : </b> $location
															</td>
                                                            
														</tr>
														
														<tr>
															<td style='line-height: 40px;'>
																<b style='color:rgba(0, 0, 0, 0.64); border-bottom: 1px solid rgba(190, 190, 190, 0.42);'>How did you find us : </b> $contact_reason
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
 
echo "<div class='form-wrapper clearfix container' style='text-align:center'>
	<section class='section parallax-layer hvh-100 p-top-120 p-bottom-60 tb-vcenter-wrapper'>
       <div class='vcenter'>
         <div class='container'>
           <div class='row'>
             <div class='col-md-6 col-md-offset-3 ofx-auto'>
                <div class='login-form ol-tab'>
                  <div id='register' class='tab-pane active'>
                    <h2 class='color-red'>Message Sent</h2> <br/>
                    <p >Thank you for your interest,<br> we will revert shortly. </p>
                  </div>
				  
                </div>
             </div>
           </div>
          
         </div>
       </div>
    </section>
  </div>";


?>

