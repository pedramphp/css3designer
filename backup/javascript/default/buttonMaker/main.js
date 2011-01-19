$(document).ready(function(){
	
	var main = Object.create( ButtonMaker , getSettings() ); 
	main.initialize();
	
});
var getSettings = function(){
	/*
	var defaultStyle = {
			
		borderStyle:	 'solid',
		borderWidth:	 '3',
		borderColor:	 '#F578F5',
		borderRadius:	 '9',
		color:			 '#1F00E8',
		fontSize:		 '15',
		boxTransform:	 0,
		backgroundColor: '#FFFFFF',
		fontStyle:       'italic',
		textDecoration:  'none',
		textTransform:   'capitalize',
		text:            'myButton',
		letterSpacing:   2,
		textShadow:      '#01151A 1 4 7',
		boxShadow:       '0 0 50 #7971A6',
		fontFamily:      'Verdana',
		fontWeight:      'normal',
		linearGredient:  '#FFC2F5 #ED5656',
		padding:		 '10 20'
			
	};*/
	var defaultStyle = ( window.encodedDefaultButton !== undefined) ? $.deparam(window.encodedDefaultButton) : {

			borderColor: '#8378f5',
			borderRadius: '9',
			color: '#000000',
			fontSize: '14',
			backgroundColor: '#FFFFFF',
			fontStyle: 'normal',
			textDecoration: 'none',
			textTransform: 'capitalize',
			text: 'myButton',
			letterSpacing: 1,
			textShadow: '#659ba8 1 0 0',
			boxShadow: '2 3 4 #000000',
			fontFamily: 'Verdana',
			linearGredient: '#6397ff #0053a6',
			padding: '11 34'
	};
	

	
	var settings = {
			
			tabs: $('#button-tabmenu'),
			link: {
				tab:    $('#tab-link'),
				button: $('#linkPreview'),
				style:  defaultStyle
			},
			hover: {
				tab:    $('#tab-hover'),
				button: $('#hoverPreview'),
				style:  defaultStyle
			},
			active: {
				tab:    $('#tab-active'),
				button: $('#activePreview'),
				style:  defaultStyle
			},
			visited: {
				tab:    $('#tab-visited'),
				button: $('#visitedPreview'),
				style:  defaultStyle
			}
			
	},
	commonSettings = function( $sel ){
		
		return{
			accordion: $sel.find('.button-accordion'),
			border: {
				borderWidth:  $sel.find('.borderWidth'),
				borderStyle:  $sel.find('.borderStyle'),
				borderColor:  $sel.find('.borderColor'),
				borderRadius: $sel.find('.borderRadius')
			},
			text:{
				color:         $sel.find('.textColor'),
				fontSize:      $sel.find('.fontSize'),
				fontStyle:     $sel.find('.fontStyle'),
				decoration:    $sel.find('.textDecoration'),
				transform:     $sel.find('.textTransform'),
				text:		   $sel.find('.text'),
				letterSpacing: $sel.find('.letterSpacing'),
				textShadowHl:  $sel.find('.textShadowHl'),
				textShadowVl:  $sel.find('.textShadowVl'),
				textShadowBr:  $sel.find('.textShadowBr'),
				textShadowSc:  $sel.find('.textShadowSc'),
				fontFamily:    $sel.find('.fontFamily'),
				fontWeight:    $sel.find('.fontWeight')
			},
			background:{
				color:            $sel.find('.backgroundColor'),
				linearGredientTC: $sel.find('.linearGredientTC'),
				linearGredientBC: $sel.find('.linearGredientBC')
			},
			box:{
				width:       $sel.find('.width'),
				height:      $sel.find('.height'),
				transform:   $sel.find('.boxTransform'),
				boxShadowHl: $sel.find('.boxShadowHl'),
				boxShadowVl: $sel.find('.boxShadowVl'),
				boxShadowBr: $sel.find('.boxShadowBr'),
				boxShadowSc: $sel.find('.boxShadowSc'),
				paddingVertical: $sel.find('.paddingVertical'),
				paddingHorizontal: $sel.find('.paddingHorizontal')
				
			}
		}
	}
	
	jQuery.extend( settings.link,    commonSettings( settings.link.tab )    );
	jQuery.extend( settings.hover,   commonSettings( settings.hover.tab )   );
	jQuery.extend( settings.active,  commonSettings( settings.active.tab )  );
	jQuery.extend( settings.visited, commonSettings( settings.visited.tab ) );
	
	
	return settings;

} /* </ getSettings() >*/

