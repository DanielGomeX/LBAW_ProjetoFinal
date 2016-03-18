<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 18:14:55
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192807171255706011d1b257-76651306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ab89c54ccfcbc4e88f3f4f52c8190fa311e317' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/edit_profile.tpl',
      1 => 1433712936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192807171255706011d1b257-76651306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55706011df59c2_06443257',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'dados' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55706011df59c2_06443257')) {function content_55706011df59c2_06443257($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad - Editar Perfil</title>
    <!-- Custom CSS files -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body> <!--style="background:#f0f0f0;"-->
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
                <h2>Editar Perfil de : <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
</h2>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/editar_perfil.php?">
                    <div>
                        <span><label>Nome</label></span>
                        <span><input name="userName" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
"></span>
                    </div>
                    <div>
                        <span><label>E-mail</label></span>
                        <span><input name="userEmail" type="email" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['email'];?>
"></span>
                    </div>
                    <div>
                        <span><label>Morada</label></span>
                        <span><input name="userMorada" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['morada'];?>
"></span>
                    </div>
                    <div>
                        <span><label>País</label></span>
                        <span><input name="userPais" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['pais'];?>
"></span>
                    </div>
                    <div>
                        <span><label>Estado/Distrito</label></span>
                        <span><input name="userEstado" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['estado'];?>
"></span>
                    </div>
                    <div>
                        <span><input type="submit" class="" value="Editar!"></span>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>        
        </div>
    </div>
    <!-- content-section-ends -->

    <!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
</body>
</html><?php }} ?>
