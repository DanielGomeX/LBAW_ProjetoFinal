<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 00:58:06
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11708125567384f977b67-64081884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a35f3f134d81a8ce0262a6158d648dbc4fc1c1c2' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/index.tpl',
      1 => 1433802513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11708125567384f977b67-64081884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5567384fc180a1_63830472',
  'variables' => 
  array (
    'username' => 0,
    'BASE_URL' => 0,
    'top' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567384fc180a1_63830472')) {function content_5567384fc180a1_63830472($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Loja Online Informática</title>
</head>

<body>
	<!-- navbar + banner -->
	<div class="header" id="home">
		<!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- banner -->
		<div class="banner">
			<div class="signing text-right">
				<div class="container">
					<div class="sign-in">
						<?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Log Out</a>
					<?php } else { ?>
    				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_signin.php">Aceda ao nosso site</a>
    				<?php }?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="banner-info text-center">
				<i class="shipping"></i>
				<h3>Loja Informática online</h3>
				<p>Se pretende adquirir algum produto eletrónico, não hesite em comprar na Marknad.</p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=All">Todos os Produtos</a>
			</div>
		</div><!-- closes banner -->
	</div><!-- closes navbar + banner -->
	
	<!-- Top vendas	-->	
	<div class="container">
		<div class="recommand-section">
			<div class="recommand-section-head text-center">
				<h3><span>Top</span> Vendas</h3>
				<p>Os produtos mais vendidos</p>
			</div>
			<div class="recommand-section-grids">
				<div class="standards">						
					<div class="standard_content">
						<!-- 1st product -->
						
						<div class="col_1_of_single1 span_1_of_single1" style='height:380px'>

			    	<div class="view1 view-fifth1">
			  	  		<div class="top_box">

				  			<h3 class="m_1"><?php echo $_smarty_tpl->tpl_vars['top']->value[0]['nome'];?>
</h3>
				  			<!--<p class="m_2"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</p>-->
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['top']->value[0]['nome'];?>
">
			         			<div class="grid_img">
					   				<div class="css3"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['top']->value[0]['caminho'];?>
" alt=""/></div>
				          			<div class="mask1">
                       					<div class="info">Ver Produto</div>
		                 			</div>
                    			</div>
                                <br>
                   				<div class="price"><?php echo $_smarty_tpl->tpl_vars['top']->value[0]['preco'];?>
€</div>
				   			</a>
				   		</div>
				    </div>

					

					
		    	    <div class="clear"></div>
		    		</div>


						<!-- 2nd product -->
						
						<div class="col_1_of_single1 span_1_of_single1" style='height:380px'>

			    	<div class="view1 view-fifth1">
			  	  		<div class="top_box">

				  			<h3 class="m_1"><?php echo $_smarty_tpl->tpl_vars['top']->value[1]['nome'];?>
</h3>
				  			<!--<p class="m_2"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</p>-->
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['top']->value[1]['nome'];?>
">
			         			<div class="grid_img">
					   				<div class="css3"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['top']->value[1]['caminho'];?>
" alt=""/></div>
				          			<div class="mask1">
                       					<div class="info">Ver Produto</div>
		                 			</div>
                    			</div>
                                <br>
                   				<div class="price"><?php echo $_smarty_tpl->tpl_vars['top']->value[1]['preco'];?>
€</div>
				   			</a>
				   		</div>
				    </div>

					

					
		    	    <div class="clear"></div>
		    		</div>

						<!-- 3rd product -->
							<div class="col_1_of_single1 span_1_of_single1" style='height:380px'>

			    	<div class="view1 view-fifth1">
			  	  		<div class="top_box">

				  			<h3 class="m_1"><?php echo $_smarty_tpl->tpl_vars['top']->value[2]['nome'];?>
</h3>
				  			<!--<p class="m_2"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</p>-->
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['top']->value[2]['nome'];?>
">
			         			<div class="grid_img">
					   				<div class="css3"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['top']->value[2]['caminho'];?>
" alt=""/></div>
				          			<div class="mask1">
                       					<div class="info">Ver Produto</div>
		                 			</div>
                    			</div>
                                <br>
                   				<div class="price"><?php echo $_smarty_tpl->tpl_vars['top']->value[2]['preco'];?>
€</div>
				   			</a>
				   		</div>
				    </div>

					

					
		    	    <div class="clear"></div>
		    		</div>


						<div class="clearfix"></div><?php }} ?>
