Object.create = function ( o ) {

	 var args = arguments[1] || null; 

	 function F(s){
	 	
		if(o.__construct && typeof o.__construct == 'function' ){
			
			 var objects = o.__construct( args ); 
		     for( i  in objects ){

				F.prototype[ i ] = objects[i];

		     }
		}
	};
	F.prototype = o;
	return new F();

};