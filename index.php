<?php
require_once 'conf/smarty-conf.php';

		$smarty->assign('page',"Home");
		$smarty->display('home/index.tpl');