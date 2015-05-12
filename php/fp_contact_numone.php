

<form id="contact-form" class="mc-fp-forms" action="" role="form" method="POST">
  <div id="mcbef1" class="form-group">

    <label for="inputName">Name</label>

    <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" required pattern="[a-zA-Z0-9 ]+"/>

  </div>
  
  <div id="mcbef2" class="form-group">

    <label for="business">Business</label>

    <input type="text" name="business" class="form-control" id="business" placeholder="Business Name" required />

  </div>

  <div id="mcbef3" class="form-group">

    <label for="email">Email</label>

    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required />

  </div>

  <div id="mcbef4" class="form-group">

    <label for="message">Message</label>

    <textarea class="form-control" id="message" name="message" placeholder="Additional Info" required  cols="4"></textarea>

  </div>

  <div id="mcbef6" class="form-group">

    <label>Are You Human</label>

    
    <div id="ply-capt" class="g-recaptcha" data-sitekey="6LeHowITAAAAAIZUYAl9IMQ-2W-JhDouEPy6sNq4"></div>

    <label id="ply-captcha" class="error" style="display:none;">Check The Box!</label>

    <label id="ply-captchaWait" class="error" style="display:none;">Please Wait The Form Is Being Submited</label>

  </div>

  

  <button id="formSubmit" type="submit" class="btn btn-success formButton" name="submit">Submit</button>

  

  <input type="hidden" name="form_submitted" value="">

</form>



<script type="text/javascript">

//validation rules
$(document).ready(function(){
    $("#contact-form").validate({
            rules: {
                name: {           //input name: fullName
                    required: true,   //required boolean: true/false
                    minlength: 5,       
                },
                email: {              //input name: email
                    required: true,   //required boolean: true/false
                    email: true       //required boolean: true/false
                },
                business: {            //input name: subject
                    required: true,   //required boolean: true/false
                    minlength: 2
                },
                message: {            //input name: message
                    required: true,
                    minlength: 1
                }

            },
            messages: {               //messages to appear on error
                name: {
                      required:"Please put your full name.",
                      minlength:"C'mon full name please."
                      },
                email: "Enter a valid email.",
                phone: {
                      required: "Enter your phone number",
                      minlength: "Enter a valid phone number"
                      },
                message: {
                      required: "What did you want to say?",
                      minlength: "Please complete your thoughts, then submit."
                      }

            },

            
      submitHandler: function(form) {
      
              var gresp = $("textarea#g-recaptcha-response").val();

              if( gresp == '' ){
                $('#ply-captcha').show( 400 );

                //alert('please tell us that you are human');
                
                setTimeout(function() {
                  $('#ply-captcha').hide( 400 );
                }, 5000);
                
                return false;

              } else {

                $('#ply-captchaWait').show( 400 );

              };



              jQuery.ajax({
                type: "POST",
                url: "http://www.myriadcore.com/php/mcfpforms_mail.php",
                data: $(form).serialize(),

                

                success: function() {
                    $(".mc-pan").removeClass("pan-trn");
					
					$.fn.clearForm = function() {
					  return this.each(function() {
						var type = this.type, tag = this.tagName.toLowerCase();
						if (tag == 'form')
						  return $(':input',this).clearForm();
						if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'email' )
						  this.value = '';
						else if (type == 'checkbox' || type == 'radio')
						  this.checked = false;
						else if (tag == 'select')
						  this.selectedIndex = -1;
					  });
					};
					
					$('form').clearForm();
					
					grecaptcha.reset();
					
					$('#ply-captchaWait').hide( 400 );
					
					$('#thanks').show();
					
			        var target = $('#ourgoogleservices');
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 600);
                    
                },
       
                error: function() {
                    alert('Message not sent. Try again and if you get this error again please contact MyriadCore using their email address info@myriadcore.com');
                }
              });
            
              return false;
          }




        }); 
});

</script>

