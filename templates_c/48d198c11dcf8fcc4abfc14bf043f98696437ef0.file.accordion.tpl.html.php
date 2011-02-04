<?php /* Smarty version Smarty-3.0.6, created on 2011-02-04 03:01:22
         compiled from "/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/tools/buttonMaker/accordion.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1068736824d4b6c02e3fcf0-02823383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d198c11dcf8fcc4abfc14bf043f98696437ef0' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/project/css3designer/templates/includes/default/tools/buttonMaker/accordion.tpl.html',
      1 => 1295471824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1068736824d4b6c02e3fcf0-02823383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
              <nav class='button-accordion'>
              
              	<!-- Box Settings -->
                <header class='button-accordion-header' >
                  <a href='javascript:void(0)'><span>box settings</span></a>
                </header>
                <section class='button-accordion-content'>
                  <label>padding horizontal</label>
                  <section class='slider paddingHorizontal'></section>
                  
                  <label>padding vertical</label>
                  <section class='slider paddingVertical'></section>
                                    
                  <label>box transform</label>
                  <section class='slider boxTransform'></section>

                  <fieldset>
                    <legend>box shadow</legend>

                    <label>shadow color</label>
					<?php $_smarty_tpl->tpl_vars['colorpicker'] = new Smarty_variable('boxShadowSc', null, null);?>
					<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/colorpicker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>                    
                    <label>horizonal length</label>
                    <section class='slider boxShadowHl'></section>
                    
                    <label>vertical length</label>
                    <section class='slider boxShadowVl'></section>
                    
                    <label>blur radius</label>
                    <section class='slider boxShadowBr'></section>
                    
                  </fieldset>
                </section><!-- /button-accordion-content -->
                <!-- /Box Settings -->
                
                
                <!-- Background Settings -->
                <header class='button-accordion-header'>
                  <a href='javascript:void(0)'><span>background settings</span></a>
                </header>
                <section class='button-accordion-content relative'>
                  <label>background color</label>
					<?php $_smarty_tpl->tpl_vars['colorpicker'] = new Smarty_variable('backgroundColor', null, null);?>
					<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/colorpicker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
				
				<section  class='relative clearBoth'>
                  <fieldset>
                    <legend> linear gredient 
                      <span class='button-checkbox'>
						<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/onoff.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>    				  
					  </span>
    				</legend>
                    
                    <label>top color</label>
					<?php $_smarty_tpl->tpl_vars['colorpicker'] = new Smarty_variable('linearGredientTC', null, null);?>
					<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/colorpicker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
                    <label>bottom color</label>
					<?php $_smarty_tpl->tpl_vars['colorpicker'] = new Smarty_variable('linearGredientBC', null, null);?>
					<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/colorpicker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
                  </fieldset>
                  </section>
                </section><!-- /button-accordion-content -->
                <!-- / Background Settings -->
                
                
                <!-- Border Settings -->
                <header class='button-accordion-header'>
                  <a href='javascript:void(0)'><span>border settings</span></a>
                </header>
                <section class='button-accordion-content clearfix'>
                  <label>border color</label>
					<?php $_smarty_tpl->tpl_vars['colorpicker'] = new Smarty_variable('borderColor', null, null);?>
					<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/colorpicker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>									
                  <label>border radius</label>
                  <section class='borderRadius slider'></section>
                  
                  <label>border style:</label>
                  <select class='borderStyle'>
                    <option value = 'none'>none</option>
                    <option value = 'dotted'>dotted</option>
                    <option value = 'dashed'>dashed</option>
                    <option value = 'solid'>solid</option>
                    <option value = 'double'>double</option>
                    <option value = 'groove'>groove</option>
                    <option value = 'ridge'>ridge</option>
                    <option value = 'inset'>inset</option>
                    <option value = 'outset'>outset</option>
                  </select>
                  
                  <label>border width:</label>
                  <section class = 'borderWidth slider' ></section>
                </section><!-- /button-accordion-content -->
                <!-- /Border Settings -->
                
                
                <!-- Text Settings -->
                <header class='button-accordion-header'>
                  <a href='javascript:void(0)'><span>text settings</span></a>
                </header>
                <section class='button-accordion-content'>
                  <fieldset>
				    <legend> main settings </legend>
                    <label>text color</label>
					<?php $_smarty_tpl->tpl_vars['colorpicker'] = new Smarty_variable('textColor', null, null);?>
					<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/colorpicker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	
							
                    <label>text</label>
                    <input type='text' class='text' value='' />
                    
                    <label>letter spacing</label>
                    <section class = 'letterSpacing slider'></section>
                    
                    <label> font family</label>
                    <select class='fontFamily'>
                      <option value = 'Arial'>Arial</option>
                      <option value = 'ArialBlack'>Arial Black</option>
                      <option value = 'Calibri'>Calibri</option>
                      <option value = 'Century Gothic'>Century Gothic</option>
                      <option value = 'Corbel'>Corbel</option>
                      <option value = 'Helvetica'>Helvetica</option>
                      <option value = 'Impact'>Impact</option>
                      <option value = 'MS Sans Serif'>MS Sans Serif</option>
                      <option value = 'Trebuchet MS'>Trebuchet MS</option>
                      <option value = 'Verdana'>Verdana</option>
                      <option value = 'Consolas'>Consolas</option>
                      <option value = 'Courier New'>Courier New</option>
                      <option value = 'Courier'>Courier</option>
                      <option value = 'Lucida Grande'>Lucida Grande</option>
                    </select>
                    <label>font size</label>
                    <section class = 'fontSize slider'></section>
                    
                    <label> font style</label>
                    <select class='fontStyle'>
                      <option value = 'normal'>normal</option>
                      <option value = 'italic'>italic</option>
                      <option value = 'oblique'>oblique</option>
                    </select>
                    
                    <label> font weight</label>
                    <select class='fontWeight'>
                      <option value = 'normal'>normal</option>
                      <option value = 'bold'>bold</option>
                    </select>
                    
                    <label> text decoration</label>
                    <select class='textDecoration'>
                      <option value = 'none'>none</option>
                      <option value = 'overline'>overline</option>
                      <option value = 'line-through'>line-through</option>
                      <option value = 'over-through'>over-through</option>
                      <option value = 'blink'>blink</option>
                    </select>
                    
                    <label>text transform</label>
                    <select class='textTransform'>
                      <option value = 'uppercase'>uppercase</option>
                      <option value = 'capitalize'>capitalize</option>
                      <option value = 'lowercase'>lowercase</option>
                    </select>
                  </fieldset>
                  
                  <fieldset>
                    <legend> text shadow </legend>
                    <label>shadow color</label>
					<?php $_smarty_tpl->tpl_vars['colorpicker'] = new Smarty_variable('textShadowSc', null, null);?>
					<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("tools/buttonMaker/colorpicker.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
                    
                    <label>horizonal length</label>
                    <section class='textShadowHl slider'></section>
                    
                    <label>vertical length</label>
                    <section class='textShadowVl slider'></section>
                    
                    <label>blur radius</label>
                    <section class='textShadowBr slider'></section>
                  </fieldset>
                </section><!-- button-accordion-content -->
              </nav><!--/ #button-accordion -->
              <!-- /Text Settings -->
              
              
              