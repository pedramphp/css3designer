<?php /* Smarty version Smarty-3.0.6, created on 2011-02-04 03:01:22
         compiled from "/var/www/vhosts/css3designer.com/project/css3designer/templates/actions/default/tools.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:10744406924d4b6c02cbfcf6-18385405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55944b360a418e2954b65d300da0901e4be89d0c' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/project/css3designer/templates/actions/default/tools.tpl.html',
      1 => 1295471824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10744406924d4b6c02cbfcf6-18385405',
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
tools'>Tools</a>
		<span> / Button maker</span>
	  </section>
	  <h2>CSS3 Button maker 1.0 Online Tool</h2>
	  <h6> Enjoy using the most magnificent css3 online tool <span style='color:gray;font-size:11px'>( we are currently working on button maker version 1.1 )</span></h6>
	  
	  <form method='post' style='margin-bottom: 10px; margin-left:300px' action='<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
tools' class='button-maker-apply-all'>
        	<a href='javascript:void(0)'  > apply all </a>
        	<input type='hidden' name = 'a' value='tt' />
      </form>
	  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/buttonMaker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>	  