<?php /* Smarty version Smarty-3.0.6, created on 2010-12-28 07:12:12
         compiled from "/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/footer.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:11449501654d198dccd54db1-58233835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e676b4823f91771c40bf588226984c8e0d5fb653' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/footer.tpl.html',
      1 => 1293509121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11449501654d198dccd54db1-58233835',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<footer class='relative clearfix main-footer'>
	  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("footer/social-network.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	  <figure class='splitter'></figure>
	  <section id='footer-links'>	    
	    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("footer/links.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	  </section>
	  <figure class='splitter'></figure>
	  <section id='footer-books'>
		<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("footer/books.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	  </section>
	  <figure class='splitter'></figure>
	  <section id='site-infos'>
		<aside>
		  <a href='<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
' title='css3 designer, full of joy with css and html5'>
		    <img src="<?php echo ($_smarty_tpl->getVariable('imagePath')->value).("footer/logo-css3.png");?>
" alt="CSS3 Logo" />  
		  </a>
		  
		  <div class="info-bx miniRoundedCorner">
		  CSS3 Designer Goal is to provide the best <a href='http://www.w3.org/TR/css3-roadmap/' target='_blank'>CSS3</a> and <a href='http://www.w3.org/TR/html5/' target='_blank'>HTML5</a> techniques,online tools and tutorials for all web developers and designers around the world.
		  </div>
		</aside>
		<aside>
		  <a href='<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
' title='Old Coder is our favorite symbol '>
		    <img src="<?php echo ($_smarty_tpl->getVariable('imagePath')->value).("footer/logo-oldcoder.png");?>
" alt="Old Coder is our symbol" />
		  </a>
		  <div class="info-bx miniRoundedCorner">
		  Old Coder - this is our symbol that we just came up with for fun, we believe that we'll be coding and web developing forever. until all our hair becomes white. old coder is here to create a better world for all geek coders.
		  </div>
		</aside>
	  </section>
	  <figure class='splitter'></figure>
	  <section itemscope id='sponsors' class='footer-wrap'>
		<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("footer/sponsers.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	  </section>
	  <section id='go-top'>
	    <a href="javascript:void(0)" class='gotop hideText' title=" Go Top">go top</a>
	  </section>
  </footer>