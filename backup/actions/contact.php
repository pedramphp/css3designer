<?php 

require_once(LiteFrame::GetFileSystemPath()."includes/Site.class.php");

class LiteFrameAction{
	
	public function __construct(){
		
		$request = LiteFrame::FetchRequestVariable();
		if( isset($request['validate']) && $request['validate']  ){
			 $site = new Site('Contact');	
			 LiteFrame::JSONLayout();
		}else{
			$site = new Site();
		}
	}
	
}


?>