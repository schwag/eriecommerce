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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
                <script src='js/jquery.validate.min.js'></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

        <section id="blueBar">
        	<div class="container">
                <div class="bluesectionText">
            	   <h1>Find your place on the internet with ErieCommerce</h1> 
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum velit justo, eget.</p> 
                </div>         	
            </div>
        </section><!-- end blue section -->

        <div class="row"> <!--Beginning of Tier One-->
                <div class="col-lg-6 homeimgLeft">
                    <img src="img/homepageimg1.jpg" class="img-responsive">
                </div>
                <div class="col-lg-6 homemidRight" style="height:596px; background-color: #ffffff;">
                    <h1>Building your online store...</h1>
                    <p>Nullam accumsan nisi ut nunc sodales facilisis ac fringilla sapien. Pellentesque eleifend sem efficitur sem efficitur dignissim. Aliquam consequat pharetra vestibulum. Phasellus venenatis sem sit amet posuere faucibus. In hac habitasse platea dictumst. Nunc sit amet rhoncus tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis dignissim consectetur urna, a pellentesque nulla aliquet id. Vivamus tempus justo sit amet pellentesque finibus. Etiam dignissim sollicitudin metus, maximus vestibulum erat tincidunt in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis dignissim consectetur urna, a pellentesque nulla aliquet id. Vivamus tempus justo sit amet pellentesque finibus. Etiam dignissim sollicitudin metus, maximus vestibulum erat tincidunt in.</p>
                    <button class="btn btn-success">LEARN MORE <i class="icon-chevron-up icon-rotate-90"></i></button>
                </div>
        </div> <!--End of Tier One-->

        <div class="row"> <!--Beginning of Tier Two-->
                <div class="col-lg-6 homemidRight" style="height:596px; background-color: #ffffff;">
                    <h1>Marketing your products...</h1>
                    <p>Nullam accumsan nisi ut nunc sodales facilisis ac fringilla sapien. Pellentesque eleifend sem efficitur sem efficitur dignissim. Aliquam consequat pharetra vestibulum. Phasellus venenatis sem sit amet posuere faucibus. In hac habitasse platea dictumst. Nunc sit amet rhoncus tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis dignissim consectetur urna, a pellentesque nulla aliquet id. Vivamus tempus justo sit amet pellentesque finibus. Etiam dignissim sollicitudin metus, maximus vestibulum erat tincidunt in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis dignissim consectetur urna, a pellentesque nulla aliquet id. Vivamus tempus justo sit amet pellentesque finibus. Etiam dignissim sollicitudin metus, maximus vestibulum erat tincidunt in.</p>
                    <button class="btn btn-success">LEARN MORE <i class="icon-chevron-up icon-rotate-90"></i></button>
                </div>
                <div class="col-lg-6 homeimgLeft">
                    <img src="img/homepageimg2.jpg" class="img-responsive">
                </div>
        </div> <!--End of Tier Two-->

        <section id="blueBar">
            <div class="container">
                <div class="bluesectionText">
                   <h1>When your ready to talk, we’re a just click away!</h1> 
                   <p>Give us a call or send us a message.</p> 
                </div>          
            </div>
        </section><!-- end blue section -->

        <section id="formSection">
            <div class="container">
                <div class="bluesectionText">
                    <div id="mcselect" class="col-xs-12">
                        <div class="mc-slct-service">
                            <span>What captures your interest?</span>
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
        </section><!-- end form section -->

   
            <div class="row footerArea">
                <div class="col-lg-6">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47354.09867322786!2d-80.070947!3d42.11536945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882d7fe13db2f71f%3A0x89f3ae2e121d5b0a!2sErie%2C+PA!5e0!3m2!1sen!2sus!4v1431627912362" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                </div>   
                <div class="col-lg-6 footerRight">
                   <h1>Contact us today!</h1> 
                   <ul>
                    <li>Phone: 814-000-000</li>
                    <li>Email: sales@eriecommerce.com</li>
                   </ul>
                </div>        
            </div>
  

        <section id="footerAreatwo"><!--Beginning of Footer-->
            <div class="container">
                <div class="col-lg-6">
                   Copyright
                </div>   
                <div class="col-lg-6">
                   Developed By
                </div>        
            </div>
        </section><!--End of Footer-->

        
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
