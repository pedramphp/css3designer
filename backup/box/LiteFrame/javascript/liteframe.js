 // JavaScript Document
/*
    :: http://inventory.vortalgroup.com 
    :: core.js - javascrip singleton OOP( jQuery Library 1.3.1 )
    :: All Code and design by Scott Haselton and Seyed-Mahdi PedramRazi
    :: Version 1.0 - Oct 2009
    :: Email : pedramphp@gmail.com
	:: Email : shaselton@gmail.com

*/


if (!this.console) { var console = {log:function(){}}; }


Function.prototype.method = function(name, fn) {
  this.prototype[name] = fn;
  return this;
}; 

$_LITE_  || ($_LITE_= {});



(function($L){
	
	
	
		
	$L.Initialize = function(){
		
		$L.SetVariables();
		$L.Application.init();  
	};
	
	/*---------------------------*
	 * ***************************
	 *   < VARIABLE PROCESSING  >
	 * ***************************
	 *---------------------------*/
	
			 /**********************
			 *  SET YOTTA VARIABLES *
			 ************************/   	
			$L.SetVariables = function(){
				  $L.vars = {};
				  $L.vars.applicationPath  = $L.applicationPath;			  
				  $L.vars.javascriptPath 		= $L.javascriptPath;
				  $L.vars.javascriptLibraryPath = $L.javascriptLibraryPath;
				  $L.vars.javascriptModulePath 		= $L.javascriptModulePath;			  
				  $L.vars.stylePath 		= $L.stylePath;
				  $L.vars.styleLibraryPath  = $L.styleLibraryPath; 	  
				  $L.vars.imagePath = $L.imagePath;		
				  $L.vars.action = $L.action;
			};
			
			/**********************
			 *  GET YOTTA VARIABLES *
			 ************************/     	
			 $L.GetVariables = function(){ return $L.vars; 	 }	
			 
			/************************
			 *  GET YOTTA VARIABLE  *
			 ************************/     	
			 $L.GetVariable = function($var){ return $L.vars[$var]; 	 }				 

			 
			/**********************
			 *  GET YOTTA Action Variable *
			 ************************/     	
			 $L.GetActionVariables = function(){ return $L.yActionJson; 	 }

			/**********************
			 *  GET YOTTA REQUEST VARIABLE *
			 ************************/
			 $L.GetRequestVariable = function($var){ return $L.Request[$var]; 	 }
			 
	/*---------------------------*
	 * ***************************
	 *   </ VARIABLE PROCESSING  >
	 * ***************************
	 *---------------------------*/

			 
			 
	/*******************************************************************
	Function: IsObjEmpty
	Inputs: Any type of javascript object
	Output: return true if the obj has anything in it, otherwise false.
	********************************************************************/   
	$L.IsObjEmpty = function(obj){
	       
	    for(var i in obj){ return false;}
	    return true;
	   
	 };  
	 
	 $L.noop = function(){};
	
	 $L.getArguments = function( args){
		 
		 if(typeof args[0] == 'object' ){ args = args[0];  }
		 return args;
		 
	 };
	

	
	/*****************************************************************************
	*                        Application Object                                  *
	*****************************************************************************/
	  //$L.Application.GetApplicationURL('',{ action :"loadCharacterDropdown" })
	    $L.Application = {};
	    $L.Application.Path  =  '';
	    $L.Application.File  =  'index.php';
	    $L.Application.init  =  function(){ this.Path = $L.applicationPath;  };
	    $L.Application.GetApplicationURL = function(action, parameters){
	                
	                var valuePairs = [];
	                if (action) { valuePairs.push('action='+action); }
	                for (var property in parameters) { valuePairs.push(property + '=' + parameters[property]);  }
	                var getString = '';
	                if (valuePairs.length) { getString = '?' + valuePairs.join('&'); }
	                return this.Path  + this.File + getString;
	                
	    };    
	
	/*****************************************************************************
	*                        Application Object Ends                             *
	*****************************************************************************/    
	
	$L.Application.QueryStringObject = function(){    
	         
	    var params = window.location.search.split("?"); 
	    if (params.length <= 1){return false;}
	    params = params[1].split("&");  
	    if (params.length == 0){return false;}   
	    var newParam = new Object();  
	    for ( var i = 0 ; i < params.length ; i++){
	        data  = params[i].split("=");
	        newParam[data[0]] = data[1]  ;
	    }        
	    return  newParam;
	    
	}    
	
	
	/*****************************************************************************
	*                        Ajax Object                                        *
	*****************************************************************************/
	    
	    $L.Ajax = {};
	    $L.Ajax.init    = function(){ $L.InitializeAjax();   };
	    $L.Ajax.run     = function(AjaxVars){ $.ajax(AjaxVars); }
	    $L.Ajax.loading = function(){ console.log("Ajax Loding"); }              
	    
	/*****************************************************************************
	*                        Ajax Object Ends                                    *
	
	*****************************************************************************/
	
	// Function that formats a number like US currency (no $ sign)
	// addCommas = true will add thousands separator
	$L.FormatCurrency = function(value, addCommas){
		
	        var currency = parseFloat(value);
	        if (!currency) { return '0.00'; }
	
	        var currencyStr = currency.toFixed(2).toString();
	        if (!addCommas) { return currencyStr; }
	
	        var elements = currencyStr.split('.', 2);
	
	        var dollars = '';
	        for (var i = 0; i < elements[0].length; i++)
	        {
	                if (i != 0 && i % 3 == 0) { dollars = ',' + dollars; }
	                dollars = elements[0][elements[0].length - (i+1)] + dollars;
	        }
	
	        return dollars + '.' + elements[1];
	}
	
	/*****************************************************************************/
	
	
	
	/*****************************************************************************
	*                        Dialog Object                                        *
	*****************************************************************************/
	
	    $L.Dialog = {};
	    $L.Dialog.init = function(){};
	    $L.Dialog.SelectorId  = 'DialogMessage';
	    $L.Dialog.TextMessage = function(msg,jOptions){
	        
	            $.vortal.dialog({
	            	SelectorId  :  $_LITE_.Dialog.SelectorId+Math.floor(Math.random()*100),
	                Type        : "Message" ,
	                Message     :  msg
	            },jOptions);
	                            
	    };    
	    
	    
	    $L.Dialog.ErrorMessage = function(msg,redirect){ 
	                   
                 $.vortal.dialog({
                	 SelectorId  :  $_LITE_.Dialog.SelectorId+Math.floor(Math.random()*100),
                    Type        : "Alert" ,          
                    Message     :  msg       ,
                    AlertButtonCallback  : $.noop  
                },{modal:true});  
	                        
	    };
	    
	    
	    $L.Dialog.ActionBox = function(content,yesCallback,noCallback,jOptions){ 
	        
	        $.vortal.dialog({
	        	
	            SelectorId  :  $_LITE_.Dialog.SelectorId+Math.floor(Math.random()*100),
	            Type        : "Confirm" ,
	            Message     :  content  ,
	      	  	ConfirmYesButtonName 	   : 'Submit'    ,
	       	  	ConfirmNoButtonName 	   : 'Cancel'     ,
	            ConfirmYesCallback  :  yesCallback , 
	            ConfirmNoCallback  :  noCallback
	            
	        },jOptions); 
	               
	    };   
	    
	     
	    
	    
	/************************************************************************************
	*                              AJAX DEFAULTS                                        *
	************************************************************************************/
	  $L.InitializeAjax = function(){   
	        
	        Ajax = {
	                
	                init : function(){
	                    $.ajaxSetup(Ajax.IntializeVars());
	                }, 
	                
	                IntializeVars : function(){
	
	                    return ({
	                          type       : 'POST'     ,
	                          dataType   : 'html'     ,
	                          beforeSend : Ajax.BeforeSend ,
	                          error      : Ajax.Error
	                    });
	                                
	                },   
	                
	                BeforeSend : function(){
	                    
	                    //console.log("Ajax Before Send");
	                    
	                },  
	                
	                Error : function(){
	                    
	                    console.log("Error Occured ( BY AJAX Object in jquery.vortal.js file )");
	                    
	                }
	                
	        }; // Ajax Object Ends     
	        return Ajax.init();
	  };
	
	  
	  /************************************************************************************
	  *                              GenerateObject                                      *
	  ************************************************************************************/  
	  
	  $L.GenerateObject = function(){  
			
		    var ChainableObject = function(){ return new ChainableObject.fn.init();  };
			ChainableObject.fn = ChainableObject.protoype = {};
			ChainableObject.fn.init = function(){};
			ChainableObject.fn.init.prototype = ChainableObject.fn;
			return ChainableObject;
	  }  
	  
	  
	  /************************************************************************************
	   *                              Yotta Tools                                         *
	   ************************************************************************************/  	  
	  
	  $L.ArrayMax = function( array ){ return Math.max.apply( Math, array ); };
	  $L.ArrayMin = function( array ){ return Math.min.apply( Math, array );  };
	  
	  $L.CountWords = function(string){
	  		
	  	    string = string.split(" ");
	  	    return string.length;
	  };
	  
	  
	  /*
	   * 
	   * Fix Events in jQuery Events
	   */
	  $L.fixedEvent = function( event ){
		  
		  if( jQuery ){
			  	
			    event.stopImmediatePropagation();
			    event.data.action.call( this , event);
		  
		  }
		  
	  };
	  
	  
	  return($L.Initialize());

})($_LITE_);


