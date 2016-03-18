<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 15:05:51
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16839598945568341342c3b8-31020907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72f347295006974a48515502bfeb80dd8a9e7b2' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/admin/dashboard.tpl',
      1 => 1433768747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16839598945568341342c3b8-31020907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556834135acfb1_85624238',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'num_compras' => 0,
    'num_utilizadores' => 0,
    'num_reclamacoes' => 0,
    'num_comments' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556834135acfb1_85624238')) {function content_556834135acfb1_85624238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad Admin - Dashboard</title>
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
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                      <div class="statContainer">
              
       
        <div class="statBubbleContainer">
        <div class="statBubble websitesLaunched">
             <a class="nounderline" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_compras.php" title="Compras">
          <div class="statNum">
          <?php echo $_smarty_tpl->tpl_vars['num_compras']->value;?>

          </div>

        </div>
          <h3>Compras Efetuadas</h3>
        </div>
        </a>


            
        <div class="statBubbleContainer">
        <div class="statBubble teamSize">
            <a class="nounderline" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_clientes.php" title="Clientes">
          <div class="statNum">
          <?php echo $_smarty_tpl->tpl_vars['num_utilizadores']->value;?>

          </div>
        </div>
          <h3>Utilizadores Registados</h3>
          
        </div>
        </a>
          
        
        <div class="statBubbleContainer">
        <div class="statBubble topSEORank">
            <a class="nounderline" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_reclamações.php" title="Reclamações">
          <div class="statNum">
            <?php echo $_smarty_tpl->tpl_vars['num_reclamacoes']->value;?>

          </div>
        </div>
          <h3>Reclamações Efetuados</h3>
        </div>
        </a>
          
        
        <div class="statBubbleContainer">
        <div class="statBubble facebookLikes">
            <a class="nounderline" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_comentarios.php" title="Comentários">
          <div class="statNum">
          <?php echo $_smarty_tpl->tpl_vars['num_comments']->value;?>

          </div>
        </div>
          <h3>Comentários Efetuados</h3>
        </div>
        </a>

        </div>  
                <!-- /.row -->        
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/plugins/morris/morris.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php }} ?>
