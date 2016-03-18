<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 15:06:16
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/produtos_adicionar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1019102167557071db2aa625-25424084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2470e68f7fdca0073831f393eeb9ec2da521c723' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/produtos_adicionar.tpl',
      1 => 1433535231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1019102167557071db2aa625-25424084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557071db37eca1_55069591',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557071db37eca1_55069591')) {function content_557071db37eca1_55069591($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad Admin - Adicionar Produto</title>
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
                                <i class="fa fa-plus"></i> Adicionar Produtos
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <div class="container">                                        
                <h2>Adicionar Produto</h2>
                <form role="form" id="form1" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/adicionar_produto_action.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="text">Nome:</label>
                        <input type="text" class="form-control" name="nomeProduto" required>
                    </div>
                    <div class="form-group">
                    <label for="text">Categoria:</label>
                    <select id="categoria" class="form-control" name="categoria" required></select>
                </div>  
                <div class="form-group">
                    <label for="text">SubCategoria:</label>
                    <select name="subcategoria" class="form-control" id="subcategoria" required></select>
                </div>
                    <div class="form-group">
                        <label for="text">Preço:</label>
                        <input type="text" class="form-control" name="preco" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Descrição:</label>
                        <textarea class="form-control" rows="5" name="descricaoProduto" required></textarea>
                    </div>
					<div class="form-group">
						<label>Carregar imagens:</label>
						<input type="file" name="userFile[]" multiple="multiple" value="upload" required>
                    </div> 
                    <button type="submit" form="form1" class="btn btn-info">Adicionar!</button>
                </form>
            </div>
        </div>
    </div>

</body>

 <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/categories.js"></script>
    <script language="javascript">
        populateCategories("categoria", "subcategoria");
    </script>


</html>
<?php }} ?>
