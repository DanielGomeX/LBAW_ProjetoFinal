<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_adminside.php');
  	include_once($BASE_DIR.'database/produtos.php');

	check_sc_set();
	check_sc_notset();

	$result = getAllProducts();
	
	$smarty->assign('products', $result);

  	$smarty->display('admin/produtos.tpl');
?>
