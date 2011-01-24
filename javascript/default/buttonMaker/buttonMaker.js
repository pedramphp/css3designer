
var ButtonMaker = {
	__construct: function( settings ){
		var pa = {
			initialize: function(){
				this.reset();
				this.onoff();
				for(var tabName in settings ){	
					if( tabName != 'tabs' ){
							this.initStyle( tabName );
							this.tabs[tabName] = Object.create( GenerateSingleTab, settings[ tabName ] );
							this.tabs[tabName].initialize( tabName );
					}
				}
				this.updateStyles();
				settings.tabs.tab({
					tabsselect: function( ui ){
					    // show the appropriate button in the preview section
						var label = ui.attr("href").split('#tab-')[1]+'Preview';
						$("#button-preview a:not([id = "+label+"])").removeClass("showInline").addClass("hide");
						$("#button-preview a[id = "+label+"]").removeClass("hide").addClass("showInline");
				 	}
				});
				this.scrollButtonPreview();
				
				this.codeGenerator();
				this.showButtonMaker();
				this.listenApplyAll();
			},
			tabs: {},
			generatedCode: null,
			styleString: null,
			styleObject: {},
			styleObjectString: {},
			buttonId: '#button',
			excludedValues: ['text'],
			styleStringPreview : '',
			codeGenerator:function(){
				$('#button-code-box').center();
				$('#button-get-code').bind('click',this.showCodeHandler );	
				$('#button-share').bind('click',this.buttonShare );	
				$('#button-code-box a.close').bind('click',this.hideCodeHandler );
			},
			reset: function(){
				window.scrollTo(0,0);
			},
			setStyle: function(  type, label, style, remove ){		
				this.applyAll(type);
				if( ! this.styleObject[type] ){ // I think this line is unnecessary...
					this.styleObject[type] ={}; 
				}
				if( remove ){ 	
					delete this.styleObject[type][label]; 
				}
				else{ this.styleObject[type][label] = style; }
				this.updateStyles();
			},
			
			updateStyles: function(){		
				this.styleString = ''; 
				this.styleStringPreview = '';
				this.styleObjectString = {};
				for(var type in this.styleObject ){
					this.setStyleString( type );
					this.setStyleObjectString( type );			
				}
				$('#button-code-box .prettyprint').data('code',this.styleStringPreview);
			},
			
			setStyleString: function( type ){
			
				this.styleString += this.buttonId + ':'+type+'{';
				this.styleStringPreview += this.buttonId + ':'+type+'{'+'<br/>';
				var str = '';
				var counter = 1;
				for(var row in this.styleObject[ type ]){
					this.styleString += this.styleObject[ type ][ row ];
					str = this.styleObject[ type ][ row ].replace(/;/g,";<br />\t");
					if( counter == 1){ str = '\t'+str; }
					this.styleStringPreview +=  str;
					counter++;
				}
				this.styleString += '}';
				this.styleStringPreview +=  '}'+'<br/><br/>';
				
		
			}, 
				
			getStyleStringByType: function( type ){
				return this.styleObjectString[ type ];
			},
				
			initStyle: function( type ){
				this.setStyleObject( type );
				this.setStyleObjectString( type );		
			},
			
			setStyleObject: function( type){
					
				this.styleObject[ type ] = {};
				for( var i in settings[ type ].style ){
					if( jQuery.inArray( i, this.excludedValues) == -1  ){
						this.styleObject[ type ][ i ] = cssGenerator.get( i, settings[ type ].style[i] );
					}
				}
					
			}, 
				
			setStyleObjectString: function( type ){
				
				for(var row in this.styleObject[ type ]){
				
					if( !this.styleObjectString[ type ] ){ this.styleObjectString[ type ] = ''; }
						this.styleObjectString[ type ] += this.styleObject[ type ][ row ];
					}
			},
			
			scrollButtonPreview: function(){
		
				var previewHeight = 350,
					windowHeight = $(window).height(),
					scrolling = false,
					buttonPreview = $('#button-preview'),
					scrollActivate = true; 	

				$(window).scroll(function(){ 
					if( scrollActivate ){
						scrollActivate == false;
						setInterval(scrollBox,1000);
					}
				});
				
				function scrollBox(){
					if( scrolling ){ return; }
					scrolling = true;
					var minHeight = buttonPreview.data("top"),
					top = buttonPreview.data("top"),
					scrollTop = $(window).scrollTop();
					maxHeight = $('#button-controller').height();
					
					if( scrollTop > maxHeight ){ top = maxHeight; }
					else if(previewHeight < windowHeight && scrollTop != 0) {
						top = Math.floor((windowHeight - previewHeight)/2) + scrollTop;
				    }
					
					if( top < minHeight ){ top = minHeight }
					else if( top > maxHeight ){ top = maxHeight; }
					buttonPreview.stop().animate({top:top},500,function(){
				    	scrolling = false;
				    });
				}
			},
			
			onoff: function(){
				$('.onoff').onoff({
					change: this.onoffChange
				});
				
			},

			
			onoffChange: function( mode ){
				var fading = false;				
				  if( fading ){ return; }
				  fading = true;
				  var that = $(this),
				  	  data = that.data();
				  if( data.lineargredient ){
					  linearGredient( fading, that, mode);
				  }
				  
			     function linearGredient( fading, $that, mode ){
			    	  var tabId = $that.parents('.tab-content').attr("id").split('tab-')[1],
					  	  fieldset = $that.parents('fieldset'),
					  	  cnt = $that.parents('.button-accordion-content'),
					  	  invokeAction = function( method,mode){
						     fading = false; 
						  	 $that.onoff('mode',mode);
						  	 eval("pa.tabs."+tabId+".$backgroundObject.disable"+method+"();");						  
					  	  },
					  	  len=0,
					  	  on = $("<div class='offBackground'></div>").hide(),
					  	  off = $("<div class='offText'> Linear Gredeint is <span>off</span></div>").hide();
						  
					  if( mode ){ // turn on
						  	fieldset.children('.offText').remove();
						  	len = fieldset.children(':not(:first)').length;
						  	fieldset.children(':not(:first)').fadeIn(500,function(){ 
						  		$(this).removeClass('hide');
						  		len--;
						  		if(len != 0 ){ return; }
						  		invokeAction( "BackgroundColor" , true);
						  		cnt.append(on.fadeIn(500)); 
						  	});
					  }else{ // turn off
						   cnt.children('.offBackground').remove();
						   len = fieldset.children(':not(:first)').length;
						   fieldset.children(':not(:first)').fadeOut(500,function(){
							   $(this).addClass("hide");
							  len--;
						  	  if(len != 0 ){ return; }
							  fieldset.append( off.fadeIn(500,function(){ 
							  		invokeAction( "Gredient" , false);
							  })); 
						  });
					  } 
				}
			},
			

			
			showCodeHandler: function(){
				
				$('#button-code-box .prettyprint').html( $('#button-code-box .prettyprint').data('code') ); 
				prettyPrint(function(){
					
				   $("<div class='popup-overlay' />").css({
						height:     $('body').height(),
						width:      $('body').width()
					}).appendTo('body');
				   
					$('#button-code-box').toggle();
				});
				
				// clipboard code trigger
				pa.setClipboard();
				
			},
			
			hideButtonMaker: function( func ){
				$('#button-maker').fadeOut(400).addClass('hide');
				$('#button-maker-loading').fadeIn( func );
			},
			
			buttonShare: function(event){
	
				pa.hideButtonMaker(function(){
					
					var shareButton = {
							
							ajax: function(){
								$.ajax({
							        url        : $_LITE_.Application.GetApplicationURL('tools'), 
							        dataType   : 'json',
							        type	   : 'post',
							        data       : shareButton.getData(),
							        error      : shareButton.error,
							        success    : shareButton.success
								});					
							},
							
							getData: function(){
								var data = { 
										cssCode: $('#button-code-box .prettyprint').data('code'),
										buttonResult: {}, 
										shareIt: true 
								},tab;
								
								settings.tabs.find('a').each(function(){
									tab = $(this).attr('href').split('#tab-')[1];
									data.buttonResult[ tab ] = pa.applyAll( tab  );
								});					
								return data;
							},
							
							error: function( msg ){
								pa.alertMsg( msg || "Unfortuantely we had some Issues with this request.",false );
							},					
							
							success: function( json ){
								if(json.SiteData.buttonMaker === true){
									pa.alertMsg( "Congraduations, your button has been successfully shared.",true );
								}else{
									shareButton.error( json.SiteData.buttonMaker.errorMsg );
								}
								
							}
					};
					shareButton.ajax();
					
				});
			},	
			
			
			showButtonMaker: function(){
				
				$('#button-maker-loading').fadeOut(function(){
					$('#button-maker').removeClass('hide').hide().fadeIn(400);
				});
			},
			

			hideCodeHandler: function(){
				$('#button-code-box').hide();	
				$('.popup-overlay').remove();
			},
			
			setClipboard: function(){
			
				var isFlashInstalled = document.documentElement.className == 'flash';
				var webClip = $('#button-code-box a.clipboard'),
					zc = new ZeroClipboard.Client();
				if (isFlashInstalled) {
					zc.glue( webClip[0], webClip[0].parentNode );
					zc.addEventListener( 'mouseDown', (function(){
				    	return function(client) {
				    		var text = $('#button-code-box .prettyprint').data('code');
				    		text = text.replace(/\<br(\s*)\/\>/g,''); // strip comments
			    		    zc.setText( text );
			    		    $(webClip).fadeOut(50).fadeIn(300)
			    		}
			    	})());  
				}
			},
			
			listenApplyAll: function(){
				var self = this;
				$('.button-maker-apply-all').click(function(){
					var type = settings.tabs.find('.active').attr('href').split('#tab-')[1];
					var $input = $("<input type='hidden' name='defaultButton'/>").val( self.applyAll(type) );
					$input.appendTo( $(this) );
					$(this).submit();
				})
			},
			
			applyAll: function( type ){
				var styleObj = {};
				for( attribute in this.styleObject[ type ]){
					styleObj[attribute] = this.styleObject[ type ][attribute].split(';')[0].split(':')[1].replace(/px/mgi,""); 
					switch( attribute ){
						case "linearGredient":
							styleObj[attribute] = styleObj[attribute].match(/#[0-9a-zA-Z]+/mgi).join(' ');
							break;
						case "boxTransform":
							styleObj[attribute] = parseInt( styleObj[attribute].match(/\d+/mgi)[0] );
							break;
					}
				}
				return $.param(styleObj);
				
			},
			
			alertMsg: function( msg, success ){
				var colorClass  = (success === true)? "alertSuccess":"alertError",
					alertDiv = $("<div class='alertBox "+colorClass+"'/>").html( msg ).hide();
				
					alertDiv.insertBefore($(".button-maker-apply-all"));
					$('#button-maker-loading').fadeOut(function(){
						alertDiv.show(400).delay(1000).hide(400,function(){ $(this).remove(); 
						pa.showButtonMaker(); });					
					});

				
			}
			
		
		}; /* </ pa > */			
		
			
			
			
		var GenerateSingleTab = {
				
					
			__construct: function( tabSettings ){
					
				var type = null,
					defaultColor = '#FFFFFF',
					defaultNumber = 0,
				setStyle = function( label, style,remove ){
					pa.setStyle( type, label, style, remove );
					setButtonPreviewStyle();
				},
				
				setButtonPreviewStyle = function(){
					tabSettings.button.attr( 'style', pa.getStyleStringByType( type ) );
				}
				return {
					$tabsObject: null,
					$accordionObject: null,
					
					initialize: function( tabName ){
						type = tabName;
						// initialize the style for the button once it loads
						setButtonPreviewStyle();
						this.initializeObjects();
						this.loadObjects();
					},
					
					initializeObjects: function(){
						this.$tabsObject 	     = this.getTabs();
						this.$accordionObject    = this.getAccordion();
						this.$borderObject 		 = this.getBorder();
						this.$textObject 		 = this.getText();
						this.$backgroundObject   = this.getBackground();
						this.$boxObject   		 = this.getBox();
					},
					
					loadObjects: function(){
						this.$tabsObject.load();
					},
					
					
					/****************************************
					 * 
					 * 			< Object Creation >
					 * 
					 ****************************************/
							
					getTabs: function(){
						var that = this;
						return { 
							load: function(){
								that.$accordionObject.load();
							}
								
						};
					},
					
					getAccordion: function(){
						var that = this,
						accordion = tabSettings.accordion;
							return {
								load: function(){	
									that.$boxObject.load();
									that.$borderObject.load();
									that.$textObject.load();
									that.$backgroundObject.load();
									accordion.accordion();
								}
							};
					},
					
					getBorder:function(){						
						var that = this;
						return {
							load: function(){ 	
								that.select( tabSettings.border.borderStyle, tabSettings.style.borderStyle,'borderStyle');
								that.colorPicker( tabSettings.border.borderColor, tabSettings.style.borderColor || defaultColor, 'borderColor');
								that.slider( tabSettings.border.borderWidth, tabSettings.style.borderWidth || defaultNumber , 'borderWidth', 0, 10 );
								that.slider( tabSettings.border.borderRadius, tabSettings.style.borderRadius || defaultNumber, 'borderRadius',0,45 );
										
							} /* </ load > */
						}		
					}, /* </ getBorderRadius > */
					
					getBox: function(){
								
						var that = this;
						return {
							boxShadowCallback: function(){
								var box = tabSettings.box,
									remove = false,
									value = 
										box.boxShadowHl.slider( "value" )+' '+
										box.boxShadowVl.slider( "value" )+' '+
										box.boxShadowBr.slider( "value" )+' '+
										box.boxShadowSc.data('backgroundColor');	
								if( box.boxShadowHl.slider( "value" ) == 0 && 
									box.boxShadowVl.slider( "value" ) == 0 &&
									box.boxShadowBr.slider( "value" ) == 0 ){ remove = true; }
								setStyle( 'boxShadow', eval("cssGenerator.boxShadow('"+value+"')"), remove );
							},
							
							paddingCallback: function(){
								var box = tabSettings.box,
								    remove = false,
									value = 
										box.paddingHorizontal.slider( "value" )+' '+
										box.paddingVertical.slider( "value" );
								if( box.paddingHorizontal.slider( "value" ) == 0 && 
									box.paddingVertical.slider( "value" ) == 0){ remove = true; }								
								setStyle( 'padding', eval("cssGenerator.padding('"+value+"')"), remove );							
							},
							
							load: function(){
								var box = tabSettings.box,
									style = tabSettings.style;
								
								that.slider( box.transform, style.boxTransform || defaultNumber,'boxTransform',0,360 );
								
								var paddings = style.padding.split(" ") || [];
								that.slider( box.paddingHorizontal, paddings[0] || defaultNumber, 'padding', 0, 100 );
								that.slider( box.paddingVertical, paddings[1]  || defaultNumber, 'padding', 0, 84);

								var styles = style.boxShadow.split(" ") || [];
								that.slider( box.boxShadowHl, styles[0] || defaultNumber, 'boxShadow', 0, 20 );
								that.slider( box.boxShadowVl, styles[1] || defaultNumber, 'boxShadow', 0, 20 );
								that.slider( box.boxShadowBr, styles[2] || defaultNumber, 'boxShadow', 0, 100);
								that.colorPicker( box.boxShadowSc, styles[3] || defaultColor ,'boxShadow'); 
								
							}
						}
					},/* </ getBox > */
					
					getText: function(){
								
						var that = this,
							text = tabSettings.text.text
						
						return {
							textShadowCallback: function(){
								var text = tabSettings.text,
							    remove = false,
								value = 
									text.textShadowSc.data('backgroundColor')+' '+	
									text.textShadowHl.slider( "value" )+' '+
									text.textShadowVl.slider( "value" )+' '+
									text.textShadowBr.slider( "value" );
								
								if( text.textShadowBr.slider( "value" )== 0 &&
										text.textShadowHl.slider( "value")  == 0 &&
										text.textShadowVl.slider( "value" )  == 0 ){ remove = true; }
								
									setStyle( 'textShadow', eval("cssGenerator.textShadow('"+value+"')"), remove );

							},

							load: function(){ 
								that.colorPicker( tabSettings.text.color, tabSettings.style.color || "#000000",'color');
								that.slider( tabSettings.text.fontSize, tabSettings.style.fontSize,'fontSize',10,30 );
								that.select( tabSettings.text.fontStyle, tabSettings.style.fontStyle,'fontStyle');
								that.select( tabSettings.text.decoration, tabSettings.style.textDecoration || "none",'textDecoration');
								that.select( tabSettings.text.transform, tabSettings.style.textTransform || "lowercase",'textTransform');
								that.select( tabSettings.text.fontFamily, tabSettings.style.fontFamily || "Arial",'fontFamily');
								that.select( tabSettings.text.fontWeight, tabSettings.style.fontWeight || "Normal",'fontWeight');
								tabSettings.button.text( tabSettings.style.text );
								text.val( tabSettings.style.text );
								text.bind('keyup',function(){ tabSettings.button.text( this.value ) });
								that.slider( tabSettings.text.letterSpacing ,tabSettings.style.letterSpacing,'letterSpacing',0,20 );
								
								var styles = tabSettings.style.textShadow.split(" ");
								that.slider( tabSettings.text.textShadowHl , styles[1],'textShadow',0,20 );
								that.slider( tabSettings.text.textShadowVl ,styles[2],'textShadow',0,20 );
								that.slider( tabSettings.text.textShadowBr , styles[3],'textShadow',0,20);
								that.colorPicker( tabSettings.text.textShadowSc,styles[0],'textShadow');
							} /* </ load > */
						}	
					},
					
					getBackground: function(){
						var that = this;
						
						return {
									
							linearGredientCallback: function(){
								var value = 
									tabSettings.background.linearGredientTC.data('backgroundColor')+' '+	
									tabSettings.background.linearGredientBC.data('backgroundColor');
								
								setStyle( 'linearGredient', eval("cssGenerator.linearGredient('"+value+"')") );									
									
							},
							
							disableGredient: function(){
								setStyle( 'linearGredient', null, true );	
							},
							
							disableBackgroundColor: function(){
								setStyle( 'backgroundColor', null, true );
							},
							
							load: function(){
								that.colorPicker( tabSettings.background.color, tabSettings.style.backgroundColor || defaultColor,'backgroundColor');										
								var style;	
								if( !tabSettings.style.linearGredient ){ 
									$(tabSettings.background.linearGredientTC).parents('fieldset').find('.onoff').onoff({change: pa.onoffChange},false);
									styles = "#ffffff #ffffff".split(" "); 
								}else{	
								  styles = tabSettings.style.linearGredient.split(" ");
								  $(tabSettings.background.linearGredientTC).parents('fieldset').find('.onoff').onoff({change: pa.onoffChange},true);
								}
								that.colorPicker( tabSettings.background.linearGredientTC,styles[0],'linearGredient');										
								that.colorPicker( tabSettings.background.linearGredientBC, styles[0],'linearGredient');
							}
						}
					},
					
					colorPicker: function( $sel, defaultValue,type ){
						var that = this;
						var colorOnChange = function( hsb, hex, rgb ){
							$sel.find('>div >div').css('backgroundColor', '#' + hex);
							$sel.data('backgroundColor','#' + hex);
							switch( type ){
								case  'textShadow': 
									that.$textObject.textShadowCallback(); return;
								case 'boxShadow' :
									that.$boxObject.boxShadowCallback(); return;
								case 'linearGredient' :
									that.$backgroundObject.linearGredientCallback(); return;
								
							} 
							setStyle( type, eval("cssGenerator."+type+"('#"+hex + "')" ) );
						},
						colorSettings = {
								color: defaultValue,
								onChange: colorOnChange
						};
						
						$sel.find('>div >div').css('backgroundColor', defaultValue );
						$sel.data('backgroundColor',defaultValue);
						$sel.find('>div:eq(0)').ColorPicker( colorSettings );
						
					},
					
					slider: function(  $sel, defaultValue, type, min, max){
						
						var that= this,
						slideEvent = function( event, ui ){
							
							$(ui.handle).find('.sliderVal').text( ui.value );
							switch( type ){
								case  'textShadow': 
									that.$textObject.textShadowCallback(); return;
								case 'boxShadow' :
									that.$boxObject.boxShadowCallback(); return;	
								case 'padding' :
									that.$boxObject.paddingCallback(); return;
								case 'borderWidth':
									if(ui.value == 0){ 
										tabSettings.border.borderStyle.find("option[value=none]").attr("selected","selected").trigger("change"); 
									}else if( tabSettings.border.borderStyle.find("option[value=none]").is(":selected") ){
										tabSettings.border.borderStyle.find("option[value=solid]").attr("selected","selected").trigger("change"); 
									}
							}
							setStyle( type, eval("cssGenerator."+type+"("+ui.value+")" ), !ui.value );
						},
						
						sliderSettings = {
							 value: defaultValue,
							 min:   min,
							 max:   max,
							 step:  1,
							 slide: slideEvent,
							 change: slideEvent	
						};	
						$sel.slider( sliderSettings );
						$("<span class='sliderMin slideMinMax'>"+min+"</span>"+
						  "<span class='sliderMax slideMinMax'>"+max+"</span>").appendTo( $sel );

						$sel.find('a').append($("<span class='sliderVal'>"+ defaultValue +"</span>"));
					},
					
					select: function( $sel, defaultValue,type ){
						$sel.find('option[value='+defaultValue+']').attr('selected','selected');
						$sel.bind("change keyup",function(){
							var remove = false;
							if( this.value == 'none' ||  this.value == '' || this.value == 'normal' ){ remove = true;}
							setStyle( type,eval("cssGenerator."+type+"('"+this.value+"')" ),remove );							
						});
					}
							
					/****************************************
					 * 
					 * 			< / Object Creation >
					 * 
					 ****************************************/
					
				};
					
			} /* </ __construct > */
				
					
		}; /* </ GenerateSingleTab > */
			
	return pa;
			
			
	} /* </ __construct > */
		
}; /* </ buttonMaker > */
