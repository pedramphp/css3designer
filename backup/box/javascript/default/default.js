$(document).ready(function(){
	
	core.activateLinks()
		.gotop()
		.animateFooterLinks()
		.animateButtonMaker()
		.animatedCopyright()
		.tweets();

});

var core = {
		activateLinks: function(){
			
			$('.js-link').click(function(){
				window.location.href = $(this).data('url');
			});
			return this;
		},	
		
		gotop: function(){
			$('.gotop').click(function(){
				$.gotop();		
			});
			return this;
		},
		
		animateFooterLinks: function(){
			$('#footer-links li:not([class=footer-title]):has(a)')
				.css('position','relative')
				.hover(function(){
					  $(this).stop( true ).animate({ left: 10 });
				}, function(){
					  $(this).animate({ left: 0 });
				});		
			return this;
		},
		
		animatedCopyright: function(){
			var writing = false,
				$copyright = $(".copyright-txt"),
				$copyrightHtml = $copyright.html()
		
			$(window).scroll(function(){
				if( (Math.abs( $(window).scrollTop() - $copyright.offset().top ) > 800) || writing === true ){ return false; }
				writing = true;
				core.animatedText( 
						$copyright,   
						function( pct ){ if( pct == 1 ){ writing = false; } },
						function( $elem ){$elem.html( $copyrightHtml ); }
				);
			});
			return this;
		},
		
		animateButtonMaker: function(){
			
			$(".button-maker-preview li").each(function(){
				var oldHtml = $(this).html();
				core.animatedText( $(this) ,$.noop,function($elem ){ $elem.html( oldHtml ); });
			})
			return this;
		},
		
		animatedText: function( $elem, stepCallback, completeCallback ){
	
			  var text = $elem.text();
			  $elem.css({ percentage: 0 }).empty()
			   .animate({ percentage: 1 }, 
					   {
				   		duration: 1000,
				   		step: function( pct ) {
					    	var chars = parseInt( text.length * pct );
					    	$elem.text( text.slice( 0, chars ) );
					    	if( pct == 1 ){ writing = false; }
							if( $.isFunction(stepCallback)){
								stepCallback.call( core,pct );
							}					    	
					   },
					   complete: function(){
						   if( $.isFunction(completeCallback)){
							   completeCallback.call(core,$elem);
						   }
					   }
			    });			
			
		},
		
		tweets: function(){
			
			var articles = $('.tweet-bx article'),
				articleLength = articles.length,
				
				generateLinks = function(){
					var replace,
						match,
						twitterSearch = "http://twitter.com/#!/search?q=";
					
					articles.each(function(){
						$(this).html(function(index, text){
	
							var matches = text.match(/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/gi);
							
							if(matches !== null){
								for( var i=0; i < matches.length; i++ ){
									
									match = matches[i];
									replace =  "<a href='"+ match  + "'>" + match + "</a>";
									text = text.replace(match,replace );							
								}
							}
							
							matches = text.match(/#[\w]+/gi);
							if(matches !== null){
								for( var i=0; i < matches.length; i++ ){
									match = matches[i];
									replace =  "<a href='"+ twitterSearch+ encodeURIComponent("#") + match.split("#")[1]  + "'>" + match + "</a>";
									text = text.replace(match,replace );							
								}
							}
							return text;
						});
					});
				}();
			
			function next( e ){
				e.preventDefault();
				$('.tweet-bx').find('article:visible').fadeOut(500,function(){
					var that = $(this);
					var $elem = ( articleLength - 1 == articles.index(that) ) ? articles.first() : that.next();
					$elem.fadeIn( 500 );
				});
			}
			
			function prev( e ){
				e.preventDefault();
				$('.tweet-bx').find('article:visible').fadeOut(500,function(){
					var that = $(this);
					var $elem = ( 0 == articles.index(that) ) ? articles.last() : that.prev();
					$elem.fadeIn( 500 );
				});				
			}
			
			$('.tweet-bx .nxt').click( next );
			$('.tweet-bx .prv').click( prev );
			
		}
};



