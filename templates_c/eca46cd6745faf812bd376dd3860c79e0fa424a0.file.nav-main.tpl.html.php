<?php /* Smarty version Smarty-3.0.6, created on 2011-02-04 03:01:22
         compiled from "/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/nav-main.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:8632277324d4b6c02c44379-55360284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca46cd6745faf812bd376dd3860c79e0fa424a0' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/nav-main.tpl.html',
      1 => 1295994700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8632277324d4b6c02c44379-55360284',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

		      <ul class='horizontal nav'>
			    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('SiteData')->value['mainNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value){
?>
				    <li>
				    	<a <?php if ($_smarty_tpl->tpl_vars['nav']->value['active']){?> class='active' <?php }?> href='<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];?>
'>
				    		<span><?php echo $_smarty_tpl->tpl_vars['nav']->value['value'];?>
</span>
				    	</a>
				    </li>
				<?php }} ?>
		      </ul>
	