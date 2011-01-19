<?php /* Smarty version Smarty-3.0.6, created on 2010-12-28 07:12:12
         compiled from "/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/side-social.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:21354723834d198dcccde0a1-11274252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4214803554e331d1056f811f4eed17ab00fb5ce9' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/side-social.tpl.html',
      1 => 1293506437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21354723834d198dcccde0a1-11274252',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	  <aside class='social-links'>
	    <a title="<?php echo $_smarty_tpl->getVariable('SiteData')->value['socialLinks']['twitter']['title'];?>
" class='side-twitter' href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['socialLinks']['twitter']['url'];?>
" target='_blank'>
	      <span>twitter</span></a>
	    <a title="<?php echo $_smarty_tpl->getVariable('SiteData')->value['socialLinks']['facebook']['title'];?>
" class='side-facebook' href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['socialLinks']['facebook']['url'];?>
" target='_blank'>
	      <span>facebook</span></a>
	    <a title="Rss feed" class='side-rss' href="javascript:void(0)" ><span>RSS</span></a>
	  </aside>