

$(document).ready(function(){

	contact.reset().init();
   	
});

var contact = {
		$contactus: $("#ContactUs"),
		$form: $('#contactForm'),
		$loading: $('#contact-loading'),
		init: function () {
			this.$contactus.click(function(e) {
				e.preventDefault();
				contact.removeMessage();
				contact.$form.fadeOut('fast',function(){
					contact.$loading.fadeIn('fast');
					$.ajax({
				        url        : $_LITE_.Application.GetApplicationURL('contact'), 
				        dataType   : 'json',
				        type	   : 'post',
				        data       : contact.gatherData(),
				        error      : contact.error,
				        success    : contact.success
				    });
				});

				
			});
		},
		
		error: function (obj) {
			contact.reset().hideLoading();
		},
		
		success: function (obj) {
			contact.reset().hideLoading();
			if( obj.SiteData.contact.success === true ){
				contact.$contactus.parent().append( $('<span class="contact-success" > message was sent successfully</span>'));
				
			}else{
				contact.$contactus.parent().append( $('<span class="contact-fail" > message was failed</span>'));
			}
			setTimeout(contact.removeMessage,3000);
		},
		
		gatherData: function() {
			var data = {
				name	: $("#name").val(),
				email	: $("#email").val(),
				notes	: $("#notes").val(),
				validate: true
			};
			return data;
		},
		reset: function(){
			contact.$form.find('input,textarea').val("");
			return this;
		},
		
		removeMessage: function(){

			$('.contact-success,.contact-fail').fadeOut('slow',function(){ $(this).remove() });
			
		},
		
		hideLoading: function(){
			contact.$loading.fadeOut('fast',function(){
				contact.$form.fadeIn('fast');
			});		
			return this;
		}
};


