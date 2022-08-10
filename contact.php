<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css">

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="js/masterslider/style/masterslider.css" />

	<!-- Document Title
	============================================= -->
	<title>Coweta - Contact Us</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header dark">
		
		<?php include 'include/header.php';?>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" style="margin: 0;">
			
			<div class="col-12 title-time" style="padding-left: 0; text-align: center;">

					<h1>Contact Us</h1>


			</div>

		</section>
<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						
						<!-- Google Map
						============================================= -->
						<div class="col-lg-6 min-vh-50">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3331.0752455715337!2d-84.77034694891131!3d33.39520105941979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f4c622020d68ab%3A0xbd7add91d0956efd!2s43%20Jefferson%20Pkwy%2C%20Newnan%2C%20GA%2030263!5e0!3m2!1sen!2sus!4v1624565191157!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="43 jefferson pkwy rap"></iframe>
						</div><!-- Google Map End -->

						<div class="col-lg-6">

							<div class="row col-mb-20 mb-0">
								<!-- Contact Info
								============================================= -->
								<div class="col-md-5">

									<address>
										<strong>Main Office:</strong><br>
										43 Jefferson Parkway<br>
										Newnan, GA 30263
									</address>
									

								</div><!-- Contact Info End -->
								
								<div class="col-md-7">

								 <abbr title="Phone Number"><strong>Phone:</strong></abbr> 770-253-2273<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> 770-253-4218<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> support@cowetacreditunion.com
									

								</div><!-- Contact Info End -->
								
									<div class="col-md-6">

								  <address>
										<strong>Main Office Hours:</strong><br>
									  Monday 9:30 AM - 5:30 PM<br>
									  Tuesday 8:00 AM - 5:30 PM<br>
									  Wednesday 9:30 AM - 5:30 PM<br>
									  Thursday 9:30 AM - 5:30 PM<br>
									  Friday 8:00 AM - 5:30 PM<br>
											</address>
									

								</div><!-- Contact Info End -->
								
							</div>
							
							
							
							
							<a href="holiday-hours.php" class="button button-3d m-0 btn-block button-xlarge d-none d-md-block center">Holiday Hours</a>
							</br>
							<!-- Modal Contact Form
							============================================= -->
							<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d m-0 btn-block button-xlarge d-none d-md-block center">Click here to Send an Email</a>
							<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d m-0 btn-block d-block d-md-none center">Send an Email</a>

							<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										</div>
										<div class="modal-body">

											<div class="form-widget">
												<div class="form-result"></div>
												<form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

													<div class="form-process">
														<div class="css3-spinner">
															<div class="css3-spinner-scaler"></div>
														</div>
													</div>

													<div class="row">
														<div class="col-sm-6 form-group">
															<label for="template-contactform-name">Name <small>*</small></label>
															<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
														</div>

														<div class="col-sm-6 form-group">
															<label for="template-contactform-email">Email <small>*</small></label>
															<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
														</div>

														<div class="w-100"></div>

														<div class="col-sm-6 form-group">
															<label for="template-contactform-phone">Phone</label>
															<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
														</div>

														<div class="col-sm-6 form-group">
															<label for="template-contactform-service">Purpose</label>
															<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
																<option value="">-- Select One --</option>
																<option value="Customer">Customer</option>
																<option value="Testimonial">Testimonial</option>
																<option value="Employee">Employee</option>
																<option value="Bank">Bank</option>
															</select>
														</div>

														<div class="w-100"></div>

														<div class="col-12 form-group">
															<label for="template-contactform-subject">Subject <small>*</small></label>
															<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
														</div>

														<div class="col-12 form-group">
															<label for="template-contactform-message">Message <small>*</small></label>
															<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
														</div>

														<div class="col-12 form-group d-none">
															<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
														</div>

														<div class="col-12 form-group">
															<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
														</div>
													</div>

													<input type="hidden" name="prefix" value="template-contactform-">

												</form>

											</div>


										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							<!-- Modal Contact Form End -->

						</div>
						
					</div>

				</div>
			</div>
		</section><!-- #content end -->

	<!-- Footer
		============================================= -->
		<?php include 'include/footer.php';?>
	<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>