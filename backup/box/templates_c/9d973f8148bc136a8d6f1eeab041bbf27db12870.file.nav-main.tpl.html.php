<?php /* Smarty version Smarty-3.0.6, created on 2011-01-04 20:25:01
         compiled from "/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/nav-main.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:20224948024d23821da7fe69-77597282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d973f8148bc136a8d6f1eeab041bbf27db12870' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/nav-main.tpl.html',
      1 => 1294172511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20224948024d23821da7fe69-77597282',
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
				    	<a onClick="_gaq.push(['_trackEvent', 'General', 'Main Nav', '<?php echo $_smarty_tpl->tpl_vars['nav']->value['value'];?>
']);"  <?php if ($_smarty_tpl->tpl_vars['nav']->value['active']){?> class='active' <?php }?> href='<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];?>
'>
				    		<span><?php echo $_smarty_tpl->tpl_vars['nav']->value['value'];?>
</span>
				    	</a>
				    </li>
				<?php }} ?>
		      </ul>
	