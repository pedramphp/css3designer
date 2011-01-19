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
	define('AUTH_TOKEN','L4Zf3jvG7Zg0WjDzL6abJuLOCgmjbx7SE390LMIis');
	define('AUTH_SECRET','30algKTFShj0UK50wHg7fiVPH9TLIuHmxcftU9Aj0k');
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
			if( !isset( $_COOKIE['access_token'] ) ){ $_SESSION["access_token"] = ACCESS_TOKEN; }
			if( !isset( $_COOKIE['access_token_secret'] ) ){ $_SESSION["access_token_secret"] = ACCESS_TOKEN_SECRET; }
			setcookie("access_token", ACCESS_TOKEN, time()+3600*24*30);
			setcookie("access_token_secret", ACCESS_TOKEN_SECRET, time()+3600*24*30);	

			$twitterApp = new TwitterApp(new tmhOAuth($config));
			
			//$twitterApp->auth();
			// you need to call $twitterApp->auth to authorize it first with your browser
			if($twitterApp->isAuthed()){
				
				$tweet = array();
				foreach( $twitterApp->retrieveTweets() as $row){
					$tweet[] = $row->text;
				}
			}
			$this->results = array_slice($tweet, 0, 20);		
			
		}
	}


?>