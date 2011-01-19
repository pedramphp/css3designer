<?php /* Smarty version Smarty-3.0.6, created on 2011-01-04 20:25:01
         compiled from "/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/footer/social-network.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:4509829534d23821dcd6543-17052245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20fcb8d956a0f56cc10e176a9c6ffc00b7690f1' => 
    array (
      0 => '/var/www/vhosts/css3designer.com/httpdocs/templates/includes/default/footer/social-network.tpl.html',
      1 => 1294172699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4509829534d23821dcd6543-17052245',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	  <section id='social-networks'>
		<figure class='footer-bg'></figure>
		<div itemscope class='footer-wrap'>
		  <aside class='footer-twitter relative'>
		    <div class='tweet-sign'>
		     <a title="<?php echo $_smarty_tpl->getVariable('SiteData')->value['socialLinks']['twitter']['title'];?>
" href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['socialLinks']['twitter']['url'];?>
" target='_blank' >
		       latest tweet
		     </a>
		    </div>
		    <div class='tweet-bx miniRoundedCorner clearfix'>
			  
			  <?php  $_smarty_tpl->tpl_vars['tweet'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('SiteData')->value['tweets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tweet']->key => $_smarty_tpl->tpl_vars['tweet']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tweet']->key;
?>
			  	<article <?php if ($_smarty_tpl->tpl_vars['key']->value!=0){?> style="display:none;"<?php }?> itemprop="tweet"><?php echo $_smarty_tpl->tpl_vars['tweet']->value;?>
</article>
			  <?php }} ?>
			  
			  <a title="Next tweet" href="javascript:void(0)" class='nxt hideText'>next</a>
			  <a title="Previous tweet" href="javascript:void(0)" class='prv hideText'>prev</a>
			</div>
		  </aside>
		  <aside class='other-socials'>
		    <div class='footer-facebook js-link' data-url='<?php echo $_smarty_tpl->getVariable('SiteData')->value['socialLinks']['facebook']['url'];?>
' title='<?php echo $_smarty_tpl->getVariable('SiteData')->value['socialLinks']['facebook']['title'];?>
'>
				<iframe src="http://www.facebook.com/plugins/like.php?href=www.css3designer.com;layout=standard&amp;show_faces=false&amp;width=auto&amp;action=like&amp;font&amp;colorscheme=light&amp;height=60" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:60px;" allowTransparency="true"></iframe>
		    </div>
			<a title="Rss feed" href="javascript:void(0);" itemprop="url" class='footer-rss'>rss</a>
		  </aside>
		</div>
	  </section>