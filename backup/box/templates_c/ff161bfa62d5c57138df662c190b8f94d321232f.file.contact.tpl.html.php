<?php /* Smarty version Smarty-3.0.6, created on 2010-12-29 04:09:18
         compiled from "/var/www/vhosts/css3designer.com/httpdocs/templates/actions/default/contact.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:11106637494d1ab46edbac92-73023902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff161bfa62d5c57138df662c190b8f94d321232f' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/httpdocs/templates/actions/default/contact.tpl.html',
      1 => 1293595704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11106637494d1ab46edbac92-73023902',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id='main-box-wrapper'>	  
	  <section id="breadcrumb" class="clearfix">
	    <a href="<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
">Home</a>
		<span> / Contact</span>
	  </section>
	  <section class="clearfix">
	    <address itemscope itemtype="http://www.data-vocabulary.org/Address" >
		  <span itemprop="geo" itemscope itemtype="http://data-vocabulary.org/?Geo">
            <meta itemprop="latitude" content="38.95032" />
            <meta itemprop="longitude" content="-77.42413" />
		  </span>
	      <map name="map-image" id="location-map" class="roundedCorner">
		    <div class="map">
		      <img itemprop="img" src="<?php echo $_smarty_tpl->getVariable('imagePath')->value;?>
contact/map.jpg" alt="css3designer location" />
			</div>
		  </map>
		  <div class="location-addr relative">
		    <span>
		      <abbr>Addr: </abbr><br/>
		      <em itemprop="street-address">13844 jefferson park drive</em>, <em itemprop="locality">herndon</em>, <em itemprop="region">VA 20171</em>, <em itemprop="country-name">USA</em><br/>
			  <abbr>Tel: </abbr><em itemprop="tel">(818) 123 1231</em><br/>
			  <abbr>E-mail: </abbr><em itemprop="email">info@css3designer.com</em>
		    </span>
		  </div>
		</address>
	    <aside class="clearfix">
	      <form id="contactForm">
		    <table>
			  <tr>
			    <td><input type="text" id="name" name="name" class="txt miniRoundedCorner" /></td>
		        <td>Name</td>
			  </tr>
			  <tr>
			    <td><input type="text" id="email" name="email" class="txt miniRoundedCorner" /></td>
			    <td>E-Mail ( please, Please! not required though )</td>
			  </tr>
			  <tr>
			    <td><textarea name="notes" id="notes" class="miniRoundedCorner"></textarea></td>
			    <td>Thoughts...</td>
			  </tr>
			  <tr>
			    <td><a href="#" id="ContactUs" class="btn"><span>Send it!</span></a></td>
			  </tr>
		    </table>
		  </form>
		  <figure id='contact-loading' class='roundedCorner boxShadowWhiteFive'>
	      	<img src='<?php echo $_smarty_tpl->getVariable('imagePath')->value;?>
tools/buttonMaker/loadingC.gif' alt='loading' />
	      	<img src='<?php echo $_smarty_tpl->getVariable('imagePath')->value;?>
tools/buttonMaker/loading.gif' alt='loading' />
	      </figure>
	    </aside>		
	  </section>
</div>	<!-- /main-box-wrapper --> 
