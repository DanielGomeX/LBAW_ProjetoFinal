<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 19:48:13
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18243927765567388ed702b0-75267695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9172922388a98b9eec686d73dc67f693049fab6' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/signin.tpl',
      1 => 1433785687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18243927765567388ed702b0-75267695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5567388eeaef57_73371482',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567388eeaef57_73371482')) {function content_5567388eeaef57_73371482($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Registo</title>
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<!-- signup/previous bar -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
			    <li class="home">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="Retornar à pagina inicial"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li>Acesso à loja</li>&nbsp;
            </ul>
            <ul class="previous">
               	<li><a href="javascript:history.back()">Voltar à página inicial</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<!-- main content -->
	<section id="main">
		<div class="login-content">
			<div class="container">
				<!-- login/signin/benefits -->
				<div class="login-signup-form">
					<!-- login box -->
					<div class="col-md-5 login text-center">
						<h4>Login</h4><br>
						<form role="form" id="form1" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Username: <span class="require">*</span></label>
								<input name="username" type="text" value="">
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Password:<span class="require">*</span></label>
								<input name="password" type="password" value="">
							</div>
							<div class="clearfix"></div>
							<div class="sky-form span_99">
								<label class="checkbox"><input type="checkbox" name="remember">Remember me on this computer</label>
							</div>
							<div class="botton1">
								<input type="submit" value="Entrar" class="botton">
							</div>
						</form>
						<div class="forgetit">
							<form role="form" id="form2" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/esquecepass.php" method="post">
							<a href="">Esqueceu-se da sua Password?</a>
							<input type="text"  name="esq" placeholder="Insira o seu e-mail"> 
							<input type="submit" value="Enviar" class="botton">
							</form>
						</div>
					</div>
					<!-- signin box -->
					<div class="col-md-5 sign-up text-center">
						<h4>Registo</h4>
						<form role="form" id="form2" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Nome:<span class="require">*</span></label>
								<input type="text" name="nome" value="" required>
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Username:<span class="require">*</span></label>
								<input type="text" name="username" value="" required>
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">E-mail:<span class="require">*</span></label>
								<input type="email" name="email" value="" required>
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Morada:<span class="require">*</span></label>
								<input type="text" name="morada" value="" required>
							</div>
                            <div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">País:<span class="require">*</span></label>
                                <select id="country" name="pais" style="width: 266px" value="" required></select>
                            </div>  
                            <div class="clearfix"></div>
							<div class="cus_info_wrap">
                                <label class="labelTop">Estado:<span class="require">*</span></label>
                                <select name="estado" id="state" style="width: 266px" value="" required></select>
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Data de Nascimento:<span class="require">*</span></label>
								<input type="date" name="dataN" value="" required>
							</div>
							<div class="clearfix"></div>
				    		<div class="cus_info_wrap">
								<label class="labelTop">Password:<span class="require">*</span></label>
								<input id="password" type="password" name="password" value="" required>
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop confirmpass">Confirme Password:<span class="require">*</span></label>
								<input id="confPassword" type="password" name="cpassword" value="" onkeyup="checkPass(); return false;" required>
							</div>
							<div class="form-group">
								<label>Carregar imagem de Perfil:</label>
								<input type="file" name="userFile" value="upload">
		                    </div> 
							<div class="botton1">
								<input id="submit" type="submit" value="Registar" class="botton">
							</div>
							<br>
						</form>
					</div>
					<!-- benefits box -->
					<div class="col-md-2 benefits">
						<h4>Porquê criar uma conta?</h4>
						<p>Consiga comprar os produtos que já cobiça há tanto tempo.</p>
						<p>Acesso a novas interfaces como wishlist.</p>
						<p>Apoio a clientes através do e-mail da loja e do número de apoio ao cliente.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/countries.js"></script>
    <script language="javascript">
        populateCountries("country", "state");
    </script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/confirm_pass.js" type="text/javascript"></script>

</body>
</html><?php }} ?>
