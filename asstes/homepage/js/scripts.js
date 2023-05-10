
$(window).on('load', function(){
    $(".loadercard").css("display", "none");
});

$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".nav-item").on('click', function(event) {
      
     
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
       
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  $(document).on("scroll", function (event){
    var top = $( window ).height();
    var scrollPos = $(document).scrollTop();
    // console.log($("#section2_con_fluid").offset().top);
    // console.log("TOp : "+top);
    // console.log("Height : "+$( "#section2_con_fluid" ).height());
    var widget_height = $( "#section2_con_fluid" ).height();
    if(($("#section2_con_fluid").offset().top)<(top-widget_height)){
    $("#weblogtop").hide();
    }
    else{
      $("#weblogtop").show();
    }
    
    $('.navbar-collapse a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        // console.log(currLink.attr("href"));
        if(currLink.attr("href")=="#portfolio")
          return;
        else  
        if ((refElement.position().top-70) <= scrollPos && (refElement.position().top-70) + refElement.height() > scrollPos) {
            $('#menu-center ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
});
});


let visibilityIds = ['#counters_1']; 
// default counter class
let counterClass = '.counter';
// default animation speed
let defaultSpeed = 500; 






$(document).ready(function() {
  var counter = 0;

  // Start the changing images
  setInterval(function() {
    if(counter == 9) { 
      counter = 0; 
    }
    counter++;
  }, 10000);

  // Set the percentage off
  loading();
});


function loading(){
  var num = 0;

  for(i=0; i<=100; i++) {
    setTimeout(function() { 
      $('.loader span').html(`Loading (${num}%)`);

      if(num == 100) {
        loading();
      }
      num++;
    },i*120);
  };

}

$(document).ready(function(){
	var formInputs = $('input[type="email"],input[type="number"],input[type="text"]');
	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
	});
	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
		$(this).parent().children('p.formLabel').removeClass('formTop');
		}
		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo').removeClass('logo-active');
	});
	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});
	
	$(".job-apply-button").click(function(){
	    $(".job-form-container").removeClass('hidden');
	    $(".blur-back-image").css("display", "flex");
	    $(".blur-back-image").animate({opacity: "1"});
    });
    
    $(".blur-back-image, .form-close-btn").click(function(){
        $(".blur-back-image").animate({opacity: "0"});
    //     $(".job-form-container").animate({height: "0px"});
	    $(".job-form-container").addClass('hidden');
	    $(".blur-back-image").css("display", "none");
	    
    });
    
    $('.testimonial-slider').slick({
        nextArrow: '<button class="testimonial-slider-icon testimonial-slider-next"><svg fill="white" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "/></svg></button>',
        prevArrow: '<button class="testimonial-slider-icon testimonial-slider-pre"><svg fill="white" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "/></svg></button>'
        
    });
    
    // Restricts input for the set of matched elements to the given inputFilter function.
    (function($) {
      $.fn.inputFilter = function(callback, errMsg) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
          if (callback(this.value)) {
            // Accepted value
            if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
              $(this).removeClass("input-error");
              this.setCustomValidity("");
            }
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
          } else if (this.hasOwnProperty("oldValue")) {
            // Rejected value - restore the previous one
            $(this).addClass("input-error");
            this.setCustomValidity(errMsg);
            this.reportValidity();
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
          } else {
            // Rejected value - nothing to restore
            this.value = "";
          }
        });
      };
    }(jQuery));
    
    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }
    
    $("#job_form_submission").submit(function(e){
        $(".err_text").text('');
        let name = $("#job_form_name").val();
        let phone = $("#job_form_phone").val();
        let message = $("#job_form_message").val();
        let email = $("#job_form_email").val();
        let isValidate = true;
        
        if(name === ''){
            $("#job_form_name_err").text('Please enter name.');
            isValidate=false;
        }
        
        if(phone === ''){
            $("#job_form_phone_err").text('Please enter phone.');
            isValidate=false;
        }
        else{
            if(phone.length != 10){
                $("#job_form_phone_err").text('Please enter valid 10 digit phone.');
                isValidate=false;
            }
        }
        
        if(message === ''){
            $("#job_form_message_err").text('Please enter message.');
            isValidate=false;
        }
        
        if(email === ''){
            $("#job_form_email_err").text('Please enter email.');
            isValidate=false;
        }
        else{
            if(!(isEmail(email))){
                $("#job_form_email_err").text('Please enter valid email.');
                isValidate=false;
            }
        }
        
        if($("#job_form_cv")[0].files.length === 0){
            $("#job_form_cv_err").text('Please select your CV.');
            isValidate=false;
        }
        if(isValidate){
        var recaptcha = $("#g-recaptcha-response").val();
            if (recaptcha === "") {
              $("#job_form_recaptcha_err").text("Please check the recaptcha");
              isValidate=false;
            }
        }
        return isValidate;
    })
    
    $('.nospace_input').keypress(function( e ) {
        if(e.which === 32) 
            return false;
    });
    
    $('.valid_email').keyup(function( e ) {
        const value = $(this).val();
        if(value===''){
            $(this).removeClass('is-valid').removeClass('is-invalid');
            $(this).closest('div').find('.valid-feedback').text('');
            $(this).closest('div').find('.invalid-feedback').text('');
        }
        else if(isEmail(value)){
            $(this).addClass('is-valid').removeClass('is-invalid');
            $(this).closest('div').find('.valid-feedback').text('Valid Email');
            $(this).closest('div').find('.invalid-feedback').text('');
        }
        else if(!isEmail(value)){
            $(this).removeClass('is-valid').addClass('is-invalid');
            $(this).closest('div').find('.valid-feedback').text('');
            $(this).closest('div').find('.invalid-feedback').text('Please enter valid email.');
        }
    });
    
    $(".phoneinput").inputFilter(function(value) {
        return /^\d*$/.test(value);    // Allow digits only, using a RegExp
    },"Please use number key in phone number field");
    
    $(".phoneinput").keyup(function( e ) {
        if($(this).val()===''){
            $(this).removeClass('is-valid').removeClass('is-invalid');
            $(this).closest('div').find('.valid-feedback').text('');
            $(this).closest('div').find('.invalid-feedback').text('');
        }
        else if($(this).val().length!=10){
            $(this).removeClass('is-valid').addClass('is-invalid');
            $(this).closest('div').find('.valid-feedback').text('');
            $(this).closest('div').find('.invalid-feedback').text('Please enter valid phone number.');
        }
        else{
            $(this).addClass('is-valid').removeClass('is-invalid');
            $(this).closest('div').find('.valid-feedback').text('Valid Phone');
            $(this).closest('div').find('.invalid-feedback').text('');
        }
    });
    
    $("#contact_us_form").submit(function(){
        var is_valid = true;
        $( "#contact_us_form input, #contact_us_form textarea" ).each(function( index ) {
           if($(this).val()===''){
               is_valid=false;
               $(this).addClass('is-invalid').removeClass('is-valid');
               $(this).closest('.form-group').find('.valid-feedback').text('');
               $(this).closest('.form-group').find('.invalid-feedback').text('Please fill this '+$(this).attr('name')+' field');
           }
           else{
               if((!$(this).hasClass('valid_email'))&&(!$(this).hasClass('phoneinput'))){
                   $(this).removeClass('is-valid').removeClass('is-invalid');
                   $(this).closest('.form-group').find('.valid-feedback').text('');
                   $(this).closest('.form-group').find('.invalid-feedback').text('');
               }
               else{
                   if(!$(this).hasClass('is-valid'))
                    is_valid=false;
               }
           }
        });
        
        return is_valid;
    });
    
     $('.ourlogos').slick({
         slidesToShow: 6,
         speed: 250,
         autoplay: true,
        nextArrow: '<button class="ourlogos_logocard_cButtons ourlogos-slider-next"><svg fill="white" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "/></svg></button>',
        prevArrow: '<button class="ourlogos_logocard_cButtons ourlogos-slider-pre"><svg fill="white" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "/></svg></button>',
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 4,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
          }
        }
      ]
     });
});


// $(window).scroll(function(){ 
//   var offset = 0;
// var top = $(window).scrollTop();
// console.log($("#service_con_fluid").offset());
// console.log(top);

// });