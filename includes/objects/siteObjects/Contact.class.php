<?php 

	class Contact extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			
			$this->results = array('success' =>false);
			
			$request = LiteFrame::FetchRequestVariable();
			if ( $request['name'] || $request['email'] || $request['notes'] ){
		
				$email = $request['email'];
				$name =  $request['name'];
				$notes = $request['notes'];
				
				$to      = 'admin@css3designer.com,pedramphp@gmail.com';
				$subject = 'Css3Designer Contact Us Request';
				$message = "Name: $name Email: $email Message: $notes ";
				$header = 'From: css3designer<'.$email.'> ' . "\r\n";
				
				$this->results = array('success' => mail( $to, $subject, $message, $header ));				
			}
			
		}
		
	}


?>