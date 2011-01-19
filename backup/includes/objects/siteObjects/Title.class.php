<?php 

	class Title extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			
			$title = "";
			switch(SiteHelper::GetAction()){
				case "homepage":
					$title = "CSS3 Designer .com - Best Css3 and HTML5 Tutorials, Online Tools and techniques ";
					break;
				case "tools":
					$title = "The Most Ideal CSS3 Button Maker Online Tool In The Entire Web";
					break;
				case "tutorials":
					$title = "CSS3 Designer .com - The Comprehensive CSS3 and HTML5 Tutorails ";
					break;
				case "about":
					$title = "About CSS3 Designer Team";
					break;									
				case "contact":
					$title = "Contact CSS3 Designer Team";
					break;		
			}
			$this->results = $title;
			
		}
		
	}


?>