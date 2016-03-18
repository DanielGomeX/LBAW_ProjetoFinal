<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 19:47:46
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:508994985567384fd18825-51533492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7224380e8041c13d0dc50fabe8285626cb222d7' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/common/footer.tpl',
      1 => 1433352739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508994985567384fd18825-51533492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5567384fd503e2_33108596',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567384fd503e2_33108596')) {function content_5567384fd503e2_33108596($_smarty_tpl) {?><!-- footer -->
<div class="footer">
	<div class="up-arrow">
		<a class="scroll" href="#home"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/up.png" alt="" /></a>
	</div>
	<div class="container">
		<div class="copyrights">
			<p>Marknad © 2015 All rights reserved</p>
		</div>
		<div class="footer-social-icons">
			<a href="#"><i class="fb"></i></a>
			<a href="#"><i class="tw"></i></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- search-scripts -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/classie.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/uisearch.js"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!-- Scripts -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.easydropdown.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/event_listener.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/footer_anim.js"></script><?php }} ?>
