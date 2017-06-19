
jQuery(document).ready(function(){

	$('#contactform').submit(function(){

		var action = $(this).attr('action');
		var name = $('#name').val();
		var email = $('#email').val();
	var phone = $('#phone').val();
	var find =$('#find').val();
	var country = $('#country').val();
	var company =$('#company').val();
		var verify = '';
		$.ajax({
    url: "https://docs.google.com/a/near.co/forms/d/e/1FAIpQLSfYwwJ-3ugTUCz-NH6h9vEAHkXwpZZQYQ7-tG53UI47XuvToQ/formResponse",
   data: { 
   "entry_710770568": name,
   "entry_863893022": email,
   "entry_257454762": phone,
   "entry_3153749":find,
    "entry_1168262239": company,
   "entry_1157887187": country
    	
   },
  type: "POST",
    crossDomain: true,
   dataType: "xml",
     statusCode: {

       }
  });
		$("#message").slideUp(750,function() {
		$('#message').hide();

 		$('#submit')
			.after('<img src="../assets/images/loader.gif" class="loader" />')
			.attr('disabled','disabled');
var $boxes = $('input[name=verify]:checked');
$boxes.each(function(){
    verify = 'yes';
});
		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			company: $('#company').val(),
			country: $('#country').val(),
			find: $('#find').val(),
			comments: $('#comments').val(),
			verify: verify
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});

});

(function($){
	
	"use strict";
	
    $(document).ready(function(){
		
		/* Parallax Effect
		================================================== */
		$('.parallax .parallax-banner-1').parallax("50%", 0.2);
		$('.newsletter').parallax("50%", 0.2);

	});
})(jQuery);