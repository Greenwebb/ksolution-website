<?php
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

extract($_POST);

$detail = ($customer_type == 'new_customer') ? 'a new customer' : 'a returning customer';

// Check if form was submitted
if (isset($customer_type)) {

	// Configure upload directory and allowed file types
	$upload_dir = "uploads" . DIRECTORY_SEPARATOR;
	$allowed_types = array("jpg", "webp", "png", "jpeg", "docx", "pdf", "doc", "rtf");

	// Define maxsize for files i.e 2MB
	$maxsize = 3 * 1024 * 1024;

	// Checks if user sent an empty form
	if (!empty(array_filter($_FILES["files"]["name"]))) {

		// Loop through each file in files[] array
		foreach ($_FILES["files"]["tmp_name"] as $key => $value) {

			$file_tmpname = $_FILES["files"]["tmp_name"][$key];
			$file_name = $_FILES["files"]["name"][$key];
			$file_size = $_FILES["files"]["size"][$key];
			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

			// Set upload file path
			$filepath = $upload_dir . $file_name;

			// Check file type is allowed or not
			if (in_array(strtolower($file_ext), $allowed_types)) {

				// Verify file size - 2MB max
				if ($file_size > $maxsize)
					echo "Error: File size is larger than the allowed limit.";


				if (move_uploaded_file($file_tmpname, $filepath)) {

					//echo $nrc;
					$zip_file = "../zip/allzip.zip";
					touch($zip_file);

					$zip = new ZipArchive;
					$this_zip = $zip->open($zip_file);

					if ($this_zip) {
						$folder = opendir("../uploads");
						if ($folder) {
							while (false !== ($images = readdir($folder))) {
								if ($images !== "." && $images !== "..") {
									$file_with_path = "../uploads/" . $images;
									$zip->addFile($file_with_path, $images);
								}
							}
							closedir($folder);
						}
						if (isset($_POST["submit"])) {
							$mypath = "./uploads";
						
							$mail = new PHPMailer(true);
							$mail->isSMTP();
							$mail->Host = "smtp.gmail.com";
							$mail->SMTPAuth = true;
							$mail->Username = "chinviajoshua51@gmail.com";
							$mail->Password = "rgqjiobmxnrzoxzn";
							$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
							$mail->Port = 465;
							$mail->SMTPSecure = "ssl";
						
						
							$mail->addAttachment("../zip/allzip.zip", $nrc . ".zip");
						
						
							//email settings
							$mail->isHTML(true);
							$mail->setFrom($email, $fname . " " . $lname);
							$mail->addAddress("georgemunganga@gmail.com");
							$mail->Subject = "K solutions Loan application " . " Nrc: " . $nrc;
							$mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
							<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'>
							
							<head>
								<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
								<meta charset='UTF-8'>
								<meta content='width=device-width, initial-scale=1' name='viewport'>
								<meta name='x-apple-disable-message-reformatting'>
								<meta http-equiv='X-UA-Compatible' content='IE=edge'>
								<meta content='telephone=no' name='format-detection'>
								<title>K Solutions application</title>
								<!--[if (mso 16)]><style type='text/css'> a {text-decoration: none;} </style><![endif]-->
								<!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
								<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG></o:AllowPNG> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml><![endif]-->
								<!--[if !mso]><!-- -->
							
								<!--<![endif]-->
								
							</head>
							
							<body style='width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;padding:0;Margin:0'>
							<style type='text/css'>
									#outlook a {
										padding: 0;
									}
							
									.ExternalClass {
										width: 100%;
									}
							
									.ExternalClass,
									.ExternalClass p,
									.ExternalClass span,
									.ExternalClass font,
									.ExternalClass td,
									.ExternalClass div {
										line-height: 100%;
									}
							
									.es-button {
										mso-style-priority: 100 !important;
										text-decoration: none !important;
									}
							
									a[x-apple-data-detectors] {
										color: inherit !important;
										text-decoration: none !important;
										font-size: inherit !important;
										font-family: inherit !important;
										font-weight: inherit !important;
										line-height: inherit !important;
									}
							
									.es-desk-hidden {
										display: none;
										float: left;
										overflow: hidden;
										width: 0;
										max-height: 0;
										line-height: 0;
										mso-hide: all;
									}
							
									[data-ogsb] .es-button {
										border-width: 0 !important;
										padding: 15px 25px 15px 25px !important;
									}
							
									@media only screen and (max-width:600px) {
							
										p,
										ul li,
										ol li,
										a {
											line-height: 150% !important
										}
							
										h1,
										h2,
										h3,
										h1 a,
										h2 a,
										h3 a {
											line-height: 120% !important
										}
							
										h1 {
											font-size: 30px !important;
											text-align: center
										}
							
										h2 {
											font-size: 26px !important;
											text-align: center
										}
							
										h3 {
											font-size: 20px !important;
											text-align: center
										}
							
										.es-header-body h1 a,
										.es-content-body h1 a,
										.es-footer-body h1 a {
											font-size: 30px !important
										}
							
										.es-header-body h2 a,
										.es-content-body h2 a,
										.es-footer-body h2 a {
											font-size: 26px !important
										}
							
										.es-header-body h3 a,
										.es-content-body h3 a,
										.es-footer-body h3 a {
											font-size: 20px !important
										}
							
										.es-menu td a {
											font-size: 16px !important
										}
							
										.es-header-body p,
										.es-header-body ul li,
										.es-header-body ol li,
										.es-header-body a {
											font-size: 16px !important
										}
							
										.es-content-body p,
										.es-content-body ul li,
										.es-content-body ol li,
										.es-content-body a {
											font-size: 16px !important
										}
							
										.es-footer-body p,
										.es-footer-body ul li,
										.es-footer-body ol li,
										.es-footer-body a {
											font-size: 16px !important
										}
							
										.es-infoblock p,
										.es-infoblock ul li,
										.es-infoblock ol li,
										.es-infoblock a {
											font-size: 12px !important
										}
							
										*[class='gmail-fix'] {
											display: none !important
										}
							
										.es-m-txt-c,
										.es-m-txt-c h1,
										.es-m-txt-c h2,
										.es-m-txt-c h3 {
											text-align: center !important
										}
							
										.es-m-txt-r,
										.es-m-txt-r h1,
										.es-m-txt-r h2,
										.es-m-txt-r h3 {
											text-align: right !important
										}
							
										.es-m-txt-l,
										.es-m-txt-l h1,
										.es-m-txt-l h2,
										.es-m-txt-l h3 {
											text-align: left !important
										}
							
										.es-m-txt-r img,
										.es-m-txt-c img,
										.es-m-txt-l img {
											display: inline !important
										}
							
										.es-button-border {
											display: block !important
										}
							
										a.es-button,
										button.es-button {
											font-size: 20px !important;
											display: block !important;
											border-width: 15px 25px 15px 25px !important
										}
							
										.es-btn-fw {
											border-width: 10px 0px !important;
											text-align: center !important
										}
							
										.es-adaptive table,
										.es-btn-fw,
										.es-btn-fw-brdr,
										.es-left,
										.es-right {
											width: 100% !important
										}
							
										.es-content table,
										.es-header table,
										.es-footer table,
										.es-content,
										.es-footer,
										.es-header {
											width: 100% !important;
											max-width: 600px !important
										}
							
										.es-adapt-td {
											display: block !important;
											width: 100% !important
										}
							
										.adapt-img {
											width: 100% !important;
											height: auto !important
										}
							
										.es-m-p0 {
											padding: 0px !important
										}
							
										.es-m-p0r {
											padding-right: 0px !important
										}
							
										.es-m-p0l {
											padding-left: 0px !important
										}
							
										.es-m-p0t {
											padding-top: 0px !important
										}
							
										.es-m-p0b {
											padding-bottom: 0 !important
										}
							
										.es-m-p20b {
											padding-bottom: 20px !important
										}
							
										.es-mobile-hidden,
										.es-hidden {
											display: none !important
										}
							
										tr.es-desk-hidden,
										td.es-desk-hidden,
										table.es-desk-hidden {
											width: auto !important;
											overflow: visible !important;
											float: none !important;
											max-height: inherit !important;
											line-height: inherit !important
										}
							
										tr.es-desk-hidden {
											display: table-row !important
										}
							
										table.es-desk-hidden {
											display: table !important
										}
							
										td.es-desk-menu-hidden {
											display: table-cell !important
										}
							
										.es-menu td {
											width: 1% !important
										}
							
										table.es-table-not-adapt,
										.esd-block-html table {
											width: auto !important
										}
							
										table.es-social {
											display: inline-block !important
										}
							
										table.es-social td {
											display: inline-block !important
										}
							
										.es-desk-hidden {
											display: table-row !important;
											width: auto !important;
											overflow: visible !important;
											max-height: inherit !important
										}
									}
								</style><div class='es-wrapper-color' style='background-color:#FFFFFF'>
									<!--[if gte mso 9]><v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'> <v:fill type='tile' color='#fff'></v:fill> </v:background><![endif]-->
									<table class='es-wrapper' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#FFFFFF;background:linear-gradient(to right, #00b050, #3e4095 90%)' width='100%' cellspacing='0' cellpadding='0'>
										<tr class='gmail-fix' height='0' style='border-collapse:collapse'>
											<td style='padding:0;Margin:0'>
												<table cellspacing='0' cellpadding='0' border='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:690px'>
													<tr style='border-collapse:collapse'>
														<td cellpadding='0' cellspacing='0' border='0' style='padding:0;Margin:0;line-height:1px;min-width:690px' height='0'><img src='https://upenah.stripocdn.email/content/guids/CABINET_837dc1d79e3a5eca5eb1609bfe9fd374/images/41521605538834349.png' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;max-height:0px;min-height:0px;min-width:690px;width:690px' alt width='690' height='1'></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr style='border-collapse:collapse'>
											<td valign='top' style='padding:0;Margin:0'>
												<table class='es-header' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#66BB7F;background-repeat:repeat;background-position:center top'>
													<tr style='border-collapse:collapse'>
														<td style='padding:0;Margin:0;background:linear-gradient(to right, #00b050, #3e4095 90%)' bgcolor='#42ef3d' align='center'>
															<table class='es-header-body' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#66BB7F;width:690px'>
																<tr style='border-collapse:collapse'>
																	<td style='padding:0;Margin:0;border-bottom:solid green;background-color:#ffffff' bgcolor='#FFF' align='left'>
																		<table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																			<tr style='border-collapse:collapse'>
																				<td valign='top' align='center' style='padding:0;Margin:0;width:690px'>
																					<table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																						<tr style='border-collapse:collapse'>
																							<td style='Margin:0;padding-left:10px;padding-right:10px;padding-top:25px;padding-bottom:25px;font-size:0px' align='center'><img src='https://upenah.stripocdn.email/content/guids/aa4de4ee-c7c9-4f5f-83c6-e64aee7f8c8d/images/logooffcanvas1.png' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' width='105' height='86'></td>
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
												<table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
													<tr style='border-collapse:collapse'>
														<td align='center' style='padding:0;Margin:0'>
															<table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:690px' cellspacing='0' cellpadding='0' align='center'>
																<tr style='border-collapse:collapse'>
																	<td align='left' style='padding:0;Margin:0'>
																		<table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																			<tr style='border-collapse:collapse'>
																				<td valign='top' align='center' style='padding:0;Margin:0;width:690px'>
																					<table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#ffffff;border-radius:4px' width='100%' cellspacing='0' cellpadding='0' bgcolor='#ffffff' role='presentation'>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='Margin:0;padding-bottom:5px;padding-left:30px;padding-right:30px;padding-top:35px'>
																								<h1 style='Margin:0;line-height:58px;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;font-size:48px;font-style:normal;font-weight:bold;color:#111111'>Loan Application</h1>
																							</td>
																						</tr>
																						<tr style='border-collapse:collapse'>
																							<td style='Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;font-size:0' bgcolor='#ffffff' align='center'>
																								<table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																									<tr style='border-collapse:collapse'>
																										<td style='padding:0;Margin:0;border-bottom:1px solid #ffffff;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px'></td>
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
												</table>
												<table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
													<tr style='border-collapse:collapse'>
														<td style='padding:0;Margin:0;'  align='center'>
															<table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#ffffff;width:690px' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'>
																<tr style='border-collapse:collapse'>
																	<td align='left' style='padding:0;Margin:0'>
																		<table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																			<tr style='border-collapse:collapse'>
																				<td valign='top' align='center' style='padding:0;Margin:0;width:690px'>
																					<table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#ffffff' width='100%' cellspacing='0' cellpadding='0' bgcolor='#ffffff' role='presentation'>
																						<tr style='border-collapse:collapse'>
																							<td class='es-m-txt-l' bgcolor='#ffffff' align='left' style='Margin:0;padding-bottom:15px;padding-top:20px;padding-left:30px;padding-right:30px'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins,  sans-serif;line-height:27px;color:#666666;font-size:18px'>Email Application from has been Sent.</p>
																							</td>
																						</tr>
																						<tr style='border-collapse:collapse'>
																							<td class='es-m-txt-l' bgcolor='#ffffff' align='left' style='Margin:0;padding-top:20px;padding-bottom:20px;padding-left:30px;padding-right:30px'>Some text Some text Some text Some text Some text Some text Some text follows.<br>Loan requisition details are as follows</td>
																						</tr>
																					</table>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
																<tr style='border-collapse:collapse'>
																	<td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:30px;padding-right:30px'>
																		<!--[if mso]><table style='width:630px' cellpadding='0' cellspacing='0'><tr><td style='width:167px' valign='top'><![endif]-->
																		<table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'>
																			<tr style='border-collapse:collapse'>
																				<td class='es-m-p0r es-m-p20b' align='center' style='padding:0;Margin:0;width:147px'>
																					<table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='padding:0;Margin:0'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#333333;font-size:18px'><strong>AMOUNT</strong></p>
																							</td>
																						</tr>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='padding:0;Margin:0'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#44c867;font-size:18px'><br>ZMW " . $amount . "</p>
																							</td>
																						</tr>
																					</table>
																				</td>
																				<td class='es-hidden' style='padding:0;Margin:0;width:20px'></td>
																			</tr>
																		</table>
																		<!--[if mso]></td>
							<td style='width:167px' valign='top'><![endif]-->
																		<table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'>
																			<tr style='border-collapse:collapse'>
																				<td class='es-m-p20b' align='center' style='padding:0;Margin:0;width:147px'>
																					<table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='padding:0;Margin:0'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#333333;font-size:18px'><strong>FULL NAME</strong></p>
																							</td>
																						</tr>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='padding:0;Margin:0'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#44c867;font-size:18px'><br>" . $fname . " " . $lname . "<br><br></p>
																							</td>
																						</tr>
																					</table>
																				</td>
																				<td class='es-hidden' style='padding:0;Margin:0;width:20px'></td>
																			</tr>
																		</table>
																		<!--[if mso]></td>
							<td style='width:138px' valign='top'><![endif]-->
																		<table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'>
																			<tr style='border-collapse:collapse'>
																				<td class='es-m-p20b' align='center' style='padding:0;Margin:0;width:138px'>
																					<table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='padding:0;Margin:0'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#333333;font-size:18px'><strong>PHONE NO</strong></p>
																							</td>
																						</tr>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='padding:0;Margin:0'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#44c867;font-size:18px'><br>" . $phone . "<strong></strong></p>
																							</td>
																						</tr>
																					</table>
																				</td>
																			</tr>
																		</table>
																		<!--[if mso]></td><td style='width:20px'></td>
							<td style='width:138px' valign='top'><![endif]-->
																		<table class='es-right' cellspacing='0' cellpadding='0' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right'>
																			<tr style='border-collapse:collapse'>
																				<td align='center' style='padding:0;Margin:0;width:138px'>
																					<table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='padding:0;Margin:0'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#333333;font-size:18px'><strong>EMAIL</strong></p>
																							</td>
																						</tr>
																						<tr style='border-collapse:collapse'>
																							<td align='center' style='padding:0;Margin:0'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#44c867;font-size:18px'>" . filter_var($email) . "</p>
																							</td>
																						</tr>
																					</table>
																				</td>
																			</tr>
																		</table>
																		<!--[if mso]></td></tr></table><![endif]-->
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
													<tr style='border-collapse:collapse'>
														<td align='center' style='padding:0;Margin:0'>
															<table class='es-content-body' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:690px'>
																<tr style='border-collapse:collapse'>
																	<td align='left' style='padding:0;Margin:0'>
																		<table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																			<tr style='border-collapse:collapse'>
																				<td valign='top' align='center' style='padding:0;Margin:0;width:690px'>
																					<table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:4px;background-color:#111111' width='100%' cellspacing='0' cellpadding='0' bgcolor='#111111' role='presentation'>
																						<tr style='border-collapse:collapse'>
																							<td class='es-m-txt-l' bgcolor='#111111' align='left' style='padding:0;Margin:0;padding-left:30px;padding-right:30px;padding-top:35px'>
																								<h2 style='Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:poppins, 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:normal;font-color:#ffffff'>NOTIFICATION</h2>
																							</td>
																						</tr>
																						<tr style='border-collapse:collapse'>
																							<td class='es-m-txt-l' align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:30px;padding-right:30px'>
																								<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:poppins; line-height:27px;color:#666666;font-size:18px'>We noticed that you are " . $detail . ". You should know that your loan process will processed as soon as possible.</p>
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
												<table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
													<tr style='border-collapse:collapse'>
														<td align='center' style='padding:0;Margin:0'>
															<table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:690px' cellspacing='0' cellpadding='0' align='center'>
																<tr style='border-collapse:collapse'>
																	<td align='left' style='padding:0;Margin:0'>
																		<table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																			<tr style='border-collapse:collapse'>
																				<td valign='top' align='center' style='padding:0;Margin:0;width:690px'>
																					<table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
																						<tr style='border-collapse:collapse'>
																							<td style='padding:0;Margin:0;display:none' align='center'></td>
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
													</ta>";
						
						
							if ($mail->send()) {
								
header('Location: ../success.php');
							} else {
								echo "somthing went wrong " . $mail->ErrorInfo;
							}
						}
						
					}
				} else {
					echo "Error uploading {$file_name}
						
                         <br />";
					
				}
			} else {

				// If file extension not valid
				echo "Error uploading {$file_name} ";
				echo "({$file_ext} file type is not allowed)<br>";
				
			}
		}
	} else {

		// If no files selected
		echo "Required files have not been selected files selected.";
	}
}



