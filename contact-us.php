<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | Saraj Engineering Services</title>
	
	<!-- core CSS -->
    <?php include("includes/head.php");?>
</head><!--/head-->

<body>

    <?php include("includes/contact/nav.php"); ?> <!-- navigation -->

    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead"></p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <!--div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div-->

                    <div class="col-sm-3 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5>Office:</h5>
                                    <p>
										11, RX 18, Swapnashilpa, 
										Sudarshan Nagar, MIDC,
										Dombivli (East) 421 203
										Maharashtra, India. 
									</p>
                                </address>

                                <address>
                                    <h5>Workshop:</h5>
                                    <p>
										W-29, MIDC Phase II, 
										Opp Indo Amines, 
										Dombivli (East) 421 203
										Maharashtra, India
									</p>
									<h5>Mobile:</h5>
                                    <p> 
										+91-9869576116 <br>
										+91-9167532216
                                    </p>
									<h5>Email:</h5>
                                    <p>sarajengineering@yahoo.in</p>
                                </address>
                            </li>
                        </ul>
                    </div>
					<div class="center">        
                <h2>Drop us a Message</h2>
                <p class="lead"></p>
            </div> 
					<div class="status alert alert-success" style="display: none"></div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
						<div class="col-sm-4 col-sm-offset-1">
							<div class="form-group">
								<label>Name *</label>
								<input type="text" name="name" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Email *</label>
								<input type="email" name="email" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="number" class="form-control">
							</div>
							<div class="form-group">
								<label>Company Name</label>
								<input type="text" class="form-control">
							</div>                        
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Subject *</label>
								<input type="text" name="subject" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Message *</label>
								<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
							</div>                        
							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
							</div>
						</div>
					</form> 
					
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->
     <?php include("includes/footer.php"); ?><!--footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>