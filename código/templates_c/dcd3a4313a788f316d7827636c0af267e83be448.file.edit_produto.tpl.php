<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 15:26:52
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/edit_produto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21316737665571e3fab10620-63557053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd3a4313a788f316d7827636c0af267e83be448' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/edit_produto.tpl',
      1 => 1433690048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21316737665571e3fab10620-63557053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5571e3fac815c4_91203271',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571e3fac815c4_91203271')) {function content_5571e3fac815c4_91203271($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad - Editar Perfil</title>
    <!-- Custom CSS files -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body> <!--style="background:#f0f0f0;"-->
    <!-- header-section-starts -->
    <!-- start Contact-page -->
    <!-- content-section-starts -->
    <div class="container">
        <div class="dreamcrub">
            <ul class="previous">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_produtos.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <h2>Editar Produto  : <?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
</h2>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/edit_prod.php?">
                    <div>
                        <span><label>Nome</label></span>
                        <span><input name="Nome" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
"></span>
                    </div>
                    <div>
                        <span><label>Preço</label></span>
                        <span><input name="Preco" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['preco'];?>
"></span>
                    </div>
                     <div>
                        <span><label>Descrição</label></span>
                        <span><input name="Descricao" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['descricao'];?>
"></span>
                    </div>
                    <div>
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
