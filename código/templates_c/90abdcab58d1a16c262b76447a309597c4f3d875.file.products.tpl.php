<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 21:13:42
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60733715555673911acfa00-79005317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90abdcab58d1a16c262b76447a309597c4f3d875' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/products.tpl',
      1 => 1433790821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60733715555673911acfa00-79005317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55673911c36c67_09356660',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'categoria' => 0,
    'subcategoria' => 0,
    'getSub' => 0,
    'topass' => 0,
    'allproducts' => 0,
    'product' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55673911c36c67_09356660')) {function content_55673911c36c67_09356660($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Lista de Produtos</title>
	<!-- Custom CSS files -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/form.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<!-- category bar -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
        			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="Go to Home Page"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li>
                	<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['subcategoria']->value!=null) {?><span>&gt;</span>
                </li>
				<li>
					<span class="red">&nbsp;<?php echo $_smarty_tpl->tpl_vars['subcategoria']->value;?>
&nbsp;</span>
    			</li>
    			<?php }?>
        	</ul>
            <ul class="previous">
               	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Voltar à página inicial</a>
               	</li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<div class="container" >
		<div class="ft-ball" >
			<!-- list of products -->

			<div class="cont span_2_of_3">
				<!-- sort-by and pages bar -->
		  		<div class="mens-toolbar" >
              		<div class="sort">
               			<div class="sort-by">
											<form id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=<?php echo $_smarty_tpl->tpl_vars['getSub']->value;?>
">
			            			<input name="allProducts" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['topass']->value;?>
? hidden>
			            		<select name="order" onchange="change()">
			            			<option disabled selected> -- select an option -- </option>
			                        <option value="caro">Preço: mais caro</option>
			                        <option value="barato">Preço: mais barato</option>
			                    </select>
			                    </form>
			                    <script>
									function change(){
	    								document.getElementById("myform").submit();
									}
								</script>
		                   <br/>
               			</div>
    				</div>
    			</div>
    			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
			    <div class="col_1_of_single1 span_1_of_single1" style='height:380px'>

			    	<div class="view1 view-fifth1">
			  	  		<div class="top_box">

				  			<h3 class="m_1"><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</h3>
				  			<!--<p class="m_2"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</p>-->
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
">
			         			<div class="grid_img">
					   				<div class="css3"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['caminho'];?>
" alt=""/></div>
				          			<div class="mask1">
                       					<div class="info">Ver Produto</div>
		                 			</div>
                    			</div>
                                <br>
                   				<div class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
€</div>
				   			</a>
				   		</div>
				    </div>

					

					
		    	    <div class="clear"></div>
		    	</div>

<?php } ?>


			<div class="clearfix"></div>

		</div>
	</div>

			<!-- sidebar -->
     	    <div class="rsidebar span_1_of_left">
				<section  class="sky-form">

					<h4>Price range</h4>

					<div class="row row1 scroll-pane">
						<form class="form-inline" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=<?php echo $_smarty_tpl->tpl_vars['getSub']->value;?>
" method="post">
						<div class="col col-4">
							<label for=fader>Maximum Price</label>
								<input type=range name=priceMaximum min=0 max=2000 value=2000 id=fader step=1 oninput="outputUpdateMax(value)">
								<output for=fader id=pmax>2000</output>
								<label for=fader>Minimum Price</label>
								<input type=range name=priceMinimun min=0 max=2000 value=0 id=fader step=1 oninput="outputUpdateMin(value)">
								<output for=fader id=pmin>0</output>
								<div class="form-group">
									<input id="submit" type="submit" value="Submit" class="btn btn-default">
								</div>
								<script>
								function outputUpdateMin(pmin) {
								document.querySelector('#pmin').value = pmin;
								}
								</script>
								<script>
								function outputUpdateMax(pmax) {
								document.querySelector('#pmax').value = pmax;
								}
							</script>
						</div>
					</form>
					</div>
				</section>
			</div>
		</div>
	<!-- content-section-ends -->

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/rating.js"></script>

</body>
</html>
<?php }} ?>
