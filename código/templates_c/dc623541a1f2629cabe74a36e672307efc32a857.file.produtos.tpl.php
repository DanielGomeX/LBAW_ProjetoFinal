<?php /* Smarty version Smarty-3.1.15, created on 2015-06-05 20:13:49
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/produtos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:780134320557197fdb7e687-58722808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc623541a1f2629cabe74a36e672307efc32a857' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/produtos.tpl',
      1 => 1433527902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '780134320557197fdb7e687-58722808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557197fdcb56e4_74375224',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'products' => 0,
    'pro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557197fdcb56e4_74375224')) {function content_557197fdcb56e4_74375224($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad Admin - Produtos</title>
    <!-- Morris Charts CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/admin_css/plugins/morris.css" rel="stylesheet">
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
                        <h1 class="page-header">Produtos</h1>
                       <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tags"></i> Produtos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-circle"></i> Gerir Produtos
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            
                <div class="col-lg-12">
                        
                        <h2>Lista de Produtos </h2>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <tr><th >Nome Produto</th><th>Preço Produto</th><th>Descrição Produto</th><th colspan="2"> Manutenção </th></tr>
                            <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>                    
                        <tr>
                        <td ><?php echo $_smarty_tpl->tpl_vars['pro']->value['nome'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pro']->value['preco'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pro']->value['descricao'];?>
</td>
                        <form role="form" id="form1" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/delete_prod.php" method="post">
                        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['pro']->value['nome'];?>
">
                        <td><input type="submit" name ="submit" class="btn btn-danger btn-sm" value="Apagar Produto!" onclick=""></td>
                        </form>
                        <form role="form" id="form2" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_editProduto.php" method="post">
                        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['pro']->value['nome'];?>
">
                        <td><input type="submit" name ="submit" class="btn btn-info btn-sm" value="Editar Produto!" onclick=""></td>
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
