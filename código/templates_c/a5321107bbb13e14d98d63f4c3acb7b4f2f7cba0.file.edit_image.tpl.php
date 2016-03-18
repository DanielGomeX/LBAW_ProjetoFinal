<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 18:04:24
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/edit_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19295735815575bb888317f6-17761620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5321107bbb13e14d98d63f4c3acb7b4f2f7cba0' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/edit_image.tpl',
      1 => 1433779458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19295735815575bb888317f6-17761620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5575bb88853dd2_94180756',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'dados' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575bb88853dd2_94180756')) {function content_5575bb88853dd2_94180756($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad - Alterar Foto Perfil</title>
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
                <h2>Alterar foto de Perfil : <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
</h2>
                <form role="form" id="form2" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/alterar_imagem.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                <label>Carregar imagem de Perfil:</label>
                                <input type="file" name="userFile" value="upload">
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
