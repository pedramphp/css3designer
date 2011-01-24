<?php 

	class ButtonMaker extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		public $cssCode;
		public function process(){
			
			$request = LiteFrame::FetchPostVariable();
			if(LiteFrame::IsAjax() && isset($request['shareIt']) && $request['shareIt'] == "true" ){
				
				if( !$this->isValidated()){ 
					$this->results['errorMsg'] = " Unfortunately, This Button Has Been Shared with us in the past." ; 
				}else{
					$buttonRecord = DatabaseStatic::$buttonmaker->Create_button();				
					$buttonRecord->Ip_Address = $_SERVER['REMOTE_ADDR'];
					$buttonRecord->Code = trim(serialize($request['buttonResult']));
					$buttonRecord->CssCode = $this->cssCode;
					$buttonRecord->Date = date("Y-m-d");
					$this->results = ($buttonRecord->Save()) ? true : false;
				}
				 
			}
			
			
		}
		
		
		private function makeCssCode( $cssCode,$lastInsertedId ){
			
			$id =$lastInsertedId+1;
			$cssCode = str_replace("#button", "#button_".$id, $cssCode);
			$this->cssCode = serialize(trim($cssCode));
			
		}
		
		
		private function fetchAllButtons(){
			
			return $buttonRecords = DatabaseStatic::$buttonmaker->Load_button(array("order","Id DESC"));
			
		}
		
		
		private function isValidated(){
				
				$buttonCreation= true;
				$request = LiteFrame::FetchPostVariable();
				$buttonRecords = $this->fetchAllButtons();
				
				 $this->makeCssCode($request['cssCode'],$buttonRecords[0]->Id);
				
				foreach( $buttonRecords as $buttonRecord){
					if( $buttonRecord->Code ==  trim(serialize($request['buttonResult'])) ){
						$buttonCreation = false;
						break;
					}	
				}		
				
				return $buttonCreation;	
			
		}
		
	}


?>