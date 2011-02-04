<?php /* Smarty version Smarty-3.0.6, created on 2011-02-04 03:01:23
         compiled from "/var/www/vhosts/css3designer.com/project/css3designer/templates/_settings/JavaScriptActionInfo.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:6730896314d4b6c036b0142-42862056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '234c3f053faf1d3d16cbf25c513694eb11dbbd11' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/project/css3designer/templates/_settings/JavaScriptActionInfo.tpl.html',
      1 => 1295471824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6730896314d4b6c036b0142-42862056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('javascriptLibraryIncludes')->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['javascriptLibraryInclude'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('javascriptLibraryIncludes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['javascriptLibraryInclude']->key => $_smarty_tpl->tpl_vars['javascriptLibraryInclude']->value){
?>
<script type = "text/javascript" language = "javascript"  src ="<?php echo $_smarty_tpl->getVariable('javascriptLibraryPath')->value;?>
<?php echo $_smarty_tpl->tpl_vars['javascriptLibraryInclude']->value;?>
"   ></script>
<?php }} ?>
<?php }?>

<?php if (count($_smarty_tpl->getVariable('javascriptExternal')->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['javascriptExternalItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('javascriptExternal')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['javascriptExternalItem']->key => $_smarty_tpl->tpl_vars['javascriptExternalItem']->value){
?>
<script type = "text/javascript" language = "javascript"  src ="<?php echo $_smarty_tpl->tpl_vars['javascriptExternalItem']->value;?>
"   ></script>
<?php }} ?>
<?php }?>

<?php if ($_smarty_tpl->getVariable('javaScriptActionInfo')->value){?>
<script  type = "text/javascript" language = "javascript"> var $_LITE_ = <?php echo $_smarty_tpl->getVariable('javaScriptActionInfo')->value;?>
;</script>
<script type = "text/javascript" language = "javascript" src = "LiteFrame/javascript/liteframe.js" ></script>
<?php }?>
<?php if ($_smarty_tpl->getVariable('javascriptInline')->value){?>
	<script type = "text/javascript" language = "javascript" ><?php echo $_smarty_tpl->getVariable('javascriptInline')->value;?>
</script>
<?php }?>
<?php if (count($_smarty_tpl->getVariable('javascriptIncludes')->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['javascriptInclude'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('javascriptIncludes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['javascriptInclude']->key => $_smarty_tpl->tpl_vars['javascriptInclude']->value){
?>
	<script type = "text/javascript" language = "javascript"  src ="<?php echo $_smarty_tpl->getVariable('javascriptPath')->value;?>
<?php echo $_smarty_tpl->tpl_vars['javascriptInclude']->value;?>
"   ></script>
<?php }} ?>
<?php }?>