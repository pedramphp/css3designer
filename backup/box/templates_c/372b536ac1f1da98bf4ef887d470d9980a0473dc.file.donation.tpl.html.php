<?php /* Smarty version Smarty-3.0.6, created on 2010-12-30 17:00:47
         compiled from "/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/tools/buttonMaker/donation.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:13735717334d1cbabfe76be6-49724143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372b536ac1f1da98bf4ef887d470d9980a0473dc' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/tools/buttonMaker/donation.tpl.html',
      1 => 1293727697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13735717334d1cbabfe76be6-49724143',
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
