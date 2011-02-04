<?php /* Smarty version Smarty-3.0.6, created on 2011-02-04 03:01:22
         compiled from "/var/www/vhosts/css3designer.com/project/css3designer/templates/layouts/default/index.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:6864594904d4b6c026d6226-35751176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b672a030ca12ebd75b967182c114477ab166ee' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/project/css3designer/templates/layouts/default/index.tpl.html',
      1 => 1295471824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6864594904d4b6c026d6226-35751176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['ACTION'], null, null);?>
<?php $_smarty_tpl->tpl_vars['includeTemplate'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['fileSystemPaths']['templateIncludePath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['actionTemplate'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['fileSystemPaths']['templateActionPath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['layoutTemplate'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['fileSystemPaths']['templateActionPath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['settingsTemplate'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['fileSystemPaths']['settingsPath'], null, null);?>       
<?php $_smarty_tpl->tpl_vars['javaScriptActionInfo'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['javaScriptActionInfo'], null, null);?>
<?php $_smarty_tpl->tpl_vars['javascriptBottomPage'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['javascriptBottomPage'], null, null);?>
<?php $_smarty_tpl->tpl_vars['javascriptPath'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['javascriptPath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['javascriptLibraryPath'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['javascriptLibraryPath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['javascriptLibraryIncludes'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['javascriptLibraryIncludes'], null, null);?>
<?php $_smarty_tpl->tpl_vars['javascriptExternal'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['javascriptExternal'], null, null);?>
<?php $_smarty_tpl->tpl_vars['javascriptIncludes'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['javascriptIncludes'], null, null);?>
<?php $_smarty_tpl->tpl_vars['javascriptInline'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['javascriptInline'], null, null);?>       
<?php $_smarty_tpl->tpl_vars['stylePath'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['stylePath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['imagePath'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['imagePath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['styleIncludes'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['styleIncludes'], null, null);?>
<?php $_smarty_tpl->tpl_vars['styleInline'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['styleInline'], null, null);?>
<?php $_smarty_tpl->tpl_vars['styleLibraryIncludes'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['styleLibraryIncludes'], null, null);?>
<?php $_smarty_tpl->tpl_vars['styleLibraryPath'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['styleLibraryPath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['applicationPath'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['VARS']['applicationPath'], null, null);?>
<?php $_smarty_tpl->tpl_vars['requestVariable'] = new Smarty_variable($_smarty_tpl->getVariable('_LITE_')->value['REQUEST'], null, null);?> 
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("htmlTag.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <head>
      <title> <?php echo $_smarty_tpl->getVariable('SiteData')->value['title'];?>
</title>
      <!--[if IE]><![endif]-->
      <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('settingsTemplate')->value).("meta.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
      <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('settingsTemplate')->value).("StyleIncludes.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 
      <?php if ($_smarty_tpl->getVariable('javascriptBottomPage')->value==false){?>
    	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('settingsTemplate')->value).("JavaScriptActionInfo.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
      <?php }?>   
      <!--[if lt IE 9]>
		<script src="<?php echo ($_smarty_tpl->getVariable('javascriptPath')->value).("html5.js");?>
" type="text/javascript" charset="utf-8"></script>
	  <![endif]-->
    </head>
    <body>    
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("bg-static.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div id='container' class="relative">
		<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("container-inner.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		</div><!--/ #container  -->    	
		<?php if ($_smarty_tpl->getVariable('javascriptBottomPage')->value==true){?>
		<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('settingsTemplate')->value).("JavaScriptActionInfo.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<?php }?>
		<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("google/googleAnalytics.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	</body>
</html>