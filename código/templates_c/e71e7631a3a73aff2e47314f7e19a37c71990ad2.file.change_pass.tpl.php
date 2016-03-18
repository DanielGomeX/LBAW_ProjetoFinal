<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 17:30:54
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/change_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18944044525575b52e917d22-09008414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71e7631a3a73aff2e47314f7e19a37c71990ad2' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/change_pass.tpl',
      1 => 1433712936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18944044525575b52e917d22-09008414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'dados' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5575b52ea2d9d9_09692566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575b52ea2d9d9_09692566')) {function content_5575b52ea2d9d9_09692566($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad - Alterar Password</title>
</head>

<body><!--style="background:#f0f0f0;"-->
    <!-- header-section-starts -->
    <div class="c-header" id="home">
        <!-- main navbar -->
        <?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <!--style="background:#f0f0f0;"-->
    <!-- header-section-starts -->
    <!-- start Contact-page -->
    <!-- content-section-starts -->
    <div class="container">
        <div class="dreamcrub">
            <ul class="previous">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_myaccount.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <h2>Alterar password de: <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
</h2>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/alterar_pass.php?">
                    <div>
                        <span><label>Password antiga</label></span>
                        <span><input name="oldPass" type="password" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>Nova Password</label></span>
                        <span><input id="password" name="newPass" type="password" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>Confirmar Password</label></span>
                        <span><input id="confPassword" name="confPass" type="password" class="textbox" onkeyup="checkPass(); return false;"></span>
                    </div>
                    <div>
                        <span><input id="submit" type="submit" class="" value="Alterar!"></span>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>        
        </div>
    </div>
    <!-- content-section-ends -->

    <!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/confirm_pass.js" type="text/javascript"></script>
    
</body>
</html><?php }} ?>
