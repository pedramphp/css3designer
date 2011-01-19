var cssGenerator = { 
		
		borderWidth: function( px ){	return 'border-width:' + px + 'px;';			},
		borderStyle: function( style ){	return 'border-style:'+ style+';';				},
		get: function( type, value ){	return eval('cssGenerator.'+ type)( value );	},
		borderColor: function( color ){ return 'border-color:'+ color +';';				},
		borderRadius: function( radius ){
			
			return '-moz-border-radius:'+ radius +'px;'+
				   '-webkit-border-radius:'+ radius +'px;'+
				   'border-radius:'+ radius +'px;';
			
		},
		color: function( color ){		return 'color:' + color + ';';	},
		fontSize: function( fontSize ){	return 'font-size:' + fontSize + 'px;';	},
		boxTransform: function( degree ){
			return '-webkit-transform: rotate('+degree+'deg);'+
				   '-moz-transform: rotate('+degree+'deg);'+
				   '-o-transform: rotate('+degree+'deg);'
			
		},
		backgroundColor: function( color ){	return 'background-color:'+color+';';	},
		fontStyle: function( style ){		return 'font-style:'+style+';';			},
		textDecoration: function( decoration ){	return 'text-decoration:'+decoration+';';	},
		textTransform: function( transform ){	return 'text-transform:'+transform+';';		},
		letterSpacing: function( letterSpacing ){	return 'letter-spacing:'+letterSpacing+'px;';	},
		textShadow: function( ts ){
			var data = ts.split(" ");
			var sc = data[0];
			var hl = data[1];
			var vl = data[2];
			var br = data[3];
			
			return 'text-shadow:' + sc + ' ' + hl + 'px ' + vl + 'px '+ br + 'px;'+
				   	'DropShadow(Color='+sc+', OffX='+hl+', OffY='+vl+');';
		},
		width: function( width ){	return 'width:'+width+'px;';	},
		height: function( height ){	return 'height:'+height+'px;line-height:'+height+'px	;';	},
		boxShadow: function( ts ){
			var data = ts.split(" "),
				sc = data[3],
				hl = data[0],
				vl = data[1],
				br = data[2];
			return 'box-shadow:'+ hl + 'px ' + vl + 'px '+ br + 'px ' + sc +';'+
				   '-webkit-box-shadow:'+  hl + 'px ' + vl + 'px '+ br + 'px ' + sc +';'+
				   '-moz-box-shadow:'+  hl + 'px ' + vl + 'px '+ br + 'px ' + sc +';';
		},
		fontFamily: function( fontFamily ){	return 'font-family:'+fontFamily+';';	},
		fontWeight: function( fontWeight ){	return 'font-weight:'+fontWeight+';';	},
		linearGredient: function( lg ){
			
			var data = lg.split(" "),
				tc = data[0],
				bc = data[1];
			
			return 'background: -webkit-gradient(linear, 0 0, 0 bottom, from('+tc+'), to('+bc+'));'+
			'background: -moz-linear-gradient('+tc+', '+bc+');'+
			'background: linear-gradient('+tc+', '+bc+');';
		},
		padding: function( pd ){
			var args = pd.split(" ");
			switch( args.length ){
				case 2:
					return 'padding:' + args[0] + 'px ' + args[1] + 'px;';
				case 3:
					return 'padding:' + args[0] + 'px ' + args[1] + 'px '+ args[2] + 'px;';
				case 4:
					return 'padding:' + args[0] + 'px ' + args[1] + 'px '+ args[2] + 'px '+ args[3] + 'px;';	
			}
		}

};/* </ cssGenerator > */