<?php /* Smarty version Smarty-3.0.6, created on 2011-02-04 03:01:22
         compiled from "/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/container-inner.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:15619969304d4b6c02baa8e7-94902142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4adfe8c8604aadccd99e51e93f868cf5e18078' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/container-inner.tpl.html',
      1 => 1295471824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15619969304d4b6c02baa8e7-94902142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		  <header class='main-header'> 
		    <div itemscope itemtype="http://data-vocabulary.org/Organization">
		      <h1 itemprop="name">
		        <a href='http://www.css3designer.com' class='logo hideText' title='css3designer'>css3designer</a>
		      </h1>
		    </div>
		    <nav>
			<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("nav-main.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		    </nav> 
		  </header> 
		  <figure id='main-top'></figure>
		  <div id='main-middle' class='roundedCorner'>
		    <div id='main-box'>
			<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('_LITE_')->value['VARS']['actionTrigger'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
			</div>
			<section id='side-box'>
			  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("side-social.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
			  <aside class='ads'>
			  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("ads.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
			  </aside>
			</section>
			<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("footer.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		  </div><!--/ #main-middle -->
		  <figure id='main-bottom' class='clearfix'>
		  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("copyright.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		  </figure>