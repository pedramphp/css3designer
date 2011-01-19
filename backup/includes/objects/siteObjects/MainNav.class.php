<?php 

	class MainNav extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			
			$links = array();
			$links[0] = array('action' => 'homepage',  'value' => 'home' );
			$links[1] = array('action' => 'tools',     'value' => 'tools');
			$links[2] = array('action' => 'tutorials', 'value' => 'tutorials' );
			$links[3] = array('action' => 'about',     'value' => 'about us' );
			$links[4] = array('action' => 'contact',   'value' => 'contact us' );
						
			$mainNav = array();
			foreach( $links as $link ){
				$action = ( $link['action'] == "homepage" ) ? "" : $link['action'];
				$mainNav[$link['action']] = array('url' => LiteFrame::GetApplicationPath().$action,
								  'title' => ucfirst($link['action']),
								  'active' => SiteHelper::GetAction() == $link['action'],
								  'value' => $link['value']
				
				);
			}
			$this->results = $mainNav;
			
		}
		
	}


?>