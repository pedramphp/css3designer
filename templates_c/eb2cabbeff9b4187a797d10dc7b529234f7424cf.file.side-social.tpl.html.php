<?php /* Smarty version Smarty-3.0.6, created on 2011-02-04 03:01:23
         compiled from "/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/side-social.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:16841964414d4b6c032a8641-66312820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb2cabbeff9b4187a797d10dc7b529234f7424cf' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/side-social.tpl.html',
      1 => 1295471824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16841964414d4b6c032a8641-66312820',
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