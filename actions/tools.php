<?php 

require_once(LiteFrame::GetFileSystemPath()."includes/Site.class.php");

class LiteFrameAction{
	
	public function __construct(){
		
		$site = new Site("ButtonMaker");
		$useragent = $_SERVER['HTTP_USER_AGENT'];
    	if(preg_match('/MSIE/i',$useragent)){
        	LiteFrame::SetTemplateAction('upgradeBrowser');
    	}else{ 
    		
 			$request = LiteFrame::FetchRequestVariable();   		
    		if( isset($request['defaultButton']) && isset($_POST['defaultButton'])){
				 LiteFrame::InlineJavascript("var encodedDefaultButton =decodeURIComponent(". json_encode($request['defaultButton']).");");      
			}
			
			if (LiteFrame::IsAjax()){
				
				LiteFrame::JSONLayout();
				
			}else{
			    		
				LiteFrame::IncludeLibraryStyle("jqueryui/css/black-tie/jquery-ui-1.8.6.custom.css",
											   "colorpicker/css/colorpicker.css");
				
				LiteFrame::IncludeStyle("tools/buttonMaker/prettify.css","tools/buttonMaker/buttonMaker.css");
				
				LiteFrame::IncludeLibraryJavascript("prettify/prettify.js",
													"jquery/easing.js",
													"jqueryui/js/jquery-ui-1.8.6.custom.min.js",
													"colorpicker/js/colorpicker.js",
													"plugins/jquery.deparam.js");
				
				LiteFrame::IncludeJavascript("buttonMaker/tools.js",
											 "buttonMaker/copyboard.js",
											 "buttonMaker/plugins.js",
											 "buttonMaker/tools.js",
											 "buttonMaker/cssGenerator.js",
											 "buttonMaker/buttonMaker.js",
											 "buttonMaker/main.js");
			
			}

			
    	}
    	
	}
	
}


?>