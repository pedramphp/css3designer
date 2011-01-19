<?php /* Smarty version Smarty-3.0.6, created on 2010-12-28 07:12:12
         compiled from "/var/www/vhosts/css3designer.com/httpdocs/templates/_settings/StyleIncludes.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:10405051324d198dccb7af75-54890429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8682e4250bbf23b38d72f076b4b7521962c89e95' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/httpdocs/templates/_settings/StyleIncludes.tpl.html',
      1 => 1293354438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10405051324d198dccb7af75-54890429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<!-- For the less-enabled mobile browsers like Opera Mini -->
<link rel="stylesheet" media="handheld" href="<?php echo $_smarty_tpl->getVariable('stylePath')->value;?>
handheld.css?v=1" />

<?php if (count($_smarty_tpl->getVariable('styleLibraryIncludes')->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['styleLibraryInclude'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('styleLibraryIncludes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['styleLibraryInclude']->key => $_smarty_tpl->tpl_vars['styleLibraryInclude']->value){
?>
	<link rel = "stylesheet" href ="<?php echo $_smarty_tpl->getVariable('styleLibraryPath')->value;?>
<?php echo $_smarty_tpl->tpl_vars['styleLibraryInclude']->value;?>
"/>
<?php }} ?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('styleInline')->value){?><style type = "text/css"  ><?php echo $_smarty_tpl->getVariable('styleInline')->value;?>
</style><?php }?>
<?php if (count($_smarty_tpl->getVariable('styleIncludes')->value)>0){?>
	<?php  $_smarty_tpl->tpl_vars['styleInclude'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('styleIncludes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['styleInclude']->key => $_smarty_tpl->tpl_vars['styleInclude']->value){
?>
		<link rel = "stylesheet" href = "<?php echo $_smarty_tpl->getVariable('stylePath')->value;?>
<?php echo $_smarty_tpl->tpl_vars['styleInclude']->value;?>
"/>
	<?php }} ?>
<?php }?>