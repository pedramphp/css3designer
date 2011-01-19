<?php /* Smarty version Smarty-3.0.6, created on 2010-12-31 19:31:44
         compiled from "/var/www/vhosts/css3designer.com/httpdocs/templates/actions/default/tools.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:2622232954d1e2fa01ffdf1-21614883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec9b71e51f039f2deccd9142b517a82ae618cd37' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/httpdocs/templates/actions/default/tools.tpl.html',
      1 => 1293823898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2622232954d1e2fa01ffdf1-21614883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id='main-box-wrapper'>
	  <section id="breadcrumb" class="clearfix">
	    <a title="Home" href='<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
'>Home</a>
		<span> / </span>
		<a title="Tools" href='<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
?action=tools'>Tools</a>
		<span> / Button maker</span>
	  </section>
	  <h2>CSS3 Button maker 1.0 Online Tool</h2>
	  <h6> Enjoy using the most magnificent css3 online tool <span style='color:gray'>( we are currently working on button maker version 1.1 )</span></h6>
	  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/buttonMaker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>	  