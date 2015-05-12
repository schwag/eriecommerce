<?php
$slideYes = 'yes'
?>
<?php include "php/header.php";?>
    <body data-spy="scroll" class="mc-home">
        <!-- Google Tag Manager -->
<!--<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N4TZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N4TZ');</script>
<!-- End Google Tag Manager -->

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include "php/nav.php";?> <!-- end navigation -->
        
        <section id="myriadhome" class="jumbotron">
			<?php include 'php/jumbotron-slider.php'; ?> 
        </section><!--  end jumbotron section -->

            <div class="col-xs-12 pointerMoneybrown">             
            </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
                <script src='js/jquery.validate.min.js'></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
        <section id="ourgoogleservices">
        	<div class="container">
            	<div class="row">
                
                	<div id="mc-ttl-serv-forms" class="col-xs-12">
                    	<h1>talk to an e-commerce specialist</h1>
                    </div>
                	<div id="mcselect" class="col-xs-12">
                    	<div class="mc-slct-service">
                        	<span>What Service Would You Like To Talk About</span>
                            <a href="#" id="mc-show-serv" class="glyphicon glyphicon-chevron-down"></a>
                        </div>
                        <ul>
                        	<li><a href="#" data-tog="#pan1" data-formid="Affordable Ecommerce Solutions" >Affordable e-commerce Solutions</a></li>
                            <li><a href="#" data-tog="#pan1" data-formid="Adwords Management for Online Retailers" >Adwords Management for Online Retailers</a></li>
                            <li><a href="#" data-tog="#pan1" data-formid="Large Ecommerce Customization" >Large e-commerce Installation</a></li>
                        </ul>
                        
                        <div id="pan1" class="mc-pan col-xs-12">
							<?php include 'php/fp_contact_numone.php'; ?>
                        </div>
                        
                        <div id="thanks" class="col-xs-12" style=" text-align:center; font-weight:600; color:rgba(33,128,0,1.00); display:none;">
                        	<h1>Thanks for showing interest, we have received your message and we will contact you shortly.</h1>
                            <h1>While you're waiting, why don’t you read more about what we do.</h1>
                        </div>
                        
                    </div>
                </div>            	
            </div>

        </section><!-- end about section -->


            <div class="col-xs-12 pointerWhite"> 
            </div>

        <section id="ourecommerceservices" class="gray-back">
            <div class="container">

                <div class="row topTier">
                    <div class="col-sm-10 col-sm-offset-1">
                            <div class="row text-center">
                                <div class="col-lg-6 smallHeading newhover">
                                    <img src="img/googlemarketingservices.png"  alt="">
                                    <div class="effect">
                                        <h2>Google Marketing Services</h2>
                                        <p>As a Badged Google Partner, we offer professional services and are held accountable for our performance.</p>
                                            <br />
                                                <!--<a class="box1" href="#">Read More.</a>-->
                                    </div>
                                </div>
                                <div class="col-lg-6 smallHeading newhoverTwo">
                                    <img src="img/ecommerceservices.png"  alt="">
                                    <div class="effect">
                                        <h2>E-Commerce Solutions</h2>
                                        <p>We're robust in our e-commerce experience and dedicated to your success.</p>
                                            <br />
                                                <!--<a class="box1" href="#">Read More.</a>-->
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>


            </div>
        </section><!-- end e-commerce services section -->

            <div class="col-xs-12 pointerLightgray">
            </div>

        <section id="leadership">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                         <h2 class="text-center">This Month's Featured Customers</h2>
                        <p class="text-center">Each month we choose a few of our customers to feature. It's our little way of saying THANK YOU to each and every one of you.</p>
                            <div class="row text-center caseLogos">
                                <div class="col-sm-4 smallHeading"> 
                                    <img src="img/folio_rbd.jpg" alt="Reclaimed Barn Direct">                            
                                </div>
                                <div class="col-sm-4 smallHeading">
                                    <img src="img/folio_kelleybros.jpg" alt="Kelley Bros">  
                                </div>
                                <div class="col-sm-4 smallHeading">
                                    <img src="img/folio_plyler.jpg" alt="Plyler">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- end leadership section -->

            <div class="col-xs-12 pointerWhite">
            </div>

        <section id="workataglance" class="gray-back">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="text-center">CONTACT US</h2>
                        <p class="text-center">Request a proposal or ask us a question.</p>
                            <div class="row">
                                <div class="col-sm-5">
                                    
                                    <form id="contactForm" action="php/thankyou.php" method="post" role="form">
                                        <?php include "php/contact-form.php";?> 
                                        
                                        <input type="hidden" name="form_submitted" value="Contact Us Form">
                                    </form>
                                    
                                </div>
                                <div class="col-sm-7">
                                    <h4><b>Address:</b> <p>2820 West 23rd St #103, Erie, PA 16506</p></h4>
                                    <h4><b>Phone:</b> <p>1-877-858-2797</p></h4>  
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section><!--  end our process section -->

            <div class="col-xs-12 pointerLightgray"> 
            </div>

        <section id="navMesix" class="gray-back">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1 text-center">
                        <div class="hovergalleryTwo">
                        <h2>STAY CONNECTED</h2>
                        <a href="https://twitter.com/myriadcore" target="_blank"><img src="img/twitter_green.png" alt="" width="50px" height="50px"></a>
                        <a href="https://www.facebook.com/MyriadCore" target="_blank"><img src="img/facebook_green.png" alt="" width="50px" height="50px"></a>
                        <a href="http://www.linkedin.com/company/2935125?trk=prof-exp-company-name" target="_blank"><img src="img/linkedin_green.png" alt="" width="50px" height="50px"></a>
                        <a href="https://plus.google.com/u/0/+Myriadcore/posts" target="_blank"><img src="img/google_green.png" alt="" width="50px" height="50px"></a>
                        </div>
                        <div>
                           <a href="http://www.bestwebdesignagencies.com/rankings-of-best-e-commerce-design-companies" target="_blank"><img src="../img/bestwebdesignbadgenew.png"></a>
                        </div> 
                    </div>
                    <div class="col-sm-5 text-center">
                        <h2>ADWORDS NEWSLETTER</h2>
                        <p>Receive the latest Adwords best practices each month</p>
                        <!-- Begin MailChimp Signup Form -->
                        <div id="mc_embed_signup">
                        <form action="http://myriadcore.us8.list-manage1.com/subscribe/post?u=b766662aac51f9e4ae15708d4&amp;id=5de5b14a93" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_b766662aac51f9e4ae15708d4_5de5b14a93" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                </div>
            </div>
        </section><!-- end contact section -->
        
        <a class="mc-go-to-top" href="#"></a>

        <?php include "php/auditrequestmodal.php";?>
        <?php include "php/casestudiesmodal.php";?>
        <?php include "php/leadershipmodal.php";?>

        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src='js/smooth-scroll.js'></script>
        <script src='js/smooth-hover.js'></script> 
        <script src='js/validate.js'></script> 
        <script src='js/popover.js'></script>


<script type="text/javascript">

$('#mc-show-serv').on('click', function( event ){
	
	event.preventDefault(); 
	
	$('#mcselect ul').toggleClass('mc-showMe-serv');
	
	$(".mc-pan").removeClass("pan-trn");
	$('.mc-slct-service span').html( 'What Service Would You Like To Talk About' );
	$('#thanks').hide();

	
});

$('#mcselect ul li a[data-tog]').on('click', function( event ){
	
	event.preventDefault(); 
	
	var selector = $(this).data('tog');
	var selector2 = $(this).data('formid');
	$(selector).addClass('pan-trn');
	($(".mc-pan").not(selector)).removeClass("pan-trn");
	$("#mcselect ul").removeClass("mc-showMe-serv");
	$('.mc-slct-service span').html( selector2 );
	$('input[name=form_submitted]').val( selector2 );

	
});

</script>               
           
    </body>
</html>
