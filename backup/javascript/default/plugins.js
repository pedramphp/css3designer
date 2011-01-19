
(function( $ ){
	$.fn.tab = function( options ){
		options = $.extend( {}, $.fn.tab.settings, options )
		return this.each(function(){
			var that = this,
				$dom= $(this),
				
				tab = {
					init: function(){
					  this.reset();
					  this.addEvents();
					  this.load();				
					},
					first: 	true,
					reset: function(){
						$dom.nextAll('section').hide(); 
					},
					
					addEvents: function(){   
						$dom.find('a').live( options.event,  $.proxy( tab, "activate" ) ); 
					},
				
					load: function(){
						this.activateTab( $dom.find('a:first') ); 
					},
					
					activateTab: function(){ 
						this.activate( null,arguments[0] ); 
					},
					
					activate: function( event,$a ){
						if( event ){ event.preventDefault(); }
						$a = $a || $(event.currentTarget);
						if( ($a.hasClass( options.activeClass ) && !this.first ) ||  $dom.siblings('section').filter(':animated').length !== 0 ){
							return false;
						}
						$dom.find( '.'+options.activeClass ).removeClass( options.activeClass );
						$a.addClass( options.activeClass );
						var activeId = $a.attr("href").split('#')[1];
						if(this.first){   $dom.nextAll('section#'+activeId ).slideDown(500); }
						else{
							$dom.nextAll('section:visible').fadeOut(500,function(){
								  $dom.nextAll('section#'+activeId ).fadeIn(500);
							});
						}
						options.tabsselect.call( $dom, $a );
						this.first = false;
					}
				};
						
			tab.init();
			
		});
	}
	$.fn.tab.settings = {
	  event: 	   'click',
	  activeClass: 'active',
	  tabsselect:  $.noop
	}
})(jQuery);


(function( $ ){
	$.fn.accordion = function( options ){
		options = $.extend( {}, $.fn.accordion.settings, options )
		return this.each(function(){
			var that = this,
				$dom= $(this),
				accordion = {
				   init: function(){
					  this.reset();	
					  this.addEvents();
					  this.load();
					},
					first: true,
					
					reset: function(){
					  $dom.find('> section').hide();
					},			
						
					addEvents: function(){
						$dom.find('> header > a').bind( options.event, $.proxy( accordion, "activate" ));
					},
					
					load: function(){
						this.activateTab( $dom.find('a:first').addClass( options.activeClass  ) );
					},
					
					activateTab: function(){ this.activate( null,arguments[0] ); },
					
					activate: function( event,$a ){

						var that = this;
						if( event ){event.preventDefault(); }
						$a = $a || $(event.currentTarget);
						var $section = $a.parent('header').next('section');
						if( ($a.hasClass( options.activeClass ) && !this.first) || $a.parent('header').siblings('section').filter(':animated').length !== 0 ){
							return false;
						}
						$dom.find('a.'+ options.activeClass ).parent().next('section')
							.animate({ height: 'toggle',opacity: 'toggle'},
									 {specialEasing: { height: 'easeInCirc' }, 
								      duration: options.speed , 
								      complete:function(){
										$dom.find( '.'+options.activeClass ).removeClass( options.activeClass );
										$a.addClass( options.activeClass );
										$section.animate({height: 'show'},{specialEasing: { height: 'easeOutCirc' },duration: options.speed });	
									  }
									 });
						this.first = false;
					}
				};	
			accordion.init();
		});
	}
	$.fn.accordion.settings = {
	  event:       'click',
	  activeClass: 'active',
	  speed:       300
	}
})(jQuery);


(function( $ ){
	$.fn.onoff = function( options, value ){
			
		if( typeof options != "string") { options = $.extend( {}, $.fn.onoff.settings, options ); }
		return this.each(function(){
			
			var dom = this,
				$dom= $(this),
				positionOn = "-215px top",
				positionOff = "-215px -15px",
				onoff = {
					init: function(){
					  if($dom.data('register')){
						  this.methodInit();
						  return;	
					  }
					  $dom.data('register',true);
					  this.addEvents();
					  this.load();				
					},
					
					methodInit: function(){
						if( typeof option != 'string'){
							this.turn( value ); 
							return;
						}
						switch(options){
							case "mode": 
								this.turn( value ); 
								break;
							
								
						}						
					},
					
					addEvents: function(){  
						$dom.bind( options.event,  $.proxy( this, "action" ) ); 
					},
				
					load: function(){
						var position = null;
						if(options.mode == "on"){ position = positionOn; } 
						else if(options.mode == "off"){ position = positionOff; } 
						$dom.css("background-position",position ).data( "on", true );
						options.load.call( $dom, $dom.data("mode") );
					},
					
					action: function( event ){
						event.preventDefault(); 
						event.stopImmediatePropagation();
						if( $dom.data("on") ){ this.turn( false ); }
						else{ this.turn( true ); }

					},

					turn: function( mode ){
						
						var mode = mode,
							position = (mode) ? positionOn : positionOff;
						this.updateDOM( mode, position );
						
					},
					
					updateDOM: function( mode, position  ){
						$dom.css( "background-position", position ).data( "on", mode );
						
						if( typeof options != "string") { options.change.call( $dom, mode ); }				
					}
				};
				onoff.init();
			
		});
	}
	$.fn.onoff.settings = {
	  event: 	'click',
	  mode: 	'on',
	  change:  $.noop,
	  load:    $.noop
	}
	
	$.fn.onoff.register = [];
})(jQuery);



jQuery.fn.center = function () {
	this.css("position","fixed");
    this.css("top", ( $('body').height() - this.height() ) / 2+$(window).scrollTop() + "px");
    this.css("left", ( $('body').width() - this.width() ) / 2+$(window).scrollLeft() + "px");
    return this;
}
