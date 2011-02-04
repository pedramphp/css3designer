<?php /* Smarty version Smarty-3.0.6, created on 2011-02-04 03:01:22
         compiled from "/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/tools/buttonMaker/donation.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:7642048714d4b6c02e05d35-37634486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86049621b0e629d6b78408228d102e7283bd4140' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/tools/buttonMaker/donation.tpl.html',
      1 => 1295471824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7642048714d4b6c02e05d35-37634486',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class='donation'>
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="admin@css3designer.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Css3 Designer">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:donation.png:NonHostedGuest">
<input onClick="_gaq.push(['_trackEvent', 'General', 'Page Link', 'donation']);" type="image" src="<?php echo $_smarty_tpl->getVariable('imagePath')->value;?>
paypal/donation.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
