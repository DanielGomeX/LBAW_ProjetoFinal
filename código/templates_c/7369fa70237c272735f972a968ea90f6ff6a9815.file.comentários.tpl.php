<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 12:12:59
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/comentários.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86210344155755e8792e3a6-34533671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7369fa70237c272735f972a968ea90f6ff6a9815' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/comentários.tpl',
      1 => 1433758257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86210344155755e8792e3a6-34533671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55755e87a4fe83_90532799',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'comentarios' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755e87a4fe83_90532799')) {function content_55755e87a4fe83_90532799($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad Admin - Clientes</title>
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <?php echo $_smarty_tpl->getSubTemplate ('admin/common/top_navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Comentários
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Comentários
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-lg-12">
                    <h2>Lista de Comentários</h2>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" width="100%" style="text-align: center;">
                            <tr><td>Nome User</td><td>Comentário</td><td>Data do comentário</td></tr>
                               <?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value) {
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>

                        <form role ="form" action ="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/removerComentário.php" method="post">
                            <input type="hidden" name="idregistado" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['idcomentarioregistado'];?>
">
                            <input type="hidden" name="idanonimo" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['idcomentarioanonimo'];?>
">
                            <input type="hidden" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['nome'];?>
">
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['re']->value['nome'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['re']->value['comentario'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['re']->value['ultima_atualizacao'];?>
</td>
                                <td><input type="submit" class="btn btn-danger" value="Remover Comentário" onclick=""></td>
                            </tr>
                        </form>
                        <?php } ?>
                        </table>
                    </div>
                </div>                
            </div>
        </div>
    </div>

</body>

</html>
<?php }} ?>
