<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 18:44:45
         compiled from "/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/common/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12674717515567384fc5c925-73535034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aeb0b6c3456c07a38dee438c382ccc7ddb27400' => 
    array (
      0 => '/usr/users2/mieic2012/ei12182/public_html/LBAW/templates/common/navbar.tpl',
      1 => 1433775729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12674717515567384fc5c925-73535034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5567384fcfe237_01933224',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567384fcfe237_01933224')) {function content_5567384fcfe237_01933224($_smarty_tpl) {?><div class="top-header">
  <div class="container">
    <div class="logo">
      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img style="height:auto; width:auto; max-height:62px;" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo/mark.png" alt="" /></a>
    </div>
    <ul class="header-top-right">
      <!-- start search-->
      <li class="search-box">
        <div id="sb-search" class="sb-search">
          <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php">
            <input class="sb-search-input" placeholder="Pesquisar" type="text" name="passing" autocomplete="off" spellcheck="false">
            <span class="sb-icon-search"> </span>
          </form>
        </div>
      </li>
      <!-- shopping cart -->
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_cart.php"><i class="cart"></i></a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_myaccount.php"><i class="acc"></i></a></li>
    </ul>

    <div class="navigation">  
      <label class="mobile_menu" for="mobile_menu">
                <span>Menu</span>
            </label>
            <input id="mobile_menu" type="checkbox">
      <ul class="nav">                      
                <li class="dropdown1"><a href="#">Informática</a>
                  <ul class="dropdown2">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Computadores">Computadores</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Tablets">Tablets</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Periféricos">Periféricos</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Acessórios Informática">Acessórios</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Armazenamento">Armazenamento</a></li>
                  </ul>
                </li>             
                <li class="dropdown1"><a href="#">Imagem e Som</a>
                  <ul class="dropdown2">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Televisões">Televisões</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Audio">Audio</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Foto e Video">Foto e Video</a></li>
                  </ul>
                </li>          
              <li class="dropdown1"><a href="#">Comunicações</a>
                <ul class="dropdown2">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Telemóveis">Telemóveis</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=GPS">GPS</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Acessórios Telemóvel">Acessórios</a></li>
                  </ul>
              </li>        
              <li class="dropdown1"><a href="#">Ajuda</a>
                <ul class="dropdown2">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_contact.php">Contacte-nos</a></li>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_FAQ.php">FAQ</a></li>
                  </ul>
              </li> 
            </ul>
    </div>
  </div>
</div><!-- closes navbar --><?php }} ?>
