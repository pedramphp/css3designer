<?php 
/*
 *  Source http://net.tutsplus.com/tutorials/php/creating-a-twitter-oauth-application/
 * API Key TWx85FTwORZnM1dPRvig
 * call back http://css3designer.com
 * Consumer key

	TWx85FTwORZnM1dPRvig
	Consumer secret
	
	kCFSpGfPZsC1bIp05DnHnAGuIbQk7JECqSitPKVz0
	Request token URL
	
	https://api.twitter.com/oauth/request_token
	Access token URL
	
	https://api.twitter.com/oauth/access_token
	Authorize URL
	
	https://api.twitter.com/oauth/authorize
	We support hmac-sha1 signatures. We do not support the plaintext signature method.
	Registered OAuth Callback URL
	
	http://css3designer.com
 */
	require_once(LiteFrame::GetFileSystemPath()."includes/modules/twitter/tmhOAuth.php");
	require_once(LiteFrame::GetFileSystemPath()."includes/modules/twitter/TwitterApp.php");
	require_once(LiteFrame::GetFileSystemPath()."includes/modules/twitter/TwitterAvatars.php");

	// set the consumer key and secret
	define('CONSUMER_KEY',      'TWx85FTwORZnM1dPRvig');
	define('CONSUMER_SECRET',   'kCFSpGfPZsC1bIp05DnHnAGuIbQk7JECqSitPKVz0');	
	
	// I got all these four variables by doing $twitterApp->auth the first time.
	define('AUTH_TOKEN','sF3NZ9kaNOyGTafOyjq9Cu5SRSQCjsCchITRjUhg4');
	define('AUTH_SECRET','xDTciJf4tLHoyEor7CFrDKPejIn445Mio2ArXKSbo');
	define('ACCESS_TOKEN','207365628-7K8nORjEyZectR8mtlDhgFHlJJcoJeztObZDV9mh');
	define('ACCESS_TOKEN_SECRET','R1f825p4txZyn5f37Qt6VgakuNhnzbSbWYw44o7vPeI');

	class Tweets extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			$tweet = array('no tweet found');
		    $config = array(  
		         'consumer_key'      => CONSUMER_KEY,  
		        'consumer_secret'   => CONSUMER_SECRET  
		    );  
			if(!session_id()) {	session_start();	}
			$_SESSION['authtoken'] = AUTH_TOKEN;
			$_SESSION['authsecret'] = AUTH_SECRET;
			$_SESSION['authstate'] = 2;
			$_SESSION['access_token'] = ACCESS_TOKEN;
			$_SESSION['access_token_secret'] = ACCESS_TOKEN_SECRET;
			//if( !isset( $_COOKIE['access_token'] ) ) setcookie("access_token", ACCESS_TOKEN, time()+3600);
			//if( !isset( $_COOKIE['access_token_secret'] ) ) setcookie("access_token_secret", ACCESS_TOKEN_SECRET, time()+3600);	    
	
			$twitterApp = new TwitterApp(new tmhOAuth($config));
			
			// you need to call $twitterApp->auth to authorize it first with your browser
			if($twitterApp->isAuthed()){
				$tweet = array();
				foreach( $twitterApp->retrieveTweets() as $row){
					$tweet[] = $row->text;
				}
			}else{
				$twitterApp->auth();
			}
	
	
			$this->results = array_slice($tweet, 0, 20);		
		}
	}


?>