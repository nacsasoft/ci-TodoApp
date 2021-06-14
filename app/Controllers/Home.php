<?php

namespace App\Controllers;

use CI4Smarty\Config\Services;


class Home extends BaseController
{
	public function index()
	{
		$time = date('Y-m-d H:i:s');
		$data = [ 'apple' , 'banana' , 'lemon' ];

		$smarty = Services::smarty();
		$smarty->assign('time', $time);
		$smarty->assign('CI', $data);
		$smarty->assign('apples', $data);

		$smarty->display('template.tpl');
		
	}
}
